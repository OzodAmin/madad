@extends('admin.layouts.app')

@section('title')
    Create new role
@endsection

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Create New Role</h1>
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

    {!! Form::model($role, ['method' => 'PATCH','route' => ['role.update', $role->id]]) !!}

        @include('admin.role.fields')

    {!! Form::close() !!}
@endsection