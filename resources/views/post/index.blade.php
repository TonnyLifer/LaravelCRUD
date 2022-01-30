@extends('layouts.main')
@section('content')
    <div class="container">
       <a href="{{route('main.index')}}">Main</a>
            @foreach ($post as $item)             
                <div><a href="{{route('post.show',$item->id)}}">{{ $item->title }}:{{ $item->content }}</a></div>
            @endforeach

    </div>
