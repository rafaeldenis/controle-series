<?php 
namespace App\Services;

use App\{Serie, Temporada, Episodio};

class RemovedorDeSerie
{
    public function removerSerie(int $serieId): string
    {

        $serie = Serie::find($serieId);
        $nomeSerie = $serie->nome;
        $serie->temporadas->each(function ($temporada) {
            $temporada->episodios()->each(function($episodio) {
                $episodio->delete();
            });
            $temporada->delete();
    
        });
        $serie->delete();

        return $nomeSerie;



    }




}





?>