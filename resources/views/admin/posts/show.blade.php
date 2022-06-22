@extends('layouts.admin')
{{-- @dump($post); --}}
@section('content')
<div class="container">
    <h1>{{$post->title}}</h1>
    <small>{{$post->created_at}}</small>
    <p>{{$post->content}}</p>

    {{-- condizione per stampare il valore corretto a seconda del booleano --}}
    @if ($post->published == '1')
    <h5>Pubblicato: True</h5>
    @else
    <h5>Pubblicato: False</h5>
    @endif
</div>
@endsection