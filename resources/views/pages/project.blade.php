@extends('layouts.app')

@section('title', __('nav.project'))

@section('content')
    <!-- Header -->
    <header>
    <img class="parallax" src="{{asset('front/img/spb_fon.jpg')}}" alt="">
    <div class="container header-container">
      <div class="d-flex justify-content-between align-items-md-center flex-md-row flex-column">
        <div class="page-title">
          <h2>{!! __('nav.project') !!}</h2>
        </div>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ LaravelLocalization::localizeUrl('/') }}"><i class="fas fa-home mr-1"></i> {!! __('nav.main') !!}</a></li>
          <li class="breadcrumb-item active">{!! __('nav.project') !!}</li>
        </ul>
      </div>
    </div>
  </header>
  <main>
    <section class="section-all_partners">
      <div class="container">
        <div class="all_partners">
          @foreach ($projects as $project)
          <div class="row align-items-center">
            <div class="col-lg-3 d-flex justify-content-center">
              <div class="partner">
                <a href="#" class="partner__img" style="background-image: url('{{asset('uploads/project/'.$project->featured_image)}}');"></a>
              </div>
            </div>
            <div class="col-lg-9">
              <div class="partner__content">
                <h3 class="partner__name"><a href="#"><?= $project->title;?></a></h3>
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