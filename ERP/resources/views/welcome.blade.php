<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
        <link rel="shortcut icon" href="{{('frontend/images/favicon_1.ico')}}">
        
        <title>Discover US ERP</title>

        <!-- Base Css Files -->
        <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet" />

        <!-- Font Icons -->
        <link href="{{asset('frontend/assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
        <link href="{{asset('frontend/assets/ionicon/css/ionicons.min.css')}}" rel="stylesheet" />
        <link href="{{asset('frontend/css/material-design-iconic-font.min.css')}}" rel="stylesheet">

        <!-- animate css -->
        <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet" />

        <!-- Waves-effect -->
        <link href="{{asset('frontend/css/waves-effect.css')}}" rel="stylesheet">

        <!-- sweet alerts -->
        <link href="{{asset('frontend/assets/sweet-alert/sweet-alert.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" />

        <!-- Custom Files -->
        <link href="{{asset('frontend/css/helper.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet" type="text/css" />
        <script src="{{asset('frontend/js/modernizr.min.js')}}"></script>
        
    </head>
    <body>
 
    <body class="fixed-left">
        
        <!-- Begin page -->
        <div id="wrapper">
        
            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="#" class="logo"><i class="md md-terrain"></i> <span>Discover</span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>
                            <form class="navbar-form pull-left" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control search-bar" placeholder="Type here for search...">
                                </div>
                                <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                            </form>

                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="dropdown hidden-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                        <i class="md md-notifications"></i> <span class="badge badge-xs badge-danger">1</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-lg">
                                        <li class="text-center notifi-title">Notification</li>
                                        <li class="list-group">
                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left">
                                                    <em class="fa fa-user-plus fa-2x text-info"></em>
                                                 </div>
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">New user registered</div>
                                                    <p class="m-0">
                                                       <small>You have 10 unread messages</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>
                                           <!-- list item-->
                                            
                                            
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <small>See all notifications</small>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="md md-crop-free"></i></a>
                                </li>
                               
                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="{{asset('frontend/images/avatar-1.jpg')}}" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile</a></li>
                                        <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                                        <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                                        <li><a href="javascript:void(0)"><i class="md md-settings-power"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                   
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="{{route('dashboard')}}" class="waves-effect active"><i class="md md-home"></i><span> Dashboard </span></a>
                            </li>

                            <li>
                                <a href="calendar.html" class="waves-effect"><i class="md  md-payment"></i><span>Account</span></a>
                            </li>
                            <li>
                                <a href="calendar.html" class="waves-effect"><i class="md-person-add"></i><span>Add User</span></a>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md  md-local-parking"></i> <span>Product/item&Others</span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('category')}}">Category</a></li>
                                    <li><a href="{{route('brand')}}">Brands</a></li>
                                    <li><a href="{{route('product')}}">Products</a></li>
                                    <li><a href="checkbox-radio.html">Suppliar</a></li>
                                    <li><a href="modals.html">Purchase</a></li>
                                    <li><a href="modals.html">Stock</a></li>

                                    
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="ion-cash"></i><span>Suppliers Due Payment</span></a>
                              
                            </li>
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md  md-assignment"></i><span> Report </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="grid.html">Grid</a></li>
                                    <li><a href="portlets.html">Portlets</a></li>
                                    <li><a href="widgets.html">Widgets</a></li>
                                    <li><a href="nestable-list.html">Nesteble</a></li>
                                    <li><a href="ui-sliders.html">Sliders </a></li>
                                    <li><a href="gallery.html">Gallery </a></li>
                                    <li><a href="pricing.html">Pricing Table </a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md  md-person-add"></i><span> HR Management </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="grid.html">Grid</a></li>
                                    <li><a href="portlets.html">Portlets</a></li>
                                    <li><a href="widgets.html">Widgets</a></li>
                                    <li><a href="nestable-list.html">Nesteble</a></li>
                                    <li><a href="ui-sliders.html">Sliders </a></li>
                                    <li><a href="gallery.html">Gallery </a></li>
                                    <li><a href="pricing.html">Pricing Table </a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md   md-person-add"></i><span> Staff Management </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                <li><a href=" ">Create new staff</a></li>
                                    <li><a href=" ">View staff list</a></li>
                                    <li><a href="widgets.html">Widgets</a></li>
                                    <li><a href="nestable-list.html">Nesteble</a></li>
                                    <li><a href="ui-sliders.html">Sliders </a></li>
                                    <li><a href="gallery.html">Gallery </a></li>
                                    <li><a href="pricing.html">Pricing Table </a></li>
                                </ul>
                            </li>

                            <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
             
            <!-- Left Sidebar End --> 
         
<div>
<main class="py-4">
@yield('content')
</main>
</div>
        
  

<footer class="footer text-right">
                    2021© Discover.
                </footer>
    <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{('frontend/js/jquery.min.js')}}"></script>
        <script src="{{('frontend/js/bootstrap.min.js')}}"></script>
        <script src="{{('frontend/js/waves.js')}}"></script>
        <script src="{{('frontend/js/wow.min.js')}}"></script>
        <script src="{{('frontend/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
        <script src="{{('frontend/js/jquery.scrollTo.min.js')}}"></script>
        <script src="{{('frontend/assets/chat/moment-2.2.1.js')}}"></script>
        <script src="{{('frontend/assets/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
        <script src="{{('frontend/assets/jquery-detectmobile/detect.js')}}"></script>
        <script src="{{('frontend/assets/fastclick/fastclick.js')}}"></script>
        <script src="{{('frontend/assets/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
        <script src="{{('frontend/assets/jquery-blockui/jquery.blockUI.js')}}"></script>

       

        <!-- flot Chart -->
        <script src="{{('frontend/assets/flot-chart/jquery.flot.js')}}"></script>
        <script src="{{('frontend/assets/flot-chart/jquery.flot.time.js')}}"></script>
        <script src="{{('frontend/assets/flot-chart/jquery.flot.tooltip.min.js')}}"></script>
        <script src="{{('frontend/assets/flot-chart/jquery.flot.resize.js')}}"></script>
        <script src="{{('frontend/assets/flot-chart/jquery.flot.pie.js')}}"></script>
        <script src="{{('frontend/assets/flot-chart/jquery.flot.selection.js')}}"></script>
        <script src="{{('frontend/assets/flot-chart/jquery.flot.stack.js')}}"></script>
        <script src="{{('frontend/assets/flot-chart/jquery.flot.crosshair.js')}}"></script>

        <!-- Counter-up -->
        <script src="{{('frontend/assets/counterup/waypoints.min.js')}}" type="text/javascript"></script>
        <script src="{{('frontend/assets/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
        
        <!-- CUSTOM JS -->
        <script src="{{('frontend/js/jquery.app.js')}}"></script>

        <!-- Dashboard -->
        <script src="{{('frontend/js/jquery.dashboard.js')}}"></script>

        <!-- Chat -->
        <script src="{{('frontend/js/jquery.chat.js')}}"></script>

        <!-- Todo -->
        <script src="{{('frontend/js/jquery.todo.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
        <script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.min.js"></script>
        <script type="text/javascript">
            /* ==============================================
            Counter Up
            =============================================== */
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>

<script>
@if(Session::has('messege'))
var type="{{Session::get('alert-type','info')}}"
switch(type){
  case 'info':
  toastr.info("{{Session::get('messege')}}");
  break;
  case 'success':
  toastr.success("{{Session::get('messege')}}");
  break;
  case 'warning':
  toastr.warning("{{Session::get('messege')}}");
  break;
  case 'error':
  toastr.error("{{Session::get('messege')}}");
  break;
}
@endif
</script>
<script>  
         $(document).on("click", "#delete", function(e){
             e.preventDefault();
             var link = $(this).attr("href");
                swal({
                  title: "Are you Want to delete?",
                  text: "Once Delete, This will be Permanently Delete!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                       window.location.href = link;
                  } else {
                    swal("Safe Data!");
                  }
                });
            });
    </script>


    
    </body>
</html>