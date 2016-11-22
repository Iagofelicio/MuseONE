<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title>{{ $page_title or "AdminLTE Dashboard" }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="{{ asset("/node_modules/admin-lte/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset("/node_modules/admin-lte/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
page. However, you can choose any other skin. Make sure you
apply the skin class to the body tag so the changes take effect.
-->
    <link href="{{asset("/node_modules/admin-lte/dist/css/skins/skin-blue.min.css")}}" rel="stylesheet" type="text/css" />
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{asset("/node_modules/admin-lte/plugins/daterangepicker/daterangepicker.css")}}">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="{{asset("/node_modules/admin-lte/plugins/datepicker/datepicker3.css")}}">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{asset("/node_modules/admin-lte/plugins/iCheck/all.css")}}">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="{{asset("/node_modules/admin-lte/plugins/colorpicker/bootstrap-colorpicker.min.css")}}">
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="{{asset("/node_modules/admin-lte/plugins/timepicker/bootstrap-timepicker.min.css")}}">




    <!-- Select2 -->
    <link href="{{asset("theme/css/select2/select2.min.css")}}"  rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
  </head>
  <body class="skin-blue">
    <div class="wrapper">

      <!-- Header -->
      @include('layouts.partials.header')

      <!-- Sidebar -->
      @include('layouts.partials.sidebar')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) --> 
        <!-- <section class="content-header">
<h1>
{{ $page_title or "Page Title" }}
<small>{{ $page_description or null }}</small>
</h1>
<!-- You can dynamically generate breadcrumbs here 
<ol class="breadcrumb">
<li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
<li class="active">Here</li>
</ol>
</section> -->

        <!-- Main content -->
        <section class="content">
          <!-- Your Page Content Here -->
          @yield('content')
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!-- Footer -->
      @include('layouts.partials.footer')

    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.3 -->
    <script src="{{ asset ("node_modules/admin-lte/plugins/jQuery/jquery-2.2.3.min.js") }}"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{ asset ("node_modules/admin-lte/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset ("node_modules/admin-lte/dist/js/app.min.js") }}" type="text/javascript"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="{{asset("node_modules/admin-lte/plugins/chartjs/Chart.min.js")}}"></script>
    <!-- Optionally, you can add Slimscroll and FastClick plugins.
Both of these plugins are recommended to enhance the
user experience -->

    <!-- Select2 -->
    <script src="{{asset("/node_modules/admin-lte/plugins/select2/select2.full.min.js")}}"></script>
    <!-- InputMask -->
    <script src="{{asset("/node_modules/admin-lte/plugins/input-mask/jquery.inputmask.js")}}"></script>
    <script src="{{asset("/node_modules/admin-lte/plugins/input-mask/jquery.inputmask.date.extensions.js")}}"></script>
    <script src="{{asset("/node_modules/admin-lte/plugins/input-mask/jquery.inputmask.extensions.js")}}"></script>
    <!-- date-range-picker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="{{asset("/node_modules/admin-lte/plugins/daterangepicker/daterangepicker.js")}}"></script>
    <!-- bootstrap datepicker -->
    <script src="{{asset("/node_modules/admin-lte/plugins/datepicker/bootstrap-datepicker.js")}}"></script>
    <!-- bootstrap color picker -->
    <script src="{{asset("/node_modules/admin-lte/plugins/colorpicker/bootstrap-colorpicker.min.js")}}"></script>
    <!-- bootstrap time picker -->
    <script src="{{asset("/node_modules/admin-lte/plugins/timepicker/bootstrap-timepicker.min.js")}}"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="{{asset("/node_modules/admin-lte/plugins/slimScroll/jquery.slimscroll.min.js")}}"></script>
    <!-- iCheck 1.0.1 -->
    <script src="{{asset("/node_modules/admin-lte/plugins/iCheck/icheck.min.js")}}"></script>
    <!-- FastClick -->
    <script src="{{asset("/node_modules/admin-lte/plugins/fastclick/fastclick.js")}}"></script>




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

<script>
      $(function () {
        /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */    

        //-------------
        //- BAR CHART -
        //-------------
        var areaChartData = {
          labels: ["Sul", "Sudeste", "Norte", "Nordeste", "Centro Oeste"],
          datasets: [
            {
              label: "# Museus",
              fillColor: "rgba(210, 214, 222, 1)",
              strokeColor: "rgba(210, 214, 222, 1)",
              pointColor: "rgba(210, 214, 222, 1)",
              pointStrokeColor: "#c1c7d1",
              pointHighlightFill: "#fff",
              pointHighlightStroke: "rgba(220,220,220,1)",
              data: [{{$sul}},{{$sudeste}},{{$norte}},{{$nordeste}},{{$centro_oeste}}]
            },
            {
              label: "Investimento (mi)",
              fillColor: "rgba(60,141,188,0.9)",
              strokeColor: "rgba(60,141,188,0.8)",
              pointColor: "#3b8bba",
              pointStrokeColor: "rgba(60,141,188,1)",
              pointHighlightFill: "#fff",
              pointHighlightStroke: "rgba(60,141,188,1)",
              data: [280, 480, 40, 120, 160]
            }
          ]
        };


        var barChartCanvas = $("#barChart").get(0).getContext("2d");
        var barChart = new Chart(barChartCanvas);


        var barChartData = areaChartData;
        barChartData.datasets[1].fillColor = "#00a65a";
        barChartData.datasets[1].strokeColor = "#00a65a";
        barChartData.datasets[1].pointColor = "#00a65a";
        var barChartOptions = {
          //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
          scaleBeginAtZero: true,
          //Boolean - Whether grid lines are shown across the chart
          scaleShowGridLines: true,
          //String - Colour of the grid lines
          scaleGridLineColor: "rgba(0,0,0,.05)",
          //Number - Width of the grid lines
          scaleGridLineWidth: 1,
          //Boolean - Whether to show horizontal lines (except X axis)
          scaleShowHorizontalLines: true,
          //Boolean - Whether to show vertical lines (except Y axis)
          scaleShowVerticalLines: true,
          //Boolean - If there is a stroke on each bar
          barShowStroke: true,
          //Number - Pixel width of the bar stroke
          barStrokeWidth: 2,
          //Number - Spacing between each of the X value sets
          barValueSpacing: 5,
          //Number - Spacing between data sets within X values
          barDatasetSpacing: 1,
          //String - A legend template
          legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
          //Boolean - whether to make the chart responsive
          responsive: true,
          maintainAspectRatio: true
        };

        barChartOptions.datasetFill = false;
        barChart.Bar(barChartData, barChartOptions);
      });

    </script>

    


  </body>
</html>