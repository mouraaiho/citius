<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Login') }}</title>

    <meta name="keywords" content="HTML5 Template, CSS3, All Purpose Admin Template, Vendroid" />
    <meta name="description" content="Login Pages - Responsive Admin HTML Template">
    <meta name="author" content="Venmond">
    
    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('img/ico/apple-touch-icon-144-precomposed.html')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('img/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('img/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('img/ico/apple-touch-icon-57-precomposed.png')}}">
    <link rel="shortcut icon" href="{{ asset('img/ico/favicon.png') }}">
    <!-- CSS -->
    <!-- Bootstrap & FontAwesome & Entypo CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <!--[if IE 7]><link type="text/css" rel="stylesheet" href="{{ asset('css/font-awesome-ie7.min.css') }}"><![endif]-->
    <link href="{{ asset('css/font-entypo.css') }}" rel="stylesheet" type="text/css">    
    <!-- Fonts CSS -->
    <link href="{{ asset('css/fonts.css') }}"  rel="stylesheet" type="text/css">
    <!-- Plugin CSS -->
    <link href="{{ asset('plugins/jquery-ui/jquery-ui.custom.min.css') }}" rel="stylesheet" type="text/css">    
    <link href="{{ asset('plugins/prettyPhoto-plugin/css/prettyPhoto.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('plugins/isotope/css/isotope.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('plugins/pnotify/css/jquery.pnotify.css') }}" media="screen" rel="stylesheet" type="text/css">    
	<link href="{{ asset('plugins/google-code-prettify/prettify.css') }}" rel="stylesheet" type="text/css"> 
    <link href="{{ asset('plugins/mCustomScrollbar/jquery.mCustomScrollbar.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('plugins/tagsInput/jquery.tagsinput.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('plugins/bootstrap-switch/bootstrap-switch.css') }}" rel="stylesheet" type="text/css">    
    <link href="{{ asset('plugins/daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet" type="text/css">    
    <link href="{{ asset('plugins/bootstrap-timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('plugins/colorpicker/css/colorpicker.css') }}" rel="stylesheet" type="text/css">            
	<!-- Specific CSS -->
    <!-- Theme CSS -->
    <link href="{{ asset('css/theme.min.css') }}" rel="stylesheet" type="text/css">
    <!--[if IE]> <link href="{{ asset('css/ie.css') }}" rel="stylesheet" > <![endif]-->
    <link href="{{ asset('css/chrome.css') }}" rel="stylesheet" type="text/chrome"> <!-- chrome only css -->    
    <!-- Responsive CSS -->
    <link href="{{ asset('css/theme-responsive.min.css') }}" rel="stylesheet" type="text/css"> 
    <!-- Custom CSS -->
    <link href="{{ asset('custom/custom.css') }}" rel="stylesheet" type="text/css">
    <!-- Head SCRIPTS -->
    <script type="text/javascript" src="{{ asset('js/modernizr.js') }}"></script> 
    <script type="text/javascript" src="{{ asset('js/mobile-detect.min.js') }}"></script> 
    <script type="text/javascript" src="{{ asset('js/mobile-detect-modernizr.js') }}"></script> 
 
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script type="text/javascript" src="{{ asset('js/html5shiv.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/respond.min.js') }}"></script>     
    <![endif]-->
    
</head>    

<body id="pages" class="full-layout no-nav-left no-nav-right  nav-top-fixed background-login     responsive remove-navbar login-layout   clearfix" data-active="pages "  data-smooth-scrolling="1">     
<div class="vd_body">
<!-- Header Start -->
<!-- Header Ends --> 
<div class="content">
  <div class="container"> 
    @yield('content')
  </div>
  <!-- .container --> 
</div>
<!-- .content -->
<!-- Footer Start -->
  <footer class="footer-2"  id="footer">      
    <div class="vd_bottom ">
        <div class="container">
            <div class="row">
              <div class=" col-xs-12">
                <div class="copyright text-center">
                  	Copyright &copy;2021 Citius Inc. All Rights Reserved 
                </div>
              </div>
            </div><!-- row -->
        </div><!-- container -->
    </div>
  </footer>
<!-- Footer END -->

</div>

<!-- .vd_body END  -->
<a id="back-top" href="#" data-action="backtop" class="vd_back-top visible"> <i class="fa  fa-angle-up"> </i> </a>
<!--
<a class="back-top" href="#" id="back-top"> <i class="icon-chevron-up icon-white"> </i> </a> -->

<!-- Javascript =============================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script> 
<!--[if lt IE 9]>
  <script type="text/javascript" src="{{ asset('js/excanvas.js') }}"></script>      
<![endif]-->
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script> 
<script type="text/javascript" src='plugins/jquery-ui/jquery-ui.custom.min.js'></script>
<script type="text/javascript" src="{{ asset('plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/caroufredsel.js') }}"></script> 
<script type="text/javascript" src="{{ asset('js/plugins.js') }}"></script>

<script type="text/javascript" src="{{ asset('plugins/breakpoints/breakpoints.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/dataTables/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/prettyPhoto-plugin/js/jquery.prettyPhoto.js') }}"></script> 

<script type="text/javascript" src="{{ asset('plugins/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/tagsInput/jquery.tagsinput.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/bootstrap-switch/bootstrap-switch.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/blockUI/jquery.blockUI.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/pnotify/js/jquery.pnotify.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/theme.js') }}"></script>
<script type="text/javascript" src="{{ asset('custom/custom.js') }}"></script>
 
</body>
</html>