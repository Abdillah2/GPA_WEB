@extends('dashboard.layouts.main')


@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create new Post</h1>
</div>

<form method="post" action="/dashboard/news" class="col-lg-8">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title') }}">
        @error('title')
            <div class="invalid-feedback">
            {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="slug" class="form-label ">Slug</label>
        <input class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}">
        @error('slug')
            <div class="invalid-feedback">
            {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select class="form-select" name="category_id"> <!-- Fixed typo in the name attribute -->
            @foreach ($categories as $category)
                @if (old('category_id') == $category->id)
                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                @else
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endif
            @endforeach
        </select>
    </div>


    <div class="mb-3">
        <label for="body" class="form-label">Body</label>
        <input class="form-control @error('body') is-invalid @enderror" id="body" name="body" type="hidden" value="{{ old('body') }}">
        <trix-editor input="body"></trix-editor>
        @error('body')
        <div class="invalid-feedback">
        {{ $message }}
        </div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Create Post</button>
</form>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function(){
        fetch('/dashboard/news/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })

</script>
@endsection
