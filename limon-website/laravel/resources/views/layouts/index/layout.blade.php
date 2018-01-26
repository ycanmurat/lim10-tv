<!DOCTYPE html>
<html class="sticky-header-reveal">
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title') | {{$ayar->baslik}}</title>

    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="description" content="@yield('descriptions')">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon"/>
    <link rel="apple-touch-icon" href="/img/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="/index/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/index/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/index/vendor/animate/animate.min.css">
    <link rel="stylesheet" href="/index/vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="/index/vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/index/vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="/index/vendor/magnific-popup/magnific-popup.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="/index/css/theme.css">
    <link rel="stylesheet" href="/index/css/theme-elements.css">
    <link rel="stylesheet" href="/index/css/theme-blog.css">
    <link rel="stylesheet" href="/index/css/theme-shop.css">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="/index/vendor/rs-plugin/css/layers.css">
    <link rel="stylesheet" href="/index/vendor/rs-plugin/css/navigation.css">
    <link rel="stylesheet" href="/index/vendor/rs-plugin/css/settings.css">

    <!-- Demo CSS -->
    <link rel="stylesheet" href="/index/css/demos/demo-gym.css">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="/index/css/skins/skin-gym.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="/index/css/custom.css">

    <!-- Head Libs -->
    <script src="/index/vendor/modernizr/modernizr.min.js"></script>

</head>
<body>

<div class="body">
    <header id="header" class="header-floating-bar"
            data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'reveal', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 116, 'stickySetTop': '0px', 'stickyChangeLogo': false}">
        <div class="header-body bg-color-dark box-shadow-none">
            <div class="header-container header-container-height-sm container">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-row">
                            <div class="header-logo">
                                <a href="demo-gym.html">
                                    <img alt="Porto Gym" width="143" height="25"
                                         src="{{$ayar->getFirstMedia('logo')->getUrl()}}">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="header-column justify-content-end mr-lg-4">
                        <div class="header-row">
                            <div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-force-light-text header-nav-force-light-text-active-skin-color order-2 order-lg-1">
                                <div class="header-nav-main header-nav-main-mobile-dark header-nav-main-dropdown-no-borders header-nav-main-clone-items header-nav-main-slide header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                    <nav class="collapse">
                                        <ul class="nav nav-pills" id="mainNav">
                                            <li>
                                                <a class="nav-link {{ request()->routeIs('anasayfa') ? 'active' : '' }}"
                                                   href="{{route('anasayfa')}}">
                                                    Anasayfa
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link {{ request()->routeIs('hakkimizda') ? 'active' : '' }}"
                                                   href="{{route('hakkimizda')}}">
                                                    Hakkımızda
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle {{ request()->routeIs('siniflar') ? 'active' : '' }}"
                                                   href="{{route('siniflar')}}">
                                                    Sınıflar
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item"
                                                           href="demo-gym-classes.html">Overview</a></li>
                                                    <li><a class="dropdown-item" href="demo-gym-classes-detail.html">Group
                                                            Fitness</a></li>
                                                    <li><a class="dropdown-item" href="demo-gym-classes-detail.html">Yoga</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="demo-gym-classes-detail.html">Functional</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="demo-gym-classes-detail.html">Spin
                                                            Class</a></li>
                                                    <li><a class="dropdown-item" href="demo-gym-classes-detail.html">Zumba</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="demo-gym-classes-detail.html">Conditioning</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="nav-link {{ request()->routeIs('egitmenler') ? 'active' : '' }}"
                                                   href="{{route('egitmenler')}}">
                                                    Eğitmenlerimiz
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link {{ request()->routeIs('iletisim') ? 'active' : '' }}"
                                                   href="{{route('iletisim')}}">
                                                    Bize Ulaş
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <a class="btn btn-primary btn-join-now text-uppercase custom-font-weight-medium d-none d-lg-flex"
                                   href="{{route('iletisim')}}">Katıl</a>
                                <button class="btn header-btn-collapse-nav" data-toggle="collapse"
                                        data-target=".header-nav-main nav">
                                    <i class="fas fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('icerik')

</div>

<footer id="footer" class="bg-color-quaternary">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <ul class="social-icons custom-social-icons">
                    <li class="social-icons-instagram"><a href="http://www.instagram.com/{{$ayar->instagram}}"
                                                          target="_blank"
                                                          title="Instagram"><i class="fab fa-instagram"></i></a></li>
                    <li class="social-icons-facebook"><a href="http://www.facebook.com/{{$ayar->facebook}}"
                                                         target="_blank"
                                                         title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="social-icons-twitter"><a href="http://www.twitter.com/{{$ayar->twitter}}" target="_blank"
                                                        title="Twitter"><i class="fab fa-twitter"></i></a></li>

                </ul>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-lg-12 text-center">
                <p>2019 © Rumble Fight Academy</p>
            </div>
        </div>
    </div>
</footer>

</div>

<!-- Vendor -->
<script src="/index/vendor/jquery/jquery.min.js"></script>
<script src="/index/vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="/index/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="/index/vendor/jquery.cookie/jquery.cookie.min.js"></script>
<script src="/index/vendor/popper/umd/popper.min.js"></script>
<script src="/index/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="/index/vendor/common/common.min.js"></script>
<script src="/index/vendor/jquery.validation/jquery.validate.min.js"></script>
<script src="/index/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="/index/vendor/jquery.gmap/jquery.gmap.min.js"></script>
<script src="/index/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
<script src="/index/vendor/isotope/jquery.isotope.min.js"></script>
<script src="/index/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="/index/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="/index/vendor/vide/jquery.vide.min.js"></script>
<script src="/index/vendor/vivus/vivus.min.js"></script>
<script src="/index/vendor/instafeed/instafeed.min.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="/index/js/theme.js"></script>

<!-- Current Page Vendor and Views -->
<script src="/index/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="/index/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<!-- Current Page Vendor and Views -->
<script src="/index/js/views/view.contact.js"></script>

<!-- Demo -->
<script src="/index/js/demos/demo-gym.js"></script>

<!-- Theme Custom -->
<script src="/index/js/custom.js"></script>

<!-- Theme Initialization Files -->
<script src="/index/js/theme.init.js"></script>


<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_API_KEY"></script>
<script>

    /*
    Map Settings

        Find the Latitude and Longitude of your address:
            - https://www.latlong.net/
            - http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

    */

    // Map Markers
    var mapMarkers = [{
        address: "New York, NY 10017",
        html: "<div class='map-info-box'><strong>Address:</strong><br>Porto Gym 123<br>Porto Blvd, Suite 100<br>New York, NY<br><strong>Phone: </strong><a href='tel:+1234567890'>123-456-7890</a><div class='map-info-box-image' style='background: url(img/demos/gym/map/map-location-image.jpg); background-size: cover;'></div></div>",
        icon: {
            image: "img/demos/gym/map/pin.png",
            iconsize: [57, 66],
            iconanchor: [57, 66]
        },
        popup: true
    }];

    // Map Initial Location
    var initLatitude = 40.75198;
    var initLongitude = -73.96978;

    // Map Extended Settings
    var mapSettings = {
        controls: {
            draggable: (($.browser.mobile) ? false : true),
            panControl: true,
            zoomControl: true,
            mapTypeControl: true,
            scaleControl: true,
            streetViewControl: true,
            overviewMapControl: true
        },
        scrollwheel: false,
        markers: mapMarkers,
        latitude: initLatitude,
        longitude: initLongitude,
        zoom: 14
    };

    var map = $('#googlemaps').gMap(mapSettings),
        mapRef = $('#googlemaps').data('gMap.reference');

    // Map text-center At
    var mapCenterAt = function (options, e) {
        e.preventDefault();
        $('#googlemaps').gMap("centerAt", options);
    }

    // Styles from https://snazzymaps.com/
    var styles = [{
        "featureType": "all",
        "elementType": "labels.text.fill",
        "stylers": [{"saturation": 36}, {"color": "#000000"}, {"lightness": 40}]
    }, {
        "featureType": "all",
        "elementType": "labels.text.stroke",
        "stylers": [{"visibility": "on"}, {"color": "#000000"}, {"lightness": 16}]
    }, {
        "featureType": "all",
        "elementType": "labels.icon",
        "stylers": [{"visibility": "off"}]
    }, {
        "featureType": "administrative",
        "elementType": "geometry.fill",
        "stylers": [{"color": "#000000"}, {"lightness": 20}]
    }, {
        "featureType": "administrative",
        "elementType": "geometry.stroke",
        "stylers": [{"color": "#000000"}, {"lightness": 17}, {"weight": 1.2}]
    }, {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [{"color": "#000000"}, {"lightness": 20}]
    }, {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [{"color": "#000000"}, {"lightness": 21}]
    }, {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [{"color": "#000000"}, {"lightness": 17}]
    }, {
        "featureType": "road.highway",
        "elementType": "geometry.stroke",
        "stylers": [{"color": "#000000"}, {"lightness": 29}, {"weight": 0.2}]
    }, {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [{"color": "#000000"}, {"lightness": 18}]
    }, {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [{"color": "#000000"}, {"lightness": 16}]
    }, {
        "featureType": "transit",
        "elementType": "geometry",
        "stylers": [{"color": "#000000"}, {"lightness": 19}]
    }, {"featureType": "water", "elementType": "geometry", "stylers": [{"color": "#000000"}, {"lightness": 17}]}];

    var styledMap = new google.maps.StyledMapType(styles, {
        name: 'Styled Map'
    });

    mapRef.mapTypes.set('map_style', styledMap);
    mapRef.setMapTypeId('map_style');

</script>
</body>
</html>
