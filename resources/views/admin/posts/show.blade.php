@extends('layouts.admin')
{{-- @dump($post); --}}
@section('content')
<div class="container d-flex flex-column my-3 gap-5">
    <div>
        <h1>Titolo: {{$post->title}}</h1>
        @if($post->category != null)
        <h2>Categoria: {{$post->category->name}}</h2>
        @endif
        <small>Creato il: {{$post->created_at}}</small>
    </div>
    <div>
        <h2>Contenuto: </h2>
        <p>{{$post->content}}</p>
    </div>

    {{-- condizione per stampare il valore corretto a seconda del booleano --}}
    @if ($post->published == '1')
    <h5>Pubblicato</h5>
    @else
    <h5>Non pubblicato</h5>
    @endif
</div>
@endsection