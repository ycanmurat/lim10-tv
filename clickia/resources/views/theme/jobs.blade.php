@extends('layouts.theme.master')
@section('content')
    <section class="jobs">
        <img src="images/jobsBanner.png" alt="">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="introText">
                        {!! trans('jobs.metin') !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="images/jobsUser.png" alt="" style="width: 100%">
                </div>
                <div class="col-md-6 speacialArea" style="background-color: gainsboro;margin-left: -15px;">
                    <div class="teamText">
                        {!! trans('jobs.teamText') !!}
                    </div>
                </div>
                <div class="col-md-12">
                    <img src="images/jobsUserBanner.png" alt="" style="margin-bottom:50px;">
                </div>
                <div class="col-md-6">
                    <div class="redWrapper">
                        {!! trans('jobs.interested') !!}
                    </div>
                </div>
                <div class="col-md-6 speacialArea" style="background-color: gainsboro;margin-left: -15px;">
                    <div class="WrapperRed">
                        <a href="mailto:#">click here : < ?>@clickia.com.tr</a>
                    </div>
                </div>
                <div class="col-md-12">
                    {!! trans('jobs.lookingfor') !!}
                    <div class="openWorks">

                        @foreach($Jobs as $s)
                            <div class="item">
                                <p>{{$s->name}}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection