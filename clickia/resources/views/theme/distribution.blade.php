@extends('layouts.theme.master')
@section('content')
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"/>
    <section class="distribution">
        <img class="banner" src="images/dist_banner.png" alt="">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="introText">
                        Clickia film ve televizyon çalışmalarının türleri, esas olarak orjinal IP filmleri ve çevrimiçi
                        dramalar gibi çoklu eğlence içeriğinin geliştirilmesini ve oluşturulmasını içerir. Fren filmi
                        üretimine temsili bir yatırımın yanı sıra, aynı zamanda animasyon ve canlı aksiyon filmleri, TV
                        dizileri, yüksek kaliteli CG görsel efekt animasyonu oluşturmak için büyük ölçekli oyunlar için
                        üretim icra eder.
                    </h2>
                </div>
            </div>
        </div>


        @foreach($Dist as $s)

            <article class="diziler">
                <h2>Clickia Product - <b>{{$s->name}}</b></h2>
                @foreach($s->posts as $po)
                    <a href="{{$po->videoUrl}}" data-fancybox>
                        <img src="{{$po->getFirstMediaUrl('kapak')}}" alt="">
                    </a>
                @endforeach
            </article>
        @endforeach

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>{!! trans('dagitim.metin') !!}</h3>

                </div>
            </div>
        </div>
        <article class="footer">
            <img src="images/dist-footer-bg.png" alt="">
        </article>
    </section>

@endsection