@extends('layouts.admin')

@section('content')
<div class="container">
    <form action="{{route('admin.posts.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                value="{{old('title')}}" placeholder="Inserisci il titolo">
            @error('title')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="content" class="form-label @error('content') is-invalid @enderror">Content</label>
            <textarea name="content" id="content" class="form-control" value="{{old('content')}}" cols="30"
                rows="10">{{old('content')}}</textarea>
            @error('content')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" {{old('published') ? 'checked' : '' }} id="published"
                name="published">
            <label class="form-check-label" for="published">Pubblicato</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection