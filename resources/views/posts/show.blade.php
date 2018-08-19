@extends('layouts.app')

@section('content')
  <div>
    <a href="/posts" class="btn btn-primary mb-3">Back</a>
    <h1>{{$post->title}}</h1>
    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" alt="Post cover image">
    <small>Posted on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
  </div>
  <div>
    <p>{!!$post->body!!}</p>
  </div>
  <hr>
  @if (!Auth::guest() && Auth::user()->id == $post->user_id)
      <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
    
      {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
      {{Form::hidden('_method', 'DELETE')}}
      {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
      {!!Form::close() !!}
  @endif
@endsection