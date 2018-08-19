@extends('layouts.app')

@section('content')
  <div class="mb-4">
    <h1>Posts</h1>
  </div>
  @if(count($posts) > 0)
    @foreach($posts as $post)
      <div class="card mb-3">
        <div class="container">
            <div class="row">
              <div class="col-sm-2">
                  <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" alt="Post cover image">
              </div>
              <div class="col-sm-6">
                  <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                  <small>Posted on {{$post->created_at}} by {{$post->user->name}}</small>    
              </div>
            </div>
          </div>
      </div>
    @endforeach
    {{$posts->links()}}
  @else
    <p>No posts found</p>
  @endif
@endsection