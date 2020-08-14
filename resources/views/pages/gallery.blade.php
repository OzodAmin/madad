@extends('layouts.app')

@section('title', __('nav.gallery').' АНО "МАДАД"')

@section('content')
  <!-- Header -->
  <header>
    <img class="parallax" src="{{asset('front/img/spb_fon.jpg')}}" alt="">
    <div class="container header-container">
      <div class="d-flex justify-content-between align-items-md-center flex-md-row flex-column">
        <div class="page-title">
          <h2>{!! __('nav.gallery') !!}</h2>
          <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ LaravelLocalization::localizeUrl('/') }}"><i class="fas fa-home mr-1"></i> {!! __('nav.main') !!}</a></li>
          <li class="breadcrumb-item active">{!! __('nav.gallery') !!}</li>
        </ul>
      </div>
    </div>
  </header>

  <main>
    <section>
      <div class="container">
          <div class="row mt-5">
            @foreach ($galleries as $gallery)
              <div class="col-md-6 mb-5">
                  <a href="<?=LaravelLocalization::getLocalizedURL(LaravelLocalization::getCurrentLocale(), 'gallery-images/'.$gallery->slug);?>">
                      <div class="media-item media-item__big--only-image">
                          <div class="media-item__img">
                              <img src="{{ asset('uploads/gallery/'.$gallery->featured_image) }}" alt="{{$gallery->title}}" title="{{$gallery->title}}" class="img-thumbnail img-fluid w-100" style="height: 300px;">
                          </div>
                          <div class="media-item__desc">
                              <h3 class="media-item__title text-white">{{$gallery->title}}</h3>
                              <div class="media-item__date text-white">{{$gallery->event_date}}</div>
                          </div>
                      </div>
                  </a>
              </div>
            @endforeach  
          </div>
      </div>
  </section>
  </main>
@endsection