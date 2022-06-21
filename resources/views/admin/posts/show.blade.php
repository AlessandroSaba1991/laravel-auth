@extends('layouts.admin')
@section('content')
<div class="container">
    <h1 class="text-center py-5">Preview "{{$post->title}}"</h1>
    <div class="card mx-auto w-50">
        <img class="img-fluid" src="{{$post->image}}" alt="{{$post->title}}">
        <div class="card-body">
            <h2>{{$post->title}}</h2>
            <p>{{$post->body}}</p>
        </div>
    </div>
</div>
@endsection
