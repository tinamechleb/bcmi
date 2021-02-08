@extends('layouts/main')
@section('preheader')
<img style="width:100vw;" src="{{asset('images/blue-footer.png')}}"/>
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
						<h2 style="color:rgb(75, 151, 205);">قائمة الألوان</h2>
					</div>
					<!-- /section title -->
				</div>
                <div class="row mx-0 w-100 justify-content-center">
					<a href="{{URL::to('colors/classic')}}" class="px-2">
                        <img src="{{asset('images/classic-colors.png')}}" />
                    </a>
					<a href="{{URL::to('colors/modern')}}" class="px-2">
                        <img src="{{asset('images/modern-colors.png')}}" />
                    </a>
				</div>
			</div> <!-- End row -->
		</div> <!-- End container -->
		<img style="padding-top:60px;width: 100vw;" src="{{asset('images/blue-footer.png')}}"/>
	</section> <!-- End section -->
@endsection