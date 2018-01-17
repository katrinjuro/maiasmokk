@extends('layouts.app')

@section('content')
    <h1>Paranda</h1>
   {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POSTS']) !!}
        <div class="form-group">
            {{Form::label('title', 'Pealkiri')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Pealkiri'])}}
        </div>
        
        <div class="form-group">
            {{Form::label('body', 'Tekst')}}
            {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Tekst'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Avalikusta', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection