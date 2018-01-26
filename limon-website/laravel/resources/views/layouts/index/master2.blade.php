<!DOCTYPE html>
<html lang="{{App::getLocale()}}">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="nofollow"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="keywords" content="Limon Yapım, Limon , Yapım , Production, Prodüksüyon , Produksiyon , Avlu , Savaşçı ,İstanbul , Film , Yapım , Şirketi , İşler güçler , Dizi">
    <meta name="description" content="Savaşçı - Avlu - İşler Güçler vb. bir çok başarılı projeyi hayata geçiren Limon Film izleyicilerini ekran başından ayırmıyor."/>
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@limonfilmm">
    <meta name="twitter:creator" content="@limonfilmm">
    <meta name="twitter:title" content="Limon Production">
    <meta name="twitter:description" content="Limon Film - Savaşçı - Avlu - İşlergüçler vb. onlarca film ve dizinin üreticisi.">
    <meta name="twitter:image" content="images/logo.png">
    <meta property="og:type" content="article">
    <meta property="og:site_name" content="Limon Production">
    <meta property="og:url" content="limonproduction.com.tr">
    <meta property="og:image" content="images/savasci.jpg">
    <meta property="og:title" content="Limon Film - SAVAŞÇI , AVLU , İşler Güçler vb. onlarca dizi ve filmin üreticisi.">
    <meta property="og:description" content="Limon Film - SAVAŞÇI , AVLU , İşler Güçler vb. onlarca dizi ve filmin üreticisi.">
    <meta name="thumbnail" content="images/savasci.jpg">
    <link rel="apple-touch-icon" sizes="180x180" href="images/logo.png">
    <meta name="msapplication-TileImage" content="images/logo.png">
    <meta name="msapplication-TileColor" content="#666666">
    <meta name="theme-color" content="#666666">
    <link rel="icon" href="/images/logoyellow.png" type="image/x-icon"/>
    <title>Limon Production</title>
    <!-- Jquery -->
    <script src="/js/jquery.js"></script>
    <script>
        function codeAddress() {
            $('#page-loading').addClass('loaded');
            $('body').css('overflow', 'auto');
        };
        window.onload = codeAddress;
    </script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <!-- owl-carousel -->
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <script src="/js/owl.carousel.min.js"></script>
    <!-- CheckBox Plugin -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">
    <!-- Fancy Time-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,700,900&display=swap" rel="stylesheet">

    <!-- Main Reset Css-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" type="text/css" href="/css/reset.css">
    <link rel="stylesheet/less" type="text/css" href="/css/main.less"/>
    <link rel="stylesheet" type="text/css" href="/css/main.css?v=1.01">
</head>
<body>
<div id="page-loading">
    <div class="pageload-area">
        <img alt="Limon Production" src="/images/logowhite.png">
    </div>
</div>
<div class="lang-select">
    <div class="select"><img alt="Dil Seçiniz" src="/images/icon/lang.png"></div>
    <div class="langs">
        <a href="/lang/tr" <?php if(App::getLocale()=='tr'): ?> class="active"@endif><img alt="Türkiye" src="/images/icon/tr.png"></a>
        <a href="/lang/en" <?php if(App::getLocale()=='en'): ?> class="active"@endif><img alt="English" src="/images/icon/en.png"></a>
        <a href="/lang/ar" <?php if(App::getLocale()=='ar'): ?> class="active"@endif><img alt="Qatar" src="/images/icon/qatar.png"></a>
    </div>
</div>
<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="nav-area">
                    <a class="logo" href="{{route('anasayfa')}}">
                        <img src="/images/logowhite.png">
                    </a>

                    <ul class="nav">
                        <li class="menu-link"><a href="{{route('anasayfa')}}" class="active">{{trans('site.anasayfa')}}
                                <div class="idc"></div>
                            </a></li>
                        <li class="menu-link"><a href="{{route('hakkimizda')}}">{{trans('site.hakkimizda')}}</a></li>

                        <li class="menu-link mega-menu"><a href="{{route('diziler')}}">{{trans('site.diziler')}}</a>
                            <div class="dropdown-area">
                                <div class="category">
                                    <h5>{{trans('site.vizyondakiler')}}</h5>
                                    <ul>
                                        @foreach($vizyondakiler as $proje)
                                            <li><a href="{{route('dizi.detay',$proje->slug)}}">{{$proje->baslik}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="category">
                                    <h5>{{trans('site.arsiv')}}</h5>
                                    <ul>
                                        @foreach($arsivdekiler as $proje)
                                            <li><a href="{{route('dizi.detay',$proje->slug)}}">{{$proje->baslik}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li class="menu-link drop-menu"><a href="{{route('filmler')}}">{{trans('site.filmler')}}</a>
                            <div class="film-area">
                                <a class="yerli" href="filmler.php">
                                    <h5>{{trans('site.yerli-filmler')}}</h5>
                                </a>
                                <a class="yabanci" href="filmler.php">
                                    <h5>{{trans('site.yabanci-filmler')}}</h5>
                                </a>
                            </div>
                        </li>

                        <li class="menu-link"><a target="_blank" href="https://forms.gle/MUR85zjv6R2VvPSG8">{{trans('site.oyuncu-ol')}}</a>
                        </li>
                        <li class="menu-link"><a href="press.php">{{trans('site.basin')}}</a></li>
                        <li class="menu-link"><a href="contact.php">{{trans('site.iletisim')}}</a></li>
                        <li>
                            <form>
                                <input type="text" name="" placeholder="{{trans('site.arama-yap')}}">
                                <button><i class="fas fa-search"></i></button>
                            </form>
                        </li>
                    </ul>
                    <div class="hamburger">
                        <svg class="ham hamRotate ham8" viewBox="0 0 100 100" width="80" onclick="this.classList.toggle('active')">
                            <path class="line top" d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"/>
                            <path class="line middle" d="m 30,50 h 40"/>
                            <path class="line bottom" d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="fixed-social-links">
    <a target="_blank" href="https://www.facebook.com/limonfilmm"><span>Facebook</span><i class="fab fa-facebook-f"></i></a>
    <a target="_blank" href="https://twitter.com/LimonFilm?s=20"><span>Twitter</span><i class="fab fa-twitter"></i></a>
    <a target="_blank" href="https://www.youtube.com/channel/UCkPZZwAYA0urzrLhoZKlpSA"><span>Youtube</span><i class="fab fa-youtube"></i></a>
    <a target="_blank" href="https://www.instagram.com/limon_film"><span>İnstagram</span><i class="fab fa-instagram"></i></a>
</div>
@yield('icerik')
<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 col-lg-12">
                <div class="item contact">
                    <a href="#"><img alt="Limon Production" src="/images/logowhite.png" alt="Limon Yapım Logo"></a>
                    <ul>
                        <li>Enderunlu İsmail Hakkı Bey Sok. No:3</li>
                        <li>Balmumcu Beşiktaş - İstanbul</li>
                        <li>Tel : <span>+90 212 347 34 50</span></li>
                        <li>Fax : <span>+90 212 266 10 86</span></li>
                        <li>Email : <a href="#">info@limonproduction.com</a></li>
                        <li>Web : <a href="#">www.limonproduction.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4">
                <h3>{{trans('site.kurumsal')}}</h3>
                <div class="item defalt">
                    <ul>
                        <li><a href="#">Hakkımızda</a></li>
                        <li><a href="#">İletişim</a></li>
                        <li><a href="#">Programlar</a></li>
                        <li><a href="#">Filmler</a></li>
                        <li><a href="#">Diziler</a></li>
                        <li><a href="#">Basın</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4">
                <h3>{{trans('site.diziler')}}</h3>
                <div class="item default">
                    <ul>
                        <li><a href="#">Kalbim Egede Kaldı</a></li>
                        <li><a href="#">Poyraz Karayel</a></li>
                        <li><a href="#">Bebek İşi</a></li>
                        <li><a href="#">Şevkat Yerimdar</a></li>
                        <li><a href="#">Savaşçı</a></li>
                        <li><a href="#">Avlu</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4">
                <h3>{{trans('site.filmler')}}</h3>
                <div class="item">
                    <ul>
                        <li><a href="#">Prince Rois Demons</a></li>
                        <li><a href="#">Küçük Kıyamet</a></li>
                        <li><a href="#">Eve Dönüş</a></li>
                        <li><a href="#">Bon Dieu</a></li>
                        <li><a href="#">Flört</a></li>
                        <li><a href="#">West</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <h6>Copyrght 2020 <span>© Limon Production. </span> Her Hakkı Saklıdır.</h6>
    </div>
</footer>


<script src="/js/main.js?v=<?php echo md5(date('Y-m-d H:i:s')); ?>"></script>
</body>
</html>