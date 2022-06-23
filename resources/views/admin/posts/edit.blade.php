@extends('layouts.admin')
{{-- @dump($post)
@dump($categories) --}}
@section('content')
<div class="container">
    <form action="{{route('admin.posts.update', $post->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                value="{{$post->title}}" placeholder="Inserisci il titolo">
            @error('title')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="content" class="form-label @error('content') is-invalid @enderror">Content</label>
            <textarea name="content" class="form-control" id="content" value="{{old('content')}}" cols="30"
                rows="10">{{$post->content}}</textarea>
            @error('content')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" {{($post->published) ? 'checked' : '' }} id="published"
            name="published">
            <label class="form-check-label" for="published">Pubblicato</label>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-control @error('category_id') is-invalid @enderror" id="category" name="category_id">
                <option value="">Select category</option>
                @foreach ($categories as $category)
                <option value="{{$category->id}}" {{$category->id == old('category_id', $post->category_id) ? 'selected'
                    : ''}}>{{$category->name}}</option>
                @endforeach
            </select>
            @error('category_id')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection