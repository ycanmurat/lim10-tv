<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <meta name="robots" content="follow"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@clickiatv">
    <meta name="twitter:creator" content="@clickiatv">
    <meta name="twitter:title" content="Clickia TV">
    <meta name="twitter:description" content="Clickia TV | Anime | Manga | Novel, Popüler film ve dizileri yakından takip et.">
    <meta name="twitter:image" content="images/logo.png">
    <meta property="og:type" content="profile">
    <meta property="og:site_name" content="Clickia TV">
    <meta property="og:image" content="images/logo.png">
    <meta property="og:title" content="Clickia TV">
    <meta property="og:description" content="Clickia TV | Anime | Manga | Novel, Popüler film ve dizileri yakından takip et.">

    <meta name="thumbnail" content="images/logo.png">
    <link rel="image_src" href="/themeimages/logo.png">
    <link rel="apple-touch-icon" sizes="180x180" href="clickia.png">

    <link rel="icon" type="image/png" sizes="192x192" href="clickia.png">
    <link rel="icon" type="image/png" sizes="32x32" href="clickia.png">
    <meta name="msapplication-TileImage" content="clickia.png">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="theme-color" content="#000000">
    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/theme/css/style.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <link rel="icon" href="clickia.png" type="image/x-icon"/>
    <title>@yield('title') | {{option('baslik')}}</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav>
                        <a class="logo" href="{{route('site.anasayfa')}}"><img src="images/logo.png" alt="clickia logo"></a>
                        <ul>
                            <li><a @if(Route::currentRouteName() == 'site.anasayfa') class="active" @else @endif href="{{route('site.anasayfa')}}">{{strip_tags(trans('site.anasayfa'))}}</a></li>
                            <li><a @if(Route::currentRouteName() == 'site.dagitim.'.App::getLocale()) class="active"
                                @else @endif
                                href="{{route('site.dagitim.'.App::getLocale())}}">
                            {{strip_tags(trans('site.dagitim'))}}</a></li>
                            <!--<li><a href="#">Technology</a></li>-->
                            <li><a @if(Route::currentRouteName() == 'site.oyunlar.'.App::getLocale()) class="active"
                                @else @endif
                                {{ (Route::currentRouteName() == 'site.oyunlar.'.App::getLocale()) ? 'class="active"' : '' }}
                                href="{{route('site.oyunlar.'.App::getLocale())}}">
                            {{strip_tags(trans('site.oyunlar'))}}</a></li>

                            <li><a @if(Route::currentRouteName() == 'site.yapimlar.'.App::getLocale()) class="active"
                                @else @endif
                                href="{{route('site.yapimlar.'.App::getLocale())}}">
                            {{strip_tags(trans('site.yapimlar'))}}</a></li>

                            <li><a @if(Route::currentRouteName() == 'site.haberler.'.App::getLocale()) class="active"
                                @else @endif
                                href="{{route('site.haberler.'.App::getLocale())}}">
                            {{strip_tags(trans('site.haberler'))}}</a></li>

                            <li><a @if(Route::currentRouteName() == 'site.isler.'.App::getLocale()) class="active"
                                @else @endif
                                href="{{route('site.isler.'.App::getLocale())}}">
                            {{strip_tags(trans('site.isler'))}}</a></li>

                            <li><a @if(Route::currentRouteName() == 'site.iletisim.'.App::getLocale()) class="active"
                                @else @endif
                                href="{{route('site.iletisim.'.App::getLocale())}}">
                            {{strip_tags(trans('site.iletisim'))}}</a></li>
                            <li class="langSelect">
                                <b>{{Str::upper(App::getLocale())}}</b>
                                <img src="images/caret-down.svg" alt="">
                                <div class="list">
                                    <a href="/lang/en" @if(App::getLocale()=='en') class="isActive" @endif >EN</a>
                                    <a href="/lang/ch" @if(App::getLocale()=='ch') class="isActive" @endif >CH</a>
                                    <a href="/lang/tr" @if(App::getLocale()=='tr') class="isActive" @endif >TR</a>
                                    <a href="/lang/fr" @if(App::getLocale()=='fr') class="isActive" @endif >FRE</a>
                                </div>
                            </li>
                        </ul>
                        <div class="hamburger">
                            <svg class="ham ham3" viewBox="0 0 100 100" width="80" onclick="this.classList.toggle('active')">
                                <path
                                class="line top"
                                d="m 70,33 h -40 c -11.092231,0 11.883874,13.496726 -3.420361,12.956839 -0.962502,-2.089471 -2.222071,-3.282996 -4.545687,-3.282996 -2.323616,0 -5.113897,2.622752 -5.113897,7.071068 0,4.448316 2.080609,7.007933 5.555839,7.007933 2.401943,0 2.96769,-1.283974 4.166879,-3.282995 2.209342,0.273823 4.031294,1.642466 5.857227,-0.252538 v -13.005715 16.288404 h 7.653568" />
                                <path
                                class="line middle"
                                d="m 70,50 h -40 c -5.6862,0 -8.534259,5.373483 -8.534259,11.551069 0,7.187738 3.499166,10.922274 13.131984,10.922274 11.021777,0 7.022787,-15.773343 15.531095,-15.773343 3.268142,0 5.177031,-2.159429 5.177031,-6.7 0,-4.540571 -1.766442,-7.33533 -5.087851,-7.326157 -3.321409,0.0092 -5.771288,2.789632 -5.771288,7.326157 0,4.536525 2.478983,6.805271 5.771288,6.7" />
                                <path
                                class="line bottom"
                                d="m 70,67 h -40 c 0,0 -3.680675,0.737051 -3.660714,-3.517857 0.02541,-5.415597 3.391687,-10.357143 10.982142,-10.357143 4.048418,0 17.88928,0.178572 23.482143,0.178572 0,2.563604 2.451177,3.403635 4.642857,3.392857 2.19168,-0.01078 4.373905,-1.369814 4.375,-3.392857 0.0011,-2.023043 -1.924401,-2.589191 -4.553571,-4.107143 -2.62917,-1.517952 -4.196429,-1.799562 -4.196429,-3.660714 0,-1.861153 2.442181,-3.118811 4.196429,-3.035715 1.754248,0.0831 4.375,0.890841 4.375,3.125 2.628634,0 6.160714,0.267857 6.160714,0.267857 l -0.178571,-2.946428 10.178571,0 -10.178571,0 v 6.696428 l 8.928571,0 -8.928571,0 v 7.142858 l 10.178571,0 -10.178571,0" />
                            </svg>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    @yield('content')


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="links">
                        <a href="{{option('facebook')}}"><img src="/theme/images/facebook.svg" alt=""></a>
                        <a href="{{option('twitter')}}"><img src="/theme/images/twitter.svg" alt=""></a>
                        <a href="{{option('instagram')}}"><img src="/theme/images/instagram.svg" alt=""></a>
                        <a href="{{option('linkedin')}}"><img src="/theme/images/linkedin.svg" alt=""></a>
                    </div>
                    <div class="footLinks"><a href="#">Techonology</a>
                        <a href="#">Game</a>
                        <a href="#">Productions</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>

        $(document).ready(function () {

            $('.owl-workOnIndex').owlCarousel({
                loop:true,
                margin:0,
                nav:true,
                dots:false,
                center:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1,
                        stagePadding:10
                    },
                    1000:{
                        items:1,
                        stagePadding:200
                    }
                }
            })
            $('.owl-movieSlide').owlCarousel({
                autoplay: false,
                autoplayTimeout: 1500,
                autoplayHoverPause: true,
                smartSpeed: 2000,
                loop: true,
                margin: 0,
                nav: false,
                dots: false,
                responsive: {
                    0: {
                        items: 5
                    },
                    600: {
                        items: 5
                    },
                    1000: {
                        items: 7
                    }
                }
            });

            $('.hamburger').click(function(event) {
                $('header nav ul').toggleClass('active');
            });
        });
        document.getElementsByTagName('img').setAttribute('draggable', false);

    </script>
    <script>
      AOS.init();
  </script>
</body>
</html>