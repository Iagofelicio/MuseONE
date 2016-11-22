<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Museum;
use App\Member;
use App\Http\Requests;
use App\Location;

class MemberController extends Controller
{
  
  /* Admin */
   public static function indexAdmin() 
   {  
     
    $todos = Member::all();
    $curadores = collect();
     foreach($todos as $a){
      if ($a->permissao == "curador"){
        $curadores->push($a);
      }
   }
    
   //Quantidade de Museus Por Região
     $sudeste = 0;
     $sul = 0;
     $norte = 0;
     $nordeste =0;
     $centro_oeste = 0;
       
    $todasLocalizacoes = Location::all();
    foreach ($todasLocalizacoes as $tl){
      $todasL[]=$tl;
    }
    foreach ($todasL as $tl){
      if($tl->uf == "AC" or $tl->uf == "AM" or $tl->uf == "RO" or $tl->uf == "RR" or $tl->uf == "PA" or $tl->uf == "AP" or $tl->uf == "TO"){
          $norte = $norte + 1;
      } 
      if($tl->uf == "MA" or $tl->uf == "PI" or $tl->uf == "CE" or $tl->uf == "RN" or $tl->uf == "PB" or $tl->uf == "PE" or $tl->uf == "AL"  or $tl->uf == "SE"  or $tl->uf == "BA"){
        $nordeste = $nordeste + 1;
      } 
      if($tl->uf == "DF" or $tl->uf == "GO" or $tl->uf == "MS" or $tl->uf == "MT"){
        $centro_oeste = $centro_oeste + 1;
      } 
      if($tl->uf == "PR" or $tl->uf == "SC" or $tl->uf == "RS"){
        $sul = $sul + 1;
      }
      if($tl->uf == "MG" or $tl->uf == "ES" or $tl->uf == "RJ" or $tl->uf == "SP"){
        $sudeste = $sudeste + 1;
      }
    }
     
     
    return view ('admin.index',[
      'curadores' => $curadores,
      'sudeste' => $sudeste,
     'sul' => $sul,
     'norte' => $norte,
     'nordeste' => $nordeste,
     'centro_oeste' => $centro_oeste
    ]);
  }
   
  public function approveCuradores()
  {    
    return view ('admin.curadores');
  }
  
  
  
  /* Curadores */
  public function indexCurador()
  {    
    
    $museus = Museum::all();
    $todos = Member::all();
    $curadores = collect();
     foreach($todos as $a){
      if ($a->permissao == "curador"){
        $curadores->push($a);
      }
   }
    //Quantidade de Museus Por Região
     $sudeste = 0;
     $sul = 0;
     $norte = 0;
     $nordeste =0;
     $centro_oeste = 0;
       
    $todasLocalizacoes = Location::all();
    foreach ($todasLocalizacoes as $tl){
      $todasL[]=$tl;
    }
    foreach ($todasL as $tl){
      if($tl->uf == "AC" or $tl->uf == "AM" or $tl->uf == "RO" or $tl->uf == "RR" or $tl->uf == "PA" or $tl->uf == "AP" or $tl->uf == "TO"){
          $norte = $norte + 1;
      } 
      if($tl->uf == "MA" or $tl->uf == "PI" or $tl->uf == "CE" or $tl->uf == "RN" or $tl->uf == "PB" or $tl->uf == "PE" or $tl->uf == "AL"  or $tl->uf == "SE"  or $tl->uf == "BA"){
        $nordeste = $nordeste + 1;
      } 
      if($tl->uf == "DF" or $tl->uf == "GO" or $tl->uf == "MS" or $tl->uf == "MT"){
        $centro_oeste = $centro_oeste + 1;
      } 
      if($tl->uf == "PR" or $tl->uf == "SC" or $tl->uf == "RS"){
        $sul = $sul + 1;
      }
      if($tl->uf == "MG" or $tl->uf == "ES" or $tl->uf == "RJ" or $tl->uf == "SP"){
        $sudeste = $sudeste + 1;
      }
    }
     
    return view ('curador.index',[
      'museus' => $museus,
      'curadores' => $curadores,
      'sudeste' => $sudeste,
     'sul' => $sul,
     'norte' => $norte,
     'nordeste' => $nordeste,
     'centro_oeste' => $centro_oeste
    ]);

    }

  public function showEventos()
  {    
  return view ('eventos.show');
  }

  public function createEventos()
  {    
  return view ('eventos.criar');
  }

  public function editEventos()
  {    
  return view ('eventos.editar');
  }
 
  public function saveEventos()
  {    
  
  }
  public function updateEventos()
  {    
  
  }
  




}
