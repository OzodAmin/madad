@extends('layouts.app')

@section('title', 'Партнеры АНО "МАДАД"')

@section('content')
  <!-- Header -->
  <header>
    <img class="parallax" src="https://picsum.photos/id/47/1600/900" alt="">
    <div class="container header-container">
      <div class="d-flex justify-content-between align-items-md-center flex-md-row flex-column">
        <div class="page-title">
          <h2>ПАРТНЕРЫ</h2>
          <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ LaravelLocalization::localizeUrl('/') }}"><i class="fas fa-home mr-1"></i> {!! __('nav.main') !!}</a></li>
          <li class="breadcrumb-item active">Партнеры</li>
        </ul>
      </div>
    </div>
  </header>

  <main>
    <section class="section-all_partners">
      <div class="container">
        <div class="all_partners">
          <div class="row align-items-center mb-4">
            <div class="col-lg-3 d-flex justify-content-center">
              <div class="partner">
                <div class="partner__img" style="background-image: url('{{asset('front/img/brand-1.png')}}');"></div>
              </div>
            </div>
            <div class="col-lg-9">
              <div class="partner__content">
                <h3 class="partner__name">Абдукундузов Мухаммадали</h3>
                <p class="partner__profession">Официльный представитель АНО МАДАД в Узбекистане</p>
                <div class="partner__description">Народный артист Републики Узбекистан, Народный артист Республики
                  Коракапакистан,Лауреат международный премии имена Бабура</div>
              </div>
              <div class="consultant__footer">
                <div class="consultant__phone">
                  <a href="#" class="">+998 (90) 123-45-67</a>
                </div>
                <div class="consultant__socials">
                  <a target="_blank" href="#facebook"><i class="fab fa-facebook-f"></i></a>
                  <a target="_blank" href="#twitter"><i class="fab fa-twitter"></i></a>
                  <a target="_blank" href="#email"><i class="far fa-envelope"></i></a>
                  <a target="_blank" href="#telegram"><i class="fab fa-telegram"></i></a>
                  <a target="_blank" href="#google"><i class="fab fa-google-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="row align-items-center mb-4">
            <div class="col-lg-3 d-flex justify-content-center">
              <div class="partner">
                <div class="partner__img" style="background-image: url('{{asset('front/img/brand-2.png')}}');"></div>
              </div>
            </div>
            <div class="col-lg-9">
              <div class="partner__content">
                <h3 class="partner__name">Абдукундузов Мухаммадали</h3>
                <p class="partner__profession">Официльный представитель АНО МАДАД в Узбекистане</p>
                <div class="partner__description">Народный артист Републики Узбекистан, Народный артист Республики
                  Коракапакистан,Лауреат международный премии имена Бабура</div>
              </div>
              <div class="consultant__footer">
                <div class="consultant__phone">
                  <a href="#" class="">+998 (90) 123-45-67</a>
                </div>
                <div class="consultant__socials">
                  <a target="_blank" href="#facebook"><i class="fab fa-facebook-f"></i></a>
                  <a target="_blank" href="#twitter"><i class="fab fa-twitter"></i></a>
                  <a target="_blank" href="#email"><i class="far fa-envelope"></i></a>
                  <a target="_blank" href="#telegram"><i class="fab fa-telegram"></i></a>
                  <a target="_blank" href="#google"><i class="fab fa-google-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="row align-items-center mb-4">
            <div class="col-lg-3 d-flex justify-content-center">
              <div class="partner">
                <div class="partner__img" style="background-image: url('{{asset('front/img/brand-4.png')}}');"></div>
              </div>
            </div>
            <div class="col-lg-9">
              <div class="partner__content">
                <h3 class="partner__name">Абдукундузов Мухаммадали</h3>
                <p class="partner__profession">Официльный представитель АНО МАДАД в Узбекистане</p>
                <div class="partner__description">Народный артист Републики Узбекистан, Народный артист Республики
                  Коракапакистан,Лауреат международный премии имена Бабура</div>
              </div>
              <div class="consultant__footer">
                <div class="consultant__phone">
                  <a href="#" class="">+998 (90) 123-45-67</a>
                </div>
                <div class="consultant__socials">
                  <a target="_blank" href="#facebook"><i class="fab fa-facebook-f"></i></a>
                  <a target="_blank" href="#twitter"><i class="fab fa-twitter"></i></a>
                  <a target="_blank" href="#email"><i class="far fa-envelope"></i></a>
                  <a target="_blank" href="#telegram"><i class="fab fa-telegram"></i></a>
                  <a target="_blank" href="#google"><i class="fab fa-google-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="row align-items-center mb-4">
            <div class="col-lg-3 d-flex justify-content-center">
              <div class="partner">
                <div class="partner__img" style="background-image: url('{{asset('front/img/brand-4.png')}}');"></div>
              </div>
            </div>
            <div class="col-lg-9">
              <div class="partner__content">
                <h3 class="partner__name">Абдукундузов Мухаммадали</h3>
                <p class="partner__profession">Официльный представитель АНО МАДАД в Узбекистане</p>
                <div class="partner__description">Народный артист Републики Узбекистан, Народный артист Республики
                  Коракапакистан,Лауреат международный премии имена Бабура</div>
              </div>
              <div class="consultant__footer">
                <div class="consultant__phone">
                  <a href="#" class="">+998 (90) 123-45-67</a>
                </div>
                <div class="consultant__socials">
                  <a target="_blank" href="#facebook"><i class="fab fa-facebook-f"></i></a>
                  <a target="_blank" href="#twitter"><i class="fab fa-twitter"></i></a>
                  <a target="_blank" href="#email"><i class="far fa-envelope"></i></a>
                  <a target="_blank" href="#telegram"><i class="fab fa-telegram"></i></a>
                  <a target="_blank" href="#google"><i class="fab fa-google-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="row align-items-center mb-4">
            <div class="col-lg-3 d-flex justify-content-center">
              <div class="partner">
                <div class="partner__img" style="background-image: url('{{asset('front/img/brand-5.png')}}');"></div>
              </div>
            </div>
            <div class="col-lg-9">
              <div class="partner__content">
                <h3 class="partner__name">Абдукундузов Мухаммадали</h3>
                <p class="partner__profession">Официльный представитель АНО МАДАД в Узбекистане</p>
                <div class="partner__description">Народный артист Републики Узбекистан, Народный артист Республики
                  Коракапакистан,Лауреат международный премии имена Бабура</div>
              </div>
              <div class="consultant__footer">
                <div class="consultant__phone">
                  <a href="#" class="">+998 (90) 123-45-67</a>
                </div>
                <div class="consultant__socials">
                  <a target="_blank" href="#facebook"><i class="fab fa-facebook-f"></i></a>
                  <a target="_blank" href="#twitter"><i class="fab fa-twitter"></i></a>
                  <a target="_blank" href="#email"><i class="far fa-envelope"></i></a>
                  <a target="_blank" href="#telegram"><i class="fab fa-telegram"></i></a>
                  <a target="_blank" href="#google"><i class="fab fa-google-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
          <hr>
        </div>

        <!-- <ul class="pagination mt-5">
          <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Следующие</a></li>
        </ul> -->
      </div>
    </section>
  </main>
@endsection