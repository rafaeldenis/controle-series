<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatriculasController extends Controller
{
    public function create()
    {

        return view('matriculas.create'); 

    }
    public function store(Request $request)
    {
        $novoNome = $request->nome;
       
        //return $novoNome;
        
        $request->session()
        ->flash(
        'mensagem',
        "Série $novoNome criada com  "

        );
        
        

        return redirect()->route('listar_series');
    }  

}
