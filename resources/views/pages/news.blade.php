@extends('layouts.app')

@section('title', 'Новости АНО "МАДАД"')

@section('content')
  <header>
    <img class="parallax" src="https://picsum.photos/id/66/1600/900" alt="">
    <div class="container header-container">
      <div class="d-flex justify-content-between align-items-md-center flex-md-row flex-column">
        <div class="page-title">
          <h2>Новости</h2>
          <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ LaravelLocalization::localizeUrl('/') }}"><i class="fas fa-home mr-1"></i> {!! __('nav.main') !!}</a></li>
          <li class="breadcrumb-item active">Новости</li>
        </ul>
      </div>
    </div>
  </header>

  <!-- Main -->
  <main>
    <section class="sectiom-all_news">
      <div class="container">
        <div class="all_news">
          <div class="row">
            <div class="col-lg-8">
              @foreach ($lastNews as $obj)
              <?php $url= LaravelLocalization::getLocalizedURL(LaravelLocalization::getCurrentLocale(), 'news/'.$obj->slug); ?>
                <div class="news">
                  <div class="news__img">
                    <a href="<?=$url;?>">
                      {{ Html::image('uploads/news/'.$obj->featured_image) }}
                    </a>
                  </div>
                  <div class="news__content">
                    <h3 class="news__title"><a href="<?=$url;?>">{{$obj->title}}</a></h3>
                    <div class="news__widjets">
                      <div class="news__type">
                        <a href="#">
                          <i class="fal fa-folder-open"></i>
                          <span>{{ $obj->category->title }}</span>
                        </a>
                      </div>
                      <div class="news__comment">
                        <i class="fal fa-eye"></i>
                        <span>{{$obj->view}}</span>
                      </div>
                      <div class="news__calendar">
                        <i class="fal fa-calendar"></i>
                        <span>{{$obj->created_at}}</span>
                      </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-md-center flex-md-row flex-column">
                      <a href="<?=$url;?>" class="btn-more btn-more__news order-md-2 order-2">ПОДРОБНО</a>
                      <div class="share order-md-3 order-1">
                        <p>Поделиться: </p>
                        <div class="share-links">
                          <a href="#"><i class="fab fa-facebook-f"></i></a>
                          <a href="#"><i class="fab fa-telegram-plane"></i></a>
                          <a href="#"><i class="fab fa-instagram"></i></a>
                          <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach

              {{ $lastNews->links('vendor.pagination.news') }}

            </div>
            <div class="col-lg-4 mt-lg-0 mt-4">
              <div class="news-left_side">
                <div class="row">
                  <div class="col-lg-12 col-md-6 mt-lg-0 mt-md-5 mt-0">
                    <h3 class="news-left_side--title">Популярные</h3>
                  </div>
                  <div class="col-lg-12 col-md-6 mt-lg-0 mt-md-5 mt-0">
                    @foreach ($mostViewedNews as $obj)
                    <?php $url= LaravelLocalization::getLocalizedURL(LaravelLocalization::getCurrentLocale(), 'news/'.$obj->slug); ?>
                    <div class="news news-very-small">
                      <div class="row align-items-center">
                        <div class="col-md-3 pr-0">
                          <div class="news__img">
                            <a href="<?=$url;?>">
                              {{ Html::image('uploads/news/'.$obj->featured_image) }}
                            </a>
                          </div>
                        </div>
                        <div class="col-md-9">
                          <div class="news__content">
                            <h3 class="news__title">
                              <a href="<?=$url;?>">{{ $obj->title }}</a>
                            </h3>
                            <div class="news__widjets">
                              <div class="news__type">
                                <i class="fal fa-folder-open"></i>
                                <span>{{ $obj->category->title }}</span>
                              </div>
                              <div class="news__comment">
                                <a href="#">
                                  <i class="fal fa-eye"></i>
                                  <span>{{$obj->view}}</span>
                                </a>
                              </div>
                              <div class="news__calendar">
                                <i class="fal fa-calendar"></i>
                                <span>{{$obj->created_at}}</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                  <div class="col-lg-12 col-md-6 mt-lg-5 mt-3">
                    <h3 class="news-left_side--title">Подписаться на рассылку</h3>
                    <form action="" class="subscribe-for-news">
                      <input type="text" placeholder="Имя" required>
                      <input type="email" placeholder="Эл. почта" required>
                      <button type="submit">Подписывайся</button>
                    </form>
                  </div>
                  <div class="col-lg-12 col-md-6 mt-lg-5 mt-3 sticky-top">
                    <!-- <h3 class="news-left_side--title">Реклама</h3> -->
                    <div class="rek">
                      <div class="rek__img">
                        <a href="#"><img class="img-fluid" src="https://picsum.photos/id/684/600/400" alt=""></a>
                        <span>Реклама</span>
                      </div>
                    </div>
                    
                  </div>
                  
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection