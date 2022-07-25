@extends('layouts.blogList')

@section('list')
<section class="blog" id="blog">
    <div class="container">
        <div class="blog-heading">
            <h2>Блог</h2>
        </div>
        <div class="band">
            @foreach($posts as $post)

            <div class="item-2" style="margin-bottom: 20px">
                <a href="{{route('post.show', $post->id)}}" class="card">
                    <div class="thumb"
                         style="background-image: url({{ 'storage/' . $post->preview_image}});">
                    </div>
                    <article>
                        <h1>{{$post->title}}</h1>
                        <p style="margin-bottom: 20px;">{!! $post->summary !!}</p>
                        <span style="position: absolute;bottom: 3%;">
                            <div>{{$date->translatedFormat('j F')}}</div>
                        </span>
                    </article>
                </a>
            </div>
            @endforeach
        </div>

    </div>
</section>
@endsection
