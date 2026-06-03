<?php

use App\Http\Controllers\KeepController;
use Illuminate\Support\Facades\Route;
use function PHPUnit\Framework\isNumeric;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return '<h1>Hello, World!</h1>';
});

Route::get('/tabuada/{n}/{p}', function ($n, $p) {
        if(is_numeric($n) && is_numeric($p) ){
            for($i=0; $i<=$p; $i++){echo "$n x $i = " . $n*$i . "<br>";}
        }else{
            echo "<img src='https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExN2R0aTN3emJ2c2dvOGh6ZGE5ZzZ0b3hjZXFyeXp4M2xpM3RkMDU2bSZlcD12MV9naWZzX3NlYXJjaCZjdD1n/TqiwHbFBaZ4ti/giphy.gif'>";
        }
     
});

Route::get('/calc1/{n1}/{n2}', function($n1, $n2) {
    return $n1*$n2;
});

Route::get('/sabor/{n1}', function($n1){
    echo "<h1>Sabooor $n1</h1>";
    echo "<br>";
    echo "<img src='https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExNnZvem51Mzl0MDVjaGMyazVmMHh3MTU1aWRmYTRyZzBhajZtMmMwbyZlcD12MV9naWZzX3NlYXJjaCZjdD1n/omGFO0oWc9SinWcTji/giphy.gif'>";
    echo "<img src='https://media0.giphy.com/media/v1.Y2lkPTc5MGI3NjExdDVybTV0b21iM3I1Z2Rzem50ZDFxcGg2MWs2cmw0bm02ZWtrZmozOSZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/KyNgMZuBFHJajVbWF7/giphy.gif'>";
});



Route::get('/keep', [KeepController::class, 'index'])->name('keep.index');

Route::get('/keep/create', [KeepController::class, 'create'])->name('keep.create');

Route::post('/keep/create', [KeepController::class, 'create']);


Route::get('keep/edit/{nota}', [KeepController::class, 'edit'])->name('keep.edit');

Route::put('keep/edit/{nota}', [KeepController::class, 'edit']);

Route::get('keep/delete/{nota}', [KeepController::class, 'delete'])->name('keep.delete');

Route::delete('keep/delete/{nota}', [KeepController::class, 'delete']);