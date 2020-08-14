@extends('admin.layouts.app')

@section('title')
   Добавить новое изображение
@endsection

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Добавить новое изображение в галерею</h1>
    </div>

     @if (count($errors) > 0)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <h4 class="alert-heading"><strong>Упс!</strong> Возникли проблемы с вашим вводом.</h4>
            <hr>
            @foreach ($errors->all() as $error)
                <p class="mb-0">{{ $error }}</p>
            @endforeach
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    {!! Form::open(['route' => 'gallery-images.store', 'files' => true]) !!}
        <input type="hidden" name="gallery" value="<?=$gallery_id;?>">
        <div class="increment">
            <fieldset class="border p-2">
                <legend  class="w-auto text-dark">Изображение</legend>
                <div class="form-group">
                    <input type="text" name="title_ru[]" class="form-control" placeholder="Название (Русский)">
                </div>
                <div class="form-group">
                    <input type="text" name="title_uz[]" class="form-control" placeholder="Название (O'zbekcha)">
                </div>
                <div class="input-group mb-3">
                    <input type="file" name="filename[]" class="form-control">
                    <div class="input-group-append">
                        <button class="btn btn-success" type="button"><i class="fas fa-plus"></i>Добавить</button>
                    </div>
                </div>
            </fieldset>
        </div>
        <div class="clone d-none">
            <fieldset class="border p-2 cloned">
                <legend  class="w-auto text-dark">Изображение</legend>
                <div class="form-group">
                    <input type="text" name="title_ru[]" class="form-control" placeholder="Название (Русский)">
                </div>
                <div class="form-group">
                    <input type="text" name="title_uz[]" class="form-control" placeholder="Название (O'zbekcha)">
                </div>
                <div class="input-group mb-3">
                    <input type="file" name="filename[]" class="form-control">
                    <div class="input-group-append">
                        <button class="btn btn-danger" type="button"><i class="fas fa-minus"></i>Удалить</button>
                    </div>
                </div>
            </fieldset>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Отправить</button>
    {!! Form::close() !!}
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
          $(".btn-success").click(function(){ 
              var html = $(".clone").html();
              $(".increment").after(html);
          });
          $("body").on("click",".btn-danger",function(){ 
              $(this).parents(".cloned").remove();
          });
        });
    </script>
@endsection