<!DOCTYPE html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <title>Multipurpose Dashboard - Responsive Multipurpose Admin Templates | Vendroid</title>
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
            	<a href="index.html"><img alt="logo" src="{{ asset('img/logo.png') }}"></a>
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
            	<div class="col-sm-5 col-xs-12">
            		
<div class="vd_menu-search">
  <form id="search-box" method="post" action="#">
    <input type="text" name="search" class="vd_menu-search-text width-60" placeholder="Search">
    <div class="vd_menu-search-category"> <span data-action="click-trigger"> <span class="separator"></span> <span class="text">Category</span> <span class="icon"> <i class="fa fa-caret-down"></i></span> </span>
      <div class="vd_mega-menu-content width-xs-2 center-xs-2 right-sm" data-action="click-target">
        <div class="child-menu">
          <div class="content-list content-menu content">
            <ul class="list-wrapper">
              <li>
                <label>
                  <input type="checkbox" value="all-files">
                  <span>All Files</span></label>
              </li>
              <li>
                <label>
                  <input type="checkbox" value="photos">
                  <span>Photos</span></label>
              </li>
              <li>
                <label>
                  <input type="checkbox" value="illustrations">
                  <span>Illustrations</span></label>
              </li>
              <li>
                <label>
                  <input type="checkbox" value="video">
                  <span>Video</span></label>
              </li>
              <li>
                <label>
                  <input type="checkbox" value="audio">
                  <span>Audio</span></label>
              </li>
              <li>
                <label>
                  <input type="checkbox" value="flash">
                  <span>Flash</span></label>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <span class="vd_menu-search-submit"><i class="fa fa-search"></i> </span>
  </form>
</div>
                </div>
                <div class="col-sm-7 col-xs-12">
              		<div class="vd_mega-menu-wrapper">
                    	<div class="vd_mega-menu pull-right">
            				<ul class="mega-ul">
    <li id="top-menu-1" class="one-icon mega-li"> 
      <a href="index.html" class="mega-link" data-action="click-trigger">
    	<span class="mega-icon"><i class="fa fa-users"></i></span> 
		<span class="badge vd_bg-red">1</span>        
      </a>
      <div class="vd_mega-menu-content width-xs-3 width-sm-4 width-md-5 right-xs left-sm" data-action="click-target">
        <div class="child-menu">  
           <div class="title"> 
           	   Friend Requests
               <div class="vd_panel-menu">
                     <span data-original-title="Find User" data-toggle="tooltip" data-placement="bottom" class="menu">
                        <i class="fa fa-search"></i>
                    </span>                 
                     <span data-original-title="Message Setting" data-toggle="tooltip" data-placement="bottom" class="menu">
                        <i class="fa fa-cog"></i>
                    </span>                                                                              
                </div>
           </div>                 
		   <div class="content-grid column-xs-2 column-sm-3 height-xs-4">	
           <div data-rel="scroll">
               <ul class="list-wrapper">
                    <li> <a href="#"> 
                    		<div class="menu-icon"><img alt="example image" src="{{ asset('img/avatar/avatar.jpg') }}"></div> 
                         </a>
                        <div class="menu-text"> Gabriella Montagna
                            <div class="menu-info">
                                <div class="menu-date">San Diego</div>                                                                         
                                <div class="menu-action">
                                    <span class="menu-action-icon vd_green vd_bd-green" data-original-title="Approve" data-toggle="tooltip" data-placement="bottom">
                                        <i class="fa fa-check"></i>
                                    </span> 
                                    <span class="menu-action-icon vd_red vd_bd-red" data-original-title="Reject" data-toggle="tooltip" data-placement="bottom">
                                        <i class="fa fa-times"></i>
                                    </span>                                                                                                                   
                                </div>                                
                            </div>
                        </div> 
                     </li>
                    <li class="warning"> 
                    		<a href="#"> 
                    			<div class="menu-icon"><img alt="example image" src="{{ asset('img/avatar/avatar-2.jpg') }}"></div>  
                            </a>                            
                            <div class="menu-text">  Jonathan Fuzzy
                            	<div class="menu-info">
                                    <div class="menu-date">Seattle</div>                                                                         
                                    <div class="menu-action">
                                        <span class="menu-action-icon vd_green vd_bd-green" data-original-title="Approve" data-toggle="tooltip" data-placement="bottom">
                                            <i class="fa fa-check"></i>
                                        </span> 
                                        <span class="menu-action-icon vd_red vd_bd-red" data-original-title="Reject" data-toggle="tooltip" data-placement="bottom">
                                            <i class="fa fa-times"></i>
                                        </span>                                                                            
                                    </div>                                
                            	</div>                            
                            </div> 
                     </li>    
                    <li> <a href="#"> 
                    		<div class="menu-icon"><img alt="example image" src="{{ asset('img/avatar/avatar-3.jpg') }}"></div> 
                         </a>    
                        <div class="menu-text">  Sakura Hinata
                            <div class="menu-info">
                                <div class="menu-date">Hawaii</div>                                                                         
                                <div class="menu-action">
                                    <span class="menu-action-icon vd_green vd_bd-green" data-original-title="Approve" data-toggle="tooltip" data-placement="bottom">
                                        <i class="fa fa-check"></i>
                                    </span> 
                                    <span class="menu-action-icon vd_red vd_bd-red" data-original-title="Reject" data-toggle="tooltip" data-placement="bottom">
                                        <i class="fa fa-times"></i>
                                    </span>                                                                             
                                </div>                                
                            </div>                                                     
                        </div> 
                    </li>                                     
                    <li> <a href="#"> 
                    		<div class="menu-icon"><img alt="example image" src="{{ asset('img/avatar/avatar-4.jpg') }}"></div> 
                         </a>    
                        <div class="menu-text">  Rikudou Sennin
                            <div class="menu-info">
                                <div class="menu-date">Las Vegas</div>                                                                         
                                <div class="menu-action">
                                    <span class="menu-action-icon vd_green vd_bd-green" data-original-title="Approve" data-toggle="tooltip" data-placement="bottom">
                                        <i class="fa fa-check"></i>
                                    </span> 
                                    <span class="menu-action-icon vd_red vd_bd-red" data-original-title="Reject" data-toggle="tooltip" data-placement="bottom">
                                        <i class="fa fa-times"></i>
                                    </span>                                                                              
                                </div>                                
                            </div>                                                        
                        </div> 
                    </li> 
                    <li> <a href="#"> 
                    		<div class="menu-icon"><img alt="example image" src="{{ asset('img/avatar/avatar-5.jpg') }}"></div>  
                         </a>   
                        <div class="menu-text">  Kim Kardiosun
                            <div class="menu-info">
                                <div class="menu-date">New York</div>                                                                         
                                <div class="menu-action">
                                    <span class="menu-action-icon vd_green vd_bd-green" data-original-title="Approve" data-toggle="tooltip" data-placement="bottom">
                                        <i class="fa fa-check"></i>
                                    </span> 
                                    <span class="menu-action-icon vd_red vd_bd-red" data-original-title="Reject" data-toggle="tooltip" data-placement="bottom">
                                        <i class="fa fa-times"></i>
                                    </span>                                                                              
                                </div>                                
                            </div>                                                          
                        </div> 
                     </li>
                    <li> <a href="#"> 
                    		<div class="menu-icon"><img alt="example image" src="{{ asset('img/avatar/avatar-6.jpg') }}"></div>
                         </a>    
                        <div class="menu-text">   Brad Pita
                            <div class="menu-info">
                                <div class="menu-date">Seattle</div>                                                                         
                                <div class="menu-action">
                                    <span class="menu-action-icon vd_green vd_bd-green" data-original-title="Approve" data-toggle="tooltip" data-placement="bottom">
                                        <i class="fa fa-check"></i>
                                    </span> 
                                    <span class="menu-action-icon vd_red vd_bd-red" data-original-title="Reject" data-toggle="tooltip" data-placement="bottom">
                                        <i class="fa fa-times"></i>
                                    </span>                                                                              
                                </div>                                
                            </div>                             
                        </div> 
                    </li>                                     
                    <li> <a href="#"> 
                    		<div class="menu-icon"><img alt="example image" src="{{ asset('img/avatar/avatar-7.jpg') }}"></div> 
                         </a>   
                        <div class="menu-text">  Celline Dior
                            <div class="menu-info">
                                <div class="menu-date">Los Angeles</div>                                                                         
                                <div class="menu-action">
                                    <span class="menu-action-icon vd_green vd_bd-green" data-original-title="Approve" data-toggle="tooltip" data-placement="bottom">
                                        <i class="fa fa-check"></i>
                                    </span> 
                                    <span class="menu-action-icon vd_red vd_bd-red" data-original-title="Reject" data-toggle="tooltip" data-placement="bottom">
                                        <i class="fa fa-times"></i>
                                    </span>                                                                             
                                </div>                                
                            </div>                              
                        </div> 
                    </li> 
                    <li> <a href="#"> 
                    		<div class="menu-icon"><img alt="example image" src="{{ asset('img/avatar/avatar-8.jpg') }}"></div>
                         </a>    
                        <div class="menu-text">  Goerge Bruno Marz
                            <div class="menu-info">
                                <div class="menu-date">Las Vegas</div>                                                                         
                                <div class="menu-action">
                                    <span class="menu-action-icon vd_green vd_bd-green" data-original-title="Approve" data-toggle="tooltip" data-placement="bottom">
                                        <i class="fa fa-check"></i>
                                    </span> 
                                    <span class="menu-action-icon vd_red vd_bd-red" data-original-title="Reject" data-toggle="tooltip" data-placement="bottom">
                                        <i class="fa fa-times"></i>
                                    </span>                                                                              
                                </div>                                
                            </div>                              
                        </div> 
                    </li>                                                                                
                    
               </ul>
               </div>
               <div class="closing text-center" style="">
               		<a href="#">See All Requests <i class="fa fa-angle-double-right"></i></a>
               </div>                                                                       
           </div>                              
        </div> <!-- child-menu -->                      
      </div>   <!-- vd_mega-menu-content --> 
    </li>
    <li id="top-menu-2" class="one-icon mega-li"> 
      <a href="index.html" class="mega-link" data-action="click-trigger">
    	<span class="mega-icon"><i class="fa fa-envelope"></i></span> 
		<span class="badge vd_bg-red">10</span>        
      </a>
      <div class="vd_mega-menu-content width-xs-3 width-sm-4 width-md-5 width-lg-4 right-xs left-sm" data-action="click-target">
        <div class="child-menu">  
           <div class="title"> 
           	   Messages
               <div class="vd_panel-menu">
                     <span data-original-title="Message Setting" data-toggle="tooltip" data-placement="bottom" class="menu">
                        <i class="fa fa-cog"></i>
                    </span>                                                                              
                </div>
           </div>                 
		   <div class="content-list content-image">
           	   <div  data-rel="scroll">	
               <ul class="list-wrapper pd-lr-10">
                    <li> 
                    		<div class="menu-icon"><img alt="example image" src="{{ asset('img/avatar/avatar.jpg') }}"></div> 
                            <div class="menu-text"> Do you play or follow any sports?
                            	<div class="menu-info">
                                    <span class="menu-date">12 Minutes Ago </span>                                                                         
                                    <span class="menu-action">
                                        <span class="menu-action-icon" data-original-title="Mark as Unread" data-toggle="tooltip" data-placement="bottom">
                                            <i class="fa fa-eye"></i>
                                        </span>                                                                            
                                    </span>                                
                            	</div>
                            </div> 
                    </li>
                    <li class="warning"> 
                    		<div class="menu-icon"><img alt="example image" src="{{ asset('img/avatar/avatar-2.jpg') }}"></div>  
                            <div class="menu-text">  Good job mate !
                            	<div class="menu-info">
                                    <span class="menu-date">1 Hour 20 Minutes Ago </span>                                                                         
                                    <span class="menu-action">
                                        <span class="menu-action-icon" data-original-title="Mark as Read" data-toggle="tooltip" data-placement="bottom">
                                            <i class="fa fa-eye-slash"></i>
                                        </span>                                                                            
                                    </span>                                
                            	</div>                            
                            </div> 
                     </li>    
                    <li> 
                    		<div class="menu-icon"><img alt="example image" src="{{ asset('img/avatar/avatar-3.jpg') }}"></div> 
                            <div class="menu-text">  Just calm down babe, everything will work out.
                            	<div class="menu-info">
                                    <span class="menu-date">12 Days Ago</span>                                                                         
                                    <span class="menu-action">
                                        <span class="menu-action-icon" data-original-title="Mark as Unread" data-toggle="tooltip" data-placement="bottom">
                                            <i class="fa fa-eye"></i>
                                        </span>                                                                            
                                    </span>                                
                            	</div>                                                     
                            </div> 
                    </li>                                     
                    <li>
                    		<div class="menu-icon"><img alt="example image" src="{{ asset('img/avatar/avatar-4.jpg') }}"></div> 
                            <div class="menu-text">  Euuh so gross....
                            	<div class="menu-info">
                                    <span class="menu-date">19 Days Ago</span>                                                                         
                                    <span class="menu-action">
                                        <span class="menu-action-icon" data-original-title="Mark as Unread" data-toggle="tooltip" data-placement="bottom">
                                            <i class="fa fa-eye"></i>
                                        </span>                                                                            
                                    </span>                                
                            	</div>                                                        
                            </div> 
                    </li> 
                    <li> 
                    		<div class="menu-icon"><img alt="example image" src="{{ asset('img/avatar/avatar-5.jpg') }}"></div>  
                            <div class="menu-text">  That's the way.. I like it :D
                            	<div class="menu-info">
                                    <span class="menu-date">20 Days Ago</span>                                                                         
                                    <span class="menu-action">
                                        <span class="menu-action-icon" data-original-title="Mark as Unread" data-toggle="tooltip" data-placement="bottom">
                                            <i class="fa fa-eye"></i>
                                        </span>                                                                            
                                    </span>                                
                            	</div>                                                          
                            </div> 
                     </li>
                    <li> 
                    		<div class="menu-icon"><img alt="example image" src="{{ asset('img/avatar/avatar-6.jpg') }}"></div> 
                            <div class="menu-text">  Oooh don't be shy ;P
                            	<div class="menu-info">
                                    <span class="menu-date">21 Days Ago</span>                                                                         
                                    <span class="menu-action">
                                        <span class="menu-action-icon" data-original-title="Mark as Unread" data-toggle="tooltip" data-placement="bottom">
                                            <i class="fa fa-eye"></i>
                                        </span>                                                                            
                                    </span>                                
                            	</div>                             
                            </div> 
                     </li>                                     
                    <li> 
                    		<div class="menu-icon"><img alt="example image" src="{{ asset('img/avatar/avatar-7.jpg') }}"></div> 
                            <div class="menu-text">  Hello, please call my number..
                            	<div class="menu-info">
                                    <span class="menu-date">24 Days Ago</span>                                                                         
                                    <span class="menu-action">
                                        <span class="menu-action-icon" data-original-title="Mark as Unread" data-toggle="tooltip" data-placement="bottom">
                                            <i class="fa fa-eye"></i>
                                        </span>                                                                            
                                    </span>                                
                            	</div>                              
                            </div> 
                    </li> 
                    <li> 
                    		<div class="menu-icon"><img alt="example image" src="{{ asset('img/avatar/avatar-8.jpg') }}"></div> 
                            <div class="menu-text">  Don't go anywhere, i will be coming soon
                            	<div class="menu-info">
                                    <span class="menu-date">1 Month 2 days Ago</span>                                                                         
                                    <span class="menu-action">
                                        <span class="menu-action-icon" data-original-title="Mark as Unread" data-toggle="tooltip" data-placement="bottom">
                                            <i class="fa fa-eye"></i>
                                        </span>                                                                            
                                    </span>                                
                            	</div>                              
                            </div> 
                     </li>                                                                                
                    
               </ul>
               </div>
               <div class="closing text-center" style="">
               		<a href="#">See All Notifications <i class="fa fa-angle-double-right"></i></a>
               </div>                                                                       
           </div>                              
        </div> <!-- child-menu -->                      
      </div>   <!-- vd_mega-menu-content --> 
    </li>  
    <li id="top-menu-3"  class="one-icon mega-li"> 
      <a href="index.html" class="mega-link" data-action="click-trigger">
    	<span class="mega-icon"><i class="fa fa-globe"></i></span> 
		<span class="badge vd_bg-red">51</span>        
      </a>
      <div class="vd_mega-menu-content  width-xs-3 width-sm-4  center-xs-3 left-sm" data-action="click-target">
        <div class="child-menu">  
           <div class="title"> 
           		Notifications 
               <div class="vd_panel-menu">
                     <span data-original-title="Notification Setting" data-toggle="tooltip" data-placement="bottom" class="menu">
                        <i class="fa fa-cog"></i>
                    </span>                   
<!--                     <span class="text-menu" data-original-title="Settings" data-toggle="tooltip" data-placement="bottom">
                        Settings
                    </span> -->                                                              
                </div>
           </div>                 
		   <div class="content-list">	
           	   <div  data-rel="scroll">	
               <ul  class="list-wrapper pd-lr-10">
                    <li> <a href="#"> 
                    		<div class="menu-icon vd_yellow"><i class="fa fa-suitcase"></i></div> 
                            <div class="menu-text"> Someone has give you a surprise 
                            	<div class="menu-info"><span class="menu-date">12 Minutes Ago</span></div>
                            </div> 
                    </a> </li>
                    <li> <a href="#"> 
                    		<div class="menu-icon vd_blue"><i class=" fa fa-user"></i></div> 
                            <div class="menu-text">  Change your user profile details
                            	<div class="menu-info"><span class="menu-date">1 Hour 20 Minutes Ago</span></div>
                            </div> 
                    </a> </li>    
                    <li> <a href="#"> 
                    		<div class="menu-icon vd_red"><i class=" fa fa-cogs"></i></div> 
                            <div class="menu-text">  Your setting is updated
                            	<div class="menu-info"><span class="menu-date">12 Days Ago</span></div>                            
                            </div> 
                    </a> </li>                                     
                    <li> <a href="#"> 
                    		<div class="menu-icon vd_green"><i class=" fa fa-book"></i></div> 
                            <div class="menu-text">  Added new article
                            	<div class="menu-info"><span class="menu-date">19 Days Ago</span></div>                              
                            </div> 
                    </a> </li> 
                    <li> <a href="#"> 
                    		<div class="menu-icon vd_green"><img alt="example image" src="{{ asset('img/avatar/avatar.jpg') }}"></div> 
                            <div class="menu-text">  Change Profile Pic
                            	<div class="menu-info"><span class="menu-date">20 Days Ago</span></div>                              
                            </div> 
                    </a> </li>
                    <li> <a href="#"> 
                    		<div class="menu-icon vd_red"><i class=" fa fa-cogs"></i></div> 
                            <div class="menu-text">  Your setting is updated
                            	<div class="menu-info"><span class="menu-date">12 Days Ago</span></div>                            
                            </div> 
                    </a> </li>                                     
                    <li> <a href="#"> 
                    		<div class="menu-icon vd_green"><i class=" fa fa-book"></i></div> 
                            <div class="menu-text">  Added new article
                            	<div class="menu-info"><span class="menu-date">19 Days Ago</span></div>                              
                            </div> 
                    </a> </li> 
                    <li> <a href="#"> 
                    		<div class="menu-icon vd_green"><img alt="example image" src="{{ asset('img/avatar/avatar.jpg') }}"></div> 
                            <div class="menu-text">  Change Profile Pic
                            	<div class="menu-info"><span class="menu-date">20 Days Ago</span></div>                              
                            </div> 
                    </a> </li>                                                                                
                    
               </ul>
               </div>
               <div class="closing text-center" style="">
               		<a href="#">See All Notifications <i class="fa fa-angle-double-right"></i></a>
               </div>                                                                       
           </div>                              
        </div> <!-- child-menu -->                      
      </div>   <!-- vd_mega-menu-content -->         
    </li>  
     
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
                    <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-trophy"></i></div> <div class="menu-text">My Achievements</div> </a> </li>
                    <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-envelope"></i></div> <div class="menu-text">Messages</div><div class="menu-badge"><div class="badge vd_bg-red">10</div></div> </a>  </li>
                    <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-tasks
"></i></div> <div class="menu-text"> Tasks</div><div class="menu-badge"><div class="badge vd_bg-red">5</div></div> </a> </li> 
                    <li class="line"></li>                
                    <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-lock
"></i></div> <div class="menu-text">Privacy</div> </a> </li>
                    <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-cogs"></i></div> <div class="menu-text">Settings</div> </a> </li>
                    <li> <a href="#"> <div class="menu-icon"><i class="  fa fa-key"></i></div> <div class="menu-text">Lock</div> </a> </li>
                    <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-sign-out"></i></div>  <div class="menu-text">Sign Out</div> </a> </li>
                    <li class="line"></li>                
                    <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-question-circle"></i></div> <div class="menu-text">Help</div> </a> </li>
                    <li> <a href="#"> <div class="menu-icon"><i class=" glyphicon glyphicon-bullhorn"></i></div> <div class="menu-text">Report a Problem</div> </a> </li>              
                </ul>
            </div> 
        </div> 
      </div>     
  
    </li>               
       
    <li id="top-menu-settings" class="one-big-icon hidden-xs hidden-sm mega-li" data-intro="<strong>Toggle Right Navigation </strong><br/>On smaller device such as tablet or phone you can click on the middle content to close the right or left navigation." data-step=2 data-position="left"> 
    	<a href="#" class="mega-link"  data-action="toggle-navbar-right"> 
           <span class="mega-icon">
                <i class="fa fa-comments"></i> 
            </span> 
<!--            <span  class="mega-image">
                <img src="{{ asset('img/avatar/avatar.jpg') }}" alt="example image" />               
            </span> -->           
			<span class="badge vd_bg-red">8</span>               
        </a>              
       
    </li>
	</ul>
<!-- Head menu search form ends -->                         
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
    <div class="vd_navbar vd_nav-width vd_navbar-tabs-menu vd_navbar-left  ">
	<div class="navbar-tabs-menu clearfix">
			<span class="expand-menu" data-action="expand-navbar-tabs-menu">
            	<span class="menu-icon menu-icon-left">
            		<i class="fa fa-ellipsis-h"></i>
                    <span class="badge vd_bg-red">
                        20
                    </span>                    
                </span>
            	<span class="menu-icon menu-icon-right">
            		<i class="fa fa-ellipsis-h"></i>
                    <span class="badge vd_bg-red">
                        20
                    </span>                    
                </span>                
            </span>
            <div class="menu-container">
            	<div class="vd_mega-menu-wrapper">
                	<div class="vd_mega-menu"  data-intro="<strong>Tabs Menu</strong><br/>Can be placed for dropdown menu, tabs, or user profile. Responsive for medium and small size navigation." data-step=3>
        				<ul class="mega-ul">
    <li id="home" class="one-icon mega-li"> 
      <a class="mega-link  vd_bg-blue" href="javascript:void(0);"  data-action="click-trigger">
            <span class="mega-icon">
                <i class="fa fa-cloud"></i>
            </span>
            <span class="badge vd_bg-red">
                10
            </span>
      </a>
      <div class="vd_mega-menu-content width-xs-3 width-sm-5 width-md-6   right-xs " data-action="click-target">
        <div class="child-menu">  
           <div class="title"> 
           	   Server Status
               <div class="vd_panel-menu">
                     <span data-original-title="Find Server" data-toggle="tooltip" data-placement="bottom" class="menu">
                        <i class="fa fa-search"></i>
                    </span>                 
                     <span data-original-title="Message Setting" data-toggle="tooltip" data-placement="bottom" class="menu">
                        <i class="fa fa-cog"></i>
                    </span>                                                                              
                </div>
           </div>                 
		   <div class="content-grid column-md-3 column-sm-2 column-xs-1 height-xs-auto height-sm-4">	
           <div data-rel="scroll">
               <ul class="list-wrapper">
                    <li><a>
           		            <div class="menu-icon">
                				<i class="fa fa-cloud"></i>
           				    </div>
                            <div class="menu-text"> Venmond.com
                            	<div class="menu-info">
                                    <span class="menu-date vd_bg-green badge">Online</span>
                                    <div class="menu-status  text-left">
                                    	<span class="text">Disk Usage</span>
                                        <span class="value pull-right vd_black">4.35/140 GB</span>
                                    </div>
                                    <div class="menu-info">
                                        <div class="progress">
                                            <div style="width:15%" class="progress-bar progress-bar-info"> 
                                            </div>
                                        </div>                                                   
                                    </div>                                     
                                    <div class="menu-status  text-left">
                                    	<span class="text">BW Usage</span>
                                        <span class="value pull-right vd_black">1600/2500 GB</span>
                                    </div>
                                    <div class="menu-info">
                                        <div class="progress">
                                            <div style="width:65%" class="progress-bar  progress-bar-warning"> 
                                            </div>
                                        </div>                                                   
                                    </div>                                                                                                               
                                    <span class="menu-action">
                                        <span class="menu-action-icon vd_green vd_bd-green" data-original-title="Reboot Server" data-toggle="tooltip" data-placement="bottom">
                                            <i class="fa fa-refresh"></i>
                                        </span> 
                                        <span class="menu-action-icon vd_red vd_bd-red" data-original-title="Stop Server" data-toggle="tooltip" data-placement="bottom">
                                            <i class="fa fa-stop"></i>
                                        </span>
                                    </span>                                
                            	</div>
                            </div> 
                    </a></li>
                    <li> <a>
           		            <div class="menu-icon">
                				<i class="fa fa-cloud"></i>
           				    </div>
                            <div class="menu-text"> Venmond.com
                            	<div class="menu-info">
                                    <span class="menu-date vd_bg-grey badge">Offline</span>
                                    <div class="menu-status  text-left">
                                    	<span class="text">Disk Usage</span>
                                        <span class="value pull-right vd_black">4.35/140 GB</span>
                                    </div>
                                    <div class="menu-info">
                                        <div class="progress">
                                            <div style="width:15%" class="progress-bar progress-bar-info"> 
                                            </div>
                                        </div>                                                   
                                    </div>                                     
                                    <div class="menu-status  text-left">
                                    	<span class="text">BW Usage</span>
                                        <span class="value pull-right vd_black">1600/2500 GB</span>
                                    </div>
                                    <div class="menu-info">
                                        <div class="progress">
                                            <div style="width:65%" class="progress-bar  progress-bar-warning"> 
                                            </div>
                                        </div>                                                   
                                    </div>                                                                                                               
                                    <span class="menu-action">
                                        <span class="menu-action-icon vd_green vd_bd-green" data-original-title="Reboot Server" data-toggle="tooltip" data-placement="bottom">
                                            <i class="fa fa-refresh"></i>
                                        </span> 
                                        <span class="menu-action-icon vd_red vd_bd-red" data-original-title="Stop Server" data-toggle="tooltip" data-placement="bottom">
                                            <i class="fa fa-stop"></i>
                                        </span>
                                    </span>                                
                            	</div>
                            </div> 
                    </a></li>
                    <li> <a>
           		            <div class="menu-icon">
                				<i class="fa fa-cloud"></i>
           				    </div>
                            <div class="menu-text"> Venmond.com
                            	<div class="menu-info">
                                    <span class="menu-date vd_bg-grey badge">Offline</span>
                                    <div class="menu-status  text-left">
                                    	<span class="text">Disk Usage</span>
                                        <span class="value pull-right vd_black">4.35/140 GB</span>
                                    </div>
                                    <div class="menu-info">
                                        <div class="progress">
                                            <div style="width:15%" class="progress-bar progress-bar-info"> 
                                            </div>
                                        </div>                                                   
                                    </div>                                     
                                    <div class="menu-status  text-left">
                                    	<span class="text">BW Usage</span>
                                        <span class="value pull-right vd_black">1600/2500 GB</span>
                                    </div>
                                    <div class="menu-info">
                                        <div class="progress">
                                            <div style="width:65%" class="progress-bar  progress-bar-warning"> 
                                            </div>
                                        </div>                                                   
                                    </div>                                                                                                               
                                    <span class="menu-action">
                                        <span class="menu-action-icon vd_green vd_bd-green" data-original-title="Reboot Server" data-toggle="tooltip" data-placement="bottom">
                                            <i class="fa fa-refresh"></i>
                                        </span> 
                                        <span class="menu-action-icon vd_red vd_bd-red" data-original-title="Stop Server" data-toggle="tooltip" data-placement="bottom">
                                            <i class="fa fa-stop"></i>
                                        </span>
                                    </span>                                
                            	</div>
                            </div> 
                    </a></li>
                    <li><a> 
           		            <div class="menu-icon">
                				<i class="fa fa-cloud"></i>
           				    </div>
                            <div class="menu-text"> Venmond.com
                            	<div class="menu-info">
                                    <span class="menu-date vd_bg-grey badge">Offline</span>
                                    <div class="menu-status  text-left">
                                    	<span class="text">Disk Usage</span>
                                        <span class="value pull-right vd_black">4.35/140 GB</span>
                                    </div>
                                    <div class="menu-info">
                                        <div class="progress">
                                            <div style="width:15%" class="progress-bar progress-bar-info"> 
                                            </div>
                                        </div>                                                   
                                    </div>                                     
                                    <div class="menu-status  text-left">
                                    	<span class="text">BW Usage</span>
                                        <span class="value pull-right vd_black">1600/2500 GB</span>
                                    </div>
                                    <div class="menu-info">
                                        <div class="progress">
                                            <div style="width:65%" class="progress-bar  progress-bar-warning"> 
                                            </div>
                                        </div>                                                   
                                    </div>                                                                                                               
                                    <span class="menu-action">
                                        <span class="menu-action-icon vd_green vd_bd-green" data-original-title="Reboot Server" data-toggle="tooltip" data-placement="bottom">
                                            <i class="fa fa-refresh"></i>
                                        </span> 
                                        <span class="menu-action-icon vd_red vd_bd-red" data-original-title="Stop Server" data-toggle="tooltip" data-placement="bottom">
                                            <i class="fa fa-stop"></i>
                                        </span>
                                    </span>                                
                            	</div>
                            </div> 
                    </a></li>                                                                                                                         
                    
               </ul>
               </div> <!-- data-rel="scroll" -->
               <div class="closing text-center" style="">
               		<a href="#">See All Requests <i class="fa fa-angle-double-right"></i></a>
               </div>                                                                       
           </div>                              
        </div> <!-- child-menu -->                      
      </div>   <!-- vd_mega-menu-content --> 
    </li>
    <li id="tabs-menu-tasks" class="one-icon mega-li"> 
        <a class="mega-link  vd_bg-green" href="javascript:void(0);"   data-action="click-trigger">
            <span class="mega-icon">
                <i class="fa fa-tasks"></i>
            </span>
            <span class="badge vd_bg-red">
                8
            </span>
        </a>
      <div class="vd_mega-menu-content width-xs-3 width-sm-4 width-md-5 right-xs" data-action="click-target">
        <div class="child-menu">  
           <div class="title"> 
           	   You have 8 pending tasks
               <div class="vd_panel-menu">
                     <span data-original-title="Task Setting" data-toggle="tooltip" data-placement="bottom" class="menu">
                        <i class="fa fa-cog"></i>
                    </span>                                                                              
                </div>
           </div>                 
		   <div class="content-list content-image">	
           <div data-rel="scroll">
               <ul class="list-wrapper pd-lr-10">
                    <li> <a href="#"> 
                    		<div class="menu-icon vd_blue"><i class="fa fa-bolt"></i></div> 
                            <div class="menu-text"> Electricity Problem
                            	<div class="menu-info">
                                    <div class="progress progress-sm">
                                        <div style="width:85%" class="progress-bar progress-bar-info"> 
                                        	85%
                                        </div>
                                    </div>                                                                                                    
                            	</div>
                            </div> 
                    </a> </li>
                    <li> <a href="#"> 
                    		<div class="menu-icon vd_yellow"><i class="fa fa-code"></i></div>  
                            <div class="menu-text">  Finish coding jquery plugin
                            	<div class="menu-info">
                                    <div class="progress progress-sm">
                                        <div style="width:20%" class="progress-bar progress-bar-danger"> 
                                        	20%
                                        </div>
                                    </div>                                                                                                    
                            	</div>                           
                            </div> 
                    </a> </li>    
                    <li> <a> 
                    		<div class="menu-icon"><img alt="example image" src="{{ asset('img/avatar/avatar-3.jpg') }}"></div> 
                            <div class="menu-text"> Client: Zoe Project
                            	<div class="menu-info">
                                    <span class="menu-date">Make a call</span>                                                                         
                                    <span class="menu-action">
                                        <span class="menu-action-icon" data-original-title="Call" data-toggle="tooltip" data-placement="bottom">
                                            <i class="fa fa-phone"></i>
                                        </span>                                                                            
                                    </span>                                
                            	</div>                                                     
                            </div> 
                    </a> </li>                                     
                    <li> <a href="#"> 
                    		<div class="menu-icon"><i class=" fa fa-magic"></i></div>  
                            <div class="menu-text">  Final error check on new templates
                            	<div class="menu-info">
                                    <div class="progress progress-sm">
                                        <div style="width:95%" class="progress-bar progress-bar-success"> 
                                        	95%
                                        </div>
                                    </div>                                                                                                    
                            	</div>                           
                            </div> 
                    </a> </li> 
                    <li> <a href="#"> 
                    		<div class="menu-icon vd_green"><i class=" fa fa-camera"></i></div>  
                            <div class="menu-text">  Update product image
                            	<div class="menu-info">
                                    <div class="progress progress-sm">
                                        <div style="width:50%" class="progress-bar progress-bar-warning"> 
                                        	50%
                                        </div>
                                    </div>                                                                                                    
                            	</div>                           
                            </div> 
                    </a> </li>
                    <li> <a href="#"> 
                    		<div class="menu-icon vd_blue"><i class="fa fa-bolt"></i></div> 
                            <div class="menu-text"> Electricity Problem
                            	<div class="menu-info">
                                    <div class="progress progress-sm">
                                        <div style="width:85%" class="progress-bar progress-bar-info"> 
                                        	85%
                                        </div>
                                    </div>                                                                                                    
                            	</div>
                            </div> 
                    </a> </li>
                    <li> <a href="#"> 
                    		<div class="menu-icon vd_yellow"><i class=" fa fa-code"></i></div>  
                            <div class="menu-text">  Finish coding jquery plugin
                            	<div class="menu-info">
                                    <div class="progress progress-sm">
                                        <div style="width:20%" class="progress-bar progress-bar-danger"> 
                                        	20%
                                        </div>
                                    </div>                                                                                                    
                            	</div>                           
                            </div> 
                    </a> </li>    
                    <li> <a> 
                    		<div class="menu-icon"><img alt="example image" src="{{ asset('img/avatar/avatar-3.jpg') }}"></div> 
                            <div class="menu-text"> Client: Zoe Project
                            	<div class="menu-info">
                                    <span class="menu-date">Make a call</span>                                                                         
                                    <span class="menu-action">
                                        <span class="menu-action-icon" data-original-title="Call" data-toggle="tooltip" data-placement="bottom">
                                            <i class="fa fa-phone"></i>
                                        </span>                                                                            
                                    </span>                                
                            	</div>                                                     
                            </div> 
                    </a> </li>                                     
                                                                                                                       
                    
               </ul>
               </div>
               <div class="closing text-center" style="">
               		<a href="#">See All Tasks <i class="fa fa-angle-double-right"></i></a>
               </div>                                                                       
           </div>                              
        </div> <!-- child-menu -->                      
      </div>   <!-- vd_mega-menu-content --> 
    </li>  
    <li id="test-2" class="one-icon mega-li"> 
        <a class="mega-link vd_bg-yellow " href="javascript:void(0);" data-action="click-trigger">
            <span class="mega-icon">
                <i class="fa fa-pencil"></i>
            </span>
        </a>     
         <div class="vd_mega-menu-content width-xs-3 width-sm-4 width-md-5 center-xs-3 right-sm pd-0" data-action="click-target">
            <div class="child-menu">  

                	<textarea class="no-bd" rows="3" placeholder="What are you doing?" ></textarea>
                    <div class="vd_textarea-menu vd_bg-yellow vd_bd-yellow" >
                    	<ul class="nav nav-pills ">
                        <li class="one-icon">
                            <a data-toggle="tab-post" href="javascript:void(0);">
                                <span class="menu-icon">
                                    <i class="fa fa-user fa-fw"></i>
                                </span>
                            </a>
                        </li>
                        <li class="one-icon">
                            <a data-toggle="tab-post" href="javascript:void(0);">
                                <span class="menu-icon">
                                    <i class="fa fa-camera fa-fw"></i>
                                </span>
                            </a>
                        </li>   
                        <li class="one-icon">
                            <a data-toggle="tab-post" href="javascript:void(0);">
                                <span class="menu-icon">
                                    <i class="fa fa-smile-o fa-fw"></i>
                                </span>
                            </a>
                        </li>  
                        <li class="pull-right">
                            <a data-toggle="tab-post" href="javascript:void(0);" style="border-left:1px solid rgba(255,255,255,.3)">
                                <span class="menu-icon">
                                    <i class="fa fa-check fa-fw"></i>
                                </span>                             
                                <span class="menu-text">
                                	Post
                                </span>                              
                            </a>
                        </li>  
                                                                    
                        </ul>

                </div>
                                          
            </div> <!-- child-menu -->                      
          </div>   <!-- vd_mega-menu-content -->                               
         
    </li>  
    <li id="test" class="one-icon mega-li"> 
        <a class="mega-link vd_bg-red" href="javascript:void(0);" data-action="click-trigger">
            <span class="mega-icon">
                <i class="fa fa-plus"></i>
            </span>
        </a>
        <div class="vd_mega-menu-content  width-xs-2  center-xs-2" data-action="click-target" >
                <div class="child-menu"> 
                    <div class="content-list content-menu">
                        <ul class="list-wrapper pd-lr-10">
                            <li> <a href="#"> <span class="menu-icon"><i class=" fa fa-user"></i></span> <span class="menu-text">Write Article</span> </a> </li>
                            <li> <a href="#"> <span class="menu-icon"><i class=" fa fa-trophy"></i></span> <span class="menu-text">Write News</span> </a> </li>
                            <li> <a href="#"> <span class="menu-icon"><i class=" fa fa-flask"></i></span> <span class="menu-text">Add Product</span> </a>  </li>
                                       
                        </ul>
                    </div> 
                </div> 
           </div>   <!-- vd_mega-menu-content  -->      
    </li>      
</ul>                        	
                    </div>                
                </div>
            </div>                                                   
    </div>
	<div class="navbar-menu clearfix">
        <div class="vd_panel-menu hidden-xs">
            <span data-original-title="Expand All" data-toggle="tooltip" data-placement="bottom" data-action="expand-all" class="menu" data-intro="<strong>Expand Button</strong><br/>To expand all menu on left navigation menu." data-step=4 >
                <i class="fa fa-sort-amount-asc"></i>
            </span>                   
        </div>
    	<h3 class="menu-title hide-nav-medium hide-nav-small">UI Features</h3>
        <div class="vd_menu">
        	 <ul>
    <li>
    	<a href="javascript:void(0);" data-action="click-trigger">
        	<span class="menu-icon"><i class="fa fa-dashboard"></i></span> 
            <span class="menu-text">Dashboard</span>  
            <span class="menu-badge"><span class="badge vd_bg-black-30"><i class="fa fa-angle-down"></i></span></span>
       	</a>
     	<div class="child-menu"  data-action="click-target">
            <ul>
                <li>
                    <a href="index.html">
                        <span class="menu-text">Default Dashboard</span>  
                    </a>
                </li>              
                <li>
                    <a href="index-ecommerce.html">
                        <span class="menu-text">E-Commerce Dashboard</span>  
                    </a>
                </li> 
                <li>
                    <a href="index-analytics.html">
                        <span class="menu-text">Analytics Dashboard</span>  
                    </a>
                </li> 
                <li>
                    <a href="index-blogging.html">
                        <span class="menu-text">Blogging Dashboard</span>  
                    </a>
                </li>                                                                                   
            </ul>   
      	</div>
    </li>  
 	<li>
    	<a href="email.html">
        	<span class="menu-icon"><i class="fa fa-envelope"></i></span> 
            <span class="menu-text">Email</span>  
            <span class="menu-badge"><span class="badge vd_bg-red">78</span></span>
       	</a> 
    </li>       
    <li>
    	<a href="javascript:void(0);" data-action="click-trigger">
        	<span class="menu-icon"><i class="icon-palette"> </i></span> 
            <span class="menu-text">Skin Playground</span>  
            <span class="menu-badge"><span class="badge vd_bg-black-30"><i class="fa fa-angle-down"></i></span></span>
       	</a>
     	<div class="child-menu"  data-action="click-target">
            <ul>  
                <li>
                    <a href="skin-clean-minimalist.html">
                        <span class="menu-text">Clean Minimalist Nav</span>  
                    </a>
                </li> 
                <li>
                    <a href="skin-nav-medium-profile-dark.html">
                        <span class="menu-text">Dark Medium Navbar</span>  
						<span class="menu-badge"><span class="badge vd_bg-red">Hot</span></span>                                    
                    </a>
                </li>                                                                                               
            </ul>   
      	</div>
    </li> 
    <li>
    	<a href="javascript:void(0);" data-action="click-trigger">
        	<span class="menu-icon entypo-icon"><i class="icon-bookmark"> </i></span> 
            <span class="menu-text">Starting Layouts</span>  
            <span class="menu-badge"><span class="badge vd_bg-black-30"><i class="fa fa-angle-down"></i></span></span>
       	</a>
     	<div class="child-menu"  data-action="click-target">
            <ul>  
                <li>
                    <a href="layouts-simple.html">
                        <span class="menu-text">Layout Simple</span>  
                    </a>
                </li> 
                <li>
                    <a href="layouts-simple-medium-profile.html">
                        <span class="menu-text">Layout Simple Medium Profile</span>                                      
                    </a>
                </li>                                
                <li>
                    <a href="layouts-double-sidenav.html">
                        <span class="menu-text">Layout Double SideNav</span>                                      
                    </a>
                </li> 
                <li>
                    <a href="layouts-hide-rightnav.html">
                        <span class="menu-text">Layout Hide RightNav</span>  
                    </a>
                </li>
                <li>
                    <a href="layouts-medium-no-header.html">
                        <span class="menu-text">Layout Medium No Header</span>                                      
                    </a>
                </li>                
                <li>
                    <a href="layouts-right-nav.html">
                        <span class="menu-text">Layout RightNav</span>  
                    </a>
                </li>  
                <li>
                    <a href="layouts-menu-tab.html">
                        <span class="menu-text">Layout Menu Tab</span>  
                    </a>
                </li>   
                <li>
                    <a href="layouts-without-subtitle.html">
                        <span class="menu-text">Layout Without Subtitle</span>  
                    </a>
                </li>                
                <li>
                    <a href="layouts-middle.html">
                        <span class="menu-text">Layout Middle</span>  
                    </a>
                </li>                
                <li>
                    <a href="layouts-boxed.html">
                        <span class="menu-text">Layout Boxed</span>  
                    </a>
                </li> 
                <li>
                    <a href="layouts-full-no-responsive.html">
                        <span class="menu-text">Layout Full No Responsive</span>  
                    </a>
                </li>
                <li>
                    <a href="layouts-middle-no-responsive.html">
                        <span class="menu-text">Layout Middle No Responsive</span>  
                    </a>
                </li>
                <li>
                    <a href="layouts-boxed-no-responsive.html">
                    	<span class="menu-text">Boxed No Responsive</span>  
                    </a>
                </li> 
                <li>
                    <a href="layouts-boxed-custom-width-no-responsive.html">
                    	<span class="menu-text">Boxed Custom Width No Responsive</span>  
                    </a>
                </li>                                               
                <li>
                    <a href="layouts-fixed-nav.html">
                        <span class="menu-text">Layout Fixed Nav</span>  
                    </a>
                </li>
                <li>
                    <a href="layouts-no-header-fixed-nav.html">
                        <span class="menu-text">No Header Fixed Nav</span>  
                    </a>
                </li>                                                                                                                                                                                                               
            </ul>   
      	</div>
    </li>               
    <li>
    	<a href="javascript:void(0);"   data-action="click-trigger">
            <span class="menu-icon"><i class="fa fa-sitemap"> </i></span>
            <span class="menu-text">Nav Variations</span>
            <span class="menu-badge"><span class="badge vd_bg-black-30"><i class="fa fa-angle-down"></i></span></span>            
        </a>
      	<div class="child-menu"   data-action="click-target">
            <ul class="clearfix">
                <li> 
                	<a href="javascript:" data-action="click-trigger"> 
                    	<span class="menu-text">Side Navigation</span> 
            			<span class="menu-badge"><span class="badge vd_bg-black-30"><i class="fa fa-angle-down"></i></span></span>
                    </a> 
                    <div class="child-menu"   data-action="click-target">
                        <ul class="clearfix">
                            <li> <a href="nav-side-large-menu-tab.html"> 
                            		<span class="menu-text">Large Menu Tab</span> 
                                 </a>   
                            </li>
                            <li> <a href="nav-side-large-tabs-tab.html"> 
                            		<span class="menu-text">Large Tabs Tab</span> 
                                 </a>   
                            </li>
                            <li> <a href="nav-side-large-profile-tab.html"> 
                            		<span class="menu-text">Large Profile Tab</span> 
                                 </a>   
                            </li>
                            <li> <a href="nav-side-large-no-tab.html"> 
                            		<span class="menu-text">Large No Tab</span> 
                                 </a>   
                            </li> 
                            <li> <a href="nav-side-large-chat-content.html"> 
                            		<span class="menu-text">Large Chat Content</span> 
                                 </a>   
                            </li>
                            <li> <a href="nav-side-large-email.html"> 
                            		<span class="menu-text">Large Email</span> 
                                 </a>   
                            </li>                                                                                   
                            <li> <a href="nav-side-medium-menu-tab.html"> 
                            		<span class="menu-text">Medium Menu Tab </span>
                                 </a>                                     
                            </li>                            
                            <li> <a href="nav-side-medium-tabs-tab.html"> 
                            		<span class="menu-text">Medium Tabs Tab</span>
                                 </a>                                     
                            </li>
                            <li> <a href="nav-side-medium-profile-tab.html"> 
                            		<span class="menu-text">Medium Profile Tab </span>
									<span class="menu-badge"><span class="badge vd_bg-red">HOT</span></span>     
                                 </a> 
                            </li>
                            <li> <a href="nav-side-medium-no-tab.html"> 
                            		<span class="menu-text">Medium No Tab </span>  
                                 </a> 
                            </li>                            
                            <li> <a href="nav-side-small-menu-tab.html"> 
                            		<span class="menu-text">Small Menu Tab</span>
                             	  </a> 
                            </li>
                            <li> <a href="nav-side-small-tabs-tab.html"> 
                            		<span class="menu-text">Small Tabs Tab</span>
                             	 </a> 
                            </li>
                            <li> <a href="nav-side-small-profile-tab.html"> 
                            		<span class="menu-text">Small Profile Tab</span>
                            	</a> 
                            </li>
                            <li> <a href="nav-side-small-no-tab.html"> 
                            		<span class="menu-text">Small No Tab</span>
                            	</a> 
                            </li>                            
                        </ul>
                    </div>               
                </li>
                <li> 
                	<a href="javascript:" data-action="click-trigger"> 
                    	<span class="menu-text">Top Navigation</span> 
            			<span class="menu-badge"><span class="badge vd_bg-black-30"><i class="fa fa-angle-down"></i></span></span>
                    </a> 
                    <div class="child-menu"   data-action="click-target">
                        <ul class="clearfix">
                            <li> <a href="nav-top-search.html">Search </a> </li>
                            <li> <a href="nav-top-menu.html">Mega Menu </a> </li>
                            <li> <a href="nav-top-clean-style.html"> Clean Style </a> </li>                            
                        </ul>
                    </div>              
                </li>
                <li> 
                	<a href="javascript:" data-action="click-trigger"> 
                    	<span class="menu-text">Bottom Navigation</span> 
            			<span class="menu-badge"><span class="badge vd_bg-black-30"><i class="fa fa-angle-down"></i></span></span>
                    </a> 
                    <div class="child-menu"   data-action="click-target">
                        <ul class="clearfix">
                            <li> <a href="nav-bottom-widget.html"> Chat Widget </a> </li>
                            <li> <a href="nav-bottom-clean-menu.html"> Clean With Menu </a> </li>
                            <li> <a href="nav-bottom-clean-center.html"> Clean Center Text </a> </li>
                        </ul>
                    </div>               
                </li>                                 
            </ul>
      	</div>
    </li>
    <li>
    	<a href="functions-index.html">
        	<span class="menu-icon"><i class="fa fa-code"></i></span> 
            <span class="menu-text">Custom Functions</span>  
            <span class="menu-badge"><span class="badge vd_bg-yellow"><i class="fa fa-star"></i></span></span>
       	</a>
    </li>    
    <li>
    	<a href="javascript:void(0);" data-action="click-trigger">
        	<span class="menu-icon"><i class="fa fa-th-list"></i></span> 
            <span class="menu-text">Forms</span>  
            <span class="menu-badge"><span class="badge vd_bg-black-30"><i class="fa fa-angle-down"></i></span></span>
       	</a>
     	<div class="child-menu"  data-action="click-target">
            <ul>
                <li>
                    <a href="forms-elements.html">
                        <span class="menu-text">Form Elements</span>  
                    </a>
                </li>              
                <li>
                    <a href="forms-layouts.html">
                        <span class="menu-text">Form Layouts</span>  
                    </a>
                </li>                
                <li>
                    <a href="forms-wizard.html">
                        <span class="menu-text">Form Wizard</span>  
                    </a>
                </li> 
                <li>
                    <a href="forms-validation.html">
                        <span class="menu-text">Form Validation</span>  
                    </a>
                </li>                   
                <li>
                    <a href="forms-sliders.html">
                        <span class="menu-text">Form Slider</span>  
                    </a>
                </li>                 
                <li>
                    <a href="forms-multiple-file-upload.html">
                        <span class="menu-text">Form Multiple File Upload</span>  
                    </a>
                </li>                                                                                      
            </ul>   
      	</div>
    </li>  
    <li>
    	<a href="javascript:void(0);" data-action="click-trigger">
        	<span class="menu-icon entypo-icon"><i class="icon-tools"></i></span> 
            <span class="menu-text">UI Elements</span>  
            <span class="menu-badge"><span class="badge vd_bg-black-30"><i class="fa fa-angle-down"></i></span></span>
       	</a>
     	<div class="child-menu"  data-action="click-target">
            <ul>
                <li>
                    <a href="ui-panels.html">
                        <span class="menu-text">Panels</span>  
                    </a>
                </li>    
                <li>
                    <a href="ui-panels-draggable.html">
                        <span class="menu-text">Panels Draggable</span>  
                    </a>
                </li>                              
                <li>
                    <a href="ui-buttons.html">
                        <span class="menu-text">Buttons</span>  
                    </a>
                </li>                
                <li>
                    <a href="ui-typography.html">
                        <span class="menu-text">Typography</span>  
                    </a>
                </li> 
                <li>
                    <a href="ui-icons.html">
                        <span class="menu-text">Icons</span>  
                    </a>
                </li>  
                <li>
                    <a href="ui-tabs-accordion.html">
                        <span class="menu-text">Tabs and Accordion</span>  
                    </a>
                </li>
                <li>
                    <a href="ui-alert-notifications.html">
                        <span class="menu-text">Alert and Notifications</span>  
                    </a>
                </li>                
                <li>
                    <a href="ui-pricing-tables.html">
                        <span class="menu-text">Pricing Tables</span>  
                    </a>
                </li>                                                                                                                                                                              
            </ul>   
      	</div>
    </li>        
    <li>
    	<a href="javascript:void(0);" data-action="click-trigger">
        	<span class="menu-icon"><i class="fa fa-table"></i></span> 
            <span class="menu-text">List &amp; Tables</span>  
            <span class="menu-badge"><span class="badge vd_bg-black-30"><i class="fa fa-angle-down"></i></span></span>
       	</a>
     	<div class="child-menu"  data-action="click-target">
            <ul>
                <li>
                    <a href="listtables-tables-variation.html">
                        <span class="menu-text">Tables Variation</span>  
                    </a>
                </li>              
                <li>
                    <a href="listtables-data-tables.html">
                        <span class="menu-text">Data Tables</span>  
                    </a>
                </li> 
                <li>
                    <a href="listtables-small-list.html">
                        <span class="menu-text">Small List</span>  
                    </a>
                </li>
                <li>
                    <a href="listtables-medium-list.html">
                        <span class="menu-text">Medium List</span>  
                    </a>
                </li>   
                <li>
                    <a href="listtables-blog-small-list.html">
                        <span class="menu-text">Blog Small List</span>  
                    </a>
                </li>
                <li>
                    <a href="listtables-blog-large-list.html">
                        <span class="menu-text">Blog Large List</span>  
                    </a>
                </li>                
                <li>
                    <a href="listtables-grid-list.html">
                        <span class="menu-text">Grid List</span>  
                    </a>
                </li>                                                                                                                                                
            </ul>   
      	</div>
    </li>
        <li>
    	<a href="javascript:void(0);" data-action="click-trigger">
        	<span class="menu-icon"><i class="fa fa-signal"></i></span> 
            <span class="menu-text">Charts</span>  
            <span class="menu-badge"><span class="badge vd_bg-black-30"><i class="fa fa-angle-down"></i></span></span>
       	</a>
     	<div class="child-menu"  data-action="click-target">
            <ul>
                <li>
                    <a href="charts-morris.html">
                        <span class="menu-text">Morris Chart</span>  
                    </a>
                </li>              
                <li>
                    <a href="charts-flot.html">
                        <span class="menu-text">Flot Chart</span>  
                    </a>                
                </li>                                                                                 
                <li>
                    <a href="charts-sparkline.html">
                        <span class="menu-text">Sparkline Chart</span>  
                    </a>
                </li>                 
            </ul>   
      	</div>
    </li>
        <li>
    	<a href="javascript:void(0);" data-action="click-trigger">
        	<span class="menu-icon"><i class="fa fa-map-marker"></i></span> 
            <span class="menu-text">Maps</span>  
            <span class="menu-badge"><span class="badge vd_bg-black-30"><i class="fa fa-angle-down"></i></span></span>
       	</a>
     	<div class="child-menu"  data-action="click-target">
            <ul>
                <li>
                    <a href="maps-vector.html">
                        <span class="menu-text">Vector Map</span>  
                    </a>
                </li>              
                <li>
                    <a href="maps-google.html">
                        <span class="menu-text">Google Map</span>  
                    </a>                
                </li>                                                                                                 
            </ul>   
      	</div>
    </li> 
    <li>
    	<a href="javascript:void(0);" data-action="click-trigger">
        	<span class="menu-icon"><i class="fa fa-picture-o"></i></span> 
            <span class="menu-text">Gallery</span>  
            <span class="menu-badge"><span class="badge vd_bg-black-30"><i class="fa fa-angle-down"></i></span></span>
       	</a>
     	<div class="child-menu"  data-action="click-target">
            <ul>
                <li>
                    <a href="gallery-page.html">
                        <span class="menu-text">Gallery Page</span>  
                    </a>
                </li>   
                <li>
                    <a href="gallery-masonry.html">
                        <span class="menu-text">Gallery Masonry</span>  
                    </a>
                </li>      
                <li>
                    <a href="gallery-text-filter.html">
                        <span class="menu-text">Gallery Text Filter</span>  
                        <span class="menu-badge"><span class="badge vd_bg-red">HOT</span></span>                           
                    </a>
                </li>                                    
            </ul>   
      	</div>
    </li>         
    <li>
    	<a href="javascript:void(0);" data-action="click-trigger">
        	<span class="menu-icon entypo-icon"><i class="icon-newspaper"></i></span> 
            <span class="menu-text">Extra Pages</span>  
            <span class="menu-badge"><span class="badge vd_bg-black-30"><i class="fa fa-angle-down"></i></span></span>
       	</a>
     	<div class="child-menu"  data-action="click-target">
            <ul>
                <li>
                    <a href="pages-custom-product.html">
                        <span class="menu-text">Custom Product Form</span>
                        <span class="menu-badge"><span class="badge vd_bg-red">HOT</span></span>     
                    </a>
                </li> 
                <li>
                    <a href="pages-essay.html">
                        <span class="menu-text">Essay Form</span>  
                    </a>
                </li> 
                <li>
                    <a href="pages-invoice.html">
                        <span class="menu-text">Invoice</span>  
                    </a>
                </li>                 
                <li>
                    <a href="pages-user-profile-form.html">
                        <span class="menu-text">User Profiles Form</span>  
                    </a>
                </li>  
                <li>
                    <a href="pages-user-profile.html">
                        <span class="menu-text">User Profiles Page</span>  
                    </a>
                </li>  
                <li>
                    <a href="pages-timeline.html">
                        <span class="menu-text">Timeline</span>  
                        <span class="menu-badge"><span class="badge vd_bg-yellow">NEW</span></span>                        
                    </a>
                </li>  
                <li>
                    <a href="pages-calendar.html">
                        <span class="menu-text">Calendar</span>  
                        <span class="menu-badge"><span class="badge vd_bg-yellow">NEW</span></span>                        
                    </a>
                </li>                                                                                                                                          
                <li>
                    <a href="pages-login.html">
                        <span class="menu-text">Login Page</span>  
                    </a>
                </li>
                <li>
                    <a href="pages-forget-password.html">
                        <span class="menu-text">Forget Password Page</span>  
                    </a>
                </li>                
                <li>
                    <a href="pages-register.html">
                        <span class="menu-text">Register Page</span>  
                    </a>
                </li>  
                <li>
                    <a href="pages-logout.html">
                        <span class="menu-text">Log Out Page</span>  
                    </a>
                </li> 
                <li>
                    <a href="pages-lockscreen.html">
                        <span class="menu-text">Lock Screen</span>  
                        <span class="menu-badge"><span class="badge vd_bg-yellow">NEW</span></span>                        
                    </a>
                </li>                                              
                <li>
                    <a href="pages-404-error.html">
                        <span class="menu-text">404 Error</span>  
                    </a>
                </li>
                <li>
                    <a href="pages-500-error.html">
                        <span class="menu-text">500 Error</span>  
                    </a>
                </li>
                                                                                                                              
            </ul>   
      	</div>
    </li>  
    <li>
    	<a href="javascript:void(0);" data-action="click-trigger">
        	<span class="menu-icon"><i class="fa fa-desktop"></i></span> 
            <span class="menu-text">Front End</span>  
            <span class="menu-badge"><span class="badge vd_bg-black-30"><i class="fa fa-angle-down"></i></span></span>            
       	</a>
     	<div class="child-menu"  data-action="click-target">
            <ul>
                <li>
                    <a href="front-1.html">
                        <span class="menu-text">Flat Theme</span>  
                    </a>
                </li> 
                <li>
                    <a href="front-2.html">
                        <span class="menu-text">Layer Slider</span>  
                    </a>
                </li>
                <li>
                    <a href="front-blog.html">
                        <span class="menu-text">Front Blog</span>  
                    </a>
                </li>     
                <li>
                    <a href="front-blog-content.html">
                        <span class="menu-text">Front Blog Content</span>  
                    </a>
                </li>                                                                                                                       
            </ul>   
      	</div>        
    </li>  
    <li>
    	<a href="#">
        	<span class="menu-icon"><i class="fa fa-shopping-cart"></i></span> 
            <span class="menu-text">Buy This Theme</span>  
            <span class="menu-badge"><span class="badge vd_bg-red"><i class="fa fa-exclamation"></i></span></span>
       	</a>
    </li>   
                 
</ul>
<!-- Head menu search form ends -->         </div>             
    </div>
    <div class="navbar-spacing clearfix">
    </div>
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
</div>    <div class="vd_navbar vd_nav-width vd_navbar-chat vd_bg-black-80 vd_navbar-right   ">
	<div class="navbar-tabs-menu clearfix">
			<span class="expand-menu" data-action="expand-navbar-tabs-menu">
            	<span class="menu-icon menu-icon-left">
            		<i class="fa fa-ellipsis-h"></i>
                    <span class="badge vd_bg-red">
                        20
                    </span>                    
                </span>
            	<span class="menu-icon menu-icon-right">
            		<i class="fa fa-ellipsis-h"></i>
                    <span class="badge vd_bg-red">
                        20
                    </span>                    
                </span>                
            </span>  
            <div class="menu-container">               
        		 <div class="navbar-search-wrapper">
    <div class="navbar-search vd_bg-black-30">
        <span class="append-icon"><i class="fa fa-search"></i></span>
        <input type="text" placeholder="Search" class="vd_menu-search-text no-bg no-bd vd_white width-70" name="search">
        <div class="pull-right search-config">                                
            <a  data-toggle="dropdown" href="javascript:void(0);" class="dropdown-toggle" ><span class="prepend-icon vd_grey"><i class="fa fa-cog"></i></span></a>
            <ul role="menu" class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>                                    
        </div>
    </div>
</div>  
            </div>        
                                                 
    </div>
	<div class="navbar-menu clearfix">
    	<div class="content-list content-image content-chat">
            <ul class="list-wrapper no-bd-btm pd-lr-10">
                <li class="group-heading vd_bg-black-20">FAVORITE</li>
                <li>  
                    <a href="#"> 
                            <div class="menu-icon"><img src="{{ asset('img/avatar/avatar.jpg') }}" alt="example image"></div> 
                            <div class="menu-text">Jessylin
                                <div class="menu-info">
                                    <span class="menu-date">Administrator </span>                                                         
                                </div>
                            </div>
                            <div class="menu-badge"><span class="badge status vd_bg-green">&nbsp;</span></div> 
                    </a>
                </li>
                <li>  
                    <a href="#"> 
                            <div class="menu-icon"><img src="{{ asset('img/avatar/avatar-2.jpg') }}" alt="example image"></div> 
                            <div class="menu-text">Rodney Mc.Cardo
                                <div class="menu-info">
                                    <span class="menu-date">Designer </span>                                                         
                                </div>
                            </div>
                            <div class="menu-badge"><span class="badge status vd_bg-grey">&nbsp;</span></div> 
                    </a>
                </li>
                <li>  
                    <a href="#"> 
                            <div class="menu-icon"><img src="{{ asset('img/avatar/avatar-3.jpg') }}" alt="example image"></div> 
                            <div class="menu-text">Theresia Minoque
                                <div class="menu-info">
                                    <span class="menu-date">Engineering </span>                                                         
                                </div>
                            </div>
                            <div class="menu-badge"><span class="badge status vd_bg-green">&nbsp;</span></div> 
                    </a>
                </li>
                <li class="group-heading vd_bg-black-20">FRIENDS</li>                                                                                                                                 
                <li>  
                    <a href="#"> 
                            <div class="menu-icon"><img src="{{ asset('img/avatar/avatar-4.jpg') }}" alt="example image"></div> 
                            <div class="menu-text">Greg Grog
                                <div class="menu-info">
                                    <span class="menu-date">Developer </span>                                                         
                                </div>
                            </div>
                            <div class="menu-badge"><span class="badge status vd_bg-grey">&nbsp;</span></div> 
                    </a>
                </li> 
                <li>  
                    <a href="#"> 
                            <div class="menu-icon"><img src="{{ asset('img/avatar/avatar-5.jpg') }}" alt="example image"></div> 
                            <div class="menu-text">Stefanie Imburgh
                                <div class="menu-info">
                                    <span class="menu-date">Dancer</span>                                                         
                                </div>
                            </div>
                            <div class="menu-badge"><span class="vd_grey font-sm"><i class="fa fa-mobile"></i></span></div> 
                    </a>
                </li> 
                <li>  
                    <a href="#"> 
                            <div class="menu-icon"><img src="{{ asset('img/avatar/avatar-6.jpg') }}" alt="example image"></div> 
                            <div class="menu-text">Matt Demon
                                <div class="menu-info">
                                    <span class="menu-date">Musician </span>                                                         
                                </div>
                            </div>
                            <div class="menu-badge"><span class="vd_grey font-sm"><i class="fa fa-mobile"></i></span></div> 
                    </a>
                </li>
                <li>  
                    <a href="#"> 
                            <div class="menu-icon"><img src="{{ asset('img/avatar/avatar-7.jpg') }}" alt="example image"></div> 
                            <div class="menu-text">Jeniffer Anastasia
                                <div class="menu-info">
                                    <span class="menu-date">Senior Developer </span>                                                         
                                </div>
                            </div>
                            <div class="menu-badge"><span class="badge status vd_bg-green">&nbsp;</span></div> 
                    </a>
                </li>                    
                <li>  
                    <a href="#"> 
                            <div class="menu-icon"><img src="{{ asset('img/avatar/avatar-8.jpg') }}" alt="example image"></div> 
                            <div class="menu-text">Daniel Dreamon
                                <div class="menu-info">
                                    <span class="menu-date">Sales Executive </span>                                                         
                                </div>
                            </div>
                            <div class="menu-badge"><span class="badge status vd_bg-green">&nbsp;</span></div> 
                    </a>
                </li> 

            </ul>
        </div>

            
    </div>
    <div class="navbar-spacing clearfix">
    </div>
</div>    
    <!-- Middle Content Start -->
    
    <div class="vd_content-wrapper">

        @yield('content')
    </div>
    <!-- .vd_content-wrapper --> 
    
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
                  	Copyright &copy;2014 Venmond Inc. All Rights Reserved 
                </div>
              </div>
            </div><!-- row -->
        </div><!-- container -->
    </div>
  </footer>
<!-- Footer END -->
  <div class="vd_chat-menu hidden-xs">
      <div class="vd_mega-menu-wrapper">
          <div class="vd_mega-menu">
             <ul class="mega-ul">
    <li class="one-icon mega-li mgl-10"> 
      <a class="mega-link vd_bg-green" href="javascript:void(0);"  data-action="click-trigger">
            <span class="mega-icon">
                <i class="fa fa-cloud"></i>
            </span>
            <span class="badge vd_bg-red">
                10
            </span>
      </a>
      <div class="vd_mega-menu-content width-xs-3 width-sm-5 width-md-6  center-xs-6 open-top" data-action="click-target">
        <div class="child-menu">  
           <div class="title"> 
           	   Server Status
               <div class="vd_panel-menu">
                     <span data-original-title="Find Server" data-toggle="tooltip" data-placement="bottom" class="menu">
                        <i class="fa fa-search"></i>
                    </span>                 
                     <span data-original-title="Message Setting" data-toggle="tooltip" data-placement="bottom" class="menu">
                        <i class="fa fa-cog"></i>
                    </span>                                                                              
                </div>
           </div>                 
		   <div class="content-grid column-md-3 column-sm-2 column-xs-1 height-xs-auto height-sm-4">	
           <div data-rel="scroll">
               <ul class="list-wrapper">
                    <li><a>
           		            <div class="menu-icon">
                				<i class="fa fa-cloud"></i>
           				    </div>
                            <div class="menu-text"> Venmond.com
                            	<div class="menu-info">
                                    <span class="menu-date vd_bg-green badge">Online</span>
                                    <div class="menu-status  text-left">
                                    	<span class="text">Disk Usage</span>
                                        <span class="value pull-right vd_black">4.35/140 GB</span>
                                    </div>
                                    <div class="menu-info">
                                        <div class="progress">
                                            <div style="width:15%" class="progress-bar progress-bar-info"> 
                                            </div>
                                        </div>                                                   
                                    </div>                                     
                                    <div class="menu-status  text-left">
                                    	<span class="text">BW Usage</span>
                                        <span class="value pull-right vd_black">1600/2500 GB</span>
                                    </div>
                                    <div class="menu-info">
                                        <div class="progress">
                                            <div style="width:65%" class="progress-bar  progress-bar-warning"> 
                                            </div>
                                        </div>                                                   
                                    </div>                                                                                                               
                                    <span class="menu-action">
                                        <span class="menu-action-icon vd_green vd_bd-green" data-original-title="Reboot Server" data-toggle="tooltip" data-placement="bottom">
                                            <i class="fa fa-refresh"></i>
                                        </span> 
                                        <span class="menu-action-icon vd_red vd_bd-red" data-original-title="Stop Server" data-toggle="tooltip" data-placement="bottom">
                                            <i class="fa fa-stop"></i>
                                        </span>
                                    </span>                                
                            	</div>
                            </div> 
                    </a></li>
                    <li> <a>
           		            <div class="menu-icon">
                				<i class="fa fa-cloud"></i>
           				    </div>
                            <div class="menu-text"> Venmond.com
                            	<div class="menu-info">
                                    <span class="menu-date vd_bg-grey badge">Offline</span>
                                    <div class="menu-status  text-left">
                                    	<span class="text">Disk Usage</span>
                                        <span class="value pull-right vd_black">4.35/140 GB</span>
                                    </div>
                                    <div class="menu-info">
                                        <div class="progress">
                                            <div style="width:15%" class="progress-bar progress-bar-info"> 
                                            </div>
                                        </div>                                                   
                                    </div>                                     
                                    <div class="menu-status  text-left">
                                    	<span class="text">BW Usage</span>
                                        <span class="value pull-right vd_black">1600/2500 GB</span>
                                    </div>
                                    <div class="menu-info">
                                        <div class="progress">
                                            <div style="width:65%" class="progress-bar  progress-bar-warning"> 
                                            </div>
                                        </div>                                                   
                                    </div>                                                                                                               
                                    <span class="menu-action">
                                        <span class="menu-action-icon vd_green vd_bd-green" data-original-title="Reboot Server" data-toggle="tooltip" data-placement="bottom">
                                            <i class="fa fa-refresh"></i>
                                        </span> 
                                        <span class="menu-action-icon vd_red vd_bd-red" data-original-title="Stop Server" data-toggle="tooltip" data-placement="bottom">
                                            <i class="fa fa-stop"></i>
                                        </span>
                                    </span>                                
                            	</div>
                            </div> 
                    </a></li>
                    <li> <a>
           		            <div class="menu-icon">
                				<i class="fa fa-cloud"></i>
           				    </div>
                            <div class="menu-text"> Venmond.com
                            	<div class="menu-info">
                                    <span class="menu-date vd_bg-grey badge">Offline</span>
                                    <div class="menu-status  text-left">
                                    	<span class="text">Disk Usage</span>
                                        <span class="value pull-right vd_black">4.35/140 GB</span>
                                    </div>
                                    <div class="menu-info">
                                        <div class="progress">
                                            <div style="width:15%" class="progress-bar progress-bar-info"> 
                                            </div>
                                        </div>                                                   
                                    </div>                                     
                                    <div class="menu-status  text-left">
                                    	<span class="text">BW Usage</span>

                                        <span class="value pull-right vd_black">1600/2500 GB</span>
                                    </div>
                                    <div class="menu-info">
                                        <div class="progress">
                                            <div style="width:65%" class="progress-bar  progress-bar-warning"> 
                                            </div>
                                        </div>                                                   
                                    </div>                                                                                                               
                                    <span class="menu-action">
                                        <span class="menu-action-icon vd_green vd_bd-green" data-original-title="Reboot Server" data-toggle="tooltip" data-placement="bottom">
                                            <i class="fa fa-refresh"></i>
                                        </span> 
                                        <span class="menu-action-icon vd_red vd_bd-red" data-original-title="Stop Server" data-toggle="tooltip" data-placement="bottom">
                                            <i class="fa fa-stop"></i>
                                        </span>
                                    </span>                                
                            	</div>
                            </div> 
                    </a></li>
                    <li><a> 
           		            <div class="menu-icon">
                				<i class="fa fa-cloud"></i>
           				    </div>
                            <div class="menu-text"> Venmond.com
                            	<div class="menu-info">
                                    <span class="menu-date vd_bg-grey badge">Offline</span>
                                    <div class="menu-status  text-left">
                                    	<span class="text">Disk Usage</span>
                                        <span class="value pull-right vd_black">4.35/140 GB</span>
                                    </div>
                                    <div class="menu-info">
                                        <div class="progress">
                                            <div style="width:15%" class="progress-bar progress-bar-info"> 
                                            </div>
                                        </div>                                                   
                                    </div>                                     
                                    <div class="menu-status  text-left">
                                    	<span class="text">BW Usage</span>
                                        <span class="value pull-right vd_black">1600/2500 GB</span>
                                    </div>
                                    <div class="menu-info">
                                        <div class="progress">
                                            <div style="width:65%" class="progress-bar  progress-bar-warning"> 
                                            </div>
                                        </div>                                                   
                                    </div>                                                                                                               
                                    <span class="menu-action">
                                        <span class="menu-action-icon vd_green vd_bd-green" data-original-title="Reboot Server" data-toggle="tooltip" data-placement="bottom">
                                            <i class="fa fa-refresh"></i>
                                        </span> 
                                        <span class="menu-action-icon vd_red vd_bd-red" data-original-title="Stop Server" data-toggle="tooltip" data-placement="bottom">
                                            <i class="fa fa-stop"></i>
                                        </span>
                                    </span>                                
                            	</div>
                            </div> 
                    </a></li>                                                                                                                         
                    
               </ul>
               </div> <!-- data-rel="scroll" -->
               <div class="closing text-center" style="">
               		<a href="#">See All Requests <i class="fa fa-angle-double-right"></i></a>
               </div>                                                                       
           </div>                              
        </div> <!-- child-menu -->                      
      </div>   <!-- vd_mega-menu-content --> 
    </li>
    <li class="one-big-icon mega-li mgl-10"> 
        <a class="mega-link" href="javascript:void(0);"   data-action="click-trigger">
            <span class="mega-icon">
                <i class="fa fa-tasks"></i>
            </span>
            <span class="badge vd_bg-red">
                8
            </span>
        </a>
      <div class="vd_mega-menu-content width-xs-3 width-sm-4 width-md-4 center-xs-4 open-top" data-action="click-target">
        <div class="child-menu">  
           <div class="title"> 
           	   You have 8 pending tasks
               <div class="vd_panel-menu">
                     <span data-original-title="Task Setting" data-toggle="tooltip" data-placement="bottom" class="menu">
                        <i class="fa fa-cog"></i>
                    </span>                                                                              
                </div>
           </div>                 
		   <div class="content-list content-image">	
           <div data-rel="scroll">
               <ul class="list-wrapper pd-lr-10">
                    <li> <a href="#"> 
                    		<div class="menu-icon vd_blue"><i class="fa fa-bolt"></i></div> 
                            <div class="menu-text"> Electricity Problem
                            	<div class="menu-info">
                                    <div class="progress progress-sm">
                                        <div style="width:85%" class="progress-bar progress-bar-info"> 
                                        	85%
                                        </div>
                                    </div>                                                                                                    
                            	</div>
                            </div> 
                    </a> </li>
                    <li> <a href="#"> 
                    		<div class="menu-icon vd_yellow"><i class="fa fa-code"></i></div>  
                            <div class="menu-text">  Finish coding jquery plugin
                            	<div class="menu-info">
                                    <div class="progress progress-sm">
                                        <div style="width:20%" class="progress-bar progress-bar-danger"> 
                                        	20%
                                        </div>
                                    </div>                                                                                                    
                            	</div>                           
                            </div> 
                    </a> </li>    
                    <li> <a> 
                    		<div class="menu-icon"><img alt="example image" src="{{ asset('img/avatar/avatar-3.jpg') }}"></div> 
                            <div class="menu-text"> Client: Zoe Project
                            	<div class="menu-info">
                                    <span class="menu-date">Make a call</span>                                                                         
                                    <span class="menu-action">
                                        <span class="menu-action-icon" data-original-title="Call" data-toggle="tooltip" data-placement="bottom">
                                            <i class="fa fa-phone"></i>
                                        </span>                                                                            
                                    </span>                                
                            	</div>                                                     
                            </div> 
                    </a> </li>                                     
                    <li> <a href="#"> 
                    		<div class="menu-icon"><i class=" fa fa-magic"></i></div>  
                            <div class="menu-text">  Final error check on new templates
                            	<div class="menu-info">
                                    <div class="progress progress-sm">
                                        <div style="width:95%" class="progress-bar progress-bar-success"> 
                                        	95%
                                        </div>
                                    </div>                                                                                                    
                            	</div>                           
                            </div> 
                    </a> </li> 
                    <li> <a href="#"> 
                    		<div class="menu-icon vd_green"><i class=" fa fa-camera"></i></div>  
                            <div class="menu-text">  Update product image
                            	<div class="menu-info">
                                    <div class="progress progress-sm">
                                        <div style="width:50%" class="progress-bar progress-bar-warning"> 
                                        	50%
                                        </div>
                                    </div>                                                                                                    
                            	</div>                           
                            </div> 
                    </a> </li>
                    <li> <a href="#"> 
                    		<div class="menu-icon vd_blue"><i class="fa fa-bolt"></i></div> 
                            <div class="menu-text"> Electricity Problem
                            	<div class="menu-info">
                                    <div class="progress progress-sm">
                                        <div style="width:85%" class="progress-bar progress-bar-info"> 
                                        	85%
                                        </div>
                                    </div>                                                                                                    
                            	</div>
                            </div> 
                    </a> </li>
                    <li> <a href="#"> 
                    		<div class="menu-icon vd_yellow"><i class=" fa fa-code"></i></div>  
                            <div class="menu-text">  Finish coding jquery plugin
                            	<div class="menu-info">
                                    <div class="progress progress-sm">
                                        <div style="width:20%" class="progress-bar progress-bar-danger"> 
                                        	20%
                                        </div>
                                    </div>                                                                                                    
                            	</div>                           
                            </div> 
                    </a> </li>    
                    <li> <a> 
                    		<div class="menu-icon"><img alt="example image" src="{{ asset('img/avatar/avatar-3.jpg') }}"></div> 
                            <div class="menu-text"> Client: Zoe Project
                            	<div class="menu-info">
                                    <span class="menu-date">Make a call</span>                                                                         
                                    <span class="menu-action">
                                        <span class="menu-action-icon" data-original-title="Call" data-toggle="tooltip" data-placement="bottom">
                                            <i class="fa fa-phone"></i>
                                        </span>                                                                            
                                    </span>                                
                            	</div>                                                     
                            </div> 
                    </a> </li>                                     
                                                                                                                       
                    
               </ul>
               </div>
               <div class="closing text-center" style="">
               		<a href="#">See All Tasks <i class="fa fa-angle-double-right"></i></a>
               </div>                                                                       
           </div>                              
        </div> <!-- child-menu -->                      
      </div>   <!-- vd_mega-menu-content --> 
    </li>  
    <li class="one-big-icon mega-li mgl-10"> 
      <a href="index.html" class="mega-link" data-action="click-trigger">
    	<span class="mega-icon"><img alt="example image" src="{{ asset('img/avatar/avatar.jpg') }}"></span> 
		<span class="badge vd_bg-red">10</span>        
      </a>
      <div class="vd_mega-menu-content  open-top width-xs-4 width-md-5 width-lg-4 center-xs-4" data-action="click-target">
        <div class="child-menu">  
           <div class="title"> 
           	   Jessyline <i>(online)</i>
               <div class="vd_panel-menu">
                     <div  data-rel="tooltip"  data-original-title="Make a Call" class="menu entypo-icon smaller-font">
                        <i class="icon-phone"></i>
                    </div>               
                     <div  data-rel="tooltip"  data-original-title="Video Call" class="menu">
                        <i class="fa fa-video-camera"></i>
                    </div>               
                     <div  data-rel="tooltip"  data-original-title="Message Setting" class="menu smaller-font entypo-icon">
                        <i class="icon-cog"></i>
                    </div>   
                     <div data-rel="tooltip"  data-original-title="Close" class="menu entypo-icon">
                        <i class="icon-cross"></i>
                    </div>                                                                                                 
                </div>
           </div>                 
		   <div class="content-list content-image content-menu">
           	<div data-rel="scroll">	
               <ul class="list-wrapper pd-lr-10">
                    <li> <a href="#"> 
                    		<div class="menu-icon"><img alt="example image" src="{{ asset('img/avatar/avatar.jpg') }}"></div> 
                            <div class="menu-text"> Do you play or follow any sports?
                            	<div class="menu-info">
                                    <span class="menu-date">12 Minutes Ago </span>                                                                                                        
                            	</div>
                            </div> 
                    </a> </li>
                    <li class="align-right"> <a href="#"> 
                    		<div class="menu-icon"><img alt="example image" src="{{ asset('img/avatar/avatar-2.jpg') }}"></div>  
                            <div class="menu-text">  Good job mate !
                            	<div class="menu-info">
                                    <span class="menu-date">1 Hour 20 Minutes Ago </span>                                                                         
                              
                            	</div>                            
                            </div> 
                    </a> </li>    
                    <li> <a href="#"> 
                    		<div class="menu-icon"><img alt="example image" src="{{ asset('img/avatar/avatar.jpg') }}"></div> 
                            <div class="menu-text">  Just calm down babe, everything will work out.
                            	<div class="menu-info">
                                    <span class="menu-date">12 Days Ago</span>                                                                         
                               
                            	</div>                                                     
                            </div> 
                    </a> </li>                                     
                    <li  class="align-right"> <a href="#"> 
                    		<div class="menu-icon"><img alt="example image" src="{{ asset('img/avatar/avatar-2.jpg') }}"></div> 
                            <div class="menu-text">  Euuh so gross....
                            	<div class="menu-info">
                                    <span class="menu-date">19 Days Ago</span>                                                                         
                               
                            	</div>                                                        
                            </div> 
                    </a> </li> 
                    <li> <a href="#"> 
                    		<div class="menu-icon"><img alt="example image" src="{{ asset('img/avatar/avatar.jpg') }}"></div>  
                            <div class="menu-text">  That's the way.. I like it :D
                            	<div class="menu-info">
                                    <span class="menu-date">20 Days Ago</span>                                                                         
                               
                            	</div>                                                          
                            </div> 
                    </a> </li>
                    <li class="align-right"> <a href="#"> 
                    		<div class="menu-icon"><img alt="example image" src="{{ asset('img/avatar/avatar-2.jpg') }}"></div> 
                            <div class="menu-text">  Oooh don't be shy ;P
                            	<div class="menu-info">
                                    <span class="menu-date">21 Days Ago</span>                                                                                                       
                            	</div>                             
                            </div> 
                    </a> </li>                                     
                    <li> <a href="#"> 
                    		<div class="menu-icon"><img alt="example image" src="{{ asset('img/avatar/avatar.jpg') }}"></div> 
                            <div class="menu-text">  Hello, please call my number..
                            	<div class="menu-info">
                                    <span class="menu-date">24 Days Ago</span>                                                                         
                               
                            	</div>                              
                            </div> 
                    </a> </li> 
                    <li class="align-right"> <a href="#"> 
                    		<div class="menu-icon"><img alt="example image" src="{{ asset('img/avatar/avatar-2.jpg') }}"></div> 
                            <div class="menu-text">  Don't go anywhere, i will be coming soon
                            	<div class="menu-info">
                                    <span class="menu-date">1 Month 2 days Ago</span>                                                                                                      
                            	</div>                              
                            </div> 
                    </a> </li>                                                                                          
                    
               </ul>
               </div>
               <div class="closing chat-area">
               	   <div class="chat-box">
                   	<input type="text" placeholder="chat here.." />
                   </div>
                   <div class="vd_panel-menu">
                         <div  data-rel="tooltip"  data-original-title="Insert Picture" class="menu">
                            <i class="icon-camera"></i>
                        </div>               
                         <div  data-rel="tooltip"  data-original-title="Emoticons" class="menu">
                            <i class="fa fa-smile-o"></i>
                        </div>                                                                                  
                    </div>
               </div>                                                                       
           </div>                              
        </div> <!-- child-menu -->                      
      </div>   <!-- vd_mega-menu-content --> 
    </li>  
    <li class="one-big-icon mega-li mgl-10"> 
      <a href="index.html" class="mega-link" data-action="click-trigger">
    	<span class="mega-icon"><img alt="example image" src="{{ asset('img/avatar/avatar-10.jpg') }}"></span> 
		<span class="badge vd_bg-red">3</span>        
      </a>
      <div class="vd_mega-menu-content  open-top width-xs-4 width-md-5 width-lg-4 center-xs-4" data-action="click-target">
        <div class="child-menu">  
           <div class="title"> 
           	   Jessyline <i>(online)</i>
               <div class="vd_panel-menu">
                     <div  data-rel="tooltip"  data-original-title="Make a Call" class="menu entypo-icon smaller-font">
                        <i class="icon-phone"></i>
                    </div>               
                     <div  data-rel="tooltip"  data-original-title="Video Call" class="menu">
                        <i class="fa fa-video-camera"></i>
                    </div>               
                     <div  data-rel="tooltip"  data-original-title="Message Setting" class="menu smaller-font entypo-icon">
                        <i class="icon-cog"></i>
                    </div>   
                     <div data-rel="tooltip"  data-original-title="Close" class="menu entypo-icon">
                        <i class="icon-cross"></i>
                    </div>                                                                                                 
                </div>
           </div>                 
		   <div class="content-list content-image content-menu">	
           <div   data-rel="scroll">
               <ul class="list-wrapper pd-lr-10" >
                    <li> <a href="#"> 
                    		<div class="menu-icon"><img alt="example image" src="{{ asset('img/avatar/avatar.jpg') }}"></div> 
                            <div class="menu-text"> Do you play or follow any sports?
                            	<div class="menu-info">
                                    <span class="menu-date">12 Minutes Ago </span>                                                                                                        
                            	</div>
                            </div> 
                    </a> </li>
                    <li class="align-right"> <a href="#"> 
                    		<div class="menu-icon"><img alt="example image" src="{{ asset('img/avatar/avatar-2.jpg') }}"></div>  
                            <div class="menu-text">  Good job mate !
                            	<div class="menu-info">
                                    <span class="menu-date">1 Hour 20 Minutes Ago </span>                                                                         
                              
                            	</div>                            
                            </div> 
                    </a> </li>    
                    <li> <a href="#"> 
                    		<div class="menu-icon"><img alt="example image" src="{{ asset('img/avatar/avatar.jpg') }}"></div> 
                            <div class="menu-text">  Just calm down babe, everything will work out.
                            	<div class="menu-info">
                                    <span class="menu-date">12 Days Ago</span>                                                                         
                               
                            	</div>                                                     
                            </div> 
                    </a> </li>                                     
                    <li  class="align-right"> <a href="#"> 
                    		<div class="menu-icon"><img alt="example image" src="{{ asset('img/avatar/avatar-2.jpg') }}"></div> 
                            <div class="menu-text">  Euuh so gross....
                            	<div class="menu-info">
                                    <span class="menu-date">19 Days Ago</span>                                                                         
                               
                            	</div>                                                        
                            </div> 
                    </a> </li> 
                    <li> <a href="#"> 
                    		<div class="menu-icon"><img alt="example image" src="{{ asset('img/avatar/avatar.jpg') }}"></div>  
                            <div class="menu-text">  That's the way.. I like it :D
                            	<div class="menu-info">
                                    <span class="menu-date">20 Days Ago</span>                                                                         
                               
                            	</div>                                                          
                            </div> 
                    </a> </li>
                    <li class="align-right"> <a href="#"> 
                    		<div class="menu-icon"><img alt="example image" src="{{ asset('img/avatar/avatar-2.jpg') }}"></div> 
                            <div class="menu-text">  Oooh don't be shy ;P
                            	<div class="menu-info">
                                    <span class="menu-date">21 Days Ago</span>                                                                                                       
                            	</div>                             
                            </div> 
                    </a> </li>                                     
                    <li> <a href="#"> 
                    		<div class="menu-icon"><img alt="example image" src="{{ asset('img/avatar/avatar.jpg') }}"></div> 
                            <div class="menu-text">  Hello, please call my number..
                            	<div class="menu-info">
                                    <span class="menu-date">24 Days Ago</span>                                                                         
                               
                            	</div>                              
                            </div> 
                    </a> </li> 
                    <li class="align-right"> <a href="#"> 
                    		<div class="menu-icon"><img alt="example image" src="{{ asset('img/avatar/avatar-2.jpg') }}"></div> 
                            <div class="menu-text">  Don't go anywhere, i will be coming soon
                            	<div class="menu-info">
                                    <span class="menu-date">1 Month 2 days Ago</span>                                                                                                      
                            	</div>                              
                            </div> 
                    </a> </li>                                                                                          
                    
               </ul>
               </div>
               <div class="closing chat-area">
               	   <div class="chat-box">
                   	<input type="text" placeholder="chat here.." />
                   </div>
                   <div class="vd_panel-menu">
                         <div  data-rel="tooltip"  data-original-title="Insert Picture" class="menu">
                            <i class="icon-camera"></i>
                        </div>               
                         <div  data-rel="tooltip"  data-original-title="Emoticons" class="menu">
                            <i class="fa fa-smile-o"></i>
                        </div>                                                                                  
                    </div>
               </div>                                                                       
           </div>                              
        </div> <!-- child-menu -->                      
      </div>   <!-- vd_mega-menu-content -->         
    </li>  
     
    <li class="profile mega-li pdlr-15 bordered"> 
        <a class="mega-link" href="#"  data-action="click-trigger"> 
            <span class="menu-name">
                <i class="fa fa-comments append-icon"></i> Chat
            </span>
        </a> 
      <div class="vd_mega-menu-content  width-xs-3  center-xs-3 open-top" data-action="click-target">
        <div class="child-menu"> 
        	<div class="content-list  content-image">
            <div data-rel="scroll">
                <ul class="list-wrapper pd-lr-10">
                    <li>  
                        <a href="#"> 
                                <div class="menu-icon"><img src="{{ asset('img/avatar/avatar.jpg') }}" alt="example image"></div> 
                                <div class="menu-text">Jessylin
	                                <div class="menu-info">
                                    	<span class="menu-date">Administrator </span>                                                         
                            		</div>
                                </div>
                                <div class="menu-badge"><span class="badge status vd_bg-green">&nbsp;</span></div> 
                        </a>
                    </li>
                    <li>  
                        <a href="#"> 
                                <div class="menu-icon"><img src="{{ asset('img/avatar/avatar-2.jpg') }}" alt="example image"></div> 
                                <div class="menu-text">Rodney Mc.Cardo
	                                <div class="menu-info">
                                    	<span class="menu-date">Designer </span>                                                         
                            		</div>
                                </div>
                                <div class="menu-badge"><span class="badge status vd_bg-grey">&nbsp;</span></div> 
                        </a>
                    </li>
                    <li>  
                        <a href="#"> 
                                <div class="menu-icon"><img src="{{ asset('img/avatar/avatar-3.jpg') }}" alt="example image"></div> 
                                <div class="menu-text">Theresia Minoque
	                                <div class="menu-info">
                                    	<span class="menu-date">Engineering </span>                                                         
                            		</div>
                                </div>
                                <div class="menu-badge"><span class="badge status vd_bg-green">&nbsp;</span></div> 
                        </a>
                    </li>
                    <li>  
                        <a href="#"> 
                                <div class="menu-icon"><img src="{{ asset('img/avatar/avatar-4.jpg') }}" alt="example image"></div> 
                                <div class="menu-text">Greg Grog
	                                <div class="menu-info">
                                    	<span class="menu-date">Developer </span>                                                         
                            		</div>
                                </div>
                                <div class="menu-badge"><span class="badge status vd_bg-grey">&nbsp;</span></div> 
                        </a>
                    </li> 
                    <li>  
                        <a href="#"> 
                                <div class="menu-icon"><img src="{{ asset('img/avatar/avatar-5.jpg') }}" alt="example image"></div> 
                                <div class="menu-text">Stefanie Imburgh
	                                <div class="menu-info">
                                    	<span class="menu-date">Dancer</span>                                                         
                            		</div>
                                </div>
                                <div class="menu-badge"><span class="badge status vd_bg-green">&nbsp;</span></div> 
                        </a>
                    </li> 
                    <li>  
                        <a href="#"> 
                                <div class="menu-icon"><img src="{{ asset('img/avatar/avatar-6.jpg') }}" alt="example image"></div> 
                                <div class="menu-text">Matt Demon
	                                <div class="menu-info">
                                    	<span class="menu-date">Musician </span>                                                         
                            		</div>
                                </div>
                                <div class="menu-badge"><span class="badge status vd_bg-green">&nbsp;</span></div> 
                        </a>
                    </li>
                    <li>  
                        <a href="#"> 
                                <div class="menu-icon"><img src="{{ asset('img/avatar/avatar-7.jpg') }}" alt="example image"></div> 
                                <div class="menu-text">Jeniffer Anastasia
	                                <div class="menu-info">
                                    	<span class="menu-date">Senior Developer </span>                                                         
                            		</div>
                                </div>
                                <div class="menu-badge"><span class="badge status vd_bg-green">&nbsp;</span></div> 
                        </a>
                    </li>                    
                    <li>  
                        <a href="#"> 
                                <div class="menu-icon"><img src="{{ asset('img/avatar/avatar-8.jpg') }}" alt="example image"></div> 
                                <div class="menu-text">Daniel Dreamon
	                                <div class="menu-info">
                                    	<span class="menu-date">Sales Executive </span>                                                         
                            		</div>
                                </div>
                                <div class="menu-badge"><span class="badge status vd_bg-green">&nbsp;</span></div> 
                        </a>
                    </li>                                                                                                                  
                </ul>
                </div>
            </div> 
        </div> 
      </div>     
  
    </li>  
    <li class="profile border-left mega-li"> 
        <a class="mega-link pd-10" href="javascript:void(0);" data-action="chat-close"> 
            <span class="mega-icon">
                <i class="fa fa-sign-out"></i>
            </span>
        </a> 
    </li>                      
</ul>
<!-- Head menu search form ends -->  
          </div>   
      </div>      
  </div>

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
<script type="text/javascript" src="custom/custom.js') }}"></script>
 
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

<script type="text/javascript">
$(window).load(function() 
	{
		"use strict";

		$(window).on("resize", function(){
			plot.resize();
			plot.setupGrid();
			plot.draw();
		});
				

		$.fn.UseTooltip = function () {
			var previousPoint = null;
			 
			$(this).bind("plothover", function (event, pos, item) {        
					if (item) {
						if (previousPoint != item.dataIndex) {
		
							previousPoint = item.dataIndex;
		
							$("#tooltip").remove();
							var x = item.datapoint[0].toFixed(2),
							y = item.datapoint[1].toFixed(2);
		
							showTooltip(item.pageX, item.pageY,
								"<p class='vd_bg-green'><strong class='mgr-10 mgl-10'>" + Math.round(x)  + " NOV 2013 </strong></p>" +
								"<div style='padding: 0 10px 10px;'>" +
								"<div>" + item.series.label +": <strong>"+ Math.round(y)  +"</strong></div>" +
								"<div> Profit: <strong>$"+ Math.round(y)*7  +"</strong></div>" +
								"</div>"
							);
						}
					} else {
						$("#tooltip").remove();
						previousPoint = null;            
					}
			});
		};
		 
		function showTooltip(x, y, contents) {
			$('<div id="tooltip">' + contents + '</div>').css({
				position: 'absolute',
				display: 'none',
				top: y + 5,
				left: x + 20,    
				size: '10',  
//				'border-top' : '3px solid #1FAE66',
				'background-color': '#111111',
				color: "#FFFFFF",
				opacity: 0.85
			}).appendTo("body").fadeIn(200);
		}


/* REVENUE LINE CHART */

	var d2 = [ [1, 250],
            [2, 150],
            [3, 50],
            [4, 200],
            [5,50],
            [6, 150],
            [7, 150],
            [8, 200],
            [9, 100],
            [10, 250],
            [11,250],
            [12, 200],
            [13, 300]			

];
	var d1 = [
			[1, 650],
            [2, 550],
            [3, 450],
            [4, 550],
            [5, 350],
            [6, 500],
            [7, 600],
            [8, 450],
            [9, 300],
            [10, 600],
            [11, 400],
            [12, 500],
            [13, 700]					
			
];
	var plot = $.plotAnimator($("#revenue-line-chart"), [
			{  	label: "Revenue",
				data: d2, 	
				lines: {				
					fill: 0.4,
					lineWidth: 0,				
				},
				color:['#f2be3e']
			},{ 
				data: d1, 
				animator: {steps: 60, duration: 1000, start:0}, 		
				lines: {lineWidth:2},	
				shadowSize:0,
				color: '#F85D2C'
			},{
				label: "Revenue",
				data: d1, 
				points: { show: true, fill: true, radius:6,fillColor:"#F85D2C",lineWidth:3 },	
				color: '#fff',				
				shadowSize:0
			},
			{	label: "Cost",
				data: d2, 
				points: { show: true, fill: true, radius:6,fillColor:"#f2be3e",lineWidth:3 },	
				color: '#fff',				
				shadowSize:0
			}
		],{	xaxis: {
		tickLength: 0,
		tickDecimals: 0,
		min:2,

				font :{
					lineHeight: 13,
					style: "normal",
					weight: "bold",
					family: "sans-serif",
					variant: "small-caps",
					color: "#6F7B8A"
				}
			},
			yaxis: {
				ticks: 3,
                tickDecimals: 0,
				tickColor: "#f0f0f0",
				font :{
					lineHeight: 13,
					style: "normal",
					weight: "bold",
					family: "sans-serif",
					variant: "small-caps",
					color: "#6F7B8A"
				}
			},
			grid: {
				backgroundColor: { colors: [ "#fff", "#fff" ] },
				borderWidth:1,borderColor:"#f0f0f0",
				margin:0,
				minBorderMargin:0,							
				labelMargin:20,
				hoverable: true,
				clickable: true,
				mouseActiveRadius:6
			},
			legend: { show: false}
		});

 		$("#revenue-line-chart").UseTooltip();		



/* REVENUE DONUT CHART */
	
		var data2 = [],
			series = 3;
		var data2 = [
			{ label: "Men",  data: 35},
			{ label: "Women",  data: 65}
		];
		var revenue_donut_chart = $("#revenue-donut-chart");
		
		$("#revenue-donut-chart").bind("plotclick", function (event, pos, item) {
			if (item) {
				$("#clickdata").text(" - click point " + item.dataIndex + " in " + item.series.label);
				plot.highlight(item.series, item.datapoint);
			}
		});
		$.plot(revenue_donut_chart, data2, {
			series: {
				pie: { 
					innerRadius: 0.4,
					show: true
				}
			},
			grid: {
				hoverable: true,
				clickable: true,
			},
			colors: ["#1FAE66", "#F85D2C "]				
		});
		
		
/* REVENUE BAR CHART */	
	
		var bar_chart_data = [ ["Jan", 10], ["Feb", 8], ["Mar", 4], ["Apr", 13], ["May", 17], ["Jun", 9], ["Jul", 10], ["Aug", 8], ["Sep", 4], ["Oct", 13], ["Nov", 17], ["Dec", 9] ];
		
        var bar_chart = $.plot(
        $("#revenue-bar-chart"), [{
            data: bar_chart_data,
 //           color: "rgba(31,174,102, 0.8)",
 			color: "#F85D2C" ,
            shadowSize: 0,
            bars: {
                show: true,
                lineWidth: 0,
                fill: true,
                fillColor: {
                    colors: [{
                        opacity: 1
                    }, {
                        opacity: 1
                    }]
                }
            }
        }], {
            series: {
                bars: {
                    show: true,
                    barWidth: 0.9,
					align: "center"
                }
            },
            grid: {
                show: true,
                hoverable: true,
                borderWidth: 0
            },
            yaxis: {
                min: 0,
                max: 20,
				show: false
            },
			xaxis: {
				mode: "categories",
				tickLength: 0,
				color: "#FFFFFF",				
			}			
        });
		
	   var previousPoint2 = null;
       $("#revenue-bar-chart").bind("plothover", function (event, pos, item) {
            $("#x").text(pos.x.toFixed(2));
            $("#y").text(pos.y.toFixed(2));
            if (item) {
                if (previousPoint2 != item.dataIndex) {
                    previousPoint2 = item.dataIndex;
                    $("#tooltip").remove();
                    var x = item.datapoint[0] + 1,
                        y = item.datapoint[1].toFixed(2);
                    showTooltip(item.pageX, item.pageY, 
								"<p class='vd_bg-green'><strong class='mgr-10 mgl-10'>" + x + " - 2013 </strong></p>" +
								"<div style='padding: 0 10px 10px;'>" +
								"<div> Sales: <strong>"+ Math.round(y)*17  +"</strong></div>" +
								"<div> Profit: <strong>$"+ Math.round(y)*280  +"</strong></div>" +
								"</div>"										
					);
                }
            }
        });

        $('#revenue-bar-chart').bind("mouseleave", function () {
            $("#tooltip").remove();
        });



/* PIE CHART */

		var pie_placeholder = $("#pie-chart");

		var pie_data = [];
		
		pie_data[0] = {
			label: "IE",
			data: 10
		}
		pie_data[1] = {
			label: "Safari",
			data: 8
		}	
		pie_data[2] = {
			label: "Opera",
			data: 8
		}				
		pie_data[3] = {
			label: "Chrome",
			data: 13
		}	
		pie_data[4] = {
			label: "Firefox",
			data: 17
		}	
		pie_data[5] = {
			label: "Other",
			data: 3
		}					
		$.plot(pie_placeholder, pie_data, {
			series: {
				pie: { 
					show: true,
					label:{
						show: true,
						radius: .5,
						formatter: labelFormatter,
						background: {
							opacity: 0
						}
					},

				}
			},
			grid: {
				hoverable: true,
				clickable: true
			},
			colors: ["#FCB660", "#ce91db", "#56A2CF", "#52D793", "#FC8660", "#CCCCCC"]
		});

		pie_placeholder.bind("plothover", function(event, pos, obj) {
			if (!obj) {
				return;
			}
			var percent = parseFloat(obj.series.percent).toFixed(2);
			$("#hover").html("<span style='font-weight:bold; color:" + obj.series.color + "'>" + obj.series.label + " (" + percent + "%)</span>");
		});

		pie_placeholder.bind("plotclick", function(event, pos, obj) {
			if (!obj) {
				return;
			}
			percent = parseFloat(obj.series.percent).toFixed(2);
			alert(""  + obj.series.label + ": " + percent + "%");
		});

	function labelFormatter(label, series) {
		return "<div style='font-size:8pt; text-align:center; padding:2px; color:white;'>" + label + "<br/>" + Math.round(series.percent) + "%</div>";
	}
		


var cityAreaData = [
        500.70,
        410.16,
        210.69,
        120.17,
        64.31,
        150.35,
        130.22,
        120.71,
        100.32
      ]
$('#map1').vectorMap({
   map: 'world_mill_en',
    scaleColors: ['#C8EEFF', '#0071A4'],
    normalizeFunction: 'polynomial',
    focusOn:{
		  x: 5,
		  y: 0.56,
		  scale: 1.7
	},
	zoomOnScroll:false,
	zoomMin:0.85,
    hoverColor: false,
	regionStyle:{
		  initial: {
			fill: '#abe7c8',
			"fill-opacity": 1,
			stroke: '#abe7c8',
			"stroke-width": 0,
			"stroke-opacity": 0
		  },
		  hover: {
			"fill-opacity": 0.8
		  },
		  selected: {
			fill: 'yellow'
		  },
		  selectedHover: {
		  }
		},
    markerStyle: {
		  initial: {
			fill: '#F85D2C',
			stroke: '#F85D2C',
			"fill-opacity": 0.9,
			"stroke-width": 10,
			"stroke-opacity": 0.5,
			r: 3
		  },
		  hover: {
			stroke: '#F85D2C',
			"stroke-width": 14
		  },
		  selected: {
			fill: 'blue'
		  },
		  selectedHover: {
		  }
		},
    backgroundColor: '#ffffff',
     markers :[
  		{latLng: [50, 0], name: 'France - 43145 views'},	 
  		{latLng: [0, 120], name: 'Indonesia - 145 views'},
  		{latLng: [-25, 130], name: 'Australia - 486 views'},	
  		{latLng: [0, 20], name: 'Africa - 12 views'},	
  		{latLng: [35, 100], name: 'China - 7890 views'},	
  		{latLng: [46, 105], name: 'Mongolia - 2123 views'},	
  		{latLng: [40, 70], name: 'Kyrgiztan - 87456 views'},	
  		{latLng: [58, 50], name: 'Russia - 4905 views'},
		{latLng: [35, 135], name: 'Japan - 87456 views'}																		
      ],
	series: {
      markers: [{
        attribute: 'r',
        scale: [3, 7],
        values: cityAreaData
      }]
    },
  });	  


/* REAL TIME CHART */
	  
		var data = [],
			totalPoints = 300;

		function getRandomData() {

			if (data.length > 0)
				data = data.slice(1);

			// Do a random walk

			while (data.length < totalPoints) {

				var prev = data.length > 0 ? data[data.length - 1] : 50,
					y = prev + Math.random() * 10 - 5;

				if (y < 0) {
					y = 0;
				} else if (y > 100) {
					y = 100;
				}

				data.push(y);
			}

			// Zip the generated y values with the x values

			var res = [];
			for (var i = 0; i < data.length; ++i) {
				res.push([i, data[i]])
			}

			return res;
		}

		// Set up the control widget

		var updateInterval = 30;
		$("#updateInterval").val(updateInterval).change(function () {
			var v = $(this).val();
			if (v && !isNaN(+v)) {
				updateInterval = +v;
				if (updateInterval < 1) {
					updateInterval = 1;
				} else if (updateInterval > 2000) {
					updateInterval = 2000;
				}
				$(this).val("" + updateInterval);
			}
		});

		var realtime_chart = $.plot("#realtime-chart", [ getRandomData() ], {
			series: {
				shadowSize: 0,	// Drawing is faster without shadows
				lines: {
					fill: true,
					fillColor: "#ffe29c",
				},
				color: "#ffe29c", 
			},
			yaxis: {
				min: 0,
				max: 100
			},
			xaxis: {
				show: false
			},
			grid: {
				borderWidth: 0
			},
			
		});

		function update() {
			realtime_chart .setData([getRandomData()]);

			// Since the axes don't change, we don't need to call plot.setupGrid()
			realtime_chart .draw();
			setTimeout(update, updateInterval);
		}

		update();


/* FULL CALENDAR  */
		
		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();
		
		$('#calendar').fullCalendar({
			header: {
				left:   'title',
				center: '',
				right:  'today prev,next'
			},
			editable: true,
			events: [
				{
					title: 'All Day Event',
					start: new Date(y, m, 1)
				},
				{
					title: 'Long Event',
					start: new Date(y, m, d-5),
					end: new Date(y, m, d-2)
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: new Date(y, m, d-3, 16, 0),
					allDay: false
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: new Date(y, m, d+4, 16, 0),
					allDay: false
				},
				{
					title: 'Meeting',
					start: new Date(y, m, d, 10, 30),
					allDay: false
				},
				{
					title: 'Lunch',
					start: new Date(y, m, d, 12, 0),
					end: new Date(y, m, d, 14, 0),
					allDay: false
				},
				{
					title: 'Birthday Party',
					start: new Date(y, m, d+1, 19, 0),
					end: new Date(y, m, d+1, 22, 30),
					allDay: false
				},
				{
					title: 'Click for Google',
					start: new Date(y, m, 28),
					end: new Date(y, m, 29),
					url: 'http://google.com/'
				}
			]
		});
		

// Skycons

      var icons = new Skycons({"color": "white","resizeClear": true}),
	  	  icons_btm = new Skycons({"color": "#F89C2C","resizeClear": true}),
          list  = "clear-day",
		  livd_btm = ["rain", "wind"
		  ];
		  icons.set(list,list)
      for(var i = livd_btm.length; i--; )
        icons_btm.set(livd_btm[i], livd_btm[i]);

      icons.play();
	  icons_btm.play();

/* News Widget */
	   $(".vd_news-widget .vd_carousel").carouFredSel({
			prev:{
				button : function()
				{
					return $(this).parent().parent().children('.vd_carousel-control').children('a:first-child')
				}
			},
			next:{
				button : function()
				{
					return $(this).parent().parent().children('.vd_carousel-control').children('a:last-child')
				}
			},		
			scroll: {
				fx: "crossfade",
				onBefore: function(){
						var target = "#front-1-clients";
						$(target).css("transition","all .5s ease-in-out 0s");				
					if ($(target).hasClass("vd_bg-soft-yellow")){						
						$(target).removeClass("vd_bg-soft-yellow");
						$(target).addClass("vd_bg-soft-red");		
					} else
					if ($(target).hasClass("vd_bg-soft-red")){						
						$(target).removeClass("vd_bg-soft-red");
						$(target).addClass("vd_bg-soft-blue");		
					} else
					if ($(target).hasClass("vd_bg-soft-blue")){						
						$(target).removeClass("vd_bg-soft-blue");
						$(target).addClass("vd_bg-soft-green");		
					} else
					if ($(target).hasClass("vd_bg-soft-green")){						
						$(target).removeClass("vd_bg-soft-green");
						$(target).addClass("vd_bg-soft-yellow");		
					} 					
				}
			},
			width: "auto",
			height: "responsive",
			responsive: true,
			auto:3000
			
		});



	// Notification
	  setTimeout(function() { notification("topright","notify","fa fa-exclamation-triangle vd_yellow","Welcome to Vendroid","Click on <i class='fa fa-question-circle vd_red'></i> Question Mark beside filter to take a view layout tour guide"); },1500)	 ; 
	  
	  

});
</script>
<!-- Specific Page Scripts END -->
</body>
</html>