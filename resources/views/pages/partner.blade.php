@extends('layouts.app')

@section('title', 'Партнеры АНО "МАДАД"')

@section('content')
  <!-- Header -->
  <header>
    <img class="parallax" src="{{asset('front/img/spb_fon.jpg')}}" alt="">
    <div class="container header-container">
      <div class="d-flex justify-content-between align-items-md-center flex-md-row flex-column">
        <div class="page-title">
          <h2>{!! __('nav.partner') !!}</h2>
          <p>{!! __('about.about1') !!}</p>
        </div>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ LaravelLocalization::localizeUrl('/') }}"><i class="fas fa-home mr-1"></i> {!! __('nav.main') !!}</a></li>
          <li class="breadcrumb-item active">Партнеры</li>
        </ul>
      </div>
    </div>
  </header>

  <main>
    <section class="section-all_partners">
      <div class="container">
        <div class="all_partners">
          @foreach ($partners as $partner)
          <div class="row align-items-center mb-4">
            <div class="col-lg-3 d-flex justify-content-center">
              <div class="partner">
                <div class="partner__img" style="background-image: url('{{asset('uploads/partner/'.$partner->featured_image)}}');"></div>
              </div>
            </div>
            <div class="col-lg-9">
              <div class="partner__content">
                <h3 class="partner__name">{{$partner->name}}</h3>
                <p class="partner__profession">{{$partner->position}}</p>
                <div class="partner__description">{{$partner->short_des}}</div>
              </div>
              <div class="consultant__footer">
                <div class="consultant__phone">
                  <a href="{{$partner->url}}" title="{!! __('index.more') !!}" target="_blank">{!! __('index.more') !!}</a>
                </div>
              </div>
            </div>
          </div>
          <hr>
          @endforeach
        </div>
      </div>
    </section>
  </main>
@endsection