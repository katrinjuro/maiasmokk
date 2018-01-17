@extends('layouts.app')

@section('content')
    <h1>Sisesta toode</h1>
   {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Pealkiri')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Pealkiri'])}}
        </div>
        
        <div class="form-group">
            {{Form::label('body', 'Tekst')}}
            {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Tekst'])}}
        </div>
        
        {{Form::submit('Avalikusta', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection