@extends('layouts.master')

@section('content')

<!-- Content Wrapper. Contains page content -->

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>Bom dia Nome do Usuario </h1>
</section>

<!-- Main content -->
<section class="content">

  <!-- Recuperar Museu -->
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Recuperar Museu</h3>
      <div class="box-tools pull-right">

        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fa fa-minus"></i></button>
      </div>
    </div>
    <div class="box-body">
      <div class="col-md-8">        
        <container>
          <div class="form-group">
            <label>Selecione curador</label>
            <select class="form-control select2" style="width: 100%;">
               @foreach($curadores as $c)
                <option value="{{$c->nome}}">
                  {{$c->nome}}
                </option>
                @endforeach
            </select>
          </div>
          <!-- /.box -->
          <div class="form-group">
            <label>Selecione um meseu para assumir controle</label>
            <select class="form-control select2" style="width: 100%;">
               @foreach($museus as $u)
                <option value="{{$u->nome}}">
                  {{$u->nome}}
                </option>
                @endforeach
            </select>
          </div>
          <!-- /.box-body -->
        </container>
      </div>
      <div class="col-md-4">
        <container>
          <div align="center">
            <a href=""><button style="margin-top: 50px" type="button" class="btn btn-block btn-primary">Recuperar Museu</button></a>
          </div>
        </container> 

      </div>
    </div>
  </div>

  <!-- Meus Museus -->
  <div class="box-body">
    <!-- Widget: user widget style 1 -->
    <div class="box box-widget widget-user-2">
      <!-- Add the bg color to the header using any of the bg-* classes -->
      <div class="widget-user-header bg-yellow">
        <h3 class="widget-user-username">Nome do Museu</h3>
        <h5 class="widget-user-desc">Status</h5>
      </div>

      <div class="box box-default collapsed-box box-solid">
        <!-- Caixa de informações -->
        <div class="box-header with-border">
          <small><h2 class="box-title">Localização</h2></small>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus" align="right"></i></button>
          </div>
        </div>
        <div class="box-body">
          The body of the box
        </div>
        <!-- FIM: Caixa de informações -->

        <!-- Caixa de informações -->
        <div class="box-header with-border">
          <small><h2 class="box-title">Acervo</h2></small>

        </div>
        <div class="box-body">
          The body of the box
        </div>
        <!-- FIM: Caixa de informações -->

        <!-- Caixa de informações -->
        <div class="box-header with-border">
          <small><h2 class="box-title">Infraestrutura</h2></small>
        </div>
        <div class="box-body">
          The body of the box
        </div>
        <!-- FIM: Caixa de informações -->

        <!-- Caixa de informações -->
        <div class="box-header with-border">
          <small><h2 class="box-title">Acessibilidade</h2></small>
        </div>
        <div class="box-body">
          The body of the box
        </div>
        <!-- FIM: Caixa de informações -->
      </div>
      <div class="box-body">
        <button type="submit" class="btn btn-primary btn-block btn-flat">Editar</button>
      </div>
    </div>
    <!-- /.widget-user -->
  </div>


  <!-- Agenda -->
  <div class="box">
    <div class="box-header box-primary">
      <h3 class="box-title">Agenda</h3>
      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fa fa-minus"></i></button>
      </div>
    </div>
    <div class="box-body">

      <!--  Evento 1 (Obs.: Carregar dinamicamente todos os eventos)-->
      <div class="info-box bg-yellow">
        <span class="info-box-icon"><i class="fa fa-calendar"></i></span>
        <div class="info-box-content">
          <span class="info-box-number">Nome do Evento 1</span>
          <span class="info-box-text">Data Evento 1</span>
          <div class="progress">
            <div class="progress-bar" style="width: 0%"></div>
          </div>
          <span class="progress-description">Descrição do Evento 1 Aqui </span>
          <div align="right">
          <button type="submit" class="btn btn-default btn-sm">Editar</button> 
          </div>
        </div>
      </div>

      <!-- FIM: Evento 1 -->

<!--  Evento 2 (Obs.: Carregar dinamicamente todos os eventos)-->
      <div class="info-box bg-yellow">
        <span class="info-box-icon"><i class="fa fa-calendar"></i></span>
        <div class="info-box-content">
          <span class="info-box-number">Nome do Evento 2</span>
          <span class="info-box-text">Data Evento 2</span>
          <div class="progress">
            <div class="progress-bar" style="width: 0%"></div>
          </div>
          <span class="progress-description">Descrição do Evento 2 Aqui </span>
          <div align="right">
          <button type="submit" class="btn btn-default btn-sm">Editar</button> 
          </div>
        </div>
      </div>

      <!-- FIM: Evento 2 -->
      
      
    </div>
    <!-- /.box -->

    </section>



  @endsection