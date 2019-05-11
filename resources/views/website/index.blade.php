<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="description" content="" />
<meta name="author" content="" />
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<![endif]-->
<title>أكاديمية مصر العربية</title>
<!-- BOOTSTRAP CORE CSS -->
<link href="website/css/bootstrap.css" rel="stylesheet" />
<!-- ION ICONS STYLES -->
<link href="website/css/ionicons.css" rel="stylesheet" />
<!-- FONT AWESOME ICONS STYLES -->
<link href="website/css/font-awesome.css" rel="stylesheet" />
<!-- FANCYBOX POPUP STYLES -->
<link href="website/js/source/jquery.fancybox.css" rel="stylesheet" />
<!-- STYLES FOR VIEWPORT ANIMATION -->
<link href="website/css/animations.min.css" rel="stylesheet" />
<!-- CUSTOM CSS -->
<link href="website/css/style-green.css" rel="stylesheet" />

<!--begin::Web font -->
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
<link href="https://fonts.googleapis.com/css?family=Changa:500|El+Messiri|Harmattan|Mada:600|Tajawal:700" rel="stylesheet">

<style>
#success_message{ display: none;}
</style>
</head>
<script>
  $(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            first_name: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please supply your first name'
                    }
                }
            },
             last_name: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Please supply your last name'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your email address'
                    },
                    emailAddress: {
                        message: 'Please supply a valid email address'
                    }
                }
            },
            phone: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your phone number'
                    },
                    phone: {
                        country: 'US',
                        message: 'Please supply a vaild phone number with area code'
                    }
                }
            },
            address: {
                validators: {
                     stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Please supply your street address'
                    }
                }
            },
            city: {
                validators: {
                     stringLength: {
                        min: 4,
                    },
                    notEmpty: {
                        message: 'Please supply your city'
                    }
                }
            },
            state: {
                validators: {
                    notEmpty: {
                        message: 'Please select your state'
                    }
                }
            },
            zip: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your zip code'
                    },
                    zipCode: {
                        country: 'US',
                        message: 'Please supply a vaild zip code'
                    }
                }
            },
            comment: {
                validators: {
                      stringLength: {
                        min: 10,
                        max: 200,
                        message:'Please enter at least 10 characters and no more than 200'
                    },
                    notEmpty: {
                        message: 'Please supply a description of your project'
                    }
                    }
                }
            }
        })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});


</script>
<body data-spy="scroll" data-target="#menu-section">
<!--MENU SECTION START-->
<div class="navbar navbar-inverse navbar-fixed-top scroll-me" id="menu-section" >
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#">
 أكاديمية مصر العربية للعلوم

</a dir="rtl">
</div>
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav navbar-right">
<li><a href="#contact">تواصل معنا</a></li>
<li><a href="#services">خدماتنا</a></li>
<li><a href="#pricing">الدورات التدريبية</a></li>
<li><a href="#work">أعمالنا</a></li>
<li><a href="#team">فريق العمل</a></li>
<li><a href="#grid">بادر بالحجز</a></li>
<li><a href="#home">الصفحة الرئيسية</a></li>
</ul>
</div>

</div>
</div>
<!--MENU SECTION END-->
<!--HOME SECTION START-->
<div id="home" >
<div class="container">
<div class="row">
<div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 ">
<div id="carousel-slider" data-ride="carousel" class="carousel slide  animate-in" data-anim-type="fade-in-up">

<div class="carousel-inner">
<div class="item active">

<h3>

أكاديمية تعليمية للتدريب وتأهيل الشباب إلي سوق العمل
<br/>
( تمريض - صحافة وإعلام - سياحة - تنمية بشرية - مساحة - حاسب اَلي )
</h3>
<p>
Academic, education, training, development, job creation and youth rehabilitation for the labor market
<br/>
(Nursing - Tourism - Area - Computer - Press and Information - Human Development)
</p>
</div>
<div class="item">
<h3>
من خلال أكاديمية مصر العربية للعلوم تمتع بشهادات دولية معتمدة تستطيع توثيقها من الخارجية ومن الجامعات المصرية
</h3>
<p>
Academic, education, training, development, job creation and youth rehabilitation for the labor market
<br/>
(Nursing - Tourism - Area - Computer - Press and Information - Human Development)
</p>
</div>

</div>


</div>


</div>
</div>
<div class="row animate-in" data-anim-type="fade-in-up">
<div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-8 col-lg-offset-2 scroll-me">


<p >
بادر بالحجز الاَن وتمتع بكافة العروض وأفضل الخصومات

</p>
<div class="social">
<a href="#" class="btn button-custom btn-custom-one" ><i class="fa fa-facebook "></i></a>
<a href="#" class="btn button-custom btn-custom-one" ><i class="fa fa-twitter"></i></a>
<a href="#" class="btn button-custom btn-custom-one" ><i class="fa fa-google-plus "></i></a>
<a href="#" class="btn button-custom btn-custom-one" ><i class="fa fa-linkedin "></i></a>
<a href="#" class="btn button-custom btn-custom-one" ><i class="fa fa-pinterest "></i></a>
<a href="#" class="btn button-custom btn-custom-one" ><i class="fa fa-github "></i></a>
</div>
<a href="#services" class=" btn button-custom btn-custom-two">شاهد قائمة الخدمات </a>
</div>
</div>
</div>

</div>
<!--HOME SECTION END-->
<!--SERVICE SECTION START-->
<section id="services" >
<div class="container">
<div class="row text-center header">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 animate-in" data-anim-type="fade-in-up">
<h3>عن خدماتنا</h3>
<hr />
</div>
</div>

<div class="row animate-in" data-anim-type="fade-in-up">
    @foreach ($services as $service)
        <center>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="services-wrapper"dir="rtl">
                    <i class="ion-document"></i>
                    <h3 dir="rtl">{{ $service->title }}</h3>
                    {{str_limit($service->description , 90)}}
                </div>
            </div>
        </center>
    @endforeach
</div>

</div>
</section>
<!--SERVICE SECTION END-->
<!--PRICING SECTION START-->
<section id="pricing" >
<div class="container">
    <div class="row text-center header animate-in" data-anim-type="fade-in-up">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h3 dir="rtl">بادر بالحجز</h3>
            <hr />
        </div>
    </div>

    <div class="row pad-bottom animate-in" data-anim-type="fade-in-up">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
            <div class="row db-padding-btm db-attached">
                @foreach ($courses as $course)
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 text-center">
                        <div class="light-pricing">
                            <div class="price">
                                <span>{{ $course->price }} L.E</span>
                                <small>{{ $course->time }}</small>
                            </div>
                            <div class="type" dir="rtl">
                                    {{ $course->name }}
                            </div>
                            <ul>
                                <li><i class="glyphicon glyphicon-print"></i>{{ $course->degree }} </li>
                                <li><i class="glyphicon glyphicon-time"></i>مدة التدريب: {{ $course->time }}</li>
                                <li><i class="glyphicon glyphicon-trash"></i>{{ $course->documentation }}</li>
                            </ul>
                            <div class="pricing-footer">
                                <a href="#" class="btn button-custom btn-custom-one">BOOK ORDER</a>
                            </div>
                        </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
</section>
<!--PRIICING SECTION END-->
<!--WORK SECTION START-->
<section id="work" >
    <div class="container">
        <div class="row text-center header animate-in" data-anim-type="fade-in-up">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h3 dir="rtl">عن أعمالنا</h3>
                <hr />
            </div>
        </div>

        <div class="row text-center animate-in" data-anim-type="fade-in-up" >
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pad-bottom">
                <div class="caegories"dir="rtl">
                    <a href="#" data-filter="*" class="active btn btn-custom btn-custom-two btn-sm">All</a>
                    <a href="#" data-filter=".تمريض" class="btn btn-custom btn-custom-two btn-sm">دورة التمريض</a>
                    <a href="#" data-filter=".مساحه" class="btn btn-custom btn-custom-two btn-sm">دورة المساحة</a>
                    <a href="#" data-filter=".حاسب_الي" class="btn btn-custom btn-custom-two btn-sm">دورة الحاسب الاَلي</a>
                    <a href="#" data-filter=".تنميه_بشريه" class="btn btn-custom btn-custom-two btn-sm" >دورة التنمية البشرية</a>
                    <a href="#" data-filter=".صحافه" class="btn btn-custom btn-custom-two btn-sm" >دورة الصحافة</a>
                </div>
            </div>
        </div>

        <div class="row text-center animate-in" data-anim-type="fade-in-up" id="work-div">
            @foreach ($works as $work)
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 {{ $work->section }}">
                    <div class="work-wrapper">

                        <a class="fancybox-media" title="{{ $work->description }}" href="{{ url('Admin/images/works/'.$work->image) }}">

                        <img src="{{ url('Admin/images/works/'.$work->image) }}" class="img-responsive img-rounded" alt="" />
                        </a>

                        <h4 dir="rtl">{{ $work->title }}</h4>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>

<!--WORK SECTION END-->
<!--TEAM SECTION START-->
<section id="team" >
<div class="container">
    <div class="row text-center header animate-in" data-anim-type="fade-in-up">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h3 dir="rtl">عن فريق العمل</h3>
            <hr />
        </div>
    </div>

    <div class="row animate-in" data-anim-type="fade-in-up">
        @foreach ($teams as $team)
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <div class="team-wrapper">
                    <div class="team-inner" style="background-image: url('Admin/images/team/{{ $team->image }}')" >
                        <a href=""> <i class="fa fa-twitter" ></i></a>
                    </div>
                    <div class="description">
                        <h3 dir="rtl">{{ $team->name }}</h3>
                        <h5 dir="rtl">
                            <strong>{{ $team->position }}</strong>
                        </h5>
                        <p>
                            {{ str_limit($team->description , 70) }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div>
</section>
<!--TEAM SECTION END-->
<!--GRID SECTION START-->
<section id="grid" >
<div class="container">
<div class="row text-center header animate-in" data-anim-type="fade-in-up">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

<h3 dir="rtl">بادر بالحجز الاَن </h3>
<hr />

</div>
</div>
<div class="row pad-bottom animate-in" data-anim-type="fade-in-up">

<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
<div dir="rtl" class="container">

    @if (Session::has('success'))
        <script>
            alert('تم الارسال بنجاح');
        </script>
    @endif

    <form class="well form-horizontal" action="{{ url('send_email') }}" method="get"  id="contact_form">
<fieldset>

<!-- Form Name -->


<!-- Text input-->

<div dir="rtl" class="form-group">
  <label dir="rtl" class="col-md-4 control-label">الاسم الأول</label>
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="first_name" placeholder="الاسم الأول" class="form-control" required type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >الاسم الأخير</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="last_name" placeholder="الاسم الأخير" class="form-control" required  type="text">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">البريد الإلكتروني</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="البريد الإلكتروني" class="form-control" required  type="email">
    </div>
  </div>
</div>


<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">رقم الهاتف</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="phone_number" placeholder="رقم الهاتف" class="form-control" required type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">العنوان</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="address" placeholder="العنوان" class="form-control" required type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">المدينة</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="city" placeholder="المدينة" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Select Basic -->

<div class="form-group">
  <label class="col-md-4 control-label">الكورس</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="course" class="form-control selectpicker" required >
        <option value="دورة المساحة">دورة المساحة</option>
        <option value="دورة السياحة والفنادق">دورة السياحة والفنادق</option>
        <option value="دورة التنمية البشرية" >دورة التنمية البشرية</option>
        <option value="دورة ICDL" >دورة ICDL</option>
        <option value="دورة التمريض" >دورة التمريض</option>
        <option value="دورة الصحافة والإعلام" >دورة الصحافة والإعلام</option>
        <option value="دورة اللغة الإنجليزية" >دورة اللغة الإنجليزية</option>
        <option value="دورة الرسم" >دورة الرسم</option>
        <option value="دورة النحت" >دورة النحت</option>
        <option value="دورة برمجة المواقع"> دورة برمجة المواقع</option>
        <option value="دورة الأندرويد" >دورة الأندرويد</option>
        <option value="دورة هندسة " >دورة هندسة الشبكات</option>
    </select>
  </div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">رقم الكوبون</label>
    <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
            <input name="coupon_number" placeholder="رقم الكوبون" class="form-control"  type="text">
        </div>
    </div>
</div>

<div class="form-group">
        <label class="col-md-4 control-label">المؤهل الدراسي</label>
          <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-graduation-cap"></i></span>
                  <input name="graduate" placeholder="المؤهل الدراسي" class="form-control"  type="text">
              </div>
          </div>
      </div>

<!-- Text input-->


<!-- radio checks -->
 <div dir="rtl" class="form-group">
    <label class="col-md-4 control-label">هل لديك لاب توب؟</label>
    <div class="col-md-4">
        <label style="margin:0px 20px;">
            <input style="width:20px;height:20px;" type="radio" name="laptop" value="نعم" /></br> نعم
        </label>
        <label style="margin:0px 20px;">
            <input style="width:20px;height:20px;" type="radio" name="laptop" value="لا" /></br> لا
        </label>
    </div>
</div>

<!-- Text area -->

<div class="form-group">
  <label class="col-md-4 control-label">شاركنا مقترحاتك</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
        	<textarea class="form-control" name="opinion" placeholder="شاركنا مقترحاتك" rows="5"></textarea>
  </div>
  </div>
</div>

<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-primary btn-lg" >Send <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->
</div>
</div>
</section>
<!--GRID SECTION END-->
<!--CONTACT SECTION START-->
<section id="contact" >
<div class="container">
<div class="row text-center header animate-in" data-anim-type="fade-in-up">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

<h3 dir="rtl">التواصل معنا </h3>
<hr />

</div>
</div>

<div class="row animate-in" data-anim-type="fade-in-up">

<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
<div class="contact-wrapper">
<h3 dir="rtl">تابعنا عبر مواقع التواصل </h3>
<p dir="rtl">
يمكنك متابعتنا عبر مواقع التواصل ليصلك كل جديد عنا فقط كن علي مسافة قريبة منا
</p>
<div class="social-below">
<a href="#" class="btn button-custom btn-custom-two" > Facebook</a>
<a href="#" class="btn button-custom btn-custom-two" > Twitter</a>
<a href="#" class="btn button-custom btn-custom-two" > Google +</a>
</div>
</div>

</div>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
<div class="contact-wrapper">
<h3 dir="rtl">للتواصل السريع</h3>
<h4><strong>Email : </strong> info@masralarabia.com </h4>
<h4><strong>Call : </strong> +02 0120 357 2747 </h4>
<h4><strong>Skype : </strong> Masr AlArabia </h4>
</div>

</div>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
<div class="contact-wrapper">
<h3 dir="rtl">العنوان :  </h3>
<h4 dir="rtl">3 شارع علاء الدين حى المهندسين امام جامعه الزقازيق بجوار قاعة علاء الدين</h4>
<div class="footer-div" >
&copy; 2019 Design&development | <a href="http://www.appropes.com" target="_blank" >by Appropes</a>
</div>
</div>

</div>

</div>


</div>
</section>
<!--CONTACT SECTION END-->

<!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME -->
<!-- CORE JQUERY -->
<script src="website/js/jquery-1.11.1.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="website/js/bootstrap.js"></script>
<!-- EASING SCROLL SCRIPTS PLUGIN -->
<script src="website/js/vegas/jquery.vegas.min.js"></script>
<!-- VEGAS SLIDESHOW SCRIPTS -->
<script src="website/js/jquery.easing.min.js"></script>
<!-- FANCYBOX PLUGIN -->
<script src="website/js/source/jquery.fancybox.js"></script>
<!-- ISOTOPE SCRIPTS -->
<script src="website/js/jquery.isotope.js"></script>
<!-- VIEWPORT ANIMATION SCRIPTS   -->
<script src="website/js/appear.min.js"></script>
<script src="website/js/animations.min.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="website/js/custom.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>
</html>
