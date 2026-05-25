@extends('keep/_base')

@section('conteudo')
    <img src="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExZDZjNTdtdTJnc3NrdDR1bTcxZTk3aG9zdXAzdTdiNzJ4bjFmNzJ2NCZlcD12MV9naWZzX3NlYXJjaCZjdD1n/XeQ5g2yEomEHiv2AfO/giphy.gif" alt="">
    <form method="post">
        <textarea name="nota"></textarea>
        <br>
        <input type="submit" value="Gravar">
    </form>
    <p><a href="{{ @route('keep.index') }}">Cancelar</a></p>
@endsection