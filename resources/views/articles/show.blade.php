@extends('layout.master')

@section('content')

    <div class="col-md-8">
        <h3 class="pb-0 mb-0 fst-italic">
            {{ $slug->title }}  
        </h3>        
        <p class="blog-post-meta">{{  $slug->created_at->toFormattedDateString() }}</p>
        <hr>
        <p>{{ $slug->body }}</p>
        <hr>
        <a href="/">Вернуться к списку статей</a>
    </div>

@endsection