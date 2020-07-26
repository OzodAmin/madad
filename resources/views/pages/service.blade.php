@extends('layouts.app')

@section('title', 'Услуги АНО "МАДАД"')

@section('content')
    <!-- Header -->
  <header>
    <img class="parallax" src="https://picsum.photos/id/67/1600/900" alt="">
    <div class="container header-container">
      <div class="d-flex justify-content-between align-items-md-center flex-md-row flex-column">
        <div class="page-title">
          <h2>Услуги</h2>
          <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ LaravelLocalization::localizeUrl('/') }}"><i class="fas fa-home mr-1"></i> {!! __('nav.main') !!}</a></li>
          <li class="breadcrumb-item active">Услуги</li>
        </ul>
      </div>
    </div>
  </header>

  <main>
    <section class="section-all_service white-bg page-section-ptb">
      <div class="container">
        <div class="all_service">
          <div class="row">
            <!-- left  -->
            <div class="col-lg-9 col-md-12 order-lg-12 order-1">
              <div class="row">
                <div class="col-lg-12 my-col-12">
                  <div class="service-img">
                    <img class="img-fluid" src="https://picsum.photos/id/36/1600/900" alt="">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="section-title mb-0 py-4">
                    <h2>We provide the best service</h2>
                    <p>We truly care about our users and our product. We are dedicated to providing you with the best
                      experience possible. </p>
                  </div>
                </div>
              </div>
              <!-- video section -->
              <div class="row">
                <div class="col-lg-6 col-md-6">
                  <p>Webster has powerful options &amp; tools, unlimited designs, responsive framework and amazing
                    support. We are dedicated to providing you with the best experience possible. </p>
                  <ul class="list list-mark list-unstyled">
                    <li><i class="far fa-check"></i> Award-winning design</li>
                    <li><i class="far fa-check"></i> Super Fast Customer support </li>
                    <li><i class="far fa-check"></i> Email Design </li>
                    <li><i class="far fa-check"></i> Easy to Customize pages</li>
                    <li><i class="far fa-check"></i> Powerful Performance </li>
                  </ul>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="popup-video">
                    <img class="img-fluid full-width" src="https://picsum.photos/id/684/600/400" alt="">
                    <div class="play-video text-center">
                      <a id="video-open" data-toggle="modal" data-target=".video_modal" class="view-video popup-youtube"
                        href="javascript:void(0)"> <i class="fa fa-play"></i> </a>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Service Include The Benefits -->
              <div class="row">
                <div class="col-lg-6 col-md-6 my-4 my-md-3">
                  <h4>Service Include</h4>
                  <div class="feature-text left-icon mt-3" style="position: unset;">
                    <div class="feature-icon theme-color">
                      <i class="fal fa-clone"></i>
                    </div>
                    <div class="feature-info">
                      <h5 class="text-back">Many Style Available</h5>
                      <p class="mb-0">We will help you to achieve your goals and to grow your business.</p>
                    </div>
                  </div>
                  <div class="feature-text left-icon mt-3" style="position: unset;">
                    <div class="feature-icon theme-color">
                      <i class="fal fa-handshake"></i>
                    </div>
                    <div class="feature-info">
                      <h5 class="text-back">Unlimited layouts</h5>
                      <p class="mb-0">We are dedicated to providing you with the best experience possible.</p>
                    </div>
                  </div>
                  <div class="feature-text left-icon mt-3" style="position: unset;">
                    <div class="feature-icon theme-color">
                      <i class="fal fa-shield-alt"></i>
                    </div>
                    <div class="feature-info">
                      <h5 class="text-back">Parallax Sections</h5>
                      <p class="mb-0">We are an innovative agency. We develop and design customers around the world.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 my-4 my-md-3">
                  <h4>The Benefits</h4>
                  <p class="mt-20 mb-0">Webster has powerful options &amp; tools, unlimited designs, responsive
                    framework and amazing support. We are dedicated to providing you with the best experience possible.
                  </p>
                  <ul class="list list-mark list-unstyled mt-3">
                    <li><i class="far fa-check"></i> Award-winning design</li>
                    <li><i class="far fa-check"></i> Super Fast Customer support </li>
                    <li><i class="far fa-check"></i> Email Design </li>
                    <li><i class="far fa-check"></i> Easy to Customize pages</li>
                    <li><i class="far fa-check"></i> Powerful Performance </li>
                  </ul>
                  <p class="mt-2 mb-0">Truly ideal solutions for your business. Create a website that you are gonna be
                    proud of. </p>
                </div>
              </div>

              <!-- Form -->
              <div class="row mt-4">
                <div class="col-lg-12 col-md-12">
                  <h3 class="theme-color mb-3">Leave a Reply </h3>

                  <form id="contactform" class="gray-form form-row m-0" role="form" method="post" action="#">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                      <div class="form-group">
                        <input type="email" class="form-control" placeholder="Name*">
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                      <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email*">
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                      <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputphone1" placeholder="Phone*">
                      </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                      <div class="form-group">
                        <textarea class="form-control" rows="7" placeholder="message"></textarea>
                      </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                      <input type="hidden" name="action" value="sendEmail">
                      <button id="submit" name="submit" type="submit" value="Send" class="btn-submit"><span>Отправьте
                          ваше сообщение</span></button>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-12 order-lg-1 order-12 mt-4 mt-lg-0">
              <div class="our-service pb-0">
                <h6>Our Service</h6>
                <ul>
                  <li><a class="active gray-bg" href="#">service 1</a></li>
                  <li><a class="gray-bg" href="#">service 2</a></li>
                  <li><a class="gray-bg" href="#">service 3</a></li>
                  <li><a class="gray-bg" href="#">service 4</a></li>
                  <li><a class="gray-bg" href="#">service 5</a></li>
                </ul>
              </div>
              <div class="rek mx-0">
                <div class="rek__img">
                  <a href="#"><img class="img-fluid" src="https://picsum.photos/id/684/600/400" alt=""></a>
                  <span>Реклама</span>
                </div>
              </div>
              <div class="download-box">
                <div class="box-title mb-15 ">
                  <h6>Download</h6>
                </div>
                <div class="iconbox mt-20">
                  <a href="#" class="theme-bg"><i class="far fa-download"></i></a>
                  <span class="font-weight-bold">BROCHURE 01.pdf</span>
                  <p class="font-italic">Click on the icon to download the brochure</p>
                </div>
              </div>
            </div>
            <!-- right  -->

          </div>
        </div>
      </div>
    </section>
  </main>

  <div class="modal fade video_modal" id="video_modal">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-body">
          <button class="close" data-dismiss="modal">
            <i class="fal fa-times"></i>
          </button>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/B4LLlmQkmG8" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
@endsection