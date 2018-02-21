@extends('layouts.theme.master')
@section('content')
    <section class="games">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="bgVideoBanner">

                        @foreach($Slider as $s)
                            <img src="{{$s->getFirstMediaUrl('slide')}}">
                        @endforeach

                        @foreach($Slider as $s)
                            <video autoplay muted loop>
                                <source src="{{$s->getFirstMediaUrl('video')}}" type="video/mp4"/>
                            </video>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>


        <div class="gamesIntro">
            <img src="images/exampleLeft.png" alt="">
            <div class="item">
                {!! trans('games.anametin') !!}
            </div>
        </div>
    </section>


    <section class="workOnGames">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme owl-workOnGames">
                        @foreach($SliderAlt as $s)
                            <div class="item" style="background-image:url('{{$s->getFirstMediaUrl('slide')}}'); ">
                                <h2>{{$s->title}}</h2>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="allGames">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="items">
                        @foreach($GameImages as $s)
                            <div class="item" style="background-image:url('{{$s->getFirstMediaUrl('slide')}}'); ">
                                <h2>{{$s->title}}</h2>
                            </div>
                        @endforeach
                    </div>

                    <div class="seoText">
                        {!! trans('games.metin') !!}

                    </div>
                </div>
            </div>
        </div>
        <img src="/images/gamesFooterBanner.png" alt="">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="seoText">
                        {!! trans('games.netur') !!}

                        <div class="imageItem">
                            <div class="item" style=" background-image:url('https://fakeimg.pl/655x150/')">
                                {!! trans('games.netur1') !!}
                            </div>
                            <div class="item" style=" background-image:url('https://fakeimg.pl/655x150/')">
                                {!! trans('games.netur2') !!}
                            </div>
                            <div class="item" style=" background-image:url('https://fakeimg.pl/655x150/')">
                                {!! trans('games.netur3') !!}
                            </div>
                            <div class="item" style=" background-image:url('https://fakeimg.pl/655x150/')">
                                {!! trans('games.netur4') !!}

                            </div>
                            <div class="item" style=" background-image:url('https://fakeimg.pl/655x150/')">
                                {!! trans('games.netur5') !!}

                            </div>
                            <div class="item" style=" background-image:url('https://fakeimg.pl/655x150/')">
                                {!! trans('games.netur6') !!}

                            </div>
                        </div>
                        <h3>Başlıca avantajlarımız sadece bunlar değil</h3>
                        <img src="images/seoImage.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="isAkisi">
            <h2>İş akışımız nedir ?</h2>
            <img src="images/isAkisi.png" alt="">
        </div>
    </section>

    <script>
        $(document).ready(function () {
            $('.owl-workOnGames').owlCarousel({
                loop: true,
                margin: 0,
                nav: true,
                dots: false,
                center: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1,
                        stagePadding: 10
                    },
                    1000: {
                        items: 1,
                        stagePadding: 200
                    }
                }
            })
        });
    </script>

@endsection