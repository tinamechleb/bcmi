<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html dir="rtl">
<!--<![endif]-->

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


	<title>BCMI</title>

	<!-- Mobile Specific Meta
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

	<!-- CSS
  ================================================== -->
	<!-- Themefisher Icon font -->
	<link rel="stylesheet" href="plugins/themefisher-font/style.css">
	<!-- bootstrap.min css -->
    <link href="{{asset('css/bootstrap.min.css')}}" id="bootstrap-stylesheet" rel="stylesheet" type="text/css" />
	<!-- Lightbox.min css -->
	<link rel="stylesheet" href="plugins/lightbox2/dist/css/lightbox.min.css">
	<!-- animation css -->
	<link rel="stylesheet" href="plugins/animate/animate.css">
	<!-- Slick Carousel -->
	<link rel="stylesheet" href="plugins/slick/slick.css">
	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		@font-face {
			font-family: "Frutiger";
			src: url({{asset('fonts/FrutigerLTArabic45Light.ttf')}});
		}
		@font-face {
			font-family: "FrutigerBold";
			src: url({{asset('fonts/FrutigerLTArabic65Bold.ttf')}});
		}
		@font-face {
			font-family: "FrutigerReg";
			src: url({{asset('fonts/Frutiger.ttf')}});
		}
	</style>
</head>

<body id="body" style="overflow-x:hidden;">

	<!--
  Start Preloader
  ==================================== -->
	<div id="preloader">
		<div class='preloader'>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!--
  End Preloader
  ==================================== -->




	<!--
Fixed Navigation
==================================== -->
	<header class="navigation fixed-top" id="header" style="background: transparent;transition: 0.2s;">
            @yield('preheader')
		<div class="container">
			<!-- main nav -->
			<nav class="navbar navbar-expand-lg {{request()->is('/') ? 'navbar-light' : 'navbar-dark'}}">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
					aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navigation">
					<ul class="navbar-nav ml-auto text-center">
						<li class="nav-item dropdown {{request()->is('/') ? 'active' : ''}}">
							<a class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								عن الشركة
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{URL::to('/?page=1')}}">نبذة عن الشركة </a>
								<a class="dropdown-item" href="{{URL::to('/?page=2')}}">أهم الشهادات والاعتمادات</a>
							</div>
						</li>
						<li class="nav-item dropdown ">
							<a class="nav-link dropdown-toggle" id="navbarDropdown2" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								الأسطح الصلبة
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown2">
								<a class="dropdown-item" href="{{URL::to('/gold-stone')}}">جولد ستون® </a>
								<a class="dropdown-item" href="{{URL::to('/colors')}}">قائمة الألوان</a>
								<a class="dropdown-item" href="{{URL::to('/sinks')}}">المغاسل</a>
								<a class="dropdown-item" href="{{URL::to('/gallery')}}">معرض الصور</a>
							</div>
						</li>
						<li class="nav-item {{request()->is('chemicals*') ? 'active' : ''}}">
							<a class="nav-link" href="{{URL::to('/chemicals')}}">المواد الكيمائية</a>
						</li>
						<li class="nav-item {{request()->is('electrical-services') ? 'active' : ''}}">
							<a class="nav-link" href="{{URL::to('/electrical-services')}}">خدمات الكهربائية</a>
						</li>
						<li class="nav-item {{request()->is('customer-service') ? 'active' : ''}}">
							<a class="nav-link" href="{{URL::to('/customer-service')}}">خدمة العملاء</a>
						</li>
						<li class="nav-item {{request()->is('contact') ? 'active' : ''}}">
							<a class="nav-link" href="{{URL::to('/contact')}}">اتصل بنا</a>
						</li>
					</ul>
				</div>
				<!-- logo -->
				<a class="navbar-brand logo" href="{{URL::to('/')}}">
					<img class="logo-default" src="{{asset('images/bcmi-logo.png')}}" alt="logo" style="height: 95px;transition: 0.2s;" />
					<img class="logo-white" src="{{asset('images/bcmi-logo.png')}}" alt="logo" style="height: 95px;transition: 0.2s;" id="headerlogo" />
				</a>
				<!-- /logo -->
			</nav>
			<!-- /main nav -->
		</div>
	</header>
	<!--
End Fixed Navigation
==================================== -->


@yield('page')



	<!-- 
    Essential Scripts
    =====================================-->
	<!-- Main jQuery -->
	<!-- <script src="plugins/jquery/jquery.min.js"></script> -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
	<script src="plugins/google-map/gmap.js"></script>

	<!-- Form Validation -->
	<!-- <script src="plugins/form-validation/jquery.form.js"></script>
	<script src="plugins/form-validation/jquery.validate.min.js"></script> -->

	<!-- Bootstrap4 -->
	<!-- <script src="plugins/bootstrap/js/bootstrap.min.js"></script> -->
	<!-- Parallax -->
	<!-- <script src="plugins/parallax/jquery.parallax-1.1.3.js"></script> -->
	<!-- lightbox -->
	<!-- <script src="plugins/lightbox2/dist/js/lightbox.min.js"></script> -->
	<!-- Owl Carousel -->
	<!-- <script src="plugins/slick/slick.min.js"></script> -->
	<!-- filter -->
	<!-- <script src="plugins/filterizr/jquery.filterizr.min.js"></script> -->
	<!-- Smooth Scroll js -->
	<!-- <script src="plugins/smooth-scroll/smooth-scroll.min.js"></script> -->

	<!-- Custom js -->
	<script src="{{asset('js/script.js')}}"></script>
	<script>
		window.onscroll = function() {scrollFunction()};

		function scrollFunction() {
			if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                if(window.location.pathname=="/bcmi/") {
				    document.getElementById("header").style.background = "rgb(70,70,70)";
                }
                else {
				    document.getElementById("header").style.background = "#fff";
                }
				document.getElementById("headerlogo").style.height = "65px";
			} else {
				document.getElementById("header").style.background = "transparent";
				document.getElementById("headerlogo").style.height = "95px";
			}
		}
	</script>

</body>

</html>