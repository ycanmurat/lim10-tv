@extends('layouts.theme.master')
@section('content')
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <section class="news">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="tabs">
                        <ul>
                            <li>
                                <a href="#tabs-1">
                                    <div class="img">
                                        <img src="images/globe.svg" alt="">
                                    </div>
                                    <p>Üretim Haberleri</p>
                                </a>
                            </li>
                            <li>
                                <a href="#tabs-2">
                                    <div class="img">
                                        <img src="images/haber.svg" alt="">
                                    </div>
                                    <p>Dağıtım Haberleri</p>
                                </a>
                            </li>
                            <li>
                                <a href="#tabs-3">
                                    <div class="img">
                                        <img src="images/console.svg" alt="">
                                    </div>
                                    <p>Oyun Haberleri</p>
                                </a>
                            </li>
                        </ul>
                        <img src="images/border.png" alt="">

                        <div id="tabs-1">
                            @foreach($Posts1 as $Post)
                                <div class="content">
                                    <img src="{{$Post->getFirstMediaUrl('document')}}" alt="" width="500px"
                                         height="350px">
                                    <div class="text">
                                        <h2>
                                            <span>{!! $Post->published->format('d/m <b>Y</b>') !!} </span>
                                            {{$Post->title}}
                                        </h2>
                                        <p>{!!$Post->content!!}</p>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div id="tabs-2">
                            @foreach($Posts2 as $Post)
                                <div class="content">
                                    <img src="{{$Post->getFirstMediaUrl('document')}}" alt="" width="500px"
                                         height="350px">
                                    <div class="text">
                                        <h2>
                                            <span>{!! $Post->published->format('d/m <b>Y</b>') !!} </span>
                                            {{$Post->title}}
                                        </h2>
                                        <p>{!!$Post->content!!}</p>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div id="tabs-3">
                            @foreach($Posts3 as $Post)
                                <div class="content">
                                    <img src="{{$Post->getFirstMediaUrl('document')}}" alt="" width="500px"
                                         height="350px">
                                    <div class="text">
                                        <h2>
                                            <span>{!! $Post->published->format('d/m <b>Y</b>') !!} </span>
                                            {{$Post->title}}
                                        </h2>
                                        <p>{!!$Post->content!!}</p>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(function () {
            $("#tabs").tabs();
        });
    </script>

@endsection