<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Serie;
use App\Services\CriadorDeSerie;
use App\Services\RemovedorDeSerie;
use Illuminate\Http\Request; 

class SeriesController extends Controller
{

    public function index(Request $request)
    {
        

        $series = serie::query()
        ->orderBy('nome') 
        ->get();
        $mensagem = $request->session()->get('mensagem');

        return view('series.index', compact('series','mensagem'));

    }

    public function create()
    {

        return view('series.create'); 

    }
   
    public function editaNome(int $id, Request $request){
        $novoNome = $request->nome;
        $serie = Serie::find($id);
        $serie->nome = $novoNome;
        $serie->save();

    }
    public function store(SeriesFormRequest $request, CriadorDeSerie $criadorDeSerie)
    {
        $serie = $criadorDeSerie->criarSerie(
            $request->nome, 
            $request->qtd_temporadas, 
            $request->ep_por_temporada
        );
        $request->session()
        ->flash(
        'mensagem',
        "Série {$serie->id} criada com sucesso {$serie->nome}"

        );

        

        return redirect()->route('listar_series');
    }  

    public function destroy(Request $request,  RemovedorDeSerie $RemovedorDeSerie)
    {
        
        $nomeSerie = $RemovedorDeSerie->removerSerie($request->id );  
      
        $request->session()
        ->flash(
        'mensagem',
        "Série $nomeSerie  deletada com sucesso"

        ); 

        

        return redirect()->route('listar_series'); 
    }
          

        
      

    

    
}

?>