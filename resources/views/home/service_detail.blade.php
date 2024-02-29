@extends('home.base')
@section('content')
    <!-- Page Banner Area Start -->
    <div class="page__banner" data-background="{{asset('home/img/pages/page-banner.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__banner-content">
                        <span>{{$pageName}}</span>
                        <ul>
                            <li><a href="{{url('/')}}">Home</a><span>|</span></li>
                            <li>{{$pageName}}</li>
                        </ul>
                        <h1>{{$pageName}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Banner Area End -->

    <!-- Services Details Start -->
    <div class="services__details section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 lg-mb-60">
                    <div class="services__details-left">
                        <div class="services__details-left-image dark__image">
                            <img src="{{asset('home/serv/'.$service->photo)}}" alt="">
                        </div>
                        <div class="services__details-left-content">
                            <h2>{{$service->title}}</h2>
                            <div>
                                {!! str_replace('MYSITE',$siteName,$service->content) !!}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
