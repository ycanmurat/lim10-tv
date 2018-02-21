@extends('layouts.theme.master')
@section('content')

<section class="index" data-aos="fade-up-left" data-aos-duration="500">
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
    </section>

    <section class="about" data-aos="zoom-in" data-aos-duration="2000" ata-aos-easing="ease-in-sine">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>{!! strip_tags(trans('site.marka'))!!}</h2>
                    <p>{!! strip_tags(trans('site.markametin'))!!}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- productions da ki slider buraya da isteniyor-->

    <section class="workOnIndex" style="margin-bottom:60px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme owl-workOnIndex">
                        @foreach($SliderAlt as $s)
                        <div class="item" style="min-height: 400px;background-image:url('{{$s->getFirstMediaUrl('slide')}}'); ">
                            <h2>{{$s->title}}</h2>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- productions da ki slider buraya da isteniyor-->

    <section class="workings">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="group">
                        <div data-aos="fade-down" data-aos-duration="800" data-aos-easing="ease-in-sine" class="item"
                        style="background-image: url('/images/4.jpeg');">
                        <img src="images/temp_icon/presentation.svg">
                        {!! trans('anasayfa.altikarebirinci') !!}
                    </div>
                    <div data-aos="fade-down" data-aos-duration="1200" data-aos-easing="ease-in-sine" class="item"
                    style="background-image: url('https://clickia.emresarioglu.com.tr/images/2.jpeg');">
                    <img src="images/temp_icon/computer.svg">
                    {!! trans('anasayfa.altikareikinci') !!}
                </div>
                <div data-aos="fade-down" data-aos-duration="1700" data-aos-easing="ease-in-sine" class="item"
                style="background-image: url('/images/3.jpeg');">
                <img src="images/temp_icon/game-controller.svg">
                {!! trans('anasayfa.altikareucuncu') !!}
            </div>
        </div>
        <div class="group">
            <div data-aos="fade-right" data-aos-duration="750" data-aos-easing="ease-in-sine" class="item"
            style="background-image: url('/images/4.jpeg');">
            <img src="images/temp_icon/technology.svg">
            {!! trans('anasayfa.altikaredorduncu') !!}
        </div>
        <div data-aos="fade-right" data-aos-duration="650" data-aos-easing="ease-in-sine" class="item"
        style="background-image: url('/images/5.jpeg');">
        <img src="images/temp_icon/user.svg">
        {!! trans('anasayfa.altikarebesinci') !!}
    </div>
    <div data-aos="fade-up-left" data-aos-duration="850" data-aos-easing="ease-in-sine" class="item"
    style="background-image: url('/images/6.jpeg');">
    <img src="images/temp_icon/development.svg">
    {!! trans('anasayfa.altikarealtinci') !!}
</div>
</div>
</div>
</div>
</div>
</section>


<section class="upgrade" data-aos="zoom-in-left" data-aos-duration="1200">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="group">
                    <div class="item">
                        <h2>GELİŞTİRME</h2>
                        <div class="altItem pl" style="background-image:url('/images/alt_1.jpeg');">
                            {!! trans('anasayfa.sonbolumbirinci') !!}
                        </div>
                        <div class="altItem pl" style="background-image:url('/images/alt_3.jpeg');">
                            {!! trans('anasayfa.sonbolumucuncu') !!}
                        </div>
                    </div>
                    <div class="item">
                        <div class="altItem right" style="background-image:url('/images/alt_2.jpeg');">
                            {!! trans('anasayfa.sonbolumikinci') !!}
                        </div>
                        <div class="altItem">
                            <img src="/images/alt_4.jpeg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="footer">

    <div class="owl-carousel owl-theme owl-movieSlide" data-aos-duration="1200" data-aos="fade-right"
    data-aos-easing="ease-in-sine">
    @foreach($FooterImages as $s)
    <div class="item">
        <img src="{{$s->getFirstMediaUrl('slide')}}" alt="">
    </div>

    @endforeach

</div>
<h5>2021</h5>
</section>

<style>
section.workings div.group .item img{transition: all ease .4s;}
section.workOnIndex .owl-workOnIndex {}
section.workOnIndex .owl-workOnIndex .item {height: 500px;background-size: cover;background-position: center;display: flex;align-items: center;justify-content: center;}
section.workOnIndex .owl-workOnIndex .owl-item {opacity: .7;transform: scale(0.9);transition: all ease .3s;}
section.workOnIndex .owl-workOnIndex .owl-item.active {opacity: 1;transform: scale(1);}
section.workOnIndex .owl-workOnIndex .item h2 {background: white;padding: 10px;position: absolute;bottom: 30px;}
section.workOnIndex .owl-workOnIndex .owl-nav {position: absolute;top: 5%;right: 0;left: 0;font-size: 30px;}
section.workOnIndex .owl-workOnIndex .owl-nav button {background: black;color: white;width: 38px;height: 38px;border-radius: 50%;}
section.workings div.group .item:hover img {transform: rotate(360deg);}
</style>
@endsection