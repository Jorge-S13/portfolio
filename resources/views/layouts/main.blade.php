<!DOCTYPE HTML>
<html lang="en" class="no-js">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>Rex — Clean & Minimal Portfolio HTML5 Template | Home - Slider</title>

    <!-- ============ Google Fonts ============ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

    <!-- CSS -->
    <!-- Flexslider -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/plugins/flexslider.css')}}">
    <!-- Font-Awesome 6 PRO-->
    <link rel="stylesheet" href="{{asset('assets/fonts/all.min.css')}}" />
    <!-- LightCase -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/plugins/lightcase.css')}}">
    <!-- SlickNav -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/plugins/slicknav.min.css')}}">
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/plugins/animate.min.css')}}">
    <!-- Bootstrap 5 -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/plugins/bootstrap.min.css')}}">
    <!-- Cube Portfolio -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/plugins/cubeportfolio.min.css')}}">
    <!-- Custom styles CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{asset('assets/images/favicon.png')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/slider/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/slider/fonts/font-awesome/css/font-awesome.css')}}">

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/slider/css/settings.css')}}">
    <!-- REVOLUTION LAYERS STYLES -->

    <style type="text/css">.hermes.tparrows{cursor:pointer;background:rgba(0,0,0,0.5);width:30px;height:110px;position:absolute;display:block;z-index:100}.hermes.tparrows:before{font-family:"revicons";font-size:15px;color:rgb(255,255,255);display:block;line-height:110px;text-align:center;  transform:translatex(0px);  -webkit-transform:translatex(0px);  transition:all 0.3s;  -webkit-transition:all 0.3s}.hermes.tparrows.tp-leftarrow:before{content:"\e824"}.hermes.tparrows.tp-rightarrow:before{content:"\e825"}.hermes.tparrows.tp-leftarrow:hover:before{transform:translatex(-20px);  -webkit-transform:translatex(-20px);   opacity:0}.hermes.tparrows.tp-rightarrow:hover:before{transform:translatex(20px);  -webkit-transform:translatex(20px);   opacity:0}.hermes .tp-arr-allwrapper{overflow:hidden;  position:absolute;width:180px;  height:140px;  top:0px;  left:0px;  visibility:hidden;   -webkit-transition:-webkit-transform 0.3s 0.3s; transition:transform 0.3s 0.3s; -webkit-perspective:1000px; perspective:1000px}.hermes.tp-rightarrow .tp-arr-allwrapper{right:0px;left:auto}.hermes.tparrows:hover .tp-arr-allwrapper{visibility:visible}.hermes .tp-arr-imgholder{width:180px;position:absolute; left:0px;top:0px;height:110px; transform:translatex(-180px); -webkit-transform:translatex(-180px); transition:all 0.3s; transition-delay:0.3s}.hermes.tp-rightarrow .tp-arr-imgholder{transform:translatex(180px); -webkit-transform:translatex(180px)}.hermes.tparrows:hover .tp-arr-imgholder{transform:translatex(0px);  -webkit-transform:translatex(0px)}.hermes .tp-arr-titleholder{top:110px; width:180px; text-align:left;  display:block; padding:0px 10px; line-height:30px; background:#000; background:rgba(0,0,0,0.75); color:rgb(255,255,255); font-weight:600; position:absolute; font-size:12px; white-space:nowrap; letter-spacing:1px; -webkit-transition:all 0.3s; transition:all 0.3s; -webkit-transform:rotatex(-90deg); transform:rotatex(-90deg); -webkit-transform-origin:50% 0; transform-origin:50% 0; box-sizing:border-box}.hermes.tparrows:hover .tp-arr-titleholder{-webkit-transition-delay:0.6s; transition-delay:0.6s; -webkit-transform:rotatex(0deg); transform:rotatex(0deg)}</style>

</head>

<body>


<script type='text/javascript'>var words = ["LOADING", "PORTFOLIO", "MODERN", "MINIMAL", "CLEAN"];</script>

<!-- LOADER TEMPLATE -->
<div class="page-loader">
    <div class="text-loader">
        <div class="right">
            <h4 class="randoms"></h4>
            <h1 class="randoms"></h1>
            <h4 class="randoms"></h4>
        </div>
        <div class="left">
            <h4 class="randoms"></h4>
            <h1 class="randoms"></h1>
            <h4 class="randoms"></h4>
        </div>
    </div>
</div>
<!-- /LOADER TEMPLATE -->


@include('partials.header')

@yield('content')
@yield('main.single')

@include('partials.footer')


<!-- Javascript files -->
<!-- jQuery -->
<script src="{{asset('assets/js/plugins/jquery-1.12.4.min.js')}}"></script>
<!-- Modernizr -->
<script src="{{asset('assets/js/plugins/modernizr.js')}}"></script>
<!-- jQuery.appear -->
<script src="{{asset('assets/js/plugins/jquery.appear.js')}}"></script>
<!-- Lettering -->
<script src="{{asset('assets/js/plugins/lettering.js')}}"></script>
<!-- Textillate -->
<script src="{{asset('assets/js/plugins/textillate.js')}}"></script>
<!-- Wow -->
<script src="{{asset('assets/js/plugins/wow.js')}}"></script>
<!-- Jarallax -->
<script src="{{asset('assets/js/plugins/jarallax.js')}}"></script>
<!-- Lightcase -->
<script src="{{asset('assets/js/plugins/lightcase.js')}}"></script>
<!-- Skills bar -->
<script src="{{asset('assets/js/plugins/skills-bar.js')}}"></script>
<!-- Slick Nav -->
<script src="{{asset('assets/js/plugins/slick-nav.js')}}"></script>
<!-- Flex Slider -->
<script src="{{asset('assets/js/plugins/flexslider.js')}}"></script>
<!-- Images Loaded -->
<script src="{{asset('assets/js/plugins/images-loaded.js')}}"></script>
<!-- Isotope -->
<script src="{{asset('assets/js/plugins/isotope.js')}}"></script>
<!-- Sticky Plugin -->
<script src="{{asset('assets/js/plugins/jquery.sticky.js')}}"></script>
<!-- Cube Portfolio -->
<script src="{{asset('assets/js/plugins/jquery.cubeportfolio.min.js')}}"></script>
<!-- Google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAV1KS10sb3O462XosfZTKohHJwi6C0joo"></script>
<!-- Custom -->
<script src="{{asset('assets/js/main.js')}}"></script>

<!-- REVOLUTION JS FILES -->
<script type="text/javascript" src="{{asset('assets/slider/js/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/slider/js/jquery.themepunch.revolution.min.js')}}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="{{asset('assets/slider/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/slider/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/slider/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/slider/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/slider/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/slider/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/slider/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/slider/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/slider/js/extensions/revolution.extension.video.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/slider/js/extensions/revolution.addon.slicey.min.js')}}"></script>

<script type="text/javascript">
    var revapi7,
        tpj=jQuery;

    tpj(document).ready(function() {
        if(tpj("#rev_slider_7_1").revolution == undefined){
            revslider_showDoubleJqueryError("#rev_slider_7_1");
        }else{
            revapi7 = tpj("#rev_slider_7_1").show().revolution({
                sliderType:"standard",
                jsFileLocation:"assets/slider/js/",
                sliderLayout:"fullscreen",
                dottedOverlay:"none",
                delay:5500,
                navigation: {
                    keyboardNavigation:"off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation:"off",
                    mouseScrollReverse:"default",
                    onHoverStop:"off",
                    arrows: {
                        style:"hermes",
                        enable:true,
                        hide_onmobile:false,
                        hide_onleave:true,
                        hide_delay:200,
                        hide_delay_mobile:1200,
                        tmp:'<div class="tp-arr-allwrapper">    <div class="tp-arr-imgholder"></div>    <div class="tp-arr-titleholder"></div> </div>',
                        left: {
                            h_align:"left",
                            v_align:"center",
                            h_offset:20,
                            v_offset:0
                        },
                        right: {
                            h_align:"right",
                            v_align:"center",
                            h_offset:20,
                            v_offset:0
                        }
                    }
                },
                responsiveLevels:[1240,1024,778,480],
                visibilityLevels:[1240,1024,778,480],
                gridwidth:[1240,1024,778,480],
                gridheight:[868,768,960,720],
                lazyType:"none",
                shadow:0,
                spinner:"off",
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,
                shuffle:"off",
                autoHeight:"off",
                fullScreenAutoWidth:"off",
                fullScreenAlignForce:"off",
                fullScreenOffsetContainer: "",
                fullScreenOffset: "60px",
                disableProgressBar:"on",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                    simplifyAll:"off",
                    nextSlideOnWindowFocus:"off",
                    disableFocusListener:false,
                }
            });
        }

        if(revapi7) revapi7.revSliderSlicey();

    }); /*ready*/
</script>

<script type="text/javascript">function setREVStartSize(e){
        try{ var i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;
            if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})
        }catch(d){console.log("Failure at Presize of Slider:"+d)}
    };</script>




</body>
</html>
