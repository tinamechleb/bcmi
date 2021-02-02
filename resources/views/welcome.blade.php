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
		<div class="container">
			<!-- main nav -->
			<nav class="navbar navbar-expand-lg navbar-light">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
					aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navigation">
					<ul class="navbar-nav ml-auto text-center">
						<li class="nav-item dropdown active">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								عن الشركة
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{URL::to('/?page=1')}}">نبذة عن الشركة </a>
								<a class="dropdown-item" href="{{URL::to('/?page=2')}}">أهم الشهادات والاعتمادات</a>
							</div>
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="#">الأسطح الصلبة</a>
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="#">المواد الكيمائية</a>
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="#">خدمات الكهربائية</a>
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="#">خدمة العملاء</a>
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="#">اتصل بنا</a>
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


	<div class="hero-slider justify-content-center d-flex;">
		<div class="slider-item th-fullpage hero-area" style="background-image: url({{asset('images/slider-back.png')}});">
			<div class="container">
				<div class="row">
					<div class="col-md-12 justify-content-center" style="display:grid;">
						<h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">شركة البداهة للصناعات<br>
						الحديثة المحدودة</h1>
						<a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn btn-main"
							href="#" style="background-color: transparent;border: 2px solid #fff;width: max-content;padding: 9px 30px;font-size: 16px;">عن الشركة</a>
					</div>
				</div>
			</div>
			<img src="{{asset('images/mouse-scroll.png')}}" style="position:absolute;bottom:30px;z-index:2;"/>
		</div>
	</div>

	<div style="display: flex; flex-direction:column;position:fixed;height:100vh;align-items:center;left:30px;top:0;justify-content:center;">
		<div style="background:#fff;height:80px;width:2px;" class="my-1"></div>
		<i class="fa fa-instagram my-1 text-white"></i>
		<i class="fa fa-youtube-play my-1 text-white"></i>
		<i class="fa fa-facebook my-1 text-white"></i>
		<i class="fa fa-twitter my-1 text-white"></i>
	</div>


	<!--
Start About Section
==================================== -->

@if(app('request')->input('page')==2)


<section class="service-2 section" style="background-color: rgb(70,70,70);overflow-x:hidden;position:relative;">
		<div class="container">
			<div class="row">

				<div class="col-12">
					<!-- section title -->
					<div class="title text-right">
						<div style="position:absolute;top:29px;right:-500px;width:500px;height:2px;background:#fff;"></div>
						<div style="position:absolute;top:29px;left:-500px;width:500px;height:2px;background:#fff;"></div>
						<h2>أهم الشهادات والاعتمادات</h2>
						<h3 class="text-white">أهم الجوائز والشهادة الخاصة بمنتج جولد ستون</h3>
					</div>
					<!-- /section title -->
				</div>
				<div class="row mx-0">
					<div class="col-12 col-md-6">
						<h3 class="text-right text-white">منتج جولد ستون® مسجل لدى منظمة
اسفا العالمية للرخام الصناعي </h3>
						<p class="text-right text-white">حائز على شهادة الآيزو العالمية للجودة ٩٠٠١:٢٠٠٨ Green بالأضافة إلى شهادة
							<br />
							<br />
							حائز على جائزة القوس الذهبي الأروبي للجودة في ألمانيا
							<br />
							<br />
							حائز على شهادة المنتج الأخضر للفئة العادة والذهبية لعام ٢٠١٨
							<br />
							<br />
							حائز على شهادة تمكين
							<br />
							<br />
							حائز على شهادة التدريب المهني
						</p>
					</div>
					<div class="col-12 col-md-6">
						<h3 class="text-right text-white">حاز منتجنا على اعتمادات عديدة في مشــاريع وزاريـة حكـومية ومشــاريع القطــاع الخاص مثل:</h3>
						<p class="text-right text-white">
							- وزارة التعليم العالي
							<br />
							- المؤسسة العامة للتدريب التقني والمهني
							<br />
							- الحرس الوطني
							<br />
							- الهيئة الملكية للطيران
							<br />
							- وزارة الصحة
							<br />
							- وزارة الدفاع
							<br />
							- وزارة الداخلية
							<br />
							- وزارة التربية والتعليم.
							<br />
							- سعودي اوجيه
							<br />
							- شركة أرامكو السعودية
							<br />
							- وزارة التجارة
							<br />
							- المؤسسة العامة للتأمينات الاجتماعية
						</p>
					</div>
				</div>
			</div> <!-- End row -->
		</div> <!-- End container -->
		<img style="padding-top:60px;width: 100vw;" src="{{asset('images/home-footer.png')}}"/>
		<div class="d-flex text-white align-items-end container mt-4" style="direction:ltr;">
			<a href="{{URL::to('/?page=1')}}"><i class="fa fa-long-arrow-left mx-1 text-white"></i></a>
			<h2 class="my-0 text-white">2</h2>
			<h3 class="my-0 text-white">/</h3>
			<h3 class="my-0 text-white">2</h3>
			<a><i class="fa fa-long-arrow-right mx-1 text-white"></i></a>
		</div>
	</section> <!-- End section -->

@else


<section class="service-2 section" style="background-color: rgb(70,70,70);overflow-x:hidden;position:relative;">
		<div class="container">
			<div class="row">

				<div class="col-12">
					<!-- section title -->
					<div class="title text-right">
						<div style="position:absolute;top:29px;right:-500px;width:500px;height:2px;background:#fff;"></div>
						<div style="position:absolute;top:29px;left:-500px;width:500px;height:2px;background:#fff;"></div>
						<h2>شركة البداهة في سطور</h2>
						<h3 class="text-white">نبذة عن الشركة</h3>
					</div>
					<!-- /section title -->
				</div>
				<div class="row mx-0">
					<div class="col-12 col-md-6">
						<p class="text-right text-white">شركة البداهة للصناعات الحديثة المحدودة، نشأت
بشراكة استثمارية (سعودية-كندية)، وذلك عام ١٤٢١ ه/٢٠٠٠م، حيث بدأت الشركة كمصنع للأسطح الصلبة فقط و تط  ّورت الشركة لامتلاك ع  ّدة علامات تجارية في عدة صناعات، من أهم هذه العلامات هي "جولد ستون ®" ، "Gold Stone®" وهي من أشهر العلامات التجارية في المملكة العربية السعودية في مجال الرخام الصناعي.
<br /><br />بداية الشركة كانت بثمانية موظفين، تطورت وكبرت مع الزمن ليتجاوز عدد الموظفين الآن ال ٥٠٠ موظف وموظفة، بدأت بف ّني تركيب واحد لس ّيارة نقل واحدة ليصل عدد مجموعات التركيب حال ًيا لأكثر من ثلاثين مجموعة ذات قدرات فنية ممتازة. في البداية كان هناك مق ّر واحد لمنتج واحد، لتتجاوز المقرات الآن العشرة مقرات، في داخل المملكة العربية السعودية وخارجها، بما فيها مصانع ومستودعات تفوق مساحتها ١٢٠٫٠٠٠ م٢.
</p>
					</div>
					<div class="col-12 col-md-6">
						<p class="text-right text-white">دأت شركة البداهة بتصنيع الأسطح الصلبة (الرخام الصناعي)
ثم تطورت لتقوم بتصنيع المواد الأولية للأسطح الصلبة وأهمها:  الراتنجات غير المشبعة والملونات الصناعية المسماة بالبجمانت. ومن منطلق إيمانها بأهمية السعودة ساهمت شركة البداهة في تدريب العديد من الكوادر السعودية الذين تدرجوا في وتوزعوا في أقسم الشركة المختلفة حتى وصل عدد الكادر الوطني أكثر من سبعين موظف سعودي.
<br /><br />
يقع المركز الرئيسي للشركة في مدينة جدة، الذي يضم الإدارة العامة والمصنع الأساسي لإنتاج الأسطح الصلبة ومختبرات الجودة. ولخدمة عملائنا بشكل متكامل من خلال تلبية طلباتهم واستكمال التصنيع حسب رغباتهم، تم افتتاح عدة فروع في مختلف أنحاء المملكة أهمها: فرع مدينة الرياض فرع مدينة خميس مشيط، بالإضافة إلى انتشار وكلائنا في مختلف مناطق المملكة، مع توفر منافذ البيع في الدول الآتية: الإمارات، البحرين، اليمن، عمان، الأردن، تركيا.
</p>
					</div>
				</div>
			</div> <!-- End row -->
		</div> <!-- End container -->
		<img style="padding-top:60px;width: 100vw;" src="{{asset('images/home-footer.png')}}"/>
		<div class="d-flex text-white align-items-end container mt-4" style="direction:ltr;">
			<a><i class="fa fa-long-arrow-left mx-1 text-white"></i></a>
			<h2 class="my-0 text-white">1</h2>
			<h3 class="my-0 text-white">/</h3>
			<h3 class="my-0 text-white">2</h3>
			<a href="{{URL::to('/?page=2')}}"><i class="fa fa-long-arrow-right mx-1 text-white"></i></a>
		</div>
	</section> <!-- End section -->
@endif


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
				document.getElementById("header").style.background = "rgb(70,70,70)";
				document.getElementById("headerlogo").style.height = "65px";
			} else {
				document.getElementById("header").style.background = "transparent";
				document.getElementById("headerlogo").style.height = "95px";
			}
		}
	</script>

</body>

</html>