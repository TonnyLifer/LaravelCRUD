@extends('layouts.main')
@section('content')
    <div class="container">
       <form action="{{route('post.update',$post->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="mb-3">
          <label for="title" class="form-label">title</label>
          <input type="text" name="title" class="form-control" id="title" value="{{$post->title}}">
        </div>
        <div class="mb-3">
          <label for="content" class="form-label">content</label>
          <input type="textarea" name="content" class="form-control" id="content" value="{{$post->content}}">
        </div>
        <div class="mb-3">
          <label for="likes" class="form-label">likes</label>
          <input type="text" name="likes" class="form-control" id="likes" value="{{$post->likes}}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
    </div>
