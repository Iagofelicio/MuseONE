@extends('layouts.master')

@section('content')

<!-- Content Wrapper. Contains page content -->


<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Bom dia
    <small></small>
  </h1>
</section>

<!-- Main content -->
<section class="content">

  <!-- Gráfico por regiões -->
  <div class="box box-success">
    <div class="box-header with-border">
      <h3 class="box-title">Número de Museus por investimento público</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body">
      <div class="chart">
        <canvas id="barChart" style="height:230px"></canvas>
      </div>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->

  <!--Tabela Pendente-->
  <div class="box box-widget">
    <div class='box-header with-border'>
      <div class='user-block'>
        <span class='username'>Pendente de Aprovação<br></span>
      </div><!-- /.user-block -->
    </div><!-- /.box-header -->
    <div class="box box-widget">
      <div class="box-body">
        <table id="pendente" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Email</th>
              <th>Permissão</th>
              <th>Status</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($curadores as $u)
            <tr>
              <td>{{$u->id}}</td>
              <td>{{$u->nome}}</td>
              <td>{{$u->email}}</td>
              <td>{{$u->permissao}}</td>
              <td>{{$u->status}}</td>
              <td>
                <a href=""><button type="button" class="btn btn-primary">Aprovar</button></a>
                <a href=""><button type="button" class="btn btn-danger">Rejeitar</button></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div><!-- /.box-body -->
    </div>
  </div>



  @endsection