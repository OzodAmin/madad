@extends('layouts.app')

@section('title', __('nav.about'))

@section('content')
    <!-- Header -->
    <header>
    <img class="parallax" src="https://picsum.photos/id/67/1600/900" alt="">
    <div class="container header-container">
      <div class="d-flex justify-content-between align-items-md-center flex-md-row flex-column">
        <div class="page-title">
          <h2>{!! __('nav.faq') !!}</h2>
          <p>{!! __('about.about1') !!}</p>
        </div>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ LaravelLocalization::localizeUrl('/') }}"><i class="fas fa-home mr-1"></i> {!! __('nav.main') !!}</a></li>
          <li class="breadcrumb-item active">{!! __('nav.faq') !!}</li>
        </ul>
      </div>
    </div>
  </header>
@endsection            