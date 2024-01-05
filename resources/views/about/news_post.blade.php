@extends('layout.main')
    <div class="container spinner-hidden" style="margin-top: 80px">

        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col-md-8">
                    <h2>{{$news->title}}</h2>
                    <p>By : <a href="/authors/{{ $news->author->username }}">{{ $news->author->name }}</a> in <a href="/news?category={{ $news->category->slug }}">{{ $news->category->name }}</a></p>

                    @if($news->image)
                        <div style="max-height:350px; overflow:hidden;">
                            <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->category->name }}" class="img-fluid">
                        </div>
                    @else
                        <img src="https://source.unsplash.com/category/{{ $news->category->name }}/1200x400" alt="{{ $news->category->name }}" class="img-fluid">
                    @endif
                    <p>{!! $news->body !!}</p>

                    <a href="/categories">to Categories</a>
                    <br><br>
                    <a href="/news">Back to News</a>
                </div>
            </div>
        </div>
    </div>
@section('content')
@endsection

