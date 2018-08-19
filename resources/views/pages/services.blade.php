@extends('layouts.app')

@section('content')
    <div class="mb-3">
        <h1>{{$title}}</h1>
    </div>
    <div>
        @if(count($services) > 0)
            <ul class="list-group">
            @foreach($services as $service) 
                <li class="list-group-item">{{$service}}</li>
            @endforeach
            </ul>
        @endif
    </div>
@endsection