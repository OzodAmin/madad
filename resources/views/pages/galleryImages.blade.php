@extends('layouts.app')

@section('title', 'Партнеры АНО "МАДАД"')

@section('css')
<link rel="stylesheet" href="{{asset('front/css/photoswipe.css')}}">
<link rel="stylesheet" href="{{asset('photoswipe-skin/default-skin.css')}}">
@endsection

@section('script')
<script src="{{ asset('front/js/photoswipe.min.js') }}"></script>
<script src="{{ asset('front/js/photoswipe-ui-default.min.js') }}"></script>
<script>
  'use strict';

  /* global jQuery, PhotoSwipe, PhotoSwipeUI_Default, console */

  (function($){

    // Init empty gallery array
    var container = [];

    // Loop over gallery items and push it to the array
    $('#gallery').find('figure').each(function(){
      var $link = $(this).find('a'),
          item = {
            src: $link.attr('href'),
            w: $link.data('width'),
            h: $link.data('height'),
            title: $link.data('caption')
          };
      container.push(item);
    });

    // Define click event on gallery item
    $('.imgHref').click(function(event){
      event.preventDefault();
      var $pswp = $('.pswp')[0],
          options = {
            index: $(this).parent('figure').index(),
            bgOpacity: 0.85,
            showHideOpacity: true
          };

      // Initialize PhotoSwipe
      var gallery = new PhotoSwipe($pswp, PhotoSwipeUI_Default, container, options);
      gallery.init();
    });

  }(jQuery));
</script>
@endsection

@section('content')
  <!-- Header -->
  <header>
    <img class="parallax" src="{{asset('front/img/spb_fon.jpg')}}" alt="">
    <div class="container header-container">
      <div class="d-flex justify-content-between align-items-md-center flex-md-row flex-column">
        <div class="page-title">
          <h2>{{$gallery->title}}</h2>
          <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ LaravelLocalization::localizeUrl('/') }}"><i class="fas fa-home mr-1"></i> {!! __('nav.main') !!}</a></li>
          <li class="breadcrumb-item active"><a href="{{ LaravelLocalization::localizeUrl('/gallery') }}">{!! __('nav.gallery') !!}</a></li>
        </ul>
      </div>
    </div>
  </header>

  <style>.pswp__caption__center {text-align: center;}</style>

  <main>
    <div class="container">
      <!-- Galley wrapper that contains all items -->
      <div id="gallery" class="gallery row mt-5" itemscope itemtype="http://schema.org/ImageGallery">
        <div class="col-md-3 mb-3">
          <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
            <a class="imgHref" href="{{ asset('uploads/gallery/'.$gallery->featured_image) }}" data-caption="{{$gallery->title}}" data-width="1200" data-height="900" itemprop="contentUrl">
              <div class="media-item media-item__small media-item__small--only-image">
                <div class="media-item__img">
                  <img src="{{ asset('uploads/gallery/'.$gallery->featured_image) }}" itemprop="thumbnail" alt="Image description">
                </div>
              </div>
            </a>
          </figure>
        </div>
        @foreach ($gallery->images as $gallery)
        <div class="col-md-3 mb-3">
          <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
            <a class="imgHref" href="{{ asset('uploads/gallery/'.$gallery->featured_image) }}" data-caption="{{$gallery->title_ru}}" data-width="1200" data-height="900" itemprop="contentUrl">
              <div class="media-item media-item__small media-item__small--only-image">
                <div class="media-item__img">
                  <img src="{{ asset('uploads/gallery/'.$gallery->featured_image) }}" itemprop="thumbnail" alt="Image description">
                </div>
              </div>
            </a>
          </figure>
        </div>
        @endforeach  
      </div>
    </div>
  </main>



  <!-- Root element of PhotoSwipe. Must have class pswp. -->
  <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <!-- Background of PhotoSwipe. It's a separate element as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>
    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">
        <!-- Container that holds slides. PhotoSwipe keeps only 3 of them in the DOM to save memory. Don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <!--  Controls are self-explanatory. Order can be changed. -->
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader--active when preloader is running -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                      <div class="pswp__preloader__cut">
                        <div class="pswp__preloader__donut"></div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div> 
            </div>
            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>
            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
</div>
@endsection