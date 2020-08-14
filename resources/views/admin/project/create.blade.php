@extends('admin.layouts.app')

@section('title')
    Create new project
@endsection

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Create New project</h1>
    </div>

     @if (count($errors) > 0)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <h4 class="alert-heading"><strong>Whoops!</strong> There were some problems with your input.</h4>
            <hr>
            @foreach ($errors->all() as $error)
                <p class="mb-0">{{ $error }}</p>
            @endforeach
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    {!! Form::open(['route' => 'project.store', 'files' => true]) !!}

        @include('admin.project.fields')

    {!! Form::close() !!}
@endsection

@section('script')
    <script src="{{ asset('admin/ckeditor/ckeditor.js') }}"></script>
    <script>
        <?php $key = 1; foreach( LaravelLocalization::getSupportedLocales() as $locale => $properties ): ?>
        CKEDITOR.replace('editor{{ $key }}',{
            filebrowserBrowseUrl: '/admin/ckfinder/ckfinder.html',
            filebrowserImageBrowseUrl: '/admin/ckfinder/ckfinder.html?type=Images',
            filebrowserUploadUrl: '/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl: '/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images'
        });
        CKEDITOR.replace('editor_{{ $key }}',{
            filebrowserBrowseUrl: '/admin/ckfinder/ckfinder.html',
            filebrowserImageBrowseUrl: '/admin/ckfinder/ckfinder.html?type=Images',
            filebrowserUploadUrl: '/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl: '/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images'
        });
        <?php $key++; endforeach; ?>
    </script>
@endsection