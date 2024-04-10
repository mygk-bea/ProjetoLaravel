<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1, int $p2){
        // echo "$p1 + $p2 = ".$p1+$p2;
        return View('site.teste', ['p1'=>$p1, 'p2'=>$p2]);
        // array associativo -> um array que gera os índices a partir de uma nomeação ex 'p1'

        // Outras formas de fazer:
        // return View('site.teste', compact('p1', 'p2'));
        // return View('site.teste')->with('p1', $p1)->with('p2', $p2);
    }
}
