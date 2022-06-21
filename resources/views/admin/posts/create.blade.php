@extends('layouts.admin')
@section('content')
<div class="container">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form class="bg-light mt-5 p-3" action="{{route('admin.posts.store')}}" method="post">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Insert Title" aria-describedby="helpTitle" value="{{old('title')}}">
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" name="image" id="image" class="form-control @error('image') is-invalid @enderror" placeholder="Insert image" aria-describedby="helpimage" value="{{old('image')}}">
            @error('image')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <textarea type="text" name="body" id="body" class="form-control @error('body') is-invalid @enderror" placeholder="body" rows="5" aria-describedby="bodyHelper">{{old('body')}}</textarea>
            @error('body')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Add new Post</button>
    </form>
</div>
@endsection
