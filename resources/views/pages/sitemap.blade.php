@extends('layouts.app')

@section('title', __('nav.about'))

@section('content')
    <!-- Header -->
    <header>
    <img class="parallax" src="{{asset('front/img/spb_fon.jpg')}}" alt="">
    <div class="container header-container">
      <div class="d-flex justify-content-between align-items-md-center flex-md-row flex-column">
        <div class="page-title">
          <h2>{!! __('nav.sitemap') !!}</h2>
        </div>
      </div>
    </div>
  </header>
  <main>
       <section class="section-all_partners">
    <div class="container">
      <div class="all_partners">
        <div class="col-sm-12">
          <ul class="mt-5">
            <?php $langu = LaravelLocalization::getCurrentLocale(); ?>
            <li>
                <a href="{{ LaravelLocalization::localizeUrl('/') }}"><strong>{!! __('nav.main') !!}</strong></a>
            </li>
            <li>
                <a href="{{ LaravelLocalization::localizeUrl('/about') }}"><strong>{!! __('nav.about') !!}</strong></a>
            </li>
            <li>
                <a href="{{ LaravelLocalization::localizeUrl('/service') }}"><strong>{!! __('nav.service') !!}</strong></a>
            </li>
            <li>
                <a href="{{ LaravelLocalization::localizeUrl('/project') }}"><strong>{!! __('nav.project') !!}</strong></a>
            </li>
            <li>
                <a href="{{ LaravelLocalization::localizeUrl('/news') }}"><strong>{!! __('nav.news') !!}</strong></a>
            </li>
            <ul>
            @foreach ($categories as $category)
              <li><a href="#"><strong>{{ $category->title }}</strong></a></li>
            @endforeach
            </ul>
            <li>
                <a href="{{ LaravelLocalization::localizeUrl('/contact') }}"><strong>{!! __('nav.contact') !!}</strong></a>
            </li>
            <li>
                <a href="#"><strong>{!! __('nav.project') !!}</strong></a>
            </li>
            <li>
                <a href="{{ LaravelLocalization::localizeUrl('/partner') }}"><strong>{!! __('nav.partner') !!}</strong></a>
            </li>
          </ul>   
        </div>
      </div>
    </div>
      </section>
  </main>
@endsection            