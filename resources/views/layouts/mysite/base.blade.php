
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Провайдер інтернет "Eurolan"</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
    <meta name="author" content="FREEHTML5.CO" />




    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

{{--//Style--}}
  @include('layouts.mysite.style')

</head>


<body>
{{--1//header--}}
<header role="banner" id="fh5co-header">
   @include('layouts.mysite.header')
</header>
{{--2//slider--}}
<div id="slider" data-section="home">
@include('layouts.mysite.slider')
</div>
{{--3//about--}}
<div id="fh5co-about-us" data-section="about">
   @include('layouts.mysite.about')
</div>

{{--//Slider--}}
<div id="fh5co-press" data-section="press">
    @include('layouts.mysite.product')
</div>
{{--7//pricing--}}
<div id="fh5co-pricing" data-section="pricing">
    @include('layouts.mysite.pricing')
</div>
{{--4//services--}}
<div id="fh5co-our-services" data-section="services">
@include('layouts.mysite.services')
</div>
{{--5//futures--}}
<div id="fh5co-features" data-section="features">
   @include('layouts.mysite.futures')
</div>
{{--6//happy clients--}}
<div id="fh5co-testimonials" data-section="testimonials">
   @include('layouts.mysite.clients')
</div>



{{--8//press releses--}}
{{--<div id="fh5co-press" data-section="press">--}}
    {{--@include('layouts.mysite.press')--}}



{{--9//footer--}}
<footer id="footer" role="contentinfo">
@include('layouts.mysite.footer')
</footer>

{{--//Script--}}
@include('layouts.mysite.script')

<!-- //button -->
<button class="up-button" title="Go To Top">
	<i class="fa fa-arrow-up" aria-hidden="true"></i>
</button>

</body>
</html>
