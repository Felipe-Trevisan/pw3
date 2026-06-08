@extends('keep/_base')

@section('conteudo')
    <img src="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExang1OHhvZWQzbjF4eDVqZXd0eWxhbGIycXZxeTUyc2Y5eDRjYnR6ZiZlcD12MV9naWZzX3NlYXJjaCZjdD1n/VENYfkVWlADnJe1qd5/giphy.gif" alt="">
    <p>Bem-Vindo ao Little Trash! 💩🪠</p>
    <p><a href="{{ @route('keep.index') }}">Ré</a></p>
    <br>
    <hr>
    <br>
    

    @foreach ($notas as $nota)
        <div style="border:1px solid black; background-color: {{ $nota['cor'] }}; padding:20px; width:200px; display:inline-block; margin:20px; font-family: Arial, sans-serif; font-size: 18px; font-weight: bold; text-align: left;">{{ $nota['nota'] }}</div>
        <br>
        <br>
        <br>

        <!-- <img src="{{ $nota['nota'] }}"> -->
        <br>
        <br>
        Apagada: {{ \Carbon\Carbon::parse($nota['deleted_at']) -> diffForHumans()}}

        <br>
        <br>
        <a href="{{ route('keep.trash.restore', $nota['id']) }}">Restaurar: <br><img src="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExMzZxa2VnOWJ6MjByMndlc2tjc2hwZHRhcnVlZno4NmZpZHNzOWtzbCZlcD12MV9naWZzX3NlYXJjaCZjdD1n/3B81t4WkltNwIDRo8G/giphy.gif" alt=""></a>
        <br>
        <br>
        <hr>
    @endforeach
@endsection