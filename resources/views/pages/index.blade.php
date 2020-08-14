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
                                    <a href="tel: 8965 797 8005"> 8965 797 8005</a>
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
                                    @foreach ($projects as $project)
                                    {!! $project->short_des !!}
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid px-0 d-none d-md-block">
                    <div class="slider slider-nav">
                        <?php foreach ($projects as $key => $project) {
                            $image = asset('uploads/project/'.$project->featured_image);
                            echo '<div><div class="slider-project__item--image" title="'.$project->title.'"
                            style="background-image: url(\''.$image.'\');"></div></div>';
                        }?>
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
                        <a href="{{ LaravelLocalization::localizeUrl('/partner') }}">
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
                            <a href="{{ LaravelLocalization::localizeUrl('/news') }}" class="btn-more btn-more__blue-square">
                                {!! __('index.allNews') !!}
                            </a>
                        </div>
                    </div>

                    <div class="row mt-4 mt-md-5 mb-4">
                        @foreach ($lastNews as $news)
                            <?php $url= LaravelLocalization::getLocalizedURL(LaravelLocalization::getCurrentLocale(), 'news/'.$news->slug); ?>
                                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                                    <div class="news-item">
                                        <a href="<?=$url;?>">
                                            {{ Html::image('uploads/news/'.$news->featured_image, $news->title, ['class' => 'news-item__img']) }}
                                        </a>
                                        <div class="d-flex my-3">
                                            <div class="news-item__date">
                                                <?=date('d.m.Y', strtotime($news->created_at));?>
                                            </div>
                                        </div>
                                        <h3 class="news-item__title">
                                            <a href="<?=$url;?>">{{ $news->title }}</a>
                                        </h3>
                                        <p class="news-item__subtitle">{{ $news->short_des }}</p>
                                        <a href="<?=$url;?>" class="btn-more btn-more__blue-square btn-more__blue-square-2">{!! __('index.more') !!}</a>
                                    </div>
                                </div>
                        @endforeach

                        <div class="col-lg-4">
                            <div class="bg-light px-3 py-4 h-100 mt-lg-0 mt-4">
                                @foreach ($lastfourNews as $news)
                                    <?php $url= LaravelLocalization::getLocalizedURL(LaravelLocalization::getCurrentLocale(), 'news/'.$news->slug); ?>
                                <div class="news-item">
                                    <div class="d-flex my-3">
                                        <div class="news-item__date">
                                            <?=date('d.m.Y', strtotime($news->created_at));?>
                                        </div>
                                        <div class="news-item__comments-count">
                                            <a href="#">
                                                <i class="fal fa-folder-open"></i>
                                                <span>{{ $news->category->title }}</span>
                                            </a>
                                        </div>
                                    </div>
                                    <h3 class="news-item__title">
                                        <a href="<?=$url;?>">{{ $news->title }}</a>
                                    </h3>
                                    <?php if (!$loop->last): ?>
                                        <hr class="pb-3">
                                    <?php endif ?>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- Multimedia -->
        <section class="section-multimedia">
            <div class="container">
                <div class="d-flex align-items-md-end justify-content-between flex-md-row flex-column">
                    <h1 class="section-title">{!! __('index.media') !!}</h1>
                    <div class="mt-md-0 mt-3">
                        <a href="{{ LaravelLocalization::localizeUrl('/gallery') }}" class="btn-more btn-more__blue-square">{!! __('nav.gallery') !!}</a>
                    </div>
                </div>
                

                <div class="row mt-5">
                <?php foreach ($galleries as $key => $gallery){
                $url = LaravelLocalization::getLocalizedURL(LaravelLocalization::getCurrentLocale(), 'gallery-images/'.$gallery->slug); 
                $imageUrl = asset('uploads/gallery/'.$gallery->featured_image);
                ?>
                <?php if ($key == 0): ?>
                    <div class="col-md-12 col-lg-6">
                        <a href="<?=$url;?>">
                            <div class="media-item media-item__big--only-image">
                                <div class="media-item__img text-center">
                                    <img src="<?=$imageUrl;?>" alt="{{$gallery->title}}" title="{{$gallery->title}}" style="height: 400px;">
                                </div>
                                <div class="media-item__desc">
                                    <h3 class="media-item__title text-white">{{$gallery->title}}</h3>
                                    <div class="media-item__date text-white">{{$gallery->event_date}}</div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endif ?>
                <?php if ($key >= 1 && $key == 1): ?>
                    <div class="col-md-12 col-lg-6 mt-lg-0 mt-4">
                        <div class="row">
                <?php endif ?>
                <?php if ($key >0): ?>
                             <div class="col-md-6 col-lg-6 mb-4">
                                <a href="<?=$url;?>">
                                    <div class="media-item media-item__small media-item__small--only-image">
                                        <div class="media-item__img text-center">
                                            <img src="<?=$imageUrl;?>" alt="{{$gallery->title}}" title="{{$gallery->title}}" style="height: 185px;">
                                        </div>
                                        <div class="media-item__desc">
                                            <h3 class="media-item__title">{{$gallery->title}}</h3>
                                            <div class="media-item__date">{{$gallery->event_date}}</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                <?php endif ?>
                <?php if ($key >= 5 && $key == 5): ?>
                        </div>
                    </div> 
                <?php endif ?>
                <?php } ?>
                </div>
            </div>
        </section>

          <!-- Partners -->
        <section class="section-partners">
            <div class="container-fluid px-md-0">
                <h1 class="section-title">{!! __('nav.partner') !!}</h1>
                <div class="swiper-container swiper-partners">
                    <div class="swiper-wrapper py-4">
                        <?php foreach ($partners as $key => $partner){
                            if (!$key%2) {
                                $begin = '<div class="swiper-slide">';
                                $end = '';
                            }else{
                                $begin = '';
                                $end = '</div>';
                            }
                            echo $begin;
                        ?>
                        <div class="partner">
                            <a href="<?=$partner->url;?>" class="partner__img" target="_blank" style="background-image: url('{{asset('uploads/partner/'.$partner->featured_image)}}');">
                            </a>
                        </div>
                        <?php echo $end;}?>
                    </div>
                </div>
            </div>
        </section>

        <!-- Consultant -->
        
        <section class="section-consultant">
            <div class="container">
                <?php $allConsultantsUrl = LaravelLocalization::localizeUrl('/consultants'); ?>
                <div class="d-flex justify-content-between align-items-md-end flex-md-row flex-column">
                    <h1 class="section-title mb-md-0 mb-3">{!! __('index.cons') !!}</h1>
                    <a class="link-all" href="<?= $allConsultantsUrl;?>">{!! __('index.consAll') !!}</a>
                </div>
                <div class="row mt-4">
                    <?php foreach ($consultants as $key => $consultant) { 
                        if (LaravelLocalization::getCurrentLocale() == 'ru') {
                            $name = $consultant->name_ru;
                            $position = $consultant->position_ru;
                        }else{
                            $name = $consultant->name_uz;
                          $position = $consultant->position_uz;
                        }
                    ?>
                    <div class="col-md-6 my-3 col-lg-3">
                        <div class="consultant">
                            <a href="<?= $allConsultantsUrl;?>" class="consultant__body">
                                <div class="consultant__img">
                                    <img src="{{asset('front/img/consultant.png')}}" alt="consultant image">
                                </div>
                                <div class="consultant__name"><?=$name;?></div>
                                <div class="consultant__degree" style="height: 3em; overflow: hidden;"><?=$position;?></div>
                            </a>
                            <div class="consultant__footer">
                                <?php if (!empty($consultant->phone)) {
                                    echo '<a href="tel:'.$consultant->phone.'" class="consultant__phone w-100">'.$consultant->phone.'</a>';
                                }else{
                                    echo '<a href="mailto:'.$consultant->email.'" class="consultant__phone w-100">'.$consultant->email.'</a>';
                                }?>
                                
                            </div>
                        </div>
                    </div>                        
                    <?php } ?>
                </div>
            </div>
        </section>
    </main>
@endsection            