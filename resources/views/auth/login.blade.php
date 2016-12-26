@extends('main')

@section('title','| Register')

@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        {!! Form::open() !!}
            <div class="form-group">
                {{ Form::label('name',"Name:") }}
                {{ Form::email('email',null,['class'=> 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('password',"Password:") }}
                {{ Form::password('password',['class'=> 'form-control']) }}
            </div>
            
            <div class="form-group">
                {{Form::checkbox('remember')}}
                {{ Form::label('remember',"Remember Me") }}
            </div>

            {{ Form::submit('Login', ['class' => 'btn btn-primary btn-block']) }}
            {!! Form::close() !!}
    </div>
</div>
@endsection