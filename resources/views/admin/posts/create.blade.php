@extends('layouts.admin')
{{-- @dump($tags); --}}
@section('content')
<div class="container">
    <form action="{{route('admin.posts.store')}}" method="POST">
        @csrf

        {{-- TITLE --}}
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                value="{{old('title')}}" placeholder="Inserisci il titolo">
            @error('title')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

        {{-- CONTENT --}}
        <div class="mb-3">
            <label for="content" class="form-label @error('content') is-invalid @enderror">Content</label>
            <textarea name="content" id="content" class="form-control" value="{{old('content')}}" cols="30"
                rows="10">{{old('content')}}</textarea>
            @error('content')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

        {{-- CATEGORIES --}}
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-control @error('category_id') is-invalid @enderror" id="category" name="category_id">
                <option value="">Select category</option>
                @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            @error('category_id')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

        {{-- TAGS --}}
        <div class="mb-3">
            <div class="form-group">
                <h5>Tags</h5>
                @foreach ($tags as $tag)
                <div class="form-check-inline">
                    <input type="checkbox" class="form-check-input" {{in_array($tag->id, old("tags", [])) ? 'checked' :
                    '' }}
                    id="{{$tag->slug}}" name="tags[]" value="{{$tag->id}}">
                    <label class="form-check-label" for="{{$tag->slug}}">{{$tag->name}}</label>
                </div>
                @endforeach
            </div>
        </div>

        {{-- PUBBLICATO --}}
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" {{old('published') ? 'checked' : '' }} id="published"
                name="published">
            <label class="form-check-label" for="published">Pubblicato</label>
        </div>

        {{-- BUTTON --}}
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection