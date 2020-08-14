@extends('layouts.app')

@section('title', 'КОНСУЛЬТАНТЫ АНО "МАДАД"')

@section('content')
  <!-- Header -->
  <header>
    <img class="parallax" src="{{asset('front/img/spb_fon.jpg')}}" alt="">
    <div class="container header-container">
      <div class="d-flex justify-content-between align-items-md-center flex-md-row flex-column">
        <div class="page-title">
          <h2>{!! __('index.cons') !!}</h2>
          <p>{!! __('about.about1') !!}</p>
        </div>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ LaravelLocalization::localizeUrl('/') }}"><i class="fas fa-home mr-1"></i> {!! __('nav.main') !!}</a></li>
          <li class="breadcrumb-item active">КОНСУЛЬТАНТЫ</li>
        </ul>
      </div>
    </div>
  </header>

  <main>
    <section class="section-all_partners">
      <div class="container">
        <div class="all_partners">
          @foreach ($consultants as $consultant)
          <?php if (LaravelLocalization::getCurrentLocale() == 'ru') {
              $name = $consultant->name_ru;
              $position = $consultant->position_ru;
              $description = $consultant->description_ru;
          }else{
              $name = $consultant->name_uz;
              $position = $consultant->position_uz;
              $description = $consultant->description_uz;
          }?>
          <div class="row align-items-center mb-4">
            <div class="col-lg-3 d-flex justify-content-center">
              <div class="partner">
                <div class="partner__img" style="background-image: url('{{asset('uploads/consultant/'.$consultant->featured_image)}}');"></div>
              </div>
            </div>
            <div class="col-lg-9">
              <div class="partner__content">
                <h3 class="partner__name"><?= $name;?></h3>
                <p class="partner__profession"><?= $position;?></p>
                <div class="partner__description"><?= $description;?></div>
              </div>
              <div class="consultant__footer">
                <div class="consultant__phone">
                  <?= !empty($consultant->email)?'<a href="mailto:'.$consultant->email.'" title="'.$consultant->email.'">'.$consultant->email.'</a>':'';?>
                  </div>
                  <div class="consultant__socials">
                    <?= !empty($consultant->phone)?'<a href="tel:'.$consultant->phone.'" title="'.$consultant->phone.'">'.$consultant->phone.'</a>':'';?>
                  </div>
              </div>

            </div>
          </div>
          <hr>
          @endforeach
        </div>
      </div>
    </section>
  </main>
@endsection