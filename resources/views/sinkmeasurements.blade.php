@extends('layouts/main')
@section('preheader')
<img style="width:100vw;" src="{{asset('images/blue-footer.png')}}"/>
@endsection

@section('styles')
<style>
    .row img {
        height: 240px;
        object-fit: contain;
    }
</style>
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
						<h2 style="color:rgb(75, 151, 205);">المغاسل</h2>
                        <h3 class="text-right" style="color:rgb(141, 141, 141);">مقاسات الأحواض</h3>
					</div>
                    <!-- /section title -->
				</div>
                <div class="row mx-0 w-100 mb-5">
                    <div class="col-4 d-flex justify-content-center flex-dir-column">
                        <img class="m-2" src="{{asset('images/st2-sink.png')}}" style="max-width: 100%;"/>
                        <div class="row justify-content-evenly">
                            <div style="width:max-content;">
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">ST2 :الموديل</h3>
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">الطول: 71</h3>
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">العرض: 41</h3>
                            </div>
                            <div style="width:max-content;">
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">العمق: 20.5</h3>
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">الوزن (كغ): 18</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 d-flex justify-content-center flex-dir-column">
                        <img class="m-2" src="{{asset('images/sink-2.png')}}" style="max-width: 100%;"/>
                        <div class="row justify-content-evenly">
                            <div style="width:max-content;">
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">1375 :الموديل</h3>
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">الطول: 41</h3>
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">العرض: 27.5</h3>
                            </div>
                            <div style="width:max-content;">
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">العمق: 13</h3>
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">الوزن (كغ): 6.6</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 d-flex justify-content-center flex-dir-column">
                        <img class="m-2" src="{{asset('images/sink-3.png')}}" style="max-width: 100%;"/>
                        <div class="row justify-content-evenly">
                            <div style="width:max-content;">
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">ST :الموديل</h3>
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">الطول: 36</h3>
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">العرض: 34</h3>
                            </div>
                            <div style="width:max-content;">
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">العمق: 14.5</h3>
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">الوزن (كغ): 7.5</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 d-flex justify-content-center flex-dir-column">
                        <img class="m-2" src="{{asset('images/sink-4.png')}}" style="max-width: 100%;"/>
                        <div class="row justify-content-evenly">
                            <div style="width:max-content;">
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">1350 :الموديل</h3>
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">الطول: 50.5</h3>
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">العرض: 33.5</h3>
                            </div>
                            <div style="width:max-content;">
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">العمق: 16</h3>
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">الوزن (كغ): 8</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 d-flex justify-content-center flex-dir-column">
                        <img class="m-2" src="{{asset('images/sink-5.png')}}" style="max-width: 100%;"/>
                        <div class="row justify-content-evenly">
                            <div style="width:max-content;">
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">2000 :الموديل</h3>
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">الطول: 49.5</h3>
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">العرض: 35</h3>
                            </div>
                            <div style="width:max-content;">
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">العمق: 15.5</h3>
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">الوزن (كغ): 6.5</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 d-flex justify-content-center flex-dir-column">
                        <img class="m-2" src="{{asset('images/sink-6.png')}}" style="max-width: 100%;"/>
                        <div class="row justify-content-evenly">
                            <div style="width:max-content;">
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">FB :الموديل</h3>
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">الطول: 84</h3>
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">العرض: 39</h3>
                            </div>
                            <div style="width:max-content;">
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">العمق: 20.5</h3>
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">الوزن (كغ): 19</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 d-flex justify-content-center flex-dir-column">
                        <img class="m-2" src="{{asset('images/sink-7.png')}}" style="max-width: 100%;"/>
                        <div class="row justify-content-evenly">
                            <div style="width:max-content;">
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">FL044 :الموديل</h3>
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">الطول: 38.5</h3>
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">العرض: 38.5</h3>
                            </div>
                            <div style="width:max-content;">
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">العمق: 11.5</h3>
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">الوزن (كغ): 5</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 d-flex justify-content-center flex-dir-column">
                        <img class="m-2" src="{{asset('images/sink-11.png')}}" style="max-width: 100%;"/>
                        <div class="row justify-content-evenly">
                            <div style="width:max-content;">
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">TL :الموديل</h3>
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">الطول: 53</h3>
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">العرض: 40</h3>
                            </div>
                            <div style="width:max-content;">
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">العمق: 13</h3>
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">الوزن (كغ): 8</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 d-flex justify-content-center flex-dir-column">
                        <img class="m-2" src="{{asset('images/sink-12.png')}}" style="max-width: 100%;"/>
                        <div class="row justify-content-evenly">
                            <div style="width:max-content;">
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">ST80 :الموديل</h3>
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">الطول: 71.5</h3>
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">العرض: 40</h3>
                            </div>
                            <div style="width:max-content;">
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">العمق: 18</h3>
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">الوزن (كغ): 18</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 d-flex justify-content-center flex-dir-column">
                        <img class="m-2" src="{{asset('images/sink-8.png')}}" style="max-width: 100%;"/>
                        <div class="row justify-content-evenly">
                            <div style="width:max-content;">
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">ST70 :الموديل</h3>
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">الطول: 62</h3>
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">العرض: 40</h3>
                            </div>
                            <div style="width:max-content;">
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">العمق: 18</h3>
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">الوزن (كغ): 15.5</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 d-flex justify-content-center flex-dir-column">
                        <img class="m-2" src="{{asset('images/sink-9.png')}}" style="max-width: 100%;"/>
                        <div class="row justify-content-evenly">
                            <div style="width:max-content;">
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">KB2 :الموديل</h3>
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">الطول: 80.5</h3>
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">العرض: 42</h3>
                            </div>
                            <div style="width:max-content;">
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">العمق: 16.5</h3>
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">الوزن (كغ): 21</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 d-flex justify-content-center flex-dir-column">
                        <img class="m-2" src="{{asset('images/sink-10.png')}}" style="max-width: 100%;"/>
                        <div class="row justify-content-evenly">
                            <div style="width:max-content;">
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">ST3 :الموديل</h3>
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">الطول: 51</h3>
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">العرض: 41</h3>
                            </div>
                            <div style="width:max-content;">
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">العمق: 15.5</h3>
                                <h3 class="my-1 dir-ltr text-align-right" style="color:rgb(96, 97, 97);">الوزن (كغ): 12.5</h3>
                            </div>
                        </div>
                    </div>
				</div>
			</div> <!-- End row -->
		</div> <!-- End container -->
		<img style="padding-top:60px;width: 100vw;" src="{{asset('images/blue-footer.png')}}"/>
	</section> <!-- End section -->
@endsection