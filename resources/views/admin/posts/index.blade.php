@extends('layouts.admin')
{{-- @dump($posts) --}}
@section('content')
<div class="container">
    <a href="{{route('admin.posts.create')}}" class="btn btn-primary my-3">Crea nuovo post</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Creation date</th>
                <th scope="col">Modifica</th>
                <th scope="col">Elimina</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td><a href="{{route('admin.posts.show', $post->id)}}">{{$post->id}}</a></td>
                <td><a href="{{route('admin.posts.show', $post->id)}}">{{$post->title}}</a></td>
                <td>{{$post->created_at}}</td>
                <td><a href="{{route('admin.posts.edit', $post->id)}}" class="btn btn-primary">Modifica</a></td>
                <td>
                    <form action="{{route('admin.posts.destroy', $post->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Sei sicuro di voler eliminare questo post?')" type='submit'
                            class="btn btn-danger">Cancella</button>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection