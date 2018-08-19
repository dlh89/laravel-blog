@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    <p>This is the Laravel application from the "Laravel From Scartch" YouTube series.</p>
    
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
            <div class="container">
              <h1 class="display-3">{{$title}}</h1>
              <p>This is the Laravel application from the "Laravel From Scartch" YouTube series.</p>
              <form>
                <a class="btn btn-primary btn-lg" href="{{ route('login') }}">{{ __('Login') }} &raquo;</a>
                <a class="btn btn-success btn-lg" href="{{ route('register') }}">{{ __('Register') }} &raquo;</a>
              </form>
            </div>
          </div>
@endsection