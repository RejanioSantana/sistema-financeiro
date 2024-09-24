
<!DOCTYPE html>
<html>
  <head>

    <meta charset="UTF-8">
    <title>{{$title}}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href=" {{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="{{asset('plugins/morris/morris.css')}}" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="{{asset('plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="{{asset('plugins/daterangepicker/daterangepicker-bs3.css')}}" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{asset('dist/css/AdminLTE.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="{{asset('dist/css/skins/_all-skins.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- Adicionamento Desenvolvedor -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   
  </head>
  <body class="skin-blue">
    <div class="wrapper">
      
      <header class="main-header">
        @include('partials.header')
      </header>

      <aside class="main-sidebar">
        @include('partials.nav')
      </aside>

      <div class="content-wrapper">
         
        <section class="content-header">
          @yield('header')
        </section>
        
        <section class="content">
          @yield('main')
        </section>

      </div>

      <footer class="main-footer">
        @include('partials.footer')
      </footer>

    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="{{asset('plugins/jQuery/jQuery-2.1.3.min.js')}}"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
   <!-- FastClick -->
    <!-- <script src="{{asset('plugins/fastclick/fastclick.min.js')}}"></script> -->
    <!-- AdminLTE App -->
    <script src="{{asset('dist/js/app.min.js')}}" type="text/javascript"></script>
   <!-- Sparkline -->
    <!-- <script src="plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script> -->
    <!-- jvectormap -->
    <!-- <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script> -->
    <!-- <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script> -->
    <!-- daterangepicker -->
    <!-- <script src="plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script> -->
    <!-- datepicker -->
    <!-- <script src="plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script> -->
    <!-- iCheck -->
    <!-- <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script> -->
    <!-- SlimScroll 1.3.0 -->
    <!-- <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script> -->
    <!-- ChartJS 1.0.1 -->
    <!-- <script src="{{asset('plugins/chartjs/Chart.min.js')}}" type="text/javascript"></script> -->

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!-- <script src="dist/js/pages/dashboard2.js" type="text/javascript"></script> -->

    <!-- AdminLTE for demo purposes -->
    <!-- <script src="{{asset('dist/js/demo.js')}}" type="text/javascript"></script> -->

    <!-- <script src="{{asset('../../plugins/flot/jquery.flot.min.js')}}" type="text/javascript"></script> -->
    <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
    <!-- <script src="{{asset('plugins/flot/jquery.flot.resize.min.js')}}" type="text/javascript"></script> -->
    <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
   
    <!-- <script src="{{asset('plugins/flot/jquery.flot.pie.min.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('plugins/flot/jquery.flot.categories.min.js')}}" type="text/javascript"></script> -->

  </body>
</html>