<!DOCTYPE HTML>
<html>
<head>
<title>{{ config('app.name') }}</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="{!! asset('css/bootstrap.css') !!}" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="{!! asset('css/style.css') !!}" rel="stylesheet" type="text/css" media="all"/>
<!--icons-css-->
<link href="{!! asset('css/font-awesome.css') !!}" rel="stylesheet" type="text/css" media="all"/>
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!-- Ionicons -->
 <link rel="icon" type="image/icon" href="https://cdn2.iconfinder.com/data/icons/education-icons-4/200/SCHOOL15-512.png">
 @yield('css')
</head>
<body>  
<div class="page-container">    
   <div class="left-content">
       <div class="mother-grid-inner">
            <!--header start here-->
                <div class="header-main">
                    <div class="header-left">
                            <div class="logo-name">
                                     <a href="{{ url('home') }}"> <h1>{{ config('app.name') }}</h1> 
                                    <!--<img id="logo" src="" alt="Logo"/>--> 
                                  </a>                              
                            </div>
                            <!--search-box-->
                                <!-- <div class="search-box">
                                    <form>
                                        <input type="text" placeholder="Search..." required=""> 
                                        <input type="submit" value="">                  
                                    </form>
                                </div> --><!--//end-search-box-->
                            <div class="clearfix"> </div>
                         </div>
                         <div class="header-right">
                            <div class="profile_details_left"><!--notifications of menu start -->
                                <ul class="nofitications-dropdown">
                                    <li class="dropdown head-dpdn">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="notification_header">
                                                    <h3>You have 3 new messages</h3>
                                                </div>
                                            </li>
                                            <li><a href="#">
                                               <div class="user_img"><img src="images/p4.png" alt=""></div>
                                               <div class="notification_desc">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                                </div>
                                               <div class="clearfix"></div> 
                                            </a></li>
                                            <li class="odd"><a href="#">
                                                <div class="user_img"><img src="images/p2.png" alt=""></div>
                                               <div class="notification_desc">
                                                <p>Lorem ipsum dolor </p>
                                                <p><span>1 hour ago</span></p>
                                                </div>
                                              <div class="clearfix"></div>  
                                            </a></li>
                                            <li><a href="#">
                                               <div class="user_img"><img src="images/p3.png" alt=""></div>
                                               <div class="notification_desc">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                                </div>
                                               <div class="clearfix"></div> 
                                            </a></li>
                                            <li>
                                                <div class="notification_bottom">
                                                    <a href="#">See all messages</a>
                                                </div> 
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown head-dpdn">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="notification_header">
                                                    <h3>You have 3 new notification</h3>
                                                </div>
                                            </li>
                                            <li><a href="#">
                                                <div class="user_img"><img src="images/p5.png" alt=""></div>
                                               <div class="notification_desc">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                                </div>
                                              <div class="clearfix"></div>  
                                             </a></li>
                                             <li class="odd"><a href="#">
                                                <div class="user_img"><img src="images/p6.png" alt=""></div>
                                               <div class="notification_desc">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                                </div>
                                               <div class="clearfix"></div> 
                                             </a></li>
                                             <li><a href="#">
                                                <div class="user_img"><img src="images/p7.png" alt=""></div>
                                               <div class="notification_desc">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                                </div>
                                               <div class="clearfix"></div> 
                                             </a></li>
                                             <li>
                                                <div class="notification_bottom">
                                                    <a href="#">See all notifications</a>
                                                </div> 
                                            </li>
                                        </ul>
                                    </li>     
                                </ul>
                                <div class="clearfix"> </div>
                            </div>
                            <!--notification menu end -->
                            <div class="profile_details">       
                                <ul>
                                    <li class="dropdown profile_details_drop">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <div class="profile_img">   
                                                <span class="prfil-img">
                                                @if(Auth::user()->avatar)
                                                   <img class="img-circle" src="{{ Auth::user()->avatar }}" alt="User profile picture">
                                                @else
                                                  <img class="img-circle" src="https://cdn4.iconfinder.com/data/icons/avatars-21/512/avatar-circle-human-male-3-512.png" alt="User profile picture">
                                                @endif   
                                                </span> 
                                                <div class="user-name">
                                                    <p> {!! Auth::user()->first_name !!}</p>
                                                    <span>{{ Auth::user()->getRoleNames()[0] }}</span>
                                                </div>
                                                <i class="fa fa-angle-down lnr"></i>
                                                <i class="fa fa-angle-up lnr"></i>
                                                <div class="clearfix"></div>    
                                            </div>  
                                        </a>
                                        <ul class="dropdown-menu drp-mnu">
                                            <li> <a href="{{ route('users.edit',Auth::user()->id) }}"><i class="fa fa-cog"></i> Paramètres</a> </li> 
                                            <li> <a href="{{ route('users.show',Auth::user()->id) }}"><i class="fa fa-user"></i> Profil</a> </li> 
                                            <li>
                                                 <a href="{!! url('logout') !!}"><i class="fa fa-sign-out" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"></i> Déconnexion</a> 
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="clearfix"> </div>               
                        </div>
                     <div class="clearfix"> </div>  
                </div>
<!--heder end here-->
<div class="inner-block">
  @yield('content')  
</div>
<!--copy rights start here-->
<div class="copyrights">
     <p>Copyright © {{ now()->year }}. Tous les droits sont réservés | Développé par  <a href="#" target="_blank">{{ config('app.copyright') }}</a> </p>
</div>  
<!--COPY rights end here-->
</div>
</div>
<!--slider menu-->

    @include('layouts.sidebar')

    
    <div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<!--jquery -->
<script src="{!! asset('js/jquery-2.1.1.min.js') !!}"></script> 
<!-- script-for sticky-nav -->
        <script>
        $(document).ready(function() {
             var navoffeset=$(".header-main").offset().top;
             $(window).scroll(function(){
                var scrollpos=$(window).scrollTop(); 
                if(scrollpos >=navoffeset){
                    $(".header-main").addClass("fixed");
                }else{
                    $(".header-main").removeClass("fixed");
                }
             });
             
        });
        </script>
<!-- /script-for sticky-nav -->
<!--static chart-->
<script src="{!! asset('js/Chart.min.js') !!}"></script>
<!--//charts-->
<!-- geo chart -->
    <script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script>window.modernizr || document.write('<script src="lib/modernizr/modernizr-custom.js"><\/script>')</script>
    <!--<script src="lib/html5shiv/html5shiv.js"></script>-->
     <!-- Chartinator  -->
    <script src="{!! asset('js/chartinator.js') !!}" ></script>
    <script type="text/javascript">
        jQuery(function ($) {

            var chart3 = $('#geoChart').chartinator({
                tableSel: '.geoChart',

                columns: [{role: 'tooltip', type: 'string'}],
         
                colIndexes: [2],
             
                rows: [
                    ['China - 2015'],
                    ['Colombia - 2015'],
                    ['France - 2015'],
                    ['Italy - 2015'],
                    ['Japan - 2015'],
                    ['Kazakhstan - 2015'],
                    ['Mexico - 2015'],
                    ['Poland - 2015'],
                    ['Russia - 2015'],
                    ['Spain - 2015'],
                    ['Tanzania - 2015'],
                    ['Turkey - 2015']],
              
                ignoreCol: [2],
              
                chartType: 'GeoChart',
              
                chartAspectRatio: 1.5,
             
                chartZoom: 1.75,
             
                chartOffset: [-12,0],
             
                chartOptions: {
                  
                    width: null,
                 
                    backgroundColor: '#fff',
                 
                    datalessRegionColor: '#F5F5F5',
               
                    region: 'world',
                  
                    resolution: 'countries',
                 
                    legend: 'none',

                    colorAxis: {
                       
                        colors: ['#679CCA', '#337AB7']
                    },
                    tooltip: {
                     
                        trigger: 'focus',

                        isHtml: true
                    }
                }

               
            });                       
        });
    </script>
<!--geo chart-->

<!--skycons-icons-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
        <script src="{!! asset('js/jquery.nicescroll.js') !!}"></script>
        <script src="{!! asset('js/scripts.js') !!}"></script>
        <!--//scrolling js-->
<script src="{!! asset('js/bootstrap.js') !!}"> </script>
<!-- mother grid end here-->
 @yield('scripts')
</body>
</html>                     
