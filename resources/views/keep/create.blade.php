@extends('keep/_base')

@section('conteudo')
    <img src="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExZDZjNTdtdTJnc3NrdDR1bTcxZTk3aG9zdXAzdTdiNzJ4bjFmNzJ2NCZlcD12MV9naWZzX3NlYXJjaCZjdD1n/XeQ5g2yEomEHiv2AfO/giphy.gif" alt="">
    <br>
    <br>
    <br>
    <hr>
    <br>
    <br>
    @if ($erros->any())
    <div style="color:red;">
        <ul>
            @foreach ($erros->all() as $erro)
            <li>
                {{ $erro }}
                <div>Sheldon lee cooper you dog</div>
            </li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="post">
        @csrf
        <textarea name="nota"></textarea>
        <br>
        <br>
        <input type="color" name="cor">
        <br>
        <br>
        <input type="submit" value="Gravar">
        <br>
    </form>
    <p><a href="{{ @route('keep.index') }}">Cancelar</a></p>
@endsection