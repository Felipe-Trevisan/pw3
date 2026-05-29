@extends('keep/_base')

@section('conteudo')
    <img src="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExang1OHhvZWQzbjF4eDVqZXd0eWxhbGIycXZxeTUyc2Y5eDRjYnR6ZiZlcD12MV9naWZzX3NlYXJjaCZjdD1n/VENYfkVWlADnJe1qd5/giphy.gif" alt="">
    <p>Bem-Vindo ao Little Keep!</p>
    <p><a href="{{ @route('keep.create') }}">Adicionar Nota</a></p>
    <br>
    <hr>
    <br>
    @foreach ($notas as $nota)
        <div style="border:1px solid black; background-color: {{ $nota['cor'] }}; padding:20px;">{{ $nota['nota'] }}</div>
        <img src="{{ $nota['nota'] }}">
        <br>
        <hr>
    @endforeach
@endsection