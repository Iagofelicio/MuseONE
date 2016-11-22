<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Museum;
use App\Location;
use App\Kit;
use DB;
use App\Http\Requests;
use App\Contact;

class HomeController extends Controller
{
  public static function index() {

    $museus = Museum::all()->unique('nome');
    $uf = DB::table('locations')->select('uf')->distinct()->orderBy('uf')->get();
    $cidade = Location::all()->unique('municipio');
  
    foreach($cidade as $c){
      $cidades[]=['cidade' => $c->municipio,'id' => $c->museu_id];
    }
  
    
    return view('home.welcome', 
    [
      'uf' => $uf,
      'cidades' => $cidades,
    ]);
  }

  public static function search(Request $request) {
    ini_set('max_execution_time', 300);
    $resultUF = Array();
    $resultCID =Array();
    // Selecionar todos os museus do estado 'uf'
    $todosMuseus = Museum::all();
    foreach ($todosMuseus as $tm){
      $todosM[]=$tm;
    }   
    $todasLocalizacoes = Location::all();
    foreach ($todasLocalizacoes as $tl){
      $todasL[]=$tl;
    }
    foreach ($todasL as $tl){
      if($tl->uf == $request->uf){
        foreach($todosM as $t){
          if($tl->museu_id == $t->id){
            $resultUF[] = $t;
          }
        }
      }
     }
    //Selecionar todos os museus da cidade 'cidade'
     foreach ($todasL as $tl){
      if($tl->municipio == $request->cidade){
        foreach($todosM as $t){
          if($tl->museu_id == $t->id){
            $resultCID[] = $t;
          }
        }
      }
     }
    //Selecionar todos os museus com acervo > 0, para radioButton

    //Mandar Resultados para View
    return view('home.result',[
      'resultUF' => $resultUF,
      'resultCID' => $resultCID
    ]);
  }

  public static function info($id, Request $request) {

    
    $museu = Museum::find($id);
    $Tlocal = Location::all();
    $Tcontato = Contact::all();
    
    foreach ($Tlocal as $l){
      if ($l->museu_id == $id){
        $local = $l;
        
      }
    }
    
    foreach ($Tcontato as $l){
      if ($l->museu_id == $id){
        $contato = $l;
        
      }
    }
    
    return view('home.info',[
      'museu' => $museu,
      'local' => $local,
      'contato' => $contato
    ]);
  }

}
