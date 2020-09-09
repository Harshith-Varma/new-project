@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in as user') }}
                </div>
            </div>
        </div>
    </div>
</div>

<br>
<br>
<br>

@if (count($errors) > 0)
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


{!! Form::open(array('route' => 'fileUpload','enctype' => 'multipart/form-data')) !!}
<div class="row justify-content-center">
    <div class="col-md-2">
        {!! Form::file('image', array('class' => 'image')) !!}
    </div>
    <div class="col-md-4">
        <button type="submit" class="btn btn-success">Create</button>
    </div>
</div>
{!! Form::close() !!}

@endsection
