@extends('dashboard.layouts.main')


@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Post</h1>
</div>

<form method="post" action="/dashboard/news/{{ $news->slug }}" class="col-lg-8" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title', $news->title) }}">
        @error('title')
            <div class="invalid-feedback">
            {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="slug" class="form-label ">Slug</label>
        <input class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug', $news->slug) }}">
        @error('slug')
            <div class="invalid-feedback">
            {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select class="form-select" name="category_id">
            @foreach ($categories as $category)
                @if (old('category_id', $news->category_id) == $category->id)
                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                @else
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endif
            @endforeach
        </select>
    </div>


    <div class="mb-3">
        <label for="image" class="form-label">Post Image</label>
        <input type="hidden" name="oldImage" value="{{ $news->image }}">
        @if ($news->image)
        <img src="{{ asset('storage/' . $news->image ) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
        @endif
        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
        @error('image')
            <div class="invalid-feedback">
            {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="body" class="form-label">Body</label>
        <input class="form-control @error('body') is-invalid @enderror" id="body" name="body" type="hidden" value="{{ old('body', $news->body) }}">
        <trix-editor input="body"></trix-editor>
        @error('body')
        <div class="invalid-feedback">
        {{ $message }}
        </div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Update Post</button>
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

    function previewImage(){
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display='block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
@endsection
