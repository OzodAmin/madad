<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="msapplication-TileColor" content="#2b5797">
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#1284d3">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#1284d3">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#1284d3">
    
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('front/img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('front/img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('front/img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('front/img/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('front/img/favicon/safari-pinned-tab.svg') }}" color="#303ea5"> 

    <link rel="stylesheet" href="{{ asset('front/libs/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{asset('front/css/main.min.css')}}">
    
    @yield('css')
    
</head>
<body>
    <!-- Top Block -->
    <div class="top-block">
      <div class="container">
          <div class="top-block__left">
              <div class="top-block__left--item">
                  <a href="tel:89995277070"><i class="fas fa-phone-square-alt"></i> 8999 527 7070</a>
              </div>
    
              <div class="top-block__left--item">
                  <a href="tel:8999 527 7070">8999 527 7070</a>
              </div>
    
              <div class="top-block__left--item">
                  <a href="mailto:info@madad-group.ru"><i class="fas fa-envelope"></i> info@madad-group.ru</a>
              </div>
          </div>
          <div class="top-block__right">
              <div class="top-block__right--item">
                  <div class="search-cart">
                      <div class="search">
                          <a class="search-btn not_click" href="javascript:void(0);">
                              <i class="far fa-search fa-rotate-90"></i> {!! __('nav.search') !!}
                          </a>
                          <div class="search-box not-click">
                              <form action="search.html" method="get">
                                  <input type="text" class="not-click" name="search" placeholder="{!! __('nav.searchPlaceHolder') !!}" value="">
                                  <button class="search-button" type="submit">
                                      <i class="far fa-search not-click"></i>
                                  </button>
                              </form>
                          </div>
                      </div>
    
                  </div>
                  <!-- <a href="javascript:void(0)"><i class="far fa-search fa-rotate-90"></i> Поиск</a> -->
              </div>
              <div class="top-block__right--item">
                @if (app()->getLocale() === 'ru')
                    <a hreflang="uz" href="{{ LaravelLocalization::getLocalizedURL('uz', null, [], true) }}">O'zbekcha</a>
                @else
                    <a hreflang="ru" href="{{ LaravelLocalization::getLocalizedURL('ru', null, [], true) }}">Русский</a>
                @endif
              </div>
              <div class="top-block__right--item">
                  <div class="social-icons social-icons-top">
                      <a href="#facebook"><i class="fab fa-facebook-f"></i></a>
                      <a href="#twitter"><i class="fab fa-twitter"></i></a>
                      <a href="#google-plus"><i class="fab fa-google-plus-g"></i></a>
                  </div>
              </div>
          </div>
      </div>
    </div>
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg d-flex">
      <div class="container d-flex align-items-start">
          <div class="d-flex align-items-center">
              <a class="navbar-brand d-flex" href="{{ LaravelLocalization::localizeUrl('/') }}">
                  <img src="{{asset('front/img/logo.png')}}" alt="Logo">
              </a>
              <div class="navbar-brand__name">
                  <small>{!! __('nav.site2') !!}</small>
                  <div>{!! __('nav.site') !!}</div>
              </div>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <div class="hamburger hamburger--squeeze">
                  <div class="hamburger-box">
                      <div class="hamburger-inner"></div>
                  </div>
              </div>
          </button>
          <!-- Navbar links -->
          <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
              <ul class="navbar-nav mt-lg-4">
                  <?php $langu = LaravelLocalization::getCurrentLocale(); ?>
                  <li class="nav-item {{ request()->is($langu) ? 'active' : '' }}">
                      <a class="nav-link" href="{{ LaravelLocalization::localizeUrl('/') }}">{!! __('nav.main') !!}</a>
                  </li>
                  <li class="nav-item {{ request()->is($langu.'/about') ? 'active' : '' }}">
                      <a class="nav-link" href="{{ LaravelLocalization::localizeUrl('/about') }}">{!! __('nav.about') !!}</a>
                  </li>
                  <li class="nav-item {{ request()->is($langu.'/service') ? 'active' : '' }}">
                      <a class="nav-link" href="{{ LaravelLocalization::localizeUrl('/service') }}">{!! __('nav.service') !!}</a>
                  </li>
                  <li class="nav-item {{ request()->is($langu.'/projects') ? 'active' : '' }}">
                      <a class="nav-link" href="{{ LaravelLocalization::localizeUrl('/project') }}">{!! __('nav.project') !!}</a>
                  </li>
                  <li class="nav-item {{ request()->is($langu.'/news') ? 'active' : '' }}">
                      <a class="nav-link" href="{{ LaravelLocalization::localizeUrl('/news') }}">{!! __('nav.news') !!}</a>
                  </li>
                  <li class="nav-item {{ request()->is($langu.'/contact') ? 'active' : '' }}">
                      <a class="nav-link" href="{{ LaravelLocalization::localizeUrl('/contact') }}">{!! __('nav.contact') !!}</a>
                  </li>
              </ul>
          </div>
      </div>
    </nav>

    @yield('content')

    <button onclick="topFunction()" id="myBtn" title="Go to top">
        <i class="fal fa-arrow-up"></i>
    </button>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer__top">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between flex-md-row flex-column">
                    <div class="d-flex align-items-center">
                        <a class="navbar-brand d-flex" href="#">
                            <img src="{{asset('front/img/logo.png')}}" alt="Logo">
                        </a>
                        <div class="navbar-brand__name">
                            <small>{!! __('nav.site2') !!}</small>
                            <div>{!! __('nav.site') !!}</div>
                        </div>
                    </div>
                    <div class="subscribe">
                        <form action="">
                            <label for="subscribe">{!! __('nav.subscribe') !!}</label>
                            <div class="input-group mb-lg-3">
                                <input type="text" class="form-control" id="subscribe"
                                    placeholder="{!! __('nav.subscribePlaceHolder') !!}" required>
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">OK</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
    
                <div class="row mt-4">
                    <div class="col-md-5">
                        <div class="footer__info">
                            <h3 class="footer__title">{!! __('nav.about') !!}</h3>
                            <p>{!! __('nav.aboutText') !!}</p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-md-center">
                        <div class="footer__info">
                            <h3 class="footer__title">{!! __('nav.content') !!}</h3>
                            <ul>
                                <li>
                                    <a href="{{ LaravelLocalization::localizeUrl('/service') }}">{!! __('nav.service') !!}</a>
                                </li>
                                <li>
                                    <a href="{{ LaravelLocalization::localizeUrl('/news') }}">{!! __('nav.news') !!}</a>
                                </li>
                                <li>
                                    <a href="#">{!! __('nav.project') !!}</a>
                                </li>
                                <li>
                                    <a href="{{ LaravelLocalization::localizeUrl('/partner') }}">{!! __('nav.partner') !!}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex justify-content-md-end">
                        <div class="footer__info">
                            <h3 class="footer__title">{!! __('nav.contact') !!}</h3>
                            <ul>
                                <li><i class="far fa-map-marker mr-2"></i> {!! __('nav.address') !!}</li>
                                <li>
                                    <i class="fas fa-phone-square-alt mr-2"></i>
                                    <a href="tel:125-711-811" class="mr-2">125-711-811</a>
                                    <a href="tel:125-668-886">125-668-886</a>
                                </li>
                                <li>
                                    <i class="fas fa-envelope mr-2"></i>
                                    <a href="mailto:info@madad-group.ru">info@madad-group.ru</a>
                                </li>
                                <li>
                                    <div class="footer__socials">
                                        <a href="#facebook"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#twitter"><i class="fab fa-twitter"></i></a>
                                        <a href="#youtube"><i class="fab fa-youtube"></i></a>
                                        <a href="#instagram"><i class="fab fa-instagram"></i></a>
                                        <a href="#mail"><i class="far fa-envelope"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="container">
                <div class="copyright">© <script>document.write(new Date().getFullYear());</script> {!! __('nav.rights') !!}</div>
                <div class="footer__bottom--links">
                    <div>
                        <a href="#">{!! __('nav.conf') !!}</a>
                    </div>
                    <div>
                        <a href="#">{!! __('nav.faq') !!}</a>
                    </div>
                    <div>
                        <a href="{{ LaravelLocalization::localizeUrl('/sitemap') }}">{!! __('nav.sitemap') !!}</a>
                    </div>
                    <div>
                        <a href="#">{!! __('nav.help') !!}</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="{{ asset('front/js/main.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>
    <script>
        var image = document.getElementsByClassName('parallax');
        new simpleParallax(image);
    </script>
    @yield('script')
</body>
</html>