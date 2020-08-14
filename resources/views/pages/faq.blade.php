@extends('layouts.app')

@section('title', __('nav.faq'))

@section('content')
    <!-- Header -->
    <header>
    <img class="parallax" src="{{asset('front/img/spb_fon.jpg')}}" alt="">
    <div class="container header-container">
      <div class="d-flex justify-content-between align-items-md-center flex-md-row flex-column">
        <div class="page-title">
          <h2>{!! __('nav.faq') !!}</h2>
          <p>{!! __('faq.faq1') !!}</p>
        </div>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ LaravelLocalization::localizeUrl('/') }}"><i class="fas fa-home mr-1"></i> {!! __('nav.main') !!}</a></li>
          <li class="breadcrumb-item active">{!! __('nav.faq') !!}</li>
        </ul>
      </div>
    </div>
  </header>

  <main class="mt-5">
    <section class="section-faq">
      <div class="container">
        <div class="faq">
          <div id="accordion" class="myaccordion">
            <?php foreach ($faqs as $value): ?>
            <div class="card">
              <div class="card-header" id="heading_<?=$value->id;?>">
                <button class="collapsed" data-toggle="collapse" data-target="#collapse_<?=$value->id;?>" aria-expanded="false" aria-controls="collapse_<?=$value->id;?>">
                  {!! $value->question !!}
                  <span class="fa-stack fa-sm">
                    <i class="fal fa-circle fa-stack-2x"></i>
                    <i class="fal fa-plus fa-stack-1x"></i>
                  </span>
                </button>
              </div>
              <div id="collapse_<?=$value->id;?>" class="collapse" aria-labelledby="heading_<?=$value->id;?>" data-parent="#accordion">
                <div class="card-body">
                  {!! $value->answer !!}
                </div>
              </div>
            </div>  
            <?php endforeach ?>

          </div>
        </div>
      </div>
    </section>
  </main>
@endsection            