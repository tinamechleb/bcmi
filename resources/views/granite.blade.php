@extends('layouts/main')
@section('preheader')
<img style="width:100vw;" src="{{asset('images/red-footer.png')}}"/>
@endsection

@section('page')
<section class="service-2 section pb-0" style="overflow-x:hidden;position:relative;margin-top: 140px;">
		<div class="container">
			<div class="row">

				<div class="col-12">
					<!-- section title -->
					<div class="title text-right">
						<div style="position:absolute;top:29px;right:-500px;width:500px;height:2px;background:#8d8d8d;"></div>
						<div style="position:absolute;top:29px;left:-500px;width:500px;height:2px;background:#8d8d8d;"></div>
						<h2 style="color:rgb(225, 42, 74);">المواد الكيمائية</h2>
					</div>
					<!-- /section title -->
				</div>
				<div class="row mx-0">
					<div class="col-12">
                        <h3 class="text-right" style="color:rgb(225, 42, 74);font-size:1.9rem;">بودرة جرانيت:</h3>
                        <h3 class="text-right" style="color:rgb(225, 42, 74);">المواصفات الفنية:</h3>
						<p class="text-right text-black">
                        هو عبارة عن خليط مادة هيروكسيد الألومنيوم المائي مع حبيبات الجرانيت المتعددة الألوان والمقاسات والمصنعة من الرخام الصناعي المعتمد على ريزن بولي إستر المشبع والغير متحول حراريا  ًكما يمكن صنفرة هذا المنتج بكل سهولة وسلالة . المواصفات الفيزيائية : - الكثافة: )١٫٦-١٫٩( جرام / سم٣ .
                        <br />
                        - عديم الرائحة.
                        <br />
                        - غير قابل للإنحلال في الماء .
                        <br />
                        - غير قابل للإشتعال . - الكثافة: (١٫٦-١٫٩) جرام / سم٣ .
                    </p>
					</div>
					<div class="col-12 mt-4">
                        <h3 class="text-right" style="color:rgb(225, 42, 74);">الألوان:</h3>
						<p class="text-right text-black">
                        لدينا طيف واسع من الألوان تتناسب مع جميع الأذواق – متوفر كتالوج خاص بألوان بودرة جرانيت.
                        </p>
                    </div>
					<div class="col-12 mt-4">
                        <h3 class="text-right" style="color:rgb(225, 42, 74);">التعبئة:</h3>
						<p class="text-right text-black">
                        كرتون أو كيس محكم الإغلاق بوزن ٢٥ كغ
                        </p>
                    </div>
                    <img src="{{asset('images/granite-img.png')}}" />
				</div>
			</div> <!-- End row -->
		</div> <!-- End container -->
		<img style="padding-top:60px;width: 100vw;" src="{{asset('images/red-footer.png')}}"/>
	</section> <!-- End section -->
@endsection