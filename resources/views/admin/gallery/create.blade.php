@extends('admin.layouts.app')

@section('title')
Создать новую галерею
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('admin/datepicker/css/bootstrap-datepicker.min.css') }}">
@endsection

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Создать новую галерею</h1>
    </div>

     @if (count($errors) > 0)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <h4 class="alert-heading"><strong>Упс!</strong> Были некоторые проблемы с вашим вводом.</h4>
            <hr>
            @foreach ($errors->all() as $error)
                <p class="mb-0">{{ $error }}</p>
            @endforeach
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    {!! Form::open(['route' => 'gallery.store', 'files' => true]) !!}

        @include('admin.gallery.fields')

    {!! Form::close() !!}
@endsection

@section('script')
    <script src="{{ asset('admin/datepicker/js/bootstrap-datepicker.min.js') }}"></script>
@endsection