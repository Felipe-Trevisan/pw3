<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeepController extends Controller
{
    public function index(){
        // echo "<img src='https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExNzBicmVhOTQwMnBrOHVid3BwOWs2a2tmN2dqYmc2bmcxOWVqdW9vaCZlcD12MV9naWZzX3NlYXJjaCZjdD1n/BtaLPLOtqPGroKaPDc/giphy.gif'>";
        // echo "<br>";
        return view('keep/index');
    }

    public function create(){
        return view('keep/create');
    }



}
