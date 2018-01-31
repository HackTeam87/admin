
<!-- For demo purposes Only ( You may delete this anytime :-) -->
{{--<div id="colour-variations">--}}
{{--<a class="option-toggle"><i class="icon-gear"></i></a>--}}
{{--<h3>Preset Colors</h3>--}}
{{--<ul>--}}
{{--<li><a href="javascript: void(0);" data-theme="style"></a></li>--}}
{{--<li><a href="javascript: void(0);" data-theme="pink"></a></li>--}}
{{--<li><a href="javascript: void(0);" data-theme="blue"></a></li>--}}
{{--<li><a href="javascript: void(0);" data-theme="turquoise"></a></li>--}}
{{--<li><a href="javascript: void(0);" data-theme="orange"></a></li>--}}
{{--<li><a href="javascript: void(0);" data-theme="lightblue"></a></li>--}}
{{--<li><a href="javascript: void(0);" data-theme="brown"></a></li>--}}
{{--<li><a href="javascript: void(0);" data-theme="green"></a></li>--}}
{{--</ul>--}}
{{--</div>--}}
<!-- End demo purposes only -->


<!-- jQuery -->
<script src="{{ asset('mysite/js/jquery.min.js') }}"></script>
<!-- jQuery Easing -->
<script src="{{ asset('mysite/js/jquery.easing.1.3.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('mysite/js/bootstrap.min.js') }}"></script>
<!-- Waypoints -->
<script src="{{ asset('mysite/js/jquery.waypoints.min.js') }}"></script>
<!-- Owl Carousel -->
<script src="{{ asset('mysite/js/owl.carousel.min.js') }}"></script>
<!-- {{--//UpButton--}} -->
<script src="{{ asset('mysite/js/upbutton.js') }}"></script>


<!-- For demo purposes only styleswitcher ( You may delete this anytime ) -->
<script src="{{ asset('mysite/js/jquery.style.switcher.js') }}"></script>

<script>
    $(function(){
        $('#colour-variations ul').styleSwitcher({
            defaultThemeId: 'theme-switch',
            hasPreview: false,
            cookie: {
                expires: 30,
                isManagingLoad: true
            }
        });
        $('.option-toggle').click(function() {
            $('#colour-variations').toggleClass('sleep');
        });
    });
</script>
<!-- End demo purposes only -->

<!-- Main JS (Do not remove) -->
<script src="{{ asset('mysite/js/main.js') }}"></script>