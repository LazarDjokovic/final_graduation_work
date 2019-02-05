<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
@include('partials._head')
<body>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->


@include('partials._header')

@yield('content')

@include('partials._footer')

<!-- Javascripts -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="{{asset('')}}/public/js/additional/jquery-1.9.1.min.js"><\/script>')</script>
<script src="{{asset('js/additional/bootstrap.min.js')}}"></script>
<script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script>
<script src="{{asset('js/additional/jquery.fitvids.js')}}"></script>
<script src="{{asset('js/additional/jquery.sequence-min.js')}}"></script>
<script src="{{asset('js/additional/jquery.bxslider.js')}}"></script>
<script src="{{asset('js/additional/main-menu.js')}}"></script>
<script src="{{asset('js/additional/template.js')}}"></script>

<script>

    $(document).ready(function() {

        var docHeight = $(window).height(); //screen size
        var footerHeight = $('.footer').height(); //footer size
        var footerTop = $('.footer').position().top + footerHeight;

        if (footerTop < docHeight) {
            $('.footer').css('margin-top', 10+ (docHeight - footerTop) + 'px');
        }

    });

</script>

</body>
</html>