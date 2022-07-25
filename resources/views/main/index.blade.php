@extends('layouts.main')

@section('blog')
<section class="blog" id="blog">
    <div class="container">
        <div class="blog-heading">
            <h2>Блог</h2>
        </div>
        <div class="band">
            @foreach($posts as $post)

            <div class="item-{{$count++}}">
                <a href="#" class="card">
                    <div class="thumb"
                         style="background-image: url({{ 'storage/' . $post->preview_image}});">
                    </div>
                    <article>
                        <h1>{{$post->title}}</h1>
                        <p>{!! $post->summary !!}</p>
                        <span>{{$post->created_at}}</span>
                    </article>
                </a>
            </div>
            @endforeach
        </div>

        <div class="more">
            <a href="https://id-pro.tech/blog_post/" class="btn btn-big btn_more">Показать еще</a>
        </div>
    </div>
</section>
@endsection
