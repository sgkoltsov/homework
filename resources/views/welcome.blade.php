@extends('layout.master')

@section('content')

    <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Список статей
    </h3>

    @foreach($articles as $article)        
        <article class="blog-post mb-0">
            <h2 class="blog-post-title"><a href="/articles/{{ $article->slug }}">{{ $article->title }}</a></h2>
            <p class="blog-post-meta">{{  $article->created_at->toFormattedDateString() }}</p>
            <p>{{ $article->short }}</p>            
        </article>
    @endforeach
    
@endsection

