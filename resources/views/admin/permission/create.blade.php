@extends('admin.layouts.app')

@section('title')
    Create new permission
@endsection

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Create New permission</h1>
    </div>

     @if (count($errors) > 0)
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading"><strong>Whoops!</strong> There were some problems with your input.</h4>
            <hr>
            @foreach ($errors->all() as $error)
                <p class="mb-0">{{ $error }}</p>
            @endforeach
        </div>
    @endif

    {!! Form::open(['route' => 'permission.store']) !!}

        @include('admin.permission.fields')

    {!! Form::close() !!}
@endsection