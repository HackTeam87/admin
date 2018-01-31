<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Animate.css -->
<link rel="stylesheet" href="{{ asset('mysite/css/animate.css') }}">
<!-- Icomoon Icon Fonts-->
<link rel="stylesheet" href="{{ asset('mysite/css/icomoon.css') }}">
<!-- Simple Line Icons -->
<link rel="stylesheet" href="{{ asset('mysite/css/simple-line-icons.css') }}">
<!-- Owl Carousel -->
<link rel="stylesheet" href="{{ asset('mysite/css/owl.carousel.min.css') }}">

<link rel="stylesheet" href="{{ asset('mysite/css/owl.theme.default.min.css') }}">
<!-- Bootstrap  -->
<link rel="stylesheet" href="{{ asset('mysite/css/bootstrap.css') }}">

<!--
Default Theme Style
You can change the style.css (default color purple) to one of these styles

1. pink.css
2. blue.css
3. turquoise.css
4. orange.css
5. lightblue.css
6. brown.css
7. green.css

-->

<!-- Styleswitcher ( This style is for demo purposes only, you may delete this anytime. ) -->
<link rel="stylesheet" href="{{ asset('mysite/css/style.css') }}">
<!-- End demo purposes only -->


<style>
    /* For demo purpose only */

    /* For Demo Purposes Only ( You can delete this anytime :-) */
    #colour-variations {
        padding: 10px;
        -webkit-transition: 0.5s;
        -o-transition: 0.5s;
        transition: 0.5s;
        width: 140px;
        position: fixed;
        left: 0;
        top: 100px;
        z-index: 999999;
        background: #fff;
        /*border-radius: 4px;*/
        border-top-right-radius: 4px;
        border-bottom-right-radius: 4px;
        -webkit-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
        -moz-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
        -ms-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
        box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
    }
    #colour-variations.sleep {
        margin-left: -140px;
    }
    #colour-variations h3 {
        text-align: center;;
        font-size: 11px;
        letter-spacing: 2px;
        text-transform: uppercase;
        color: #777;
        margin: 0 0 10px 0;
        padding: 0;;
    }
    #colour-variations ul,
    #colour-variations ul li {
        padding: 0;
        margin: 0;
    }
    #colour-variations li {
        list-style: none;
        display: inline;
    }
    #colour-variations li a {
        width: 20px;
        height: 20px;
        position: relative;
        float: left;
        margin: 5px;
    }
    #colour-variations li a[data-theme="style"] {
        background: #6173f4;
    }
    #colour-variations li a[data-theme="pink"] {
        background: #f64662;
    }
    #colour-variations li a[data-theme="blue"] {
        background: #2185d5;
    }
    #colour-variations li a[data-theme="turquoise"] {
        background: #00b8a9;
    }
    #colour-variations li a[data-theme="orange"] {
        background: #ff6600;
    }
    #colour-variations li a[data-theme="lightblue"] {
        background: #5585b5;
    }
    #colour-variations li a[data-theme="brown"] {
        background: #a03232;
    }
    #colour-variations li a[data-theme="green"] {
        background: #65d269;
    }

    .option-toggle {
        position: absolute;
        right: 0;
        top: 0;
        margin-top: 5px;
        margin-right: -30px;
        width: 30px;
        height: 30px;
        background: #f64662;
        text-align: center;
        border-top-right-radius: 4px;
        border-bottom-right-radius: 4px;
        color: #fff;
        cursor: pointer;
        -webkit-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
        -moz-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
        -ms-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
        box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
    }
    .option-toggle i {
        top: 2px;
        position: relative;
    }
    .option-toggle:hover, .option-toggle:focus, .option-toggle:active {
        color:  #fff;
        text-decoration: none;
        outline: none;
    }
</style>
<!-- End demo purposes only -->


<!-- Modernizr JS -->

<script src="{{ asset('mysite/js/modernizr-2.6.2.min.js') }}"></script>
<!-- FOR IE9 below -->
<!--[if lt IE 9]>
<script src="{{ asset('mysite/js/respond.min.js') }}"></script>
<![endif]-->
