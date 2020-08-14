@extends('layouts.app')

@section('title', __('nav.about'))

@section('content')
    <!-- Header -->
    <header>
    <img class="parallax" src="{{asset('front/img/spb_fon.jpg')}}" alt="">
    <div class="container header-container">
      <div class="d-flex justify-content-between align-items-md-center flex-md-row flex-column">
        <div class="page-title">
          <h2>{!! __('nav.conf') !!}</h2>
          <p>{!! __('legacy.legacy_p') !!}</p>
        </div>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ LaravelLocalization::localizeUrl('/') }}"><i class="fas fa-home mr-1"></i> {!! __('nav.main') !!}</a></li>
          <li class="breadcrumb-item active">{!! __('nav.conf') !!}</li>
        </ul>
      </div>
    </div>
  </header>
  <main>
      <section class="section-all_partners">
            <div class="container">
                   <div class="all_partners">
                   <h2>{!! __('legacy.legacy1') !!}</h2>
                   <p>{!! __('legacy.legacy2') !!}</p>
                   </div>
            </div>
      </section>   
  </main>
@endsection            