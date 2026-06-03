@extends('keep/_base')
@section('conteudo')
<p>Apagar Nota</p>
<br>
<img src="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExbGRmam1qdTd3aGtsZzQyeHdlNmlwYTh0aXc3bnFraTAzcmliNG5zMyZlcD12MV9naWZzX3NlYXJjaCZjdD1n/8I7g67XuUB7k7v2Wr8/giphy.gif" alt="">
<br>
<br>
<p>Tem Certeza que deseja apagar a nota?</p>
<div style="border:10px solid {{$nota['cor']}}">{{Str::limit ($nota['nota'],50) }}
<br>
    <img src="{{ $nota['nota'] }}" alt="">
</div>

<form method="post" action="{{  route('keep.delete', $nota['id']) }}">
    @csrf
    @method('delete')
    <br>
    <input type="submit" value="Sim, Apagar Sentimentos 😭">
    <br>
    <a href="{{ route('keep.index') }}">Ainda tenho Sentimentos! Não Apague</a>
</form>

@endsection