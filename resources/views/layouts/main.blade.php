<!DOCTYPE html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <title>{{ config('app.name', 'GCE Project') }} - @yield('Title')</title>
    <meta name="keywords" content="HTML5 Template, CSS3, All Purpose Admin Template, " />
    <meta name="description" content="Responsive Admin Template for multipurpose use">
    <meta name="author" content="Venmond">
    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('img/ico/apple-touch-icon-144-precomposed.html') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('img/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('img/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('img/ico/apple-touch-icon-57-precomposed.png') }}">
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
	<link href="{{ asset('plugins/fullcalendar/fullcalendar.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('plugins/fullcalendar/fullcalendar.print.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('plugins/introjs/css/introjs.min.css') }}" rel="stylesheet" type="text/css">    
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

<body id="dashboard" class="full-layout nav-right-hide nav-right-start-hide nav-top-fixed responsive clearfix" data-active="dashboard " data-smooth-scrolling="1">     
<div class="vd_body">
<!-- Header Start -->
  <header class="header-1" id="header">
      <div class="vd_top-menu-wrapper">
        <div class="container ">
          <div class="vd_top-nav vd_nav-width  ">
            <div class="vd_panel-header">
                <div class="logo">
                    <a href="#"><img alt="logo" src="{{ asset('img/logo.png') }}"></a>
                </div>
                <!-- logo -->
                <div class="vd_panel-menu  hidden-sm hidden-xs" data-intro="<strong>Minimize Left Navigation</strong><br/>Toggle navigation size to medium or small size. You can set both button or one button only. See full option at documentation." data-step=1>
                    <span class="nav-medium-button menu" data-toggle="tooltip" data-placement="bottom" data-original-title="Medium Nav Toggle" data-action="nav-left-medium">
                        <i class="fa fa-bars"></i>
                    </span>
                    <span class="nav-small-button menu" data-toggle="tooltip" data-placement="bottom" data-original-title="Small Nav Toggle" data-action="nav-left-small">
                        <i class="fa fa-ellipsis-v"></i>
                    </span> 
                </div>
                <div class="vd_panel-menu left-pos visible-sm visible-xs">      
                    <span class="menu" data-action="toggle-navbar-left">
                        <i class="fa fa-ellipsis-v"></i>
                    </span>     
                </div>
                <div class="vd_panel-menu visible-sm visible-xs">
                    <span class="menu visible-xs" data-action="submenu">
                        <i class="fa fa-bars"></i>
                    </span>        
                    <span class="menu visible-sm visible-xs" data-action="toggle-navbar-right">
                        <i class="fa fa-comments"></i>
                    </span>                   
                </div>                                     
                <!-- vd_panel-menu -->
            </div>
            <!-- vd_panel-header -->
        </div>    
        <div class="vd_container">
          	<div class="row">
                <div class="col-sm-offset-5 col-sm-7 col-xs-12">
              		<div class="vd_mega-menu-wrapper">
                    	<div class="vd_mega-menu pull-right">
            				<ul class="mega-ul">
                                <li id="top-menu-profile" class="profile mega-li"> 
                                    <a href="#" class="mega-link"  data-action="click-trigger"> 
                                        <span  class="mega-image">
                                            <img src="{{ asset('img/avatar/avatar.jpg') }}" alt="example image" />               
                                        </span>
                                        <span class="mega-name">
                                            Caroline <i class="fa fa-caret-down fa-fw"></i> 
                                        </span>
                                    </a> 
                                    <div class="vd_mega-menu-content  width-xs-2  left-xs left-sm" data-action="click-target">
                                        <div class="child-menu"> 
                                            <div class="content-list content-menu">
                                                <ul class="list-wrapper pd-lr-10">
                                                    <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-user"></i></div> <div class="menu-text">Edit Profile</div> </a> </li>
                                                    <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-envelope"></i></div> <div class="menu-text">Messages</div><div class="menu-badge"><div class="badge vd_bg-red">10</div></div> </a>  </li>
                                                    <li class="line"></li>                
                                                    <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-lock"></i></div> <div class="menu-text">Privacy</div> </a> </li>
                                                    <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-cogs"></i></div> <div class="menu-text">Settings</div> </a> </li>
                                                    <li> <a href="#"> <div class="menu-icon"><i class="  fa fa-key"></i></div> <div class="menu-text">Lock</div> </a> </li>
                                                    <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-sign-out"></i></div>  <div class="menu-text">Sign Out</div> </a> </li>            
                                                </ul>
                                            </div> 
                                        </div> 
                                    </div>     
                                </li>     
                            </ul>                  
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
        <!-- container --> 
      </div>
      <!-- vd_primary-menu-wrapper --> 
  </header>
  <!-- Header Ends --> 
<div class="content">
  <div class="container">
        <div class="vd_navbar vd_nav-width vd_navbar-tabs-menu vd_navbar-left">
            <div class="navbar-menu clearfix">
                <h3 class="menu-title hide-nav-medium hide-nav-small">Administration</h3>
                <div class="vd_menu">
                    <ul>
                        <li>
                            <a href="#" data-action="click-trigger">
                                <span class="menu-icon"><i class="fa fa-dashboard"></i></span> 
                                <span class="menu-text">Dashboard</span>  
                                <span class="menu-badge"><span class="badge vd_bg-black-30"><i class="fa fa-angle-down"></i></span></span>
                            </a>
                        </li>  
                        <li>
                            <a href="#">
                                <span class="menu-icon"><i class="fa fa-envelope"></i></span> 
                                <span class="menu-text">Users</span>  
                                <span class="menu-badge"><span class="badge vd_bg-red">78</span></span>
                            </a> 
                        </li>
                        <li>
                            <a href="#">
                                <span class="menu-icon"><i class="fa fa-envelope"></i></span> 
                                <span class="menu-text">Emails</span>  
                                <span class="menu-badge"><span class="badge vd_bg-red">78</span></span>
                            </a> 
                        </li> 
                        <li>
                            <a href="#">
                                <span class="menu-icon"><i class="fa fa-envelope"></i></span> 
                                <span class="menu-text">Email</span>  
                                <span class="menu-badge"><span class="badge vd_bg-red">78</span></span>
                            </a> 
                        </li>       
                    </ul>
                    <!-- Head menu search form ends -->         
                </div>             
            </div>
            <div class="navbar-spacing clearfix"></div>
            <div class="vd_menu vd_navbar-bottom-widget">
                <ul>
                    <li>
                        <a href="pages-logout.html">
                            <span class="menu-icon"><i class="fa fa-sign-out"></i></span>          
                            <span class="menu-text">Logout</span>             
                        </a>
                        
                    </li>
                </ul>
            </div>     
        </div>  
        <!-- Middle Content Start -->
        <div class="vd_content-wrapper">
            @yield('content')
        </div>
        <!-- Middle Content End --> 
    </div>
    <!-- .container --> 
</div>
<!-- .content -->
<!-- Footer Start -->
  <footer class="footer-1"  id="footer">      
    <div class="vd_bottom ">
        <div class="container">
            <div class="row">
              <div class=" col-xs-12">
                <div class="copyright">
                  	Copyright &copy;2021 Citius Inc. All Rights Reserved 
                </div>
              </div>
            </div><!-- row -->
        </div><!-- container -->
    </div>
  </footer>
<!-- Footer END -->
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
 
<!-- Specific Page Scripts Put Here -->
<!-- Flot Chart  -->
<script type="text/javascript" src="{{ asset('plugins/flot/jquery.flot.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/flot/jquery.flot.resize.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/flot/jquery.flot.pie.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/flot/jquery.flot.categories.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/flot/jquery.flot.time.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/flot/jquery.flot.animator.min.js') }}"></script>

<!-- Vector Map -->
<script type="text/javascript" src="{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>

<!-- Calendar -->
<script type="text/javascript" src='plugins/moment/moment.min.js'></script>
<script type="text/javascript" src='plugins/jquery-ui/jquery-ui.custom.min.js'></script>
<script type="text/javascript" src='plugins/fullcalendar/fullcalendar.min.js'></script>

<!-- Intro JS (Tour) -->
<script type="text/javascript" src='plugins/introjs/js/intro.min.js'></script>

<!-- Sky Icons -->
<script type="text/javascript" src='plugins/skycons/skycons.js'></script>
</body>
</html>