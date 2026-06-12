<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use Illuminate\Http\Request;

class KeepController extends Controller
{
    public function index(){
        // echo "<img src='https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExNzBicmVhOTQwMnBrOHVid3BwOWs2a2tmN2dqYmc2bmcxOWVqdW9vaCZlcD12MV9naWZzX3NlYXJjaCZjdD1n/BtaLPLOtqPGroKaPDc/giphy.gif'>";
        // echo "<br>";

        $notas = Nota::all();

        return view('keep/index', [
            'notas' => $notas,
        ]);
    }

    public function create(Request $request){
        if($request->isMethod('post')){
            $dados = $request->validate(['nota' => 'required|min:5',
             'cor' => 'required',
            'imagem' => 'nullable|image',
            ]);

            if($request->hasFile('imagem')){
                $dados['imagem'] = $request->file('imagem')->store('imagens', 'public');
            }

            Nota::create($dados);
            return redirect()->route('keep.index')->with('mensagem', 'Nota Criada Com Sucesso!');
        }
        return view('keep/create');
    }

    public function delete(Nota $nota){
        if(request()->isMethod('delete')){
            $nota->timestamps = false;
            $nota->delete();

            return redirect()->route('keep.index')->with('mensagem', 'Sentimentos Apagados Com Sucesso');
        }
        return view('keep.delete', [
            'nota' => $nota,
        ]);
    }

    public function edit(Request $request, Nota $nota){
if($request->isMethod('put')){
    $dados = $request->validate([
    'nota' => 'required|min:5' ,
    'cor' => 'required',
    'imagem' => 'nullable|image'
    ]);

    if($request->hasFile('imagem')){
        if($nota->imagem){
            \Storage::disk('public')->delete($nota->imagem);
        }
        $dados['imagem'] = $request->file('imagem')->store('imagens', 'public');
    }

    

    $nota->update($dados);
    return redirect()->route('keep.index')->with('mensagem', 'Nota atualizada');
}
        return view('keep.create', [
            'nota' => $nota,
        ]);
    }

    public function trash(){
        $notas = Nota::onlyTrashed()->get();

        return view('keep.trash', [
            'notas' => $notas,
        ]);
    }

    public function restore(Nota $nota){
        $nota->timestamps = false;
        $nota->restore();

        return redirect()->route('keep.index')->with('mensagem', 'Nota restaurada com sucesso!');
    }
}

