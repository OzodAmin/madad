@extends('layouts.app')

@section('title', __('nav.about'))

@section('content')
    <!-- Header -->
    <header>
    <img class="parallax" src="https://picsum.photos/id/67/1600/900" alt="">
    <div class="container header-container">
      <div class="d-flex justify-content-between align-items-md-center flex-md-row flex-column">
        <div class="page-title">
          <h2>{!! __('nav.about') !!}</h2>
          <p>{!! __('about.about1') !!}</p>
        </div>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ LaravelLocalization::localizeUrl('/') }}"><i class="fas fa-home mr-1"></i> {!! __('nav.main') !!}</a></li>
          <li class="breadcrumb-item active">{!! __('nav.about') !!}</li>
        </ul>
      </div>
    </div>
  </header>

  <main>
    <!-- about-us -->
    <section class="section-about-us position-relative">
      <div class="container">
        <div class="about-us">
          <div class="row">
            <div class="col-lg-6">
              <div class="swiper-container swiper-about-us">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img class="img-fluid" src="https://picsum.photos/id/54/600/400" alt="">
                  </div>
                  <div class="swiper-slide">
                    <img class="img-fluid" src="https://picsum.photos/id/62/600/400" alt="">
                  </div>
                  <div class="swiper-slide">
                    <img class="img-fluid" src="https://picsum.photos/id/87/600/400" alt="">
                  </div>
                </div>
                <div class="swiper-pagination swiper-pagination-about-us"></div>
              </div>
            </div>
            <div class="col-lg-6 mt-md-3 mt-0">
              <div class="abouts">
                <h6>{!! __('about.about2') !!}</h6>
                <h3>{!! __('about.about3') !!}</h3>
                <h5>{!! __('about.about4') !!}</h5>
                <p>{!! __('about.about5') !!}</p>

                <div class="row mt-30">
                  <div class="col-md-6">
                    <ul class="list list-unstyled list-hand">
                      <li><i class="far fa-hand-point-right"></i> Award-winning design</li>
                      <li><i class="far fa-hand-point-right"></i> Super Fast Customer support </li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <ul class="list list-unstyled list-hand">
                      <li><i class="far fa-hand-point-right"></i> Easy to Customize pages</li>
                      <li><i class="far fa-hand-point-right"></i> Powerful Performance </li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <ul class="list list-unstyled list-hand">
                      <li><i class="far fa-hand-point-right"></i> Award-winning design</li>
                      <li><i class="far fa-hand-point-right"></i> Super Fast Customer support </li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <ul class="list list-unstyled list-hand">
                      <li><i class="far fa-hand-point-right"></i> Easy to Customize pages</li>
                      <li><i class="far fa-hand-point-right"></i> Powerful Performance </li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <ul class="list list-unstyled list-hand">
                      <li><i class="far fa-hand-point-right"></i> Award-winning design</li>
                      <li><i class="far fa-hand-point-right"></i> Super Fast Customer support </li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <ul class="list list-unstyled list-hand">
                      <li><i class="far fa-hand-point-right"></i> Easy to Customize pages</li>
                      <li><i class="far fa-hand-point-right"></i> Powerful Performance </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="feature-text left-icon mt-50 xs-mt-20">
                <div class="feature-icon">
                  <i class="fal fa-desktop"></i>
                </div>
                <div class="feature-info">
                  <h5 class="text-back">{!! __('about.about6') !!}</h5>
                  <p>{!! __('about.about7') !!}</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="feature-text left-icon mt-50 xs-mt-20">
                <div class="feature-icon">
                  <i class="fal fa-server"></i>
                </div>
                <div class="feature-info">
                  <h5 class="text-back">{!! __('about.about8') !!}</h5>
                  <p>{!! __('about.about9') !!}</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="feature-text left-icon mt-50 xs-mt-20">
                <div class="feature-icon">
                  <i class="fal fa-heart"></i>
                </div>
                <div class="feature-info">
                  <h5 class="text-back">{!! __('about.about10') !!}</h5>
                  <p>{!! __('about.about11') !!}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Faq -->
    <section class="section-faq">
      <div class="container">
        <div class="faq">
          <div id="accordion" class="myaccordion">
            <div class="card">
              <div class="card-header" id="heading1">

                <button class="collapsed" data-toggle="collapse" data-target="#collapse1" aria-expanded="false"
                  aria-controls="collapse1">
                  {!! __('about.about12') !!}
                  <span class="fa-stack fa-sm">
                    <i class="fal fa-circle fa-stack-2x"></i>
                    <i class="fal fa-plus fa-stack-1x"></i>
                  </span>
                </button>

              </div>
              <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordion">
                <div class="card-body">
                  <p>{!! __('about.about13') !!}</p>
                  <p>{!! __('about.about14') !!}</p>
                  <p>{!! __('about.about15') !!}</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="heading2">

                <button class="collapsed" data-toggle="collapse" data-target="#collapse2" aria-expanded="false"
                  aria-controls="collapse2">
                  {!! __('about.about16') !!}
                  <span class="fa-stack">
                    <i class="fal fa-circle fa-stack-2x"></i>
                    <i class="fal fa-plus fa-stack-1x"></i>
                  </span>
                </button>

              </div>
              <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
                <div class="card-body">
                  <p>{!! __('about.about13') !!}</p>
                  <p>{!! __('about.about14') !!}</p>
                  <p>{!! __('about.about15') !!}</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="heading3">

                <button class="collapsed" data-toggle="collapse" data-target="#collapse3" aria-expanded="false"
                  aria-controls="collapse3">
                  {!! __('about.about17') !!}
                  <span class="fa-stack">
                    <i class="fal fa-circle fa-stack-2x"></i>
                    <i class="fal fa-plus fa-stack-1x"></i>
                  </span>
                </button>

              </div>
              <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion">
                <div class="card-body">
                  <p>{!! __('about.about13') !!}</p>
                  <p>{!! __('about.about14') !!}</p>
                  <p>{!! __('about.about15') !!}</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="heading4">

                <button class="collapsed" data-toggle="collapse" data-target="#collapse4" aria-expanded="false"
                  aria-controls="collapse4">
                  {!! __('about.about18') !!}
                  <span class="fa-stack">
                    <i class="fal fa-circle fa-stack-2x"></i>
                    <i class="fal fa-plus fa-stack-1x"></i>
                  </span>
                </button>

              </div>
              <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
                <div class="card-body">
                  <p>{!! __('about.about13') !!}</p>
                  <p>{!! __('about.about14') !!}</p>
                  <p>{!! __('about.about15') !!}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Services -->
    <section class="section-services mb-5">
        <div class="container position-relative">
            <div class="swiper-container swiper-service mt-0">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="swiper-service__item">
                            <div>
                                <img src="{{asset('front/img/slider-service-icon-1.png')}}" alt="Service icon">
                            </div>
                            <h2 title="{!! __('index.help') !!}">{!! __('index.help') !!}</h2>
                            <p>{!! __('index.helpText') !!}</p>
                            <a href="#" class="btn-more btn-more__white">{!! __('index.more') !!}</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-service__item">
                            <img src="{{asset('front/img/slider-service-icon-2.png')}}" alt="Service icon">
                            <h2 title="{!! __('index.help') !!}">{!! __('index.cons') !!}</h2>
                            <p>{!! __('index.constext') !!}</p>
                            <a href="#" class="btn-more btn-more__white">{!! __('index.more') !!}</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-service__item">
                            <img src="{{asset('front/img/slider-service-icon-3.png')}}" alt="Service icon">
                            <h2 title="{!! __('index.help') !!}">{!! __('index.friend') !!}</h2>
                            <p>{!! __('index.friendText') !!}</p>
                            <a href="#" class="btn-more btn-more__white">{!! __('index.more') !!}</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-service__item">
                            <img src="{{asset('front/img/slider-service-icon-2.png')}}" alt="Service icon">
                            <h2 title="{!! __('index.help') !!}">{!! __('index.help') !!}</h2>
                            <p>{!! __('index.helpText') !!}</p>
                            <a href="#" class="btn-more btn-more__white">{!! __('index.more') !!}</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-service__item">
                            <img src="{{asset('front/img/slider-service-icon-3.png')}}" alt="Service icon">
                            <h2 title="{!! __('index.help') !!}">{!! __('index.help') !!}</h2>
                            <p>{!! __('index.helpText') !!}</p>
                            <a href="#" class="btn-more btn-more__white">{!! __('index.more') !!}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next swiper-button-next-service"></div>
            <div class="swiper-button-prev swiper-button-prev-service"></div>
        </div>
    </section>

    <!-- Consultant -->
    <section class="section-consultant">
        <div class="container">
            <div class="d-flex justify-content-between align-items-md-end flex-md-row flex-column">
                <h1 class="section-title mb-md-0 mb-3">{!! __('index.cons') !!}</h1>
                <a class="link-all" href="#">{!! __('index.consAll') !!}</a>
            </div>
            <div class="row mt-4">
                <div class="col-md-6 my-3 col-lg-3">
                    <div class="consultant">
                        <div class="consultant__body">
                            <div class="consultant__img">
                                <img src="{{asset('front/img/consultant.png')}}" alt="consultant image">
                            </div>
                            <div class="consultant__name">Jonh Doe</div>
                            <div class="consultant__degree">Поступление ВУЗ</div>
                        </div>
                        <div class="consultant__footer">
                            <div class="consultant__phone">
                                <a href="#" class="">+998 (90) 123-45-67</a>
                            </div>
                            <div class="consultant__socials">
                                <a target="_blank" href="#facebook"><i class="fab fa-facebook-f"></i></a>
                                <a target="_blank" href="#twitter"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="#email"><i class="far fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 my-3 col-lg-3">
                    <div class="consultant">
                        <div class="consultant__body">
                            <div class="consultant__img">
                                <img src="{{asset('front/img/consultant.png')}}" alt="consultant image">
                            </div>
                            <div class="consultant__name">Jonh Doe</div>
                            <div class="consultant__degree">Поступление ВУЗ</div>
                        </div>
                        <div class="consultant__footer">
                            <a href="#" class="consultant__phone">123-455-688</a>
                            <div class="consultant__socials">
                                <a href="#facebook"><i class="fab fa-facebook-f"></i></a>
                                <a href="#twitter"><i class="fab fa-twitter"></i></a>
                                <a href="#email"><i class="far fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 my-3 col-lg-3">
                    <div class="consultant">
                        <div class="consultant__body">
                            <div class="consultant__img">
                                <img src="{{asset('front/img/consultant.png')}}" alt="consultant image">
                            </div>
                            <div class="consultant__name">Jonh Doe</div>
                            <div class="consultant__degree">Поступление ВУЗ</div>
                        </div>
                        <div class="consultant__footer">
                            <a href="#" class="consultant__phone">123-455-688</a>
                            <div class="consultant__socials">
                                <a href="#facebook"><i class="fab fa-facebook-f"></i></a>
                                <a href="#twitter"><i class="fab fa-twitter"></i></a>
                                <a href="#email"><i class="far fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 my-3 col-lg-3">
                    <div class="consultant">
                        <div class="consultant__body">
                            <div class="consultant__img">
                                <img src="{{asset('front/img/consultant.png')}}" alt="consultant image">
                            </div>
                            <div class="consultant__name">Jonh Doe</div>
                            <div class="consultant__degree">Поступление ВУЗ</div>
                        </div>
                        <div class="consultant__footer">
                            <a href="#" class="consultant__phone">123-455-688</a>
                            <div class="consultant__socials">
                                <a href="#facebook"><i class="fab fa-facebook-f"></i></a>
                                <a href="#twitter"><i class="fab fa-twitter"></i></a>
                                <a href="#email"><i class="far fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </main>
@endsection            