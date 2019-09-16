<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/> <!--320-->
  <meta name="_token" content="{{ csrf_token() }}">

  <title>Piluku Admin Template</title>

  <!-- <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon"> -->
  <!-- Bootstrap CSS -->


 <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }} ">
<link rel='stylesheet' href= "{{ asset('assets/css/material.css')}} ">
<link rel='stylesheet' href= "{{ asset('assets/css/style.css') }} ">
<link rel='stylesheet' href= "{{ asset('assets/css/animated-masonry-gallery.css') }} ">
<link rel='stylesheet' href=  "{{ asset('assets/css/rotated-gallery.css') }} ">
<link rel='stylesheet' href=  "{{ asset('assets/css/sweet-alerts/sweetalert.css') }} ">
<link rel='stylesheet' href=  "{{ asset('assets/css/jtree.css') }} ">


<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

<script type="text/javascript">
	appurl = "{!!url('/')!!}";
</script>

    
@yield('extracss')
  <script src= "{{ asset('assets/js/jquery.js') }} " ></script>
<!-- <script src= "{{ asset('assets/js/app.js') }} " ></script>
  <script>
    jQuery(window).load(function () {
      $('.piluku-preloader').addClass('hidden');
    });
  </script> -->
</head>
<body>
  <!-- <div class="piluku-preloader text-center">
  <div class="progress">
      <div class="indeterminate"></div>
  </div>
  <div class="loader">Loading...</div>
</div> -->
<div class="wrapper ">

  
<div class="left-bar ">
	<div class="admin-logo">
		<div class="logo-holder pull-left">
			<img class="logo" src= "{{ asset('assets/images/example.png') }} " alt="logo">	
		</div>
		<!-- logo-holder -->			
		<a href="#" class="menu-bar  pull-right"><i class="ti-menu"></i></a>
	</div>
	<!-- admin-logo -->
	<ul class="list-unstyled menu-parent" id="mainMenu">
		<li class='current'>
			<a href="{{route('dash')}}" class="current waves-effect waves-light">
				<i class="icon ti-home"></i>
				<span class="text ">Dashboard</span>
			</a>
		</li>

		<li class="submenu">
			<a class="waves-effect waves-light" href="#">
				<i class="glyphicon glyphicon-camera"></i>
				<span class="text">Homepage-Banner-image</span>
				<i class="chevron ti-angle-right"></i>
			</a>
			<ul class="list-unstyled">
				<li><a href="{{route('addImageForm')}}">Add-Banner-Image</a></li>
				<li><a href="{{route('imageList')}}">show list</a></li>	
			</ul>
		</li>



		<li class="submenu">
			<a class="waves-effect waves-light" href="#">
				<i class="fas fa-book-reader"></i>
				<span class="text">Latest-News-Section</span>
				<i class="chevron ti-angle-right"></i>
			</a>
			<ul class="list-unstyled">
				<li><a href="{{route('NewsCategory')}}">Latest-News-Catogory</a></li>
				<li><a href="{{route('NewsCategoryList')}}">News category list</a></li>
				<li><a href="{{route('latestnewsss')}}">Latest News</a></li>		
				<li><a href="{{route('NewsCategoryLists')}}">Latest News List</a></li>		
			</ul>
		</li>


		<li class="submenu">
			<a class="waves-effect waves-light" href="#">
				<i class="fab fa-angellist"></i>
				<span class="text">Trending-News-Section</span>
				<i class="chevron ti-angle-right"></i>
			</a>
			<ul class="list-unstyled">
				<li><a href="{{route('Trending-News-Form')}}">Trending-News-Form</a></li>
				<li><a href="{{route('Trending-News-List')}}">Trending-News-List</a></li>
						
			</ul>
		</li>



		<li class="submenu">
			<a class="waves-effect waves-light" href="#">
				<i class="fa fa-phone"></i>
				<span class="text">Contact</span>
				<i class="chevron ti-angle-right"></i>
			</a>
			<ul class="list-unstyled">
				<li><a href="{{route('contactlist')}}">Contact_us Book</a></li>
				<li><a href="{{route('Location-list-form')}}">Location</a></li>
						
			</ul>
		</li>


		<li class="submenu">
			<a class="waves-effect waves-light" href="#">
				<i class="fa fa-video"></i>
				<span class="text">Featured Video</span>
				<i class="chevron ti-angle-right"></i>
			</a>
			<ul class="list-unstyled">
				<li><a href="{{route('featuredVideosForm')}}">Upload Featured video </a></li>
				<li><a href="{{route('Featured-list')}}">Featured Video</a></li>
						
			</ul>
		</li>

	</ul>
</div>
<!-- left-bar -->

<div class="content" id="content">
<div class="overlay"></div>			
	
<div class="top-bar">
	<nav class="navbar navbar-default top-bar">
		<div class="menu-bar-mobile" id="open-left"><i class="ti-menu"></i>
		</div>

		<form class="navbar-left" role="search">
			<div class="search">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav navbar-nav navbar-right top-elements">
			<li class="piluku-dropdown dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><img class="flag_img" src="assets/images/flags/india-flag.jpg" alt=""> English<span class="drop-icon"><i class="ion ion-chevron-down"></i></span>
				</a>
				<ul class="dropdown-menu dropdown-piluku-menu  animated fadeInUp wow language-drop neat_drop" data-wow-duration="1500ms" role="menu">
					<li>
						<a href="#"><img class="flag_img" src="assets/images/flags/gm.gif" alt="flags"> German</a>
					</li>
					<li>
						<a href="#"><img class="flag_img" src="assets/images/flags/usa.png" alt="flags"> Spanish</a>
					</li>
					<li>
						<a href="#"><img class="flag_img" src="assets/images/flags/gm.gif" alt="flags"> german</a>
					</li>
					<li>
						<a href="#"><img class="flag_img" src="assets/images/flags/gm.gif" alt="flags"> german</a>
					</li>
				</ul>
			</li>
			<li class="piluku-dropdown dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="ion-ios-bell-outline icon-notification"></i><span class="badge info-number message">22</span></a>
				<ul class="dropdown-menu dropdown-piluku-menu  animated fadeInUp wow notification-drop neat_drop dropdown-right" data-wow-duration="1500ms" role="menu">
					<li>
						<a href="profile.html">
							<div class="hexagon danger">
								<span><i class="ion-ios-alarm-outline"></i></span>
							</div>
							<span class="text_info"> Privacy settings have been changed</span>
							<span class="time_info">3:30am</span>
						</a>
					</li>
					<li>
						<a href="profile.html">
							<div class="hexagon success">
								<span><i class="ion-ios-body-outline"></i></span>
							</div>
							<span class="text_info"> Tim has added you as friend</span>
							<span class="time_info">4:30am</span>
						</a>
					</li>
					<li>
						<a href="profile.html">
							<div class="hexagon warning">
								<span><i class="ion-ios-cart-outline"></i></span>
							</div>
							<span class="text_info"> New item added</span>
							<span class="time_info">6:07am</span>
						</a>
					</li>
					<li>
						<a href="profile.html">
							<div class="hexagon info">
								<span><i class="ion-ios-calendar-outline"></i></span>
							</div>
							<span class="text_info"> reminder please complete the task</span>
							<span class="time_info">3:30pm</span>
						</a>
					</li>
					<li>
						<a href="profile.html">
							<div class="outline-hexagon">
								<span><i class="ion-ios-checkmark-outline"></i></span>
							</div>
							<span class="text_info"> Marked as complete</span>
							<span class="time_info">1:30pm</span>
						</a>
					</li>
					<li>
						<a href="profile.html" class="last_info">See all notifications</a>
					</li>

				</ul>
			</li>
			<li class="piluku-dropdown dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="ion-ios-box-outline icon-notification"></i><span class="badge info-number bell">22</span></a>
				<ul class="dropdown-menu dropdown-piluku-menu  animated fadeInUp wow message_drop neat_drop dropdown-right" data-wow-duration="1500ms" role="menu">
					<li>
						<a href="mailbox.html">
							<div class="avatar_left"><img src="assets/images/avatar.jpg" alt=""></div>
							<div class="info_right">
								<span class="text_head pull-left">Megan fox</span>
								<span class="time_info pull-right">3:30am <i class="online ion-record"></i></span>
								<div class="text_info"> Hi want to know about the company freelance for wizard</div>
							</div>							
						</a>
					</li>
					<li>
						<a href="mailbox.html">
							<div class="avatar_left"><img src="assets/images/avatar.jpg" alt=""></div>
							<div class="info_right">
								<span class="text_head pull-left">Megan fox</span>
								<span class="time_info pull-right">3:30am <i class="online ion-record"></i></span>
								<div class="text_info"> Hi want to know about the company freelance for wizard</div>
							</div>							
						</a>
					</li>
					<li>
						<a href="mailbox.html">
							<div class="avatar_left"><img src="assets/images/avatar.jpg" alt=""></div>
							<div class="info_right">
								<span class="text_head pull-left">Megan fox</span>
								<span class="time_info pull-right">3:30am <i class="online ion-record"></i></span>
								<div class="text_info"> Hi want to know about the company freelance for wizard</div>
							</div>	
						</a>
					</li>
					<li>
						<a href="mailbox.html">
							<div class="avatar_left"><img src="assets/images/avatar.jpg" alt=""></div>
							<div class="info_right">
								<span class="text_head pull-left">Megan fox</span>
								<span class="time_info pull-right">3:30am <i class="online ion-record"></i></span>
								<div class="text_info"> Hi want to know about the company freelance for wizard</div>
							</div>	
						</a>
					</li>
				</ul>
			</li>
			<li class="piluku-dropdown dropdown">
				<!-- @todo Change design here, its bit of odd or not upto usable -->

				<a href="#" class="dropdown-toggle avatar_width" data-toggle="dropdown" role="button" aria-expanded="false"><span class="avatar-holder"><img src= "{{ asset('assets/images/avatar.jpg') }} " alt=""></span><span class="avatar_info">Bootstrap</span><span class="drop-icon"><!-- <i class="ion ion-chevron-down"></i> --></span></a>
				<ul class="dropdown-menu dropdown-piluku-menu  animated fadeInUp wow avatar_drop neat_drop dropdown-right" data-wow-duration="1500ms" role="menu">
					<li>
						<a href="profile.html"> <i class="ion-android-settings"></i>Settings</a>
					</li>
					<li>
						<a href="mailbox.html"> <i class="ion-android-chat"></i>Messages</a>
					</li>
					<li>
						<a href="dropzone-file-upload.html"> <i class="ion-android-cloud-circle"></i>Upload</a>
					</li>
					<li>
						<a href="profile.html"> <i class="ion-android-create"></i>Edit profile</a>
					</li>
					<li>
						<a class="dropdown-item" href="{{ route('Customlogout') }}">
                                        {{ __('Logout') }}
                         </a>

					</li>   
				</ul>
			</li>
			<li class="chat_btn">
				<a href="#" class="right-bar-toggle flatRed">
					<i class="ion-ios-people-outline"></i>                              
				</a>
			</li>
		</ul>

	</nav>
</div>


<div class="main-content">
@yield('content') 
</div>
    
</div>
</div>
</div>
</div>  
</div>



<script src= "{{asset('assets/js/jquery-ui-1.10.3.custom.min.js')}}"></script>
<script src= "{{asset('assets/js/bootstrap.min.js') }}"></script>
<script src= "{{asset('assets/js/wow.min.js') }}"></script>
<script src= "{{asset('assets/js/jquery.loadmask.min.js')}}"></script>
<script src= "{{asset('assets/js/jquery.accordion.js')}}"></script>
<script src= "{{asset('assets/js/materialize.js')}}"></script>
<script src="{{asset('assets/js/chartist.min.js')}}"></script>
<script src= "{{asset('assets/js/CustomChart.js')}}"></script>
<script src= "{{asset('assets/js/build/d3.min.js')}}"></script>
<script src= "{{asset('assets/js/nvd3/nv.d3.js')}}"></script>
<script src= "{{asset('assets/js/sparkline.js')}}"></script>
<script src= "{{asset('assets/js/bic_calendar.js')}}"></script>
<script src= "{{asset('assets/js/widgets.js') }}"></script>
<script src= "{{asset('assets/js/core.js')}}"></script>

<script src= "{{asset('assets/js/jquery.countTo.js') }}"  ></script>


<script src="{{asset('assets/js/jquery.nicescroll.min.js') }}"></script>


<script src=  "{{asset('assets/js/select2.js') }}"></script>
<script src=  "{{asset('assets/js/jquery.multi-select.js') }}"></script>
<script src=  "{{asset('assets/js/bootstrap-filestyle.js') }}"></script>
<script src=  "{{asset('assets/js/bootstrap-datepicker.js') }}"></script>
<script src= "{{asset('assets/js/bootstrap-colorpicker.js') }}"></script>
<script src= "{{asset('assets/js/jquery.maskedinput.js') }}"></script>
<script src= "{{asset('assets/js/form-elements.js') }}"></script>




<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>


<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'editor1' );
</script>

<script src="{{asset('assets/js/bootstrap-datatables.js')}}"></script>
<script src="{{asset('assets/js/dataTables-custom.js')}}"></script>
<script src="{{asset('assets/js/mindmup-editabletable.js')}}"></script>
<script src="{{asset('assets/js/numeric-input-example.js')}}"></script>
<script src="{{asset('assets/js/dynamic-tables.js')}}"></script>
@yield('extrajs') 

</html>

