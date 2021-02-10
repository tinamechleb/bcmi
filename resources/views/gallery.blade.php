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
						<h2 style="color:rgb(75, 151, 205);">معرض الصور</h2>
					</div>
					<!-- /section title -->
                </div>
                <div class="row mx-0 w-100 justify-content-center">
					<a href="{{URL::to('gallery/kitchens')}}" class="p-2">
                        <img src="{{asset('images/kitchens.png')}}" style="max-width: 100%;"/>
                    </a>
					<a href="{{URL::to('gallery/sinks')}}" class="p-2">
                        <img src="{{asset('images/sinks-gallery.png')}}" style="max-width: 100%;"/>
                    </a>
					<a href="{{URL::to('gallery/counters')}}" class="p-2">
                        <img src="{{asset('images/counter.png')}}" style="max-width: 100%;"/>
                    </a>
					<a href="{{URL::to('gallery/murals')}}" class="p-2">
                        <img src="{{asset('images/murals.png')}}" style="max-width: 100%;"/>
                    </a>
					<a href="{{URL::to('gallery/factory')}}" class="p-2">
                        <img src="{{asset('images/factory.png')}}" style="max-width: 100%;"/>
                    </a>
				</div>
			</div> <!-- End row -->
		</div> <!-- End container -->
		<img style="padding-top:60px;width: 100vw;" src="{{asset('images/blue-footer.png')}}"/>
	</section> <!-- End section -->
@endsection