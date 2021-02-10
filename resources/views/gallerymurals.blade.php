@extends('layouts/main')
@section('preheader')
<img style="width:100vw;" src="{{asset('images/blue-footer.png')}}"/>
@endsection

@section('page')
<style>
     /* Style the Image Used to Trigger the Modal */
#myImg1, #myImg2, #myImg3 {
  cursor: pointer;
  transition: 0.3s;
}

#myImg1:hover, #myImg2:hover, #myImg3:hover {opacity: 0.7;}

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

/* Add Animation - Zoom in the Modal */
.modal-content, #caption {
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
<section class="service-2 section pb-0" style="overflow-x:hidden;position:relative;margin-top: 140px;">
		<div class="container">
			<div class="row">

				<div class="col-12">
					<!-- section title -->
					<div class="title text-right">
						<div style="position:absolute;top:29px;right:-500px;width:500px;height:2px;background:#8d8d8d;"></div>
						<div style="position:absolute;top:29px;left:-500px;width:500px;height:2px;background:#8d8d8d;"></div>
						<h2 style="color:rgb(75, 151, 205);">جداريات</h2>
					</div>
					<!-- /section title -->
                </div>
                
                <div class="galleryslider row mx-0 w-100 justify-content-center">
                    <div>
                        <img id="myImg1" src="{{asset('images/gallery-01.png')}}" class="m-2" style="width:100%;max-width:300px" />
                        <div id="myModal1" class="modal">
                            <span class="close" id="close1">&times;</span>
                            <img class="modal-content" id="img1" />
                        </div>
                    </div>
                    <div>
                        <img id="myImg2" src="{{asset('images/gallery-01.png')}}" class="m-2" style="width:100%;max-width:300px" />
                        <div id="myModal2" class="modal">
                            <span class="close" id="close2">&times;</span>
                            <img class="modal-content" id="img2" />
                        </div>
                    </div>
                    <div>
                        <img id="myImg3" src="{{asset('images/gallery-01.png')}}" class="m-2" style="width:100%;max-width:300px" />
                        <div id="myModal3" class="modal">
                            <span class="close" id="close3">&times;</span>
                            <img class="modal-content" id="img3" />
                        </div>
                    </div>
                </div> 
			</div> <!-- End row -->
		</div> <!-- End container -->
		<img style="padding-top:60px;width: 100vw;" src="{{asset('images/blue-footer.png')}}"/>
	</section> <!-- End section -->
@endsection