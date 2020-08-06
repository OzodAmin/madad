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
          <li class="breadcrumb-item"><a href="{{ LaravelLocalization::localizeUrl('/news') }}"><i class="fas fa-newspaper mr-1"></i> {!! __('nav.news') !!}</a></li>
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

              <div class="news news-full">
                <h3 class="news__title">{{$news->title}}</h3>
                <div class="news__img">
                  {{ Html::image('uploads/news/'.$news->featured_image) }}
                </div>
                <div class="news__content">

                  <div class="news__widjets">
                    <div class="news__type">
                      <a href="#">
                        <i class="fal fa-folder-open"></i>
                        <span>{{ $news->category->title }}</span>
                      </a>
                    </div>
                    <div class="news__comment">
                      <a href="#">
                        <i class="fal fa-eye"></i>
                        <span>{{$news->view}}</span>
                      </a>
                    </div>
                    <div class="news__calendar">
                      <i class="fal fa-calendar"></i>
                      <span>{{$news->created_at}}</span>
                    </div>
                  </div>
                  <p class="news__subtitle">{!!$news->content!!}</p>
                  <div class="d-flex justify-content-between align-items-md-center flex-md-row flex-column">
                      
                    <div class="share">
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

              <div class="blog-comments mt-5">
                <div class="comments-1">
                  <div class="comments-info">
                    <h4 class="theme-color"> Kevin Martin <span>Sep 15, 2017</span></h4>
                    <p>Sit amet nibh vulputate cursus a sit amet mauris lorem ipsum dolor sit amet of Lorem Ipsum.
                      Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
                      nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio <a
                        href="#">http://themeforest.net</a> Morbi accumsan ipsum velit. Nam nec tellus a odio
                      tincidunt auctor a ornare odio. Sed non mauris vitae erat </p>
                  </div>
                </div>
              </div>

              <br>

              <div class="row">
                <div class="col-lg-12 col-md-12">
                  <h3 class="theme-color mb-3">Оставить комментарий</h3>

                  <div id="response"></div>
                  
                  <form id="commentform" class="gray-form form-row" role="form">
                    <input type="hidden" name="news" value="{!!$news->id!!}">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Your Name">
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email Adress">
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                      </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                      <div class="form-group">
                        <textarea class="form-control" rows="7" placeholder="message"></textarea>
                      </div>
                    </div>
                    
                    <div class="col-lg-12 col-md-12">
                      <button id="submit" name="submit" type="submit" class="btn-submit"><span>Отправить</span></button>
                    </div>
                  </form>
                </div>
              </div>

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

@section('script')
<script>
  $("#submit").click(function(event){
      event.preventDefault();

      let name = $("input[name=name]").val();
      let news = $("input[name=news]").val();
      let email = $("input[name=email]").val();
      let phone = $("input[name=phone]").val();
      let message = $("textarea[name=message]").val();
      let _token   = $('meta[name="csrf-token"]').attr('content');

      $.ajax({
        url: "/comment",
        type:"POST",
        data:{
          name:name,
          news:news,
          email:email,
          phone:phone,
          message:message,
          _token: _token
        },
        success:function(response){
          console.log(response);
          if(response) {
            $('.alert').alert('close')
            $('#response').html(response.message);
            if (response.status == 'success') {$("#commentform")[0].reset();}
          }
        },
       });
  });
</script>
@endsection