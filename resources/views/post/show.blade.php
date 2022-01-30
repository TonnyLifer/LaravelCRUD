@extends('layouts.main')
@section('content')
    <div class="container">
      <h1>{{ $post->title }}:{{ $post->content }}</h1>
      <div>
        <form action="{{route('post.delete',$post->id)}}" method="POST">
          @csrf
          @method('delete')
          <input type="submit" value="DEL"></input>
        </form>
      </div>
    </div>
