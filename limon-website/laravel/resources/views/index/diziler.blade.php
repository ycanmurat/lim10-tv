@extends('layouts.index.master')

@section('page-header')

@endsection

@section('icerik')
    <section class="altpage-title second" style="background-image:url('images/aboutbanner.jpg'); ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">Diziler</div>
            </div>
        </div>
    </section>

    <section class="diziler-area">
        <div class="container-fluid">
            <div class="row">
                @foreach($diziler as $dizicik)
                    <div class="col-xl-3 col-md-3 col-4">
                        <div class="item">
                            <a href="{{route('dizi.detay',$dizicik->slug)}}">
                                <img src="images/{{$dizicik->resim}}">
                            </a>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </section>

@endsection

@section('css')

@endsection

@section('js')

@endsection