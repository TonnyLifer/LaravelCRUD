@extends('layouts.main')
@section('content')
    <div class="container">
       <a href="{{route('main.index')}}">Main</a>
       <form action="{{route('post.store')}}" method="post">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">title</label>
          <input type="text" name="title" class="form-control" id="title">
        </div>
        <div class="mb-3">
          <label for="content" class="form-label">content</label>
          <input type="textarea" name="content" class="form-control" id="content">
        </div>
        <div class="mb-3">
          <label for="likes" class="form-label">likes</label>
          <input type="text" name="likes" class="form-control" id="likes">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
