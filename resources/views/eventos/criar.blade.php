@extends('layouts.master')

@section('content')


<section>
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Registrar evento</h3>
      <div class="box-tools pull-right">

        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fa fa-minus"></i></button>
      </div>
    </div>
    <div class="box-body">
      <form action="salvarUsuario" method="post">

        <div class="form-group has-feedback">
          <label>Nome do Evento:</label>
          <input type="text" name ="nome" class="form-control" placeholder="Nome do Evento" maxlength=75>
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
          <label>Descrição do Evento:</label>
          <input type="text" name ="descricao" class="form-control" placeholder="Descrição do Evento" maxlength=255>
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>

        <!-- Date range -->
        <div class="col-md-6">      
          <!-- Date range -->
          <div class="form-group">
            <label>Date range:</label>

            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
              <input type="text" class="form-control pull-right" id="reservation">
            </div>
            <!-- /.input group -->
          </div>
          <!-- /.form group -->


        </div>
        <!-- /.form group -->
        <div class="col-md-6">
          <div class="form-group has-feedback">
            <label>Idade para censura:</label>
            <input type="text" name ="censura" class="form-control" placeholder="Insira 0 (zero) caso não haja!"  maxlength=2>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
        </div>

        <!--    <div class="form-group">
<label>Museu</label>
<select class="form-control select2" style="width: 100%;">
<option selected="selected">Alabama</option>
<option>Alaska</option>
<option>California</option>
<option>Delaware</option>
<option>Tennessee</option>
<option>Texas</option>
<option>Washington</option>
</select>
</div>
-->
        <div class="row">
          <div class="col-md-6">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>

          </div>
          <div class="col-md-6">
            <button type="submit" class="btn btn-warning btn-block btn-flat">Cancelar</button>
          </div>
        </div>
      </form>
    </div>
  </div>

</section>
@endsection