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
            $dados = $request->validate(['nota' => 'required' , 'cor' => 'required']);
            Nota::create($dados);
            return redirect()->route('keep.index');
        }
        return view('keep/create');
    }



}
