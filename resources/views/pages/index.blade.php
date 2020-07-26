@extends('layouts.app')

@section('title', __('nav.site'))

@section('css')
    <style>
        header {background-image: none;height: 100%;}
        header::after {display: none;}
    </style>
@endsection

@section('content')
    <!-- Header -->
    <header>
        <!-- Slider -->
        <div class="swiper-container swiper-header">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="swiper-header__item" style="background-image: url('{{asset('front/img/slider_bg1.jpg')}}');">
                        <p>{!! __('nav.site2') !!}</p>
                        <a href="#" class="btn-more btn-more__blue mt-3">{!! __('index.more') !!}</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-header__item" style="background-image: url('{{asset('front/img/slider_bg2.jpg')}}');">
                        <p>{!! __('index.slider') !!}</p>
                        <a href="#" class="btn-more btn-more__blue mt-3">{!! __('index.more') !!}</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-header__item" style="background-image: url('{{asset('front/img/header_bg1.png')}}');">
                        <p>{!! __('index.slider2') !!}</p>
                        <a href="#" class="btn-more btn-more__blue mt-3">{!! __('index.more') !!}</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next swiper-button-next-header"></div>
            <div class="swiper-button-prev swiper-button-next-header"></div>

            <div class="swiper-pagination swiper-pagination-header"></div>
        </div>
    </header>

    <!-- Main -->
    <main>
        <!-- Services -->
        <section class="section-services">
            <div class="container position-relative">
                <div class="swiper-container swiper-service py-5">
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

        <!-- About us -->
        <section class="section-about">
            <div class="container">
                <div class="about-us">
                    <div class="row">
                        <div class="col-lg-5 text-center">
                            <img class="img-fluid" title="about-us_img" src="{{asset('front/img/about-us_img.png')}}" alt="about-us_img">
                        </div>
                        <div class="col-lg-7">
                            <h2 class="mb-3">{!! __('index.about') !!}</h2>
                            <div class="about-us__content">
                                <p>{!! __('index.about1') !!}</p>
                                <p>{!! __('index.about2') !!}</p> 
                            </div>
                            <div class="phone">
                                <div class="phone-icon">
                                    <img class="img-fluid" src="{{asset('front/img/phone-icon.png')}}" alt="phone icon">
                                </div>
                                <div class="phone-number">
                                    <p>{!! __('index.freeHelp') !!}</p>
                                    <a href="tel:999 888 0000">999 888 0000</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projets -->
        <section class="section-projects h-auto">
            <h1>{!! __('nav.project') !!}</h1>
            <div class="projects mt-md-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-lg-5"></div>
                        <div class="col-md-9 col-lg-7">
                            <div class="mt-5">
                                <div class="slider slider-for slider-project">
                                    <div>
                                        <div title="one" class="slider-project__item">
                                            <h2>{!! __('index.union') !!}</h2>
                                            <div class="slider-project__item--content">
                                                <address><i class="far fa-map-marker mr-1"></i> {!! __('index.union1') !!}</address>
                                                <p>{!! __('index.union1') !!}</p>
                                                <ul>
                                                    <li>{!! __('index.union3') !!}</li>
                                                    <li>{!! __('index.union4') !!}</li>
                                                    <li>{!! __('index.union5') !!}</li>
                                                </ul>
                                            </div>
                                            <div class="more-info mt-3">
                                                <div class="more-info__email">
                                                    <a href="mailto:www.union-madad.ru">www.union-madad.ru</a>
                                                </div>
                                                <div class="more-info__phone">
                                                    <a href="tel:+7 911 141 41 48">+7 911 141 41 48</a>
                                                </div>
                                                <div class="more-info__icons">
                                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                                    <a href="#"><i class="far fa-envelope"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div title="two" class="slider-project__item">
                                            <h2>{!! __('index.union') !!}</h2>
                                            <div class="slider-project__item--content">
                                                <address><i class="far fa-map-marker mr-1"></i> {!! __('index.union1') !!}</address>
                                                <p>{!! __('index.union2') !!}</p>
                                                <ul>
                                                    <li>{!! __('index.union3') !!}</li>
                                                    <li>{!! __('index.union4') !!}</li>
                                                    <li>{!! __('index.union5') !!}</li>
                                                </ul>
                                            </div>
                                            <div class="more-info mt-3">
                                                <div class="more-info__email">
                                                    <a href="mailto:www.union-madad.ru">www.union-madad.ru</a>
                                                </div>
                                                <div class="more-info__phone">
                                                    <a href="tel:+7 911 141 41 48">+7 911 141 41 48</a>
                                                </div>
                                                <div class="more-info__icons">
                                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                                    <a href="#"><i class="far fa-envelope"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div title="three" class="slider-project__item">
                                            <h2>{!! __('index.union') !!}</h2>
                                            <div class="slider-project__item--content">
                                                <address><i class="far fa-map-marker mr-1"></i> {!! __('index.union1') !!}</address>
                                                <p>{!! __('index.union2') !!}</p>
                                                <ul>
                                                    <li>{!! __('index.union3') !!}</li>
                                                    <li>{!! __('index.union4') !!}</li>
                                                    <li>{!! __('index.union5') !!}</li>
                                                </ul>
                                            </div>
                                            <div class="more-info mt-3">
                                                <div class="more-info__email">
                                                    <a href="mailto:www.union-madad.ru">www.union-madad.ru</a>
                                                </div>
                                                <div class="more-info__phone">
                                                    <a href="tel:+7 911 141 41 48">+7 911 141 41 48</a>
                                                </div>
                                                <div class="more-info__icons">
                                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                                    <a href="#"><i class="far fa-envelope"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div title="four" class="slider-project__item">
                                            <h2>{!! __('index.union') !!}</h2>
                                            <div class="slider-project__item--content">
                                                <address><i class="far fa-map-marker mr-1"></i> {!! __('index.union1') !!}</address>
                                                <p>{!! __('index.union2') !!}</p>
                                                <ul>
                                                    <li>{!! __('index.union3') !!}</li>
                                                    <li>{!! __('index.union4') !!}</li>
                                                    <li>{!! __('index.union5') !!}</li>
                                                </ul>
                                            </div>
                                            <div class="more-info mt-3">
                                                <div class="more-info__email">
                                                    <a href="mailto:www.union-madad.ru">www.union-madad.ru</a>
                                                </div>
                                                <div class="more-info__phone">
                                                    <a href="tel:+7 911 141 41 48">+7 911 141 41 48</a>
                                                </div>
                                                <div class="more-info__icons">
                                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                                    <a href="#"><i class="far fa-envelope"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid px-0 d-none d-md-block">
                    <div class="slider slider-nav">
                        <div>
                            <div class="slider-project__item--image" title="one"
                                style="background-image: url('{{asset('front/img/project1.jpg')}}');"></div>
                        </div>
                        <div>
                            <div class="slider-project__item--image" title="two"
                                style="background-image: url('{{asset('front/img/project2.jpg')}}');"></div>
                        </div>
                        <div>
                            <div class="slider-project__item--image" title="three"
                                style="background-image: url('{{asset('front/img/project1.jpg')}}');"></div>
                        </div>
                        <div>
                            <div class="slider-project__item--image" title="four"
                                style="background-image: url('{{asset('front/img/project2.jpg')}}');"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Background -->
        <section class="section-background">
            <div class="container">
                <div class="row">
                    <div class="col-6 my-3 col-lg-3">
                        <div class="background">
                            <div class="background__icon background__icon-1"></div>
                            <div class="background__number">1032</div>
                            <div class="background__title">{!! __('index.request') !!}</div>
                        </div>
                    </div>
                    <div class="col-6 my-3 col-lg-3">
                        <a href="partner.html">
                            <div class="background">
                                <div class="background__icon background__icon-2"></div>
                                <div class="background__number">258</div>
                                <div class="background__title">{!! __('nav.partner') !!}</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 my-3 col-lg-3">
                        <div class="background">
                            <div class="background__icon background__icon-3"></div>
                            <div class="background__number">258</div>
                            <div class="background__title">{!! __('index.ball') !!}</div>
                        </div>
                    </div>
                    <div class="col-6 my-3 col-lg-3">
                        <div class="background">
                            <div class="background__icon background__icon-4"></div>
                            <div class="background__number">24</div>
                            <div class="background__title">{!! __('nav.project') !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- News -->
        <section class="section-news_main">
            <div class="container">
                <div class="news_main">
                    <div class="d-flex align-items-md-end justify-content-between flex-md-row flex-column">
                        <div>
                            <p class="news_main__type m-0">{!! __('index.lastNews') !!} </p>
                            <h2 class="news_main__title mb-0">{!! __('index.newsAndBall') !!}</h2>
                        </div>
                        <div class="mt-md-0 mt-3">
                            <a href="#" class="btn-more btn-more__blue-square">{!! __('index.allNews') !!}</a>
                        </div>
                    </div>

                    <div class="row mt-4 mt-md-5 mb-4">
                        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                            <div class="news-item">
                                <a href="#">
                                    <img src="{{asset('front/img/news-item-img1.png')}}" alt="" class="news-item__img"
                                        title="Насление великих предков - основа высокой нравственности">
                                </a>
                                <div class="d-flex my-3">
                                    <div class="news-item__date">20 мая, 2020</div>
                                    <div class="news-item__comments-count"><a href="#">2 Комментарии</a></div>
                                </div>
                                <h3 class="news-item__title">
                                    <a href="#">
                                        Насление великих предков - основа высокой нравственности

                                    </a>
                                </h3>
                                <p class="news-item__subtitle">При содействии Комитета по межнацио- нальным отношениям и
                                    реализации мирационной политики в Санкт- Петербурге 21 ферваля в Санкт- Петербурском
                                    Доме национальностей состалялось разъяснительно- профилактическое мероприятие</p>
                                <a href="#" class="btn-more btn-more__blue-square btn-more__blue-square-2">ПОДРОБНО</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                            <div class="news-item">
                                <a href="#">
                                    <img src="{{asset('front/img/news-item-img2.png')}}" alt="" class="news-item__img"
                                        title="Насление великих предков - основа высокой нравственности">
                                </a>
                                <div class="d-flex my-3">
                                    <div class="news-item__date">20 мая, 2020</div>
                                    <div class="news-item__comments-count"><a href="#">2 Комментарии</a></div>
                                </div>
                                <h3 class="news-item__title">
                                    <a href="#">
                                        АНО “МАДАД” выступили одними из организаторов празднование
                                        Наруза студентами в ПГУПСе
                                    </a>
                                </h3>
                                <p class="news-item__subtitle">При содействии Комитета по межнацио- нальным отношениям и
                                    реализации мирационной политики в Санкт- Петербурге 21 ферваля в Санкт- Петербурском
                                    Доме национальностей</p>
                                <a href="#" class="btn-more btn-more__blue-square btn-more__blue-square-2">ПОДРОБНО</a>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="bg-light px-3 py-4 h-100 mt-lg-0 mt-4">
                                <!-- <div class="row"></div> -->
                                <div class="news-item">
                                    <div class="d-flex my-3">
                                        <div class="news-item__date">20 мая, 2020</div>
                                        <div class="news-item__comments-count"><a href="#">2 Комментарии</a></div>
                                    </div>
                                    <h3 class="news-item__title">
                                        <a href="#">
                                            День рождения Амира Темура в Доме национальностей.
                                        </a>
                                    </h3>
                                    <hr class="pb-3">
                                </div>
                                <div class="news-item">
                                    <div class="d-flex my-3">
                                        <div class="news-item__date">20 мая, 2020</div>
                                        <div class="news-item__comments-count"><a href="#">2 Комментарии</a></div>
                                    </div>
                                    <h3 class="news-item__title">
                                        <a href="#">
                                            Подписание меморандума в ходе деловой встречи с Председателем Союза Молодежи
                                            РУз
                                        </a>
                                    </h3>
                                    <hr class="pb-3">
                                </div>
                                <div class="news-item">
                                    <div class="d-flex my-3">
                                        <div class="news-item__date">20 мая, 2020</div>
                                        <div class="news-item__comments-count"><a href="#">2 Комментарии</a></div>
                                    </div>
                                    <h3 class="news-item__title">
                                        <a href="#">
                                            Подписание меморандума в ходе деловой встречи с Председателем Союза Молодежи
                                            РУз
                                        </a>
                                    </h3>
                                    <hr class="pb-3">
                                </div>
                                  <div class="news-item">
                                    <div class="d-flex my-3">
                                        <div class="news-item__date">20 мая, 2020</div>
                                        <div class="news-item__comments-count"><a href="#">2 Комментарии</a></div>
                                    </div>
                                    <h3 class="news-item__title">
                                        <a href="#">
                                            Подписание меморандума в ходе деловой встречи с Председателем Союза Молодежи
                                            РУз
                                        </a>
                                    </h3>
                                    <hr class="pb-3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- Multimedia -->
        <section class="section-multimedia">
            <div class="container">
                <h1 class="section-title">{!! __('index.media') !!}</h1>

                <div class="row mt-5">
                    <div class="col-md-12 col-lg-6">
                        <a href="#">
                            <!-- !!! Agar video emas rasm bo'lsa classga media-item__big--only-image qo'shish kerak !!! -->
                            <div class="media-item media-item__big">
                                <div class="media-item__img">
                                    <img src="{{asset('front/img/media_img1.png')}}" alt="media_img1" title="Lorem ipsum doler sit amet.">
                                    <i class="fad fa-play-circle"></i>
                                </div>
                                <div class="media-item__desc">
                                    <h3 class="media-item__title">{!! __('index.media1') !!}</h3>
                                    <div class="media-item__date">Июнь 22, 2020</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-12 col-lg-6 mt-lg-0 mt-4">
                        <div class="row">
                            <div class="col-md-6 col-lg-6 mb-4">
                                <a href="#">
                                    <!-- !!! Agar rasm emas video bo'lsa classdan media-item__small--only-image ni olib tashlash kerak !!! -->
                                    <div class="media-item media-item__small media-item__small--only-image">
                                        <div class="media-item__img">
                                            <img src="{{asset('front/img/media_img2.png')}}" alt="media_img1"
                                                title="Lorem ipsum doler sit amet.">
                                            <i class="fad fa-play-circle"></i>
                                        </div>
                                        <div class="media-item__desc">
                                            <h3 class="media-item__title">{!! __('index.media1') !!}</h3>
                                            <div class="media-item__date">Июнь 22, 2020</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-6 mb-4">
                                <a href="#">
                                    <div class="media-item media-item__small">
                                        <div class="media-item__img">
                                            <img src="{{asset('front/img/media_img3.png')}}" alt="media_img1"
                                                title="Lorem ipsum doler sit amet.">
                                            <i class="fad fa-play-circle"></i>
                                        </div>
                                        <div class="media-item__desc">
                                            <h3 class="media-item__title">{!! __('index.media1') !!}</h3>
                                            <div class="media-item__date">Июнь 22, 2020</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-6 mb-4">
                                <a href="#">
                                    <div class="media-item media-item__small media-item__small--only-image">
                                        <div class="media-item__img">
                                            <img src="{{asset('front/img/media_img4.png')}}" alt="media_img1"
                                                title="Lorem ipsum doler sit amet.">
                                            <i class="fad fa-play-circle"></i>
                                        </div>
                                        <div class="media-item__desc">
                                            <h3 class="media-item__title">{!! __('index.media1') !!}</h3>
                                            <div class="media-item__date">Июнь 22, 2020</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-6 mb-4">
                                <a href="#">
                                    <div class="media-item media-item__small">
                                        <div class="media-item__img">
                                            <img src="{{asset('front/img/media_img5.png')}}" alt="media_img1"
                                                title="Lorem ipsum doler sit amet.">
                                            <i class="fad fa-play-circle"></i>
                                        </div>
                                        <div class="media-item__desc">
                                            <h3 class="media-item__title">{!! __('index.media1') !!}</h3>
                                            <div class="media-item__date">Июнь 22, 2020</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Partners -->
        <section class="section-partners">
            <div class="container-fluid px-md-0">
                <h1 class="section-title">{!! __('nav.partner') !!}</h1>
                <div class="swiper-container swiper-partners">
                    <div class="swiper-wrapper py-4">
                        <div class="swiper-slide">
                            <div class="partner">
                                <div class="partner__img" style="background-image: url('{{asset('front/img/brand-1.png')}}');"></div>
                            </div>
                            <div class="partner">
                                <div class="partner__img" style="background-image: url('{{asset('front/img/brand-2.png')}}');"></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="partner">
                                <div class="partner__img" style="background-image: url('{{asset('front/img/brand-3.png')}}');"></div>
                            </div>
                            <div class="partner">
                                <div class="partner__img" style="background-image: url('{{asset('front/img/brand-4.png')}}');"></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="partner">
                                <div class="partner__img" style="background-image: url('{{asset('front/img/brand-5.png')}}');"></div>
                            </div>
                            <div class="partner">
                                <div class="partner__img" style="background-image: url('{{asset('front/img/brand-6.png')}}');"></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="partner">
                                <div class="partner__img" style="background-image: url('{{asset('front/img/brand-7.png')}}');"></div>
                            </div>
                            <div class="partner">
                                <div class="partner__img" style="background-image: url('{{asset('front/img/brand-1.png')}}');"></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="partner">
                                <div class="partner__img" style="background-image: url('{{asset('front/img/brand-1.png')}}');"></div>
                            </div>
                            <div class="partner">
                                <div class="partner__img" style="background-image: url('{{asset('front/img/brand-2.png')}}');"></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="partner">
                                <div class="partner__img" style="background-image: url('{{asset('front/img/brand-3.png')}}');"></div>
                            </div>
                            <div class="partner">
                                <div class="partner__img" style="background-image: url('{{asset('front/img/brand-4.png')}}');"></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="partner">
                                <div class="partner__img" style="background-image: url('{{asset('front/img/brand-5.png')}}');"></div>
                            </div>
                            <div class="partner">
                                <div class="partner__img" style="background-image: url('{{asset('front/img/brand-6.png')}}');"></div>
                            </div>
                        </div>
                    </div>
                </div>
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