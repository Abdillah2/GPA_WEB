@extends('layout.main')
<div class="container" style="margin-top: 80px">
    <h1 class="mb-3 text-center">News Categories</h1>
        <div class="container mb-3">
            <div class="row mb-4">
                @foreach ( $categories as $category )


                <div class="col-md-4">
                    <a href="/news?category={{ $category->slug }}">
                    <div class="card bg-dark text-white">
                        <img src="https://source.unsplash.com/category/{{ $category->name }}/500x300" class="card-img" alt="{{ $category->name }}">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                          <h4 class="card-title text-center flex-fill" style="background-color: rgba(0, 0, 0, 0.7)">{{ $category->name }}</h4>
                        </div>
                      </div>
                    </a>
                </div>
                @endforeach
            </div>
            <a href="/news">Back to pages</a>
        </div>
</div>

@section('content')
@endsection
