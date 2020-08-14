@extends('layouts.app')

@section('title', 'Услуги АНО "МАДАД"')

@section('content')
    <!-- Header -->
  <header>
    <img class="parallax" src="{{asset('front/img/spb_fon.jpg')}}" alt="">
    <div class="container header-container">
      <div class="d-flex justify-content-between align-items-md-center flex-md-row flex-column">
        <div class="page-title">
          <h2>Услуги</h2>
          <p>Перечень услуг АНО "МАДАД"</p>
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
                    <h2>АНО "MADAD" профессионально, решает правовые вопросы.</h2>
                    <p>Юристы нашей компании — профессионалы своего дела, обладающие высокой степенью и огромным опытом в решение самых сложных вопросов. Мы подготовим необходимую, доказательную базу, составим заявления и направим их в специализированные органы. Благодаря профессионализму специалистов, 97% обращений были решены в пользу наших клиентов.</p>
                  </div>
                </div>
              </div>
              <!-- video section -->
              <div class="row">
                  
                   <div class="col-lg-6 col-md-6">
                  <div class="popup-video">
                    <img class="img-fluid full-width" src="https://picsum.photos/id/684/600/400" alt="">
                    <div class="play-video text-center">
                      <a id="video-open" data-toggle="modal" data-target=".video_modal" class="view-video popup-youtube"
                        href="javascript:void(0)"> <i class="fa fa-play"></i> </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    
                  <p>Как известно, каждый иностранный гражданин с момента въезда в Российскую Федерацию сразу же попадает под действие миграционного законодательства, которое строго регламентирует пребывание иностранца на территории России, устанавливая жесткие сроки и правила нахождения в стране.
Нарушение этих правил миграционного законодательства влечет за собой наложение санкций со стороны государства в виде штрафа, депортации или даже запрета на въезд в РФ. </p>
               
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
                      <i class="fal fa-clone"></i>
                    </div>
                    <div class="feature-info">
                      <h5 class="text-back">Many Style Available</h5>
                      <p class="mb-0">We will help you to achieve your goals and to grow your business.</p>
                    </div>
                  </div>
                   <div class="feature-text left-icon mt-3" style="position: unset;">
                    <div class="feature-icon theme-color">
                      <i class="fal fa-clone"></i>
                    </div>
                    <div class="feature-info">
                      <h5 class="text-back">Many Style Available</h5>
                      <p class="mb-0">We will help you to achieve your goals and to grow your business.</p>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Form -->
              <div class="row mt-4">
                <div class="col-lg-12 col-md-12">
                  <h3 class="theme-color mb-3">Отправить заявку</h3>

                  <form id="contactform" class="gray-form form-row m-0" role="form" method="post" action="#">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                      <div class="form-group">
                        <input type="email" class="form-control" placeholder="ФИО*">
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                      <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Электронная почта*">
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                      <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputphone1" placeholder="Номер телефона*">
                      </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                      <div class="form-group">
                        <textarea class="form-control" rows="7" placeholder="Сообщение"></textarea>
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
                <h6>Наши услуги</h6>
                <ul>
                  <li><a class="active gray-bg" href="#">Юридическая консультация</a></li>
                  <li><a class="gray-bg" href="#">Переводы документов</a></li>
                  <li><a class="gray-bg" href="#">Нострификация диплома</a></li>
                  <li><a class="gray-bg" href="#">Правовые консультации </a></li>
                  <li><a class="gray-bg" href="#">Помощь в аренде жилья</a></li>
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
                  <h6>Скачать</h6>
                </div>
                <div class="iconbox mt-20">
                  <a href="#" class="theme-bg"><i class="far fa-download"></i></a>
                  <span class="font-weight-bold">Презентация.pdf</span>
                  <p class="font-italic">Проделанный работы за 2019 г.</p>
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