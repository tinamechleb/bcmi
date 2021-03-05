
@extends('layouts/main')
@section('page')
<style>
	
     /* Style the Image Used to Trigger the Modal */
#myImgID1, #myImgID2, #myImgID3, #myImgID4, #myImgID5, #myImgID6 {
  cursor: pointer;
  transition: 0.3s;
}

#myImgID1:hover, #myImgID2:hover, #myImgID3:hover, #myImgID4:hover, #myImgID5:hover, #myImgID6:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (Image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption1, #caption2, #caption3, #caption4, #caption5, #caption6 {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation - Zoom in the Modal */
.modal-content, #caption1, #caption2, #caption3, #caption4, #caption5, #caption6 {
  animation-name: zoom;
  animation-duration: 0.6s;
}

@keyframes zoom {
  from {transform:scale(0)}
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 45px;
  left: 55px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
} 
</style>
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

	<div style="display: flex; flex-direction:column;position:fixed;height:100vh;align-items:center;left:30px;top:0;justify-content:center;color:rgb(197,197,197);z-index: 999999;">
		<div style="background:rgb(197,197,197);height:80px;width:2px;" class="my-1"></div>
		<a href="https://www.instagram.com/bcmi_official/" target="_blank" style="color:rgb(197,197,197);"><i class="fa fa-instagram my-1"></i></a>
		<a href="https://www.facebook.com/Albadaha-البداهة-107187900991152/" target="_blank" style="color:rgb(197,197,197);"><i class="fa fa-facebook my-1"></i></a>
		<a href="https://twitter.com/bcmi_official?lang=en" target="_blank" style="color:rgb(197,197,197);"><i class="fa fa-twitter my-1"></i></a>
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
						<p class="text-right text-white" onclick="iterFun('1')" id="myImgID1">حائز على شهادة الآيزو العالمية للجودة ٩٠٠١:٢٠٠٨ Green بالأضافة إلى شهادة</p>
						<p class="text-right text-white" onclick="iterFun('3')" id="myImgID3">حائز على جائزة القوس الذهبي الأروبي للجودة في ألمانيا</p>
						<p class="text-right text-white" onclick="iterFun('4')" id="myImgID4">حائز على شهادة المنتج الأخضر للفئة العادة والذهبية لعام ٢٠١٨</p>
						<p class="text-right text-white" onclick="iterFun('5')" id="myImgID5">حائز على شهادة تمكين</p>
						<p class="text-right text-white" onclick="iterFun('6')" id="myImgID6">حائز على شهادة التدريب المهني</p>
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

		<div id="modalID1" class="modal">
			<span class="close" id="closeID1">&times;</span>
			<img class="modal-content" src="{{asset('images/cert1.png')}}" alt="شهادة الآيزو العالمية للجودة ٩٠٠١:٢٠٠٨ Green" id="imgID1" />
  			<div id="caption1"></div>
		</div>
		<div id="modalID2" class="modal">
			<span class="close" id="closeID2">&times;</span>
			<img class="modal-content" src="{{asset('images/isfa.png')}}" alt="شهادة التدريب المهني" id="imgID2" />
  			<div id="caption2"></div>
		</div>
		<div id="modalID3" class="modal">
			<span class="close" id="closeID3">&times;</span>
			<img class="modal-content" src="{{asset('images/archofeurope.png')}}" alt="جائزة القوس الذهبي الأروبي للجودة في ألمانيا" id="imgID3" />
  			<div id="caption3"></div>
		</div>
		<div id="modalID4" class="modal">
			<span class="close" id="closeID4">&times;</span>
			<img class="modal-content" src="{{asset('images/cert2.png')}}" alt="شهادة المنتج الأخضر للفئة العادة والذهبية لعام ٢٠١٨" id="imgID4" />
  			<div id="caption4"></div>
		</div>
		<div id="modalID5" class="modal">
			<span class="close" id="closeID5">&times;</span>
			<img class="modal-content" src="{{asset('images/attestation.png')}}" alt="شهادة تمكين" id="imgID5" />
  			<div id="caption5"></div>
		</div>
		<div id="modalID6" class="modal">
			<span class="close" id="closeID6">&times;</span>
			<img class="modal-content" src="{{asset('images/isfa.png')}}" alt="شهادة التدريب المهني" id="imgID6" />
  			<div id="caption6"></div>
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
						<p class="text-right text-white">بدأت شركة البداهة بتصنيع الأسطح الصلبة (الرخام الصناعي)
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

<script>
		function iterFun(i){

			// Get the modal
			var modalID = document.getElementById("modalID"+i);

			// Get the image and insert it inside the modal - use its "alt" text as a caption
			var imgID = document.getElementById("myImgID"+i);
			var modalImgID = document.getElementById("imgID"+i);
			var captionText = document.getElementById("caption"+i);
			imgID.onclick = function(){
				modalID.style.display = "block";
				modalID.style.zIndex = "1049";
				modalImgID.src = modalImgID.src;
				captionText.innerHTML = modalImgID.alt;
			}

			// Get the <span> element that closes the modal
			var spanID = document.getElementById("closeID"+i);

			// When the user clicks on <span> (x), close the modal
			spanID.onclick = function() {
				modalID.style.display = "none";
				modalID.style.zIndex = "0";
			} 
		}
	</script>
@endsection