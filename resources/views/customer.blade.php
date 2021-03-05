@extends('layouts/main')
@section('preheader')
<img style="width:100vw;" src="{{asset('images/grey-footer.png')}}"/>
@endsection

@section('page')

<div style="display: flex; flex-direction:column;position:fixed;height:100vh;align-items:center;left:30px;top:0;justify-content:center;color:rgb(197,197,197);z-index: 999999;">
    <div style="background:rgb(197,197,197);height:80px;width:2px;" class="my-1"></div>
    <a href="https://www.instagram.com/bcmi_official/" target="_blank" style="color:rgb(197,197,197);"><i class="fa fa-instagram my-1"></i></a>
    <a href="https://www.facebook.com/Albadaha-البداهة-107187900991152/" target="_blank" style="color:rgb(197,197,197);"><i class="fa fa-facebook my-1"></i></a>
    <a href="https://twitter.com/bcmi_official?lang=en" target="_blank" style="color:rgb(197,197,197);"><i class="fa fa-twitter my-1"></i></a>
</div>
<section class="service-2 section pb-0" style="overflow-x:hidden;position:relative;margin-top: 140px;">
		<div class="container">
			<div class="row">

				<div class="col-12">
					<!-- section title -->
					<div class="title text-right pb-3">
						<div style="position:absolute;top:29px;right:-500px;width:500px;height:2px;background:#8d8d8d;"></div>
						<div style="position:absolute;top:29px;left:-500px;width:500px;height:2px;background:#8d8d8d;"></div>
						<h2 style="color:rgb(144, 144, 144);">الأسئلة الشائعة</h2>
					</div>
					<!-- /section title -->
				</div>
				<div class="row mx-0">
					<div class="col-12">
                        <h3 class="text-right" style="color:rgb(70, 69, 71);">من هي شركة البداهة؟</h3>
						<p class="text-right text-black">
                        نشأت بشراكة استثمارية (سعودية-كندية)، وذلك عام 2000م، حيث بدأت الشركة كمصنع للأسطح الصلبة فقط و تطوّرت الشركة لامتلاك عدّة علامات تجارية ، من أهم هذه العلامات هي "جولد ستون®" ، "Gold Stone®"  وهي من أشهر العلامات التجارية في المملكة العربية السعودية.
                        </p>
					</div>
					<div class="col-12 mt-4">
                        <h3 class="text-right" style="color:rgb(70, 69, 71);">أين تتواجد فروعكم وكيفية التواصل؟</h3>
						<p class="text-right text-black">
                        المقر الرئيــسي: المملكة العربية الســعودية – جـدة – طريق الهجرة السريع (عسفان) 
                        <br />
                        هاتف : 0606 290 012 
                        <br />
                        » مبيعــات المشــاريع:   
                        <br />
                        المنطقة الغربية  والجنوبية  : 054 488 0010
                        <br />
                        المنطقة الوسطى والشرقية : 0500164993
                        <br />
                        باقي مدن المملكة: جوال: 0544104104
                        <br />
                        » الفروع والوكلاء الدوليين:
                        <br />
                        الإمـارات العـربية المتحدة – دبي: جوال      0032 120 56 971 +                             
                        <br />
                        المملكة الأردنية الهاشمية – عمان وكيل: جوال       6213 552 78 962 +  
                        <br />
                        مملكة البحرين – المنامة وكيل: جوال      97333624450 +
                        </p>
					</div>
					<div class="col-12 mt-4">
                        <h3 class="text-right" style="color:rgb(70, 69, 71);">ماهو الرخام الصناعي وماهي مميزاته؟</h3>
						<p class="text-right text-black"> 
                        هو منتج بديل للرخام الطبيعي، يتميّز بالمتانة والصلابة والقوة التي تضمن عدم تعرضه للكسر، كما يتميّز أيضًا بأنه منتج عملي، متوفِّر بطيف واسع من الألوان التي ترضي جميع الأذواق، بالإضافة إلى انه المنتج الموصى به لدى العديد من الهيئات الصحية كونه يعد منتجًا صديقًا للبيئة.
                        </p>
                    </div>
					<div class="col-12 mt-4">
                        <h3 class="text-right" style="color:rgb(70, 69, 71);">هل يوجد ضمان؟</h3>
						<p class="text-right text-black">
                        ضمان 10 سنوات للأسطح الصلبة المركبة في المنزل والمكاتب والمحلات التجارية
                        <br />
                        •	ضمان 3 سنوات للأسطح الصلبة المركبة في الفنادق والمطاعم
                        <br />
                        •	ضمان سنة واحدة للأسطح الصلبة المركبة في المدراس والمستشفيات والمشاريع.
                        </p>
					</div>
					<div class="col-12 mt-4">
                        <h3 class="text-right" style="color:rgb(70, 69, 71);">كيف يمكنني استخدامه والمحافظة عليه؟</h3>
						<p class="text-right text-black">
                        -ينصح باستعمال الماء والصابون وتوفير محلول من النشادر (الأمونيا) المخفف والمسح بقطعة قماش مبللة بالمحلول ثم الشطف بالماء والتجفيف الجيد.
                        <br />
                        -تجنب استخدام أدوات القشط الحادة.
                        <br />
                        -نوصي بتصريف الماء بشكل كامل ثم التجفيف بشكل جيد لمنع ظاهرة التكلس الناتجة عن الماء العسر.
                        <br />
                        -لإزالة البقع العنيدة يمكن استخدام منظفات أقوى للتعامل معها أو رش البودرة المبيضة وتركها عدة دقائق قبل مسح آثارها بقطعة قماش ناعمة بحركة دائرية وشطفها بالماء وتجفيف المنطقة بشكل كامل وجيد.
                        <br />
                        -للحماية من التلف ننصح بعدم وضع المقلاة أو اواني الطبخ بعد رفعه عن الموقد على السطح مباشرة.
                    </p>
					</div>
					<div class="col-12 mt-4">
                        <h3 class="text-right" style="color:rgb(70, 69, 71);">ماهي منتجاتكم؟</h3>
						<p class="text-right text-black">
                        -مطـابـخ
                        <br />
                        -كاونترات
                        <br />
                        -ديكورات المغاسل: التقليدية والعصرية
                        <br />
                        -الإكساءات الجدارية والأعمدة.
                        </p>
					</div>
					<div class="col-12 mt-4">
                        <h3 class="text-right" style="color:rgb(70, 69, 71);"> مالفرق بين الرخام الطبيعي والرخام الصناعي؟</h3>
						<p class="text-right text-black">
                        الرخام الصناعي هو مادة تشبه فى شكلها الرخام الطبيعي ، و هذا النوع من الرخام يتم تصنيعه بشكل خاص لتجنب السلبيات التي قد تجدها فى الرخام الطبيعي ، و من أهم هذه السلبيات أن الرخام الطبيعي قد يتغير لونه أو يتعرض للكسر أو الإنكماش ، أما عن طريقة تصنيع هذا النوع من الرخام فيتم عن طريق خلط بعض المواد الكيميائية مثل بوليستر ريزن و غيرها من المواد ، مع الحرص على أن تكون بنسب معينة ، و يتم استخدام هذا النوع من الرخام فى تجهيزات الحمامات.    و المراحيض فضلا عن  المطابخ وبعض المستلزمات الديكورية 					
                    </div>
					<div class="col-12 mt-4">
                        <h3 class="text-right" style="color:rgb(70, 69, 71);">أين يتم تصنيع الرخام الخاص بشركة البداهة؟</h3>
						<p class="text-right text-black">
                        تفخر شركة البداهة أن منتجاتها وطنية 100% حيث تمتلك شركة البداهة أحد أكبر مصانع الرخام الصناعي في الشرق الأوسط ضمن مجمع صناعي خاص بالشركة في المنطقة الصناعية بعسفان – منطقة مكة المكرمة.  
                    </div>
					<div class="col-12 mt-4">
                        <h3 class="text-right" style="color:rgb(70, 69, 71);">هل بإمكاني فك ونقل الرخام الصناعي ؟</h3>
						<p class="text-right text-black">
                        نعم يمكنك ذلك. ويمكنك التواصل معنا لتقديم خدمة طلب نقل الرخام .
                    </div>
					<div class="col-12 mt-4">
                        <h3 class="text-right" style="color:rgb(70, 69, 71);">ماهي نسبة امتصاصه للرطوبة و هل يمكن وضعه في دورات المياه؟</h3>
						<p class="text-right text-black">
                        نعم, حيث أن المنتج موصى به للإستخدامات الخدمية بشكل كبير كما انه خيار ممتاز لمحبي الألوان المختلفة والبراقة
                    </div>
				</div>

                <div class="col-12 mt-5">
                    <!-- section title -->
                    <div class="title text-right mt-4">
                        <div class="mt-4" style="position:absolute;top:29px;right:-500px;width:500px;height:2px;background:#8d8d8d;"></div>
                        <div class="mt-4" style="position:absolute;top:29px;left:-500px;width:500px;height:2px;background:#8d8d8d;"></div>
                        <h2 style="color:rgb(144, 144, 144);">الاستفسارات والشكاوى</h2>
                        <h3 style="color:rgb(144, 144, 144);">للاستفسارات والشكاوى يسعدنا تواصلكم مع خدمة العملاء:</h3>
                    </div>
                    <!-- /section title -->
                    
					<div class="col-12 mt-4">
						<p class="text-right text-black">
                            البريد الإلكتروني: customer.service@albadaha.com
                        </p>
						<p class="text-right text-black">
                        هاتف :٠٦٠٦ ٢٩٠ ١٢ ٠٠٩٦٦
                        </p>
					</div>
                </div>
			</div> <!-- End row -->
		</div> <!-- End container -->
		<img style="padding-top:60px;width: 100vw;" src="{{asset('images/grey-footer.png')}}"/>
	</section> <!-- End section -->
@endsection