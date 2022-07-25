@extends('layouts.second')

@section('blog_post')
    <div class="container">


        <div class="post">
            <div class="post-header">
                <h1>{{$post->title}}</h1>
                <div class="post-meta">
                    <time datetime="{{$date->translatedFormat('j F')}}">{{$date->translatedFormat('j F')}}</time>
                    <span class="author">просмотры</span>
                    <span class="category">{{$post->category->title}}</span>
                    <span class=""></span>
                </div>
            </div>
            <div class="post-content">
                <p>{!! $post->content !!}</p>
            </div>
        </div>

    </div>
@endsection
