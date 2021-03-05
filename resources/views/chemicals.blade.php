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
					<div class="col-12 text-right text-black mb-5">
					<p>
                    تعد الصناعات الكيميائية من مجالات الاختصاص لدي شركة البداهة للصناعات الحديثة، ومع وجود فريق كامل ذو خبرة في البحث والتطوير بالإضافة لفرق الإنتاج والجودة الذين يعملون على تصنيع المنتجات بجودة عالية وبأعلى المواصفات القياسية واهم هذه المنتجات الكيميائية هي: راتنجات البوليستر غير المشبع (الرزن) – الملونات الصناعية (البجمنت)
					</p>	
					</div>
					<a class="col-3" href="{{URL::to('/chemicals/resin')}}">
						<img src="{{asset('images/resin.png')}}" class="w-100" style="object-fit:cover;" />
					</a>
					<a class="col-3" href="{{URL::to('/chemicals/pigment')}}">
						<img src="{{asset('images/pigment.png')}}" class="w-100" style="object-fit:cover;" />
					</a>
					<a class="col-3" href="{{URL::to('/chemicals/granite')}}">
						<img src="{{asset('images/granite.png')}}" class="w-100" style="object-fit:cover;" />
					</a>
				</div>
			</div> <!-- End row -->
		</div> <!-- End container -->
		<img style="padding-top:60px;width: 100vw;" src="{{asset('images/red-footer.png')}}"/>
	</section> <!-- End section -->
@endsection