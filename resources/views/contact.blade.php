@extends('layouts.app')

@section('content')

{!! Form::open(['url' => 'contact/submit']) !!}
    <div class="form-group">
        {{Form::label('name', 'Nimi')}}
        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Sisesta nimi'])}}
    </div>
    <div class="form-group">
        {{Form::label('email', 'E-maili aadress')}}
        {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Sisesta e-mail'])}}
    </div>
    <div class="form-group">
        {{Form::label('message', 'Teade')}}
        {{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Sisesta teade'])}}
    </div>
    <div>
        {{Form::submit('Saadat', ['class'=> 'btn btn-primary'])}}
    </div>
{!! Form::close() !!}

@endsection
