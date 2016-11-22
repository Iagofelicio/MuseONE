<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MuseONE - Informações</title>

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
    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">A arte diz o indizível; exprime o inexprimível, traduz o intraduzível</h2>
                    <hr class="light">
                  <p class="text-faded">
                    Leonardo da Vinci
                  </p>    
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Resultados</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
                
      <div class="panel panel-default">
  <div class="panel-heading">{{$museu->nome}}</div>
  <div class="panel-body">
  <p>
    LOCALIZAÇÃO
  <br>
    Unidade federal: {{$local->uf}} <br>
    Município: {{$local->municipio}} <br>
    Endereço: {{$local->endereco}} <br>
    Bairro: {{$local->bairro}} <br>
    <br>
    CONTATO<br>
    DDD: {{$contato->ddd}} <br>
    Telefone: {{$contato->telefone}}<br> 
    <br>
    VISITAS<br>
    Agendamento: <br> 
    Visitas guiadas:<br> 
    Visitas guiadas com áudio:<br> 
    <br>
    ACESSIBILIDADE<br>
    Elevador de acesso:<br> 
    Rampa de acesso: <br>
    Sinalização em braile:<br>
    Etiquetas em braile: <br>
    Sanitário Adaptado: <br>
    <br>
    INFRAESTRUTURA<br>
    Infraestrutura para turistas estrangeiros: <br>
    Sinalização para turistas estrangeiros: <br>
    Sinalização de idioma: <br>
    Etiquetas para turistas estrangeiros: <br> 
    Publicações para turistas estrangeiros: <br>
    Idioma das publicações: <br>
    Estacionamento: <br>
    Lanchonete/Restaurante: <br> 
    Sanitários: <br>
    <br>
    ACERVO<br>
    Antropologia-Etnografia:<br> 
    Arqueologia: <br>
    Artes visuais: <br> 
    Ciências naturais-História natural: <br> 
    Ciência e tecnologia: <br>
    História: <br>
    Imagem-Som: <br>
    Virtuais: <br>
    Arquivístico: <br>
    Biblioteconômico: <br>
    Documental:<br>
    
      </p>
  </div>
</div>
</section>
     
           </div>
       
    </section>
  
    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Mapa</h2>
                <a href="http://startbootstrap.com/template-overviews/creative/" class="btn btn-default btn-xl sr-button">Download Now!</a>
            </div>
        </div>
    </aside>

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
                    <p>123-456-6789</p>
                    <p>123-456-6789</p>
                    <p>123-456-6789</p>
                    <p>123-456-6789</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                  <br>
                    <p><a href="mailto:your-email@your-domain.com">ana_claraguatura@hotmail.com</a></p>
                    <p><a href="mailto:your-email@your-domain.com">ana_claraguatura@hotmail.com</a></p>
                    <p><a href="mailto:your-email@your-domain.com">ana_claraguatura@hotmail.com</a></p>
                    <p><a href="mailto:your-email@your-domain.com">ana_claraguatura@hotmail.com</a></p>
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
