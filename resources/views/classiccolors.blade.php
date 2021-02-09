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
					<div class="text-right">
						<div style="position:absolute;top:29px;right:-500px;width:500px;height:2px;background:#8d8d8d;"></div>
						<div style="position:absolute;top:29px;left:-500px;width:500px;height:2px;background:#8d8d8d;"></div>
						<h2 style="color:rgb(75, 151, 205);">قائمة الألوان</h2>
					</div>
                    <!-- /section title -->
                    <div class="row mx-0">
                        <a href="{{URL::to('colors/classic')}}"><h3 class="text-right ml-3" style="color:rgb(141, 141, 141);font-family:'FrutigerReg';text-decoration:underline;">CLASSIC COLLECTION</h3></a>
                        <a href="{{URL::to('colors/modern')}}"><h3 class="text-right" style="color:rgb(141, 141, 141);font-family:'FrutigerReg';">MODERN COLLECTION</h3></a>
                    </div>
					<h2 class="my-4 text-right" style="color:rgb(141, 141, 141);">CLASSIC COLLECTION</h2>
				</div>
                <div class="row mx-0 w-100">
                    <div class="d-flex justify-content-center flex-dir-column m-2">
                        <img class="m-2" src="{{asset('images/crustybrown.png')}}" style="max-width: 100%;"/>
                        <h3 class="my-1 text-align-center dir-ltr" style="color:rgb(141, 141, 141);">152 - Crusty Brown</h3>
                    </div>
                    <div class="d-flex justify-content-center flex-dir-column m-2">
                        <img class="m-2" src="{{asset('images/crustybrown.png')}}" style="max-width: 100%;"/>
                        <h3 class="my-1 text-align-center dir-ltr" style="color:rgb(141, 141, 141);">152 - Crusty Brown</h3>
                    </div>
                    <div class="d-flex justify-content-center flex-dir-column m-2">
                        <img class="m-2" src="{{asset('images/crustybrown.png')}}" style="max-width: 100%;"/>
                        <h3 class="my-1 text-align-center dir-ltr" style="color:rgb(141, 141, 141);">152 - Crusty Brown</h3>
                    </div>
                    <div class="d-flex justify-content-center flex-dir-column m-2">
                        <img class="m-2" src="{{asset('images/crustybrown.png')}}" style="max-width: 100%;"/>
                        <h3 class="my-1 text-align-center dir-ltr" style="color:rgb(141, 141, 141);">152 - Crusty Brown</h3>
                    </div>
                    <div class="d-flex justify-content-center flex-dir-column m-2">
                        <img class="m-2" src="{{asset('images/crustybrown.png')}}" style="max-width: 100%;"/>
                        <h3 class="my-1 text-align-center dir-ltr" style="color:rgb(141, 141, 141);">152 - Crusty Brown</h3>
                    </div>
                    <div class="d-flex justify-content-center flex-dir-column m-2">
                        <img class="m-2" src="{{asset('images/crustybrown.png')}}" style="max-width: 100%;"/>
                        <h3 class="my-1 text-align-center dir-ltr" style="color:rgb(141, 141, 141);">152 - Crusty Brown</h3>
                    </div>
                    <div class="d-flex justify-content-center flex-dir-column m-2">
                        <img class="m-2" src="{{asset('images/crustybrown.png')}}" style="max-width: 100%;"/>
                        <h3 class="my-1 text-align-center dir-ltr" style="color:rgb(141, 141, 141);">152 - Crusty Brown</h3>
                    </div>
                    <div class="d-flex justify-content-center flex-dir-column m-2">
                        <img class="m-2" src="{{asset('images/crustybrown.png')}}" style="max-width: 100%;"/>
                        <h3 class="my-1 text-align-center dir-ltr" style="color:rgb(141, 141, 141);">152 - Crusty Brown</h3>
                    </div>
                    <div class="d-flex justify-content-center flex-dir-column m-2">
                        <img class="m-2" src="{{asset('images/crustybrown.png')}}" style="max-width: 100%;"/>
                        <h3 class="my-1 text-align-center dir-ltr" style="color:rgb(141, 141, 141);">152 - Crusty Brown</h3>
                    </div>
				</div>
			</div> <!-- End row -->
		</div> <!-- End container -->
		<img style="padding-top:60px;width: 100vw;" src="{{asset('images/blue-footer.png')}}"/>
	</section> <!-- End section -->
@endsection