<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MuseONE</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset("theme/vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset("theme/vendor/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="{{asset("theme/vendor/magnific-popup/magnific-popup.css")}}" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="{{asset("theme/css/creative.css")}}" rel="stylesheet">

    <!-- Select2 -->
    <link href="{{asset("theme/css/select2/select2.min.css")}}"  rel="stylesheet">

    <!-- <link href="{{asset("theme/css/creative.min.css")}}" rel="stylesheet"> -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

  </head>

  <body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
          </button>
          <a class="navbar-brand page-scroll" href="#page-top">MuseONE</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a class="page-scroll" href="#contact">Sobre nós</a>
            </li>
            <li>
              <a class="page-scroll" href="#services">Login</a>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>

    <header>
      <div class="header-content">
        <div class="header-content-inner">
          <h1 id="homeHeading">MuseONE</h1>
          <hr>
          <p>Descubra onde estão os museus que mais combinam com o seu estilo!</p>
          <a href="#about" class="btn btn-primary btn-xl page-scroll">Conheça!</a>
        </div>
      </div>
    </header>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-lg-offset-0 text-center">
            <h2 class="section-heading"><b>Encontre os museus mais próximos de você!</b></h2>
            <hr class="light">
            <p class="text-faded"> 
              A plataforma <b>MuseOne</b> contém informações variadas sobre diversos museus, com possibilidades de buscas avançadas, agenda dos museus, e outras possibilidades. 
              O mapeamento e a atualização das informações dos museus são realizados de forma colaborativa e democrática, permitindo a todos uma participação direta na confecção de cartografias, no fornecimento de informações e na produção de conhecimento sobre os museus do Brasil.
              A <b>MuseONE</b> te ajuda explorar os museus mais próximos de você! 
            </p>
            <center>
              <a href="#services" class="page-scroll btn btn-default btn-xl sr-button">Pesquisar</a>
            </center>
          </div>
        </div>
      </div>
    </section>

    <section id="services">
      <!-- form start -->
      <form role="form" action="{{route('Pesquisa')}}" method="POST">
        {!! csrf_field() !!}
        <div class="container">
          <div class=pesquisa>

            <!--Inicio Perguntas -->
            <div class="row">
              <div class="col-lg-12 ">
                <h3 class="section-heading">Informe os campos abaixo: </h3>
                <br>
                <br>
              </div>
            </div>
            <!-- Unidade Federal -->
            <div class="form-group">
              <label > Unidade Federal: </label>
              <select name="uf" class="form-control select2" style="width: 100%;">
                <option selected value="blank">- 
                </option>                
                @foreach($uf as $u)
                <option value="{{$u->uf}}">
                  {{$u->uf}}
                </option>
                @endforeach
              </select>
            </div>
            <!-- Cidade -->
            <div class="form-group">
              <label> Cidade: </label>
              <select name="cidade" class="form-control select2" style=" width: 100%;">
                <option selected value="blank">- 
                </option>
                @foreach($cidades as $c)
                <option name="{{$c['cidade']}}" value="{{$c['cidade']}}">
                  {{$c['cidade']}}
                </option>
                @endforeach
              </select>
            </div>
            <!-- -->
            <div class="form-group">
              <label>Acervos:</label>
              <div class="radio">
                <label>
                  <input type="radio" name="radioButton" id="radioButton1" value="option1" checked>
                  Antropologia - Etonografia
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="radioButton" id="radioButton2" value="option2" checked>
                  Arqueologia
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="radioButton" id="radioButton3" value="option3" checked>
                  Artes Visuais
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="radioButton" id="radioButton4" value="option4" checked>
                  Ciências naturais - História natual
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="radioButton" id="radioButton5" value="option5" checked>
                  Ciência e tecnologia
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="radioButton" id="radioButton6" value="option6" checked>
                  História
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="radioButton" id="radioButton7" value="option7" checked>
                  Imagem - Som
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="radioButton" id="radioButton8" value="option8" checked>
                  Virtual
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="radioButton" id="radioButton9" value="option9" checked>
                  Arquivistico
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="radioButton" id="radioButton10" value="option10" checked>
                  Biblioteconomico
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="radioButton" id="radioButton11" value="option11" checked>
                  Documental
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="radioButton" id="radioButton12" value="option12" checked>
                  Outros
                </label>
              </div>
            </div>
            <center>
              <button type="submit" href="{{route('Pesquisa')}}" class="page-scroll btn btn-default btn-xl sr-button"> Pesquisar</button>
            </center>

          </div>
        </div>
      </form>
    </section>
    
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2 text-center">
            <h2 class="section-heading">Sobre nós</h2>
            <hr class="primary">
            <p>Estre trabalho foi desenvolvido por Ana Clara, Fernanda, Iago e Pedro Paulo, graduandos em Sistemas de Informação pela Universidade Federal de Itajubá, a fim de aplicar os conceitos aprendidos na disciplina de Banco de Dados 2.</p>
          </div>
          <div class="col-lg-4 col-lg-offset-2 text-center">
            <i class="fa fa-phone fa-3x sr-contact"></i>
            <br>
            <p>123-456-6781</p>
            <p>123-456-6782</p>
            <p>123-456-6783</p>
            <p>123-456-6784</p>
          </div>
          <div class="col-lg-4 text-center">
            <i class="fa fa-envelope-o fa-3x sr-contact"></i>
            <br>
            <p><a href="mailto:your-email@your-domain.com">anaclaraguatura@gmail.com</a></p>
            <p><a href="mailto:your-email@your-domain.com">fernandamendesgarciaa@gmail.com</a></p>
            <p><a href="mailto:your-email@your-domain.com">iagofelicio@gmail.com</a></p>
            <p><a href="mailto:your-email@your-domain.com">ppmbjr@gmail.com</a></p>
          </div>
        </div>
      </div>
      </div>      
    </div>

  </section>

<!-- jQuery -->
<script src="{{asset("theme/vendor/jquery/jquery.min.js")}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset("theme/vendor/bootstrap/js/bootstrap.min.js")}}"></script>
<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="{{asset("theme/vendor/scrollreveal/scrollreveal.min.js")}}"></script>
<script src="{{asset("theme/vendor/magnific-popup/jquery.magnific-popup.min.js")}}"></script>

<!-- Theme JavaScript -->
<script src="{{asset("theme/js/creative.min.js")}}"></script>
<!-- Select2 -->
<script src="{{asset("/node_modules/admin-lte/plugins/select2/select2.full.min.js")}}"></script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges: {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate: moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
      }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>

</body>

</html>
