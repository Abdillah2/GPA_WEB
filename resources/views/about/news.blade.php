@extends('layout.main')

  <div class="container py-3"style="margin-top: 80px">
    <H1 class="text-center">{{ $title }}</H1>
    <div class="row justify-content-center mb-3">
      <div class="col-md-6">
        <form action="/news">
            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if (request('author'))
                <input type="hidden" name="category" value="{{ request('author') }}">
            @endif
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search .." aria-label="Search .." name="search" value="{{ request('search') }}">
            <button class="btn btn-outline-secondary" type="submit">Search</button>
          </div>
        </form>
      </div>
    </div>

    <div class="card mb-3">
        @if ($news->count())
        <img src="https://source.unsplash.com/category/{{ $news[0]->category->name }}/1200x400" class="card-img-top" alt="{{ $news[0]->category->name }}">
        <div class="card-body text-center">
          <h4 class="card-title "><a href="/news/{{ $news[0]->slug }}" class="text-dark">{{ $news[0]->title }}</a></h4>
          <p>
            <small class="text-muted"> By : <a href="/news?author={{ $news[0]->author->username }}"> {{ $news[0]->author->name }} </a> in <a href="/news?category={{ $news[0]->category->slug }}">{{ $news[0]->category->name }}</a> {{  $news[0]->created_at->diffForHumans() }}</small></p>
          <p class="card-text">T{{ $news[0]->excerpt }}</p>
          <a href="/news/{{ $news[0]->slug }}" class="btn btn-primary">Read more</a>
        </div>
      </div>


      <div class="container ">
        <div class="row">
            @foreach ($news->skip(1) as $post )
            <div class="col-md-4 mb-4">
                <div class="position-absolute px-2 py-1 text-white" style="background-color: rgba(0, 0, 0, 0.9)"><a href="/news?category={{ $post->category->slug }}" class="text-white">{{ $post->category->name }}</a></div>
                    <img src="https://source.unsplash.com/category/{{ $post->category->name }}/700x300" class="card-img-top" alt="{{ $post->category->name }}">
                    <div class="card-body">
                      <h4 class="card-title text-"><a href="/news/{{ $post->slug }}" class="text-dark">{{ $post->title }}</a></h4>
                      <p>
                        <small class="text-muted"> By : <a href="/news?author={{ $post->author->username }}"> {{ $post->author->name }} </a> {{  $post->created_at->diffForHumans() }}</small></p>
                      <p class="card-text">{{ $post->excerpt}}</p>
                      <a href="/news/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                    </div>

                </div>
                @endforeach
            </div>
        </div>
        @else
        <p class="text-center fs-4">News Not Found.</p>
        @endif
        <div class="d-flex justify-content-end">

            {{ $news->links() }}
        </div>
    </div>

    @section('content')
@endsection
