@extends('keep/_base')

@section('conteudo')
    <img src="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExZDZjNTdtdTJnc3NrdDR1bTcxZTk3aG9zdXAzdTdiNzJ4bjFmNzJ2NCZlcD12MV9naWZzX3NlYXJjaCZjdD1n/XeQ5g2yEomEHiv2AfO/giphy.gif" alt="">
    <br>
    <br>
    <br>
    <hr>
    <br>
    <br>
    @if ($errors->any())
    <div style="color:red">
        <ul>
            @foreach ($errors->all() as $erro)
            <li>
                {{ $erro }}
                <h1>Sheldon Lee Cooper You Dog</h1>
            </li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="post" action="{{ isset($nota) ? route('keep.edit', $nota['id']) : route('keep.create') }} ">
        @csrf

    @if (isset($nota))
    @method('PUT')
    @endif

        <textarea name="nota">{{ old('nota', $nota['nota'] ?? '') }}</textarea>
        <br>
        <br>
        <input type="color" name="cor" value="{{ old('cor', $nota['cor'] ?? '') }}">
        <br>
        <br>
        <input type="submit" value="Gravar">
        <br>
    </form>
    <p><a href="{{ @route('keep.index') }}">Cancelar</a></p>
@endsection