<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>News 24 | Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.html">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets1/images/fav.png') }}">
    <!-- Place favicon.ico in the root directory -->
    <!-- all css here -->
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href= "{{asset('assets1/css/bootstrap.min.css') }}">
    <!-- font-awesome css -->
    <link rel="stylesheet" href= "{{asset('assets1/css/font-awesome.min.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" href= "{{asset('assets1/css/animate.css') }}">
    <!-- hover-min css -->
    <link rel="stylesheet" href=  "{{asset('assets1/css/hover-min.css') }}">
      <!-- magnific-popup css -->
    <link rel="stylesheet" href= "{{asset('assets1/css/magnific-popup.css')}}">
    <!-- meanmenu css -->
    <link rel="stylesheet" href= "{{asset('assets1/css/meanmenu.min.css')}}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href= "{{asset('assets1/css/owl.carousel.css')}}">
    <!-- lightbox css -->
    <link href="{{asset('assets1/css/lightbox.min.css') }}" rel="stylesheet">
    <!-- nivo slider CSS -->
    <link rel="stylesheet" href=" {{asset('assets1/inc/custom-slider/css/nivo-slider.css') }}"  type="text/css" />
    <link rel="stylesheet" href="{{asset('assets1/inc/custom-slider/css/preview.css ') }}" type="text/css" media="screen" />
    <!-- style css -->
    <link rel="stylesheet" href=" {{asset('assets1/style.css') }}">
    <!-- responsive css -->
    <link rel="stylesheet" href= "{{asset('assets1/css/responsive.css')}}">
    <!-- modernizr js -->
    <script src="{{asset('assets1/js/modernizr-2.8.3.min.js')}}"></script>



</head>

<body class="home">
	<!--Preloader area Start here-->
	<div class="preloader">
		 <div class="sk-cube-grid">
			<div class="sk-cube sk-cube1"></div>
			<div class="sk-cube sk-cube2"></div>
			<div class="sk-cube sk-cube3"></div>
			<div class="sk-cube sk-cube4"></div>
			<div class="sk-cube sk-cube5"></div>
			<div class="sk-cube sk-cube6"></div>
			<div class="sk-cube sk-cube7"></div>
			<div class="sk-cube sk-cube8"></div>
			<div class="sk-cube sk-cube9"></div>
		  </div>
	</div>
	<!--Preloader area end here-->
	
    <!--Header area start here-->
     @include("frontend.layouts.header")
    <!--Header area end here-->

  
     <!--content area start here-->
        <div class="main-content">
         @yield('content') 
        </div>
     <!--content area end here-->


     <!--Footer area start here-->
      @include("frontend.layouts.footer")
     <!--Footer area end here-->

  
    <div id="return-to-top">
        <span>Top</span>
    </div>
    <!-- End scrollUp  -->
    
    <!-- Footer Area Section End Here -->
    
    <!-- all js here -->
	<script src="{{asset('assets1/js/jquery.min.js')}}"></script>
    <!-- jquery latest version -->
    <script src="{{asset('assets1/js/jquery.min.js')}}"></script>
	 <!-- jquery-ui js -->
    <script src="{{asset('assets1/js/jquery-ui.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('assets1/js/bootstrap.min.js')}}"></script>
    <!-- meanmenu js -->
    <script src="{{asset('assets1/js/jquery.meanmenu.js')}}"></script>
    <!-- wow js -->
    <script src="{{asset('assets1/js/wow.min.js')}}"></script>
	<!-- owl.carousel js -->
    <script src="{{asset('assets1/js/owl.carousel.min.js')}} "></script>
    <!-- magnific-popup js -->
    <script src="{{asset('assets1/js/jquery.magnific-popup.js')}} "></script>
	
    <!-- jquery.counterup js -->
    <script src=" {{asset('assets1/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assets1/js/waypoints.min.js')}}"></script>
    <!-- jquery light box -->
    <script src="{{asset('assets1/js/lightbox.min.js')}}"></script>
    <!-- Nivo slider js -->
    <script src=" {{asset('assets1/inc/custom-slider/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets1/inc/custom-slider/home.js')}}" type="text/javascript"></script>
    <!-- main js -->
    <script src= "{{asset('assets1/js/main.js')}}"></script>

   
</body>
</html>
