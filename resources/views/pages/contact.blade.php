@extends('layouts.app')

@section('title', __('nav.contact'))

@section('content')
    <!-- Header -->
    <header>
    <img class="parallax" src="{{asset('front/img/spb_fon.jpg')}}" alt="">
    <div class="container header-container">
      <div class="d-flex justify-content-between align-items-md-center flex-md-row flex-column">
        <div class="page-title">
          <h2>{!! __('nav.contact') !!}</h2>
          <p>{!! __('about.about1') !!}</p>
        </div>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ LaravelLocalization::localizeUrl('/') }}"><i class="fas fa-home mr-1"></i> {!! __('nav.main') !!}</a></li>
          <li class="breadcrumb-item active">{!! __('nav.contact') !!}</li>
        </ul>
      </div>
    </div>
  </header>
  <main>
<section>
  <div class="container">

  </div>
</section>

  <section class="section-about-us position-relative">
    <div class="container">
      <div class="about-us">
        <div class="row">
          <div class="col-lg-12">

          </div>
          <div class="col-lg-12 mt-md-3 mt-0">
            <div class="abouts">
              <h6>Контакты</h6>
              <h3>текст</h3>
              <h5>текст</h5>
              <p>текст</p>

              <div class="row mt-30">
                <div class="col-md-6">
                  <ul class="list list-unstyled list-hand">
                    <li><i class="fa fa-phone"></i> Award-winning design</li>
                    <li><i class="fa fa-fax"></i></i> Super Fast Customer support </li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="list list-unstyled list-hand">
                    <li><i class="fa fa-map-marker "></i> Award-winning design</li>
                    <li><i class="fa fa-university "></i></i> Super Fast Customer support </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-6 col-sm-12">
          <!-- Form -->
          <div class="row mt-4">
            <div class="col-lg-12 col-md-12">
              <h3 class="theme-color mb-3">Форма обратной связи </h3>

              <form id="contactform" class="gray-form form-row m-0" role="form" method="post" action="#">
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Ф.И.О*">
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email*">
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputphone1" placeholder="Номер телефона*">
                  </div>
                </div>
                <div class="col-lg-12 col-md-12">
                  <div class="form-group">
                    <textarea class="form-control" rows="7" placeholder="Текст сообщение"></textarea>
                  </div>
                </div>

                              <div class="col-lg-12 col-md-12">
                                <input type="hidden" name="action" value="sendEmail">
                                <button id="submit" name="submit" type="submit" value="Send" class="btn-submit"><span>Отправьте
                                    ваше сообщение</span></button>
                              </div>

      </div>
    </div>
  </section>
  </main>
@endsection