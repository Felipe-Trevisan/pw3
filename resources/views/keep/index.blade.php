@extends('keep/_base')

@section('conteudo')
    <img src="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExang1OHhvZWQzbjF4eDVqZXd0eWxhbGIycXZxeTUyc2Y5eDRjYnR6ZiZlcD12MV9naWZzX3NlYXJjaCZjdD1n/VENYfkVWlADnJe1qd5/giphy.gif" alt="">
    <p>Bem-Vindo ao Little Keep!</p>
    <p><a href="{{ @route('keep.create') }}">Adicionar Nota</a></p>
    <br>
    <p><a href="{{ @route('keep.trash') }}">🚯🚮 Lixeira</a></p>
    <hr>
    <br>
    @if (session('mensagem'))
    
    <div>{{ session('mensagem') }}</div>
    <br>
    <img src="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExcmo1ZjNodjdpcWU3OHNhN3RmZzZhNDI0NGw3NDd0YmhzZWtlc2h3MiZlcD12MV9naWZzX3NlYXJjaCZjdD1n/CHVMFN4MqYLYZC24Ex/giphy.gif" alt="">
    <br>
    <hr>
    @endif
    @foreach ($notas as $nota)
        <div style="border:1px solid black; background-color: {{ $nota['cor'] }}; padding:20px; width:200px; display:inline-block; margin:20px; font-family: Arial, sans-serif; font-size: 18px; font-weight: bold; text-align: left;">{{ $nota['nota'] }}</div>
        <br>
        <br>
        <br>

        <!-- <img src="{{ $nota['nota'] }}"> -->
        <br>
        <br>
        Criada: {{ \Carbon\Carbon::parse($nota['created_at']) -> diffForHumans()}}

        @if ($nota['created_at'] != $nota ['updated_at'])
        <br>
        Editada: {{ \Carbon\Carbon::parse($nota['updated_at'])->diffForHumans() }}
        @endif

        <br>
        <br>
        <a href="{{ route('keep.edit', $nota['id']) }}">📝</a>
        <a href="{{ route('keep.delete', $nota['id']) }}">❌</a>
        <br>
        <br>
        <hr>
    @endforeach
@endsection