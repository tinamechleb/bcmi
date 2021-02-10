@extends('layouts/main')
@section('preheader')
<img style="width:100vw;" src="{{asset('images/grey-footer.png')}}"/>
@endsection

@section('page')
<style>
    .col-4 p:last-child {
        margin-bottom: 0;
    }
    .send-button {
        border:2px solid #7a7a7a;color: rgb(70, 69, 71);border-radius: 30px;background: transparent;padding: 5px 30px;float:right;margin-top:2rem;transition:0.4s;font-size:17px;
    }
    .send-button:hover {
        border:2px solid #7a7a7a;color: white;border-radius: 30px;background: #7a7a7a;
    }

</style>

<div style="display: flex; flex-direction:column;position:fixed;height:100vh;align-items:center;left:30px;top:0;justify-content:center;color:rgb(197,197,197);">
    <div style="background:rgb(197,197,197);height:80px;width:2px;" class="my-1"></div>
    <i class="fa fa-instagram my-1"></i>
    <i class="fa fa-youtube-play my-1"></i>
    <i class="fa fa-facebook my-1"></i>
    <i class="fa fa-twitter my-1"></i>
</div>
<section class="service-2 section pb-0" style="overflow-x:hidden;position:relative;margin-top: 140px;">
		<div class="container">
			<div class="row">

				<div class="col-12">
					<!-- section title -->
					<div class="title text-right">
						<div style="position:absolute;top:29px;right:-500px;width:500px;height:2px;background:#8d8d8d;"></div>
						<div style="position:absolute;top:29px;left:-500px;width:500px;height:2px;background:#8d8d8d;"></div>
						<h2 style="color:rgb(144, 144, 144);">معلومات التواصل</h2>
					</div>
					<!-- /section title -->
				</div>
				<div class="row mx-0 mt-2">
					<div class="col-12">
                        <h3 class="text-right" style="color:rgb(70, 69, 71);">المقر الرئيــسي:</h3>
						<p class="text-right text-black">
                        المملكة العربية الســعودية – جـدة – طريق الهجرة (السريع عسفان)
                        <br />
                        صنـدوق بريـد: ١٢٦٤٤٤
                        <br />
                        الـرمـز البريـدي: ٢١٣٥٢
                        <br />
                        هاتف: ٠٦٠٤ ٢٩٠ ٠١٢
                        <br />
                        فاكس: ٢٩٢٠ ٢٨٨ ٠١٢
                        <br />
                        الرقم الموحد: ٩٢٠٠٠٢٩٦٤
                        </p>
					</div>
					<div class="col-12 mt-4">
                        <h3 class="text-right" style="color:rgb(70, 69, 71);">مبيعــات المشــاريع:</h3>
						<p class="text-right text-black"> 
                        المنطقة الغربية والجنوبية : ١١١٦ ٢٤٧ ٠٥٦ 
                        <br />
                        المنطقة الوسطى والشرقية: ٤٩٠١ ٥٦٨ ٠٥٤
                        </p>
					</div>
					<div class="col-12 mt-4">
                        <h3 class="text-right" style="color:rgb(70, 69, 71);">مبيعات الألواح:</h3>
						<p class="text-right text-black"> 
                        الرياض: ٦٠٦٤ ٤٣٠ ٠٥٤
                        <br />
                        خميس مشيط: ٤٦٩٥ ٧٤٣ ٠٥٥
                        <br />
                        باقي مدن المملكة: ٤١٠٤ ٤١٠ ٠٥٤
                    </div>
					<div class="col-12 mt-4">
                        <h3 class="text-right" style="color:rgb(70, 69, 71);">الفروع والوكلاء الدوليين:</h3>
						<p class="text-right text-black">
                        الإمـارات العـربية المتحدة – دبي: ٠٠٣٢ ١٢٠ ٥٦ ٩٧١ +
                        <br />
                        المملكة الأردنية الهاشمية – عمان وكيل: ٦٢١٣ ٥٥٢ ٧٨ ٩٦٢ +
                        <br />
                        مملكة البحرين – المنامة وكيل: ٩٧٣٣٣٦٢٤٤٥٠ +
                        <br />
                        سلطنة عمان – مسقط وكيل: ٩٦٨٩٦٤٤٩٤٩٩+
                        </p>
					</div>
					<div class="col-12 mt-4">
                        <h3 class="text-right" style="color:rgb(70, 69, 71);">الحسابات البنكية:</h3>
						<p class="text-right text-black">
                        حساب البنك الأهلي: ١٣٤٧٧٧٧٧٠٠٠١٠١
                        <br />
                        حساب البنك الراجحي: ٢٢٣٦٠٨٠١٠١١٥٠٥٤
                        </p>
					</div>
					<div class="col-12 mt-4">
                        <h3 class="text-right" style="color:rgb(70, 69, 71);">خدمة العملاء:</h3>
						<p class="text-right text-black">
                        في حال وجود أي ملاحظة على المنتج بعد التركيب يمكنك الاتصال بخدمة العملاء￼￼ في الشــركة فســتجدون فريق الصيانة جاهز لتقديم ما يلزم وبأسرع وقت.
                        <br />
                        لا تتردد في الاتصال بنا فنحن في خدمتكم: الهاتف الموحد ٢٩٦٤ ٩٢٠٠٠
                        <br />
                        تحويلة رقم ٢٢٢
                        <br />
                        جوال: ٢٦٤٣ ٠٥٩ ٠٥٠
                        <br />
                        الموقع الإلكتروني: www.albadaha.com
                        <br />
                        البريد الإلكتروني: للإستعلام info@albadaha.com
                        <br />
                        خدمة العملاء: customer.service@albadaha.com
                        </p>
					</div>
					<div class="col-12 mt-4">
                        <h3 class="text-right" style="color:rgb(70, 69, 71);">حساب التواصل الإجتماعي:</h3>
						<p class="text-right text-black">
                            bcmi_official 
                            <i class="fa fa-instagram"></i> <i class="fa fa-twitter"></i>
                            <br />
                            albadaha 
                            <i class="fa fa-facebook"></i>
                        </p>
					</div>
				</div>

                <div class="col-12 mt-5">
                    <!-- section title -->
                    <div class="title text-right mt-4">
                        <div class="mt-4" style="position:absolute;top:29px;right:-500px;width:500px;height:2px;background:#8d8d8d;"></div>
                        <div class="mt-4" style="position:absolute;top:29px;left:-500px;width:500px;height:2px;background:#8d8d8d;"></div>
                        <h2 style="color:rgb(144, 144, 144);">يمكنكم مراسلتنا عبر تعبئة النموذج التالي</h2>
                    </div>
                    <!-- /section title -->
                    
					<form class="col-12 mt-4">
                        <h3 class="text-right mt-4" style="color:rgb(70, 69, 71);">الاسم الأول</h3>
                        <input name="first_name" type="text" class="col-12" style="border: 2px solid rgb(191,191,191);"/>
                        <h3 class="text-right mt-4" style="color:rgb(70, 69, 71);">اسم العائلة</h3>
                        <input name="last_name" type="text" class="col-12" style="border: 2px solid rgb(191,191,191);"/>
                        <h3 class="text-right mt-4" style="color:rgb(70, 69, 71);">البريد الالكتروني</h3>
                        <input name="email" type="email" class="col-12" style="border: 2px solid rgb(191,191,191);"/>
                        <h3 class="text-right mt-4" style="color:rgb(70, 69, 71);">الدولة</h3>
                        <input name="country" type="text" class="col-12" style="border: 2px solid rgb(191,191,191);"/>
                        <h3 class="text-right mt-4" style="color:rgb(70, 69, 71);">نص الرسالة</h3>
                        <textarea name="message" class="col-12" style="border: 2px solid rgb(191,191,191);height: 155px;"></textarea>
                        <input type="submit" class="send-button" style="" value="إرسال" />
					</form>
                </div>

                <div class="col-12 mt-5">
                    <!-- section title -->
                    <div class="title text-right mt-4">
                        <div class="mt-4" style="position:absolute;top:29px;right:-500px;width:500px;height:2px;background:#8d8d8d;"></div>
                        <div class="mt-4" style="position:absolute;top:29px;left:-500px;width:500px;height:2px;background:#8d8d8d;"></div>
                        <h2 style="color:rgb(144, 144, 144);">فروعنا</h2>
                    </div>
                    <!-- /section title -->

					<div class="">
                        <div class="row">
                            <div class="col-4 d-flex align-items-center justify-content-center flex-direction-column py-4" style="border-left: 1px solid rgb(197,197,197);border-bottom: 1px solid rgb(197,197,197);">
                                <h3 class="text-align-center">جدة</h3>
                                <h3 class="text-align-center" style="color:rgb(197,197,197);">المقر الرئيسي</h3>
                            </div>
                            <div class="col-4 d-flex align-items-center justify-content-center flex-direction-column py-4" style="border-left: 1px solid rgb(197,197,197);border-bottom: 1px solid rgb(197,197,197);">
                                <p>Tel: +966 12 290 0606</p>
                                <p>Tel: +966 12 290 0605</p>
                                <p>Fax: +966 12 288 2920</p>
                            </div>
                            <div class="col-4 d-flex align-items-center justify-content-center flex-direction-column py-4" style="border-bottom: 1px solid rgb(197,197,197);">
                                <p><a class="underline">الموقع</a></p>
                            </div>

                            <div class="col-4 d-flex align-items-center justify-content-center flex-direction-column py-4" style="border-left: 1px solid rgb(197,197,197);border-bottom: 1px solid rgb(197,197,197);">
                                <h3 class="text-align-center">الرياض</h3>
                            </div>
                            <div class="col-4 d-flex align-items-center justify-content-center flex-direction-column py-4" style="border-left: 1px solid rgb(197,197,197);border-bottom: 1px solid rgb(197,197,197);">
                                <p>Mob: +966 54 430 6064</p>
                                <p>Mob: +966 50 949 8430</p>
                                <p>Fax: +966 11 242 8400</p>
                                <p>Mob: +966 50 222 0195</p>
                            </div>
                            <div class="col-4 d-flex align-items-center justify-content-center flex-direction-column py-4" style="border-bottom: 1px solid rgb(197,197,197);">
                                <p><a class="underline">الموقع</a></p>
                            </div>

                            <div class="col-4 d-flex align-items-center justify-content-center flex-direction-column py-4" style="border-left: 1px solid rgb(197,197,197);border-bottom: 1px solid rgb(197,197,197);">
                                <h3 class="text-align-center">مكة المكرمة</h3>
                            </div>
                            <div class="col-4 d-flex align-items-center justify-content-center flex-direction-column py-4" style="border-left: 1px solid rgb(197,197,197);border-bottom: 1px solid rgb(197,197,197);">
                                <p>Mob: +966 50 462 7863</p>
                            </div>
                            <div class="col-4 d-flex align-items-center justify-content-center flex-direction-column py-4" style="border-bottom: 1px solid rgb(197,197,197);">
                                <p><a class="underline">الموقع</a></p>
                            </div>

                            <div class="col-4 d-flex align-items-center justify-content-center flex-direction-column py-4" style="border-left: 1px solid rgb(197,197,197);border-bottom: 1px solid rgb(197,197,197);">
                                <h3 class="text-align-center">المدينة المنورة</h3>
                            </div>
                            <div class="col-4 d-flex align-items-center justify-content-center flex-direction-column py-4" style="border-left: 1px solid rgb(197,197,197);border-bottom: 1px solid rgb(197,197,197);">
                                <p>Tel: +966 14 8406797</p>
                                <p>Fax: +966 14 8406575</p>
                                <p>Mob: +966 50 430 5336</p>
                            </div>
                            <div class="col-4 d-flex align-items-center justify-content-center flex-direction-column py-4" style="border-bottom: 1px solid rgb(197,197,197);">
                                <p><a class="underline">الموقع</a></p>
                            </div>

                            <div class="col-4 d-flex align-items-center justify-content-center flex-direction-column py-4" style="border-left: 1px solid rgb(197,197,197);border-bottom: 1px solid rgb(197,197,197);">
                                <h3 class="text-align-center">المنطقة الشرقية</h3>
                            </div>
                            <div class="col-4 d-flex align-items-center justify-content-center flex-direction-column py-4" style="border-left: 1px solid rgb(197,197,197);border-bottom: 1px solid rgb(197,197,197);">
                                <p>Mob: +966 54 166 5524</p>
                            </div>
                            <div class="col-4 d-flex align-items-center justify-content-center flex-direction-column py-4" style="border-bottom: 1px solid rgb(197,197,197);">
                                <p><a class="underline">الموقع</a></p>
                            </div>

                            <div class="col-4 d-flex align-items-center justify-content-center flex-direction-column py-4" style="border-left: 1px solid rgb(197,197,197);border-bottom: 1px solid rgb(197,197,197);">
                                <h3 class="text-align-center">تبوك</h3>
                            </div>
                            <div class="col-4 d-flex align-items-center justify-content-center flex-direction-column py-4" style="border-left: 1px solid rgb(197,197,197);border-bottom: 1px solid rgb(197,197,197);">
                                <p>Tel: +966 14 423 9619</p>
                                <p>Mob: +966 556518681</p>
                            </div>
                            <div class="col-4 d-flex align-items-center justify-content-center flex-direction-column py-4" style="border-bottom: 1px solid rgb(197,197,197);">
                                <p><a class="underline">الموقع</a></p>
                            </div>

                            <div class="col-4 d-flex align-items-center justify-content-center flex-direction-column py-4" style="border-left: 1px solid rgb(197,197,197);border-bottom: 1px solid rgb(197,197,197);">
                                <h3 class="text-align-center">القصيم</h3>
                            </div>
                            <div class="col-4 d-flex align-items-center justify-content-center flex-direction-column py-4" style="border-left: 1px solid rgb(197,197,197);border-bottom: 1px solid rgb(197,197,197);">
                                <p>Mob: +966 54 201 3999</p>
                                <p>Mob: +966 56 654 0799</p>
                                <p>Mob: +966 58 120 3336</p>
                            </div>
                            <div class="col-4 d-flex align-items-center justify-content-center flex-direction-column py-4" style="border-bottom: 1px solid rgb(197,197,197);">
                                <p><a class="underline">الموقع</a></p>
                            </div>

                            <div class="col-4 d-flex align-items-center justify-content-center flex-direction-column py-4" style="border-left: 1px solid rgb(197,197,197);border-bottom: 1px solid rgb(197,197,197);">
                                <h3 class="text-align-center">خميس مشيط</h3>
                            </div>
                            <div class="col-4 d-flex align-items-center justify-content-center flex-direction-column py-4" style="border-left: 1px solid rgb(197,197,197);border-bottom: 1px solid rgb(197,197,197);">
                                <p>Mob: +966 55 743 4695</p>
                            </div>
                            <div class="col-4 d-flex align-items-center justify-content-center flex-direction-column py-4" style="border-bottom: 1px solid rgb(197,197,197);">
                                <p><a class="underline">الموقع</a></p>
                            </div>

                            <div class="col-4 d-flex align-items-center justify-content-center flex-direction-column py-4" style="border-left: 1px solid rgb(197,197,197);border-bottom: 1px solid rgb(197,197,197);">
                                <h3 class="text-align-center">دبي، الامارات العربية المتحدة</h3>
                            </div>
                            <div class="col-4 d-flex align-items-center justify-content-center flex-direction-column py-4" style="border-left: 1px solid rgb(197,197,197);border-bottom: 1px solid rgb(197,197,197);">
                                <p>Tel: +971 4 25 13621</p>
                                <p>Fax: +971 56120 0032</p>
                                <p>P.O.Box: 235218</p>
                            </div>
                            <div class="col-4 d-flex align-items-center justify-content-center flex-direction-column py-4" style="border-bottom: 1px solid rgb(197,197,197);">
                                <p><a class="underline">الموقع</a></p>
                            </div>

                            <div class="col-4 d-flex align-items-center justify-content-center flex-direction-column py-4" style="border-left: 1px solid rgb(197,197,197);">
                                <h3 class="text-align-center">عمان، الاردن</h3>
                            </div>
                            <div class="col-4 d-flex align-items-center justify-content-center flex-direction-column py-4" style="border-left: 1px solid rgb(197,197,197);">
                                <p>785526213 962+</p>
                            </div>
                            <div class="col-4 d-flex align-items-center justify-content-center flex-direction-column py-4">
                                <p><a class="underline">الموقع</a></p>
                            </div>
                        </div>
                    </div>
                </div>
			</div> <!-- End row -->
		</div> <!-- End container -->
		<img style="padding-top:60px;width: 100vw;" src="{{asset('images/grey-footer.png')}}"/>
	</section> <!-- End section -->
@endsection