@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    <p>This is the Laravel application from the "Laravel From Scartch" YouTube series.</p>
    
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
            <div class="container">
              <h1 class="display-3">{{$title}}</h1>
              <p>This is the Laravel application from the "Laravel From Scartch" YouTube series.</p>
              <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login &raquo;</a></p>
              <p><a class="btn btn-success btn-lg" href="/register" role="button">Register &raquo;</a></p>
            </div>
          </div>
@endsection