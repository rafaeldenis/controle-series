@extends('layout')

@section('cabecalho')
    
<h3>
  SPM 1.0
  <small class="text-muted">Adicionar Série</small> 

</h3>
@endsection

@section('conteudo')


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="" method="POST" class="class">
        @csrf
        
        <div class="row">
            <div class="col col-8">
                <label for="nome">NOME</label>
                <input type="text" class="form-control" name="nome" id="nome">

            </div>
            <div class="col col-2">
                <label for="nome">Nº de Temporadas</label>
                <input type="number" class="form-control" name="qtd_temporadas" id="qtd_temporadas"> 

            </div>
            <div class="col col-2">
                <label for="nome">Ep. por temporadas</label>
                <input type="number" class="form-control" name="ep_por_temporada" id="ep_por_temporada">

            </div>
        </div>

        <button class="btn btn-primary mt-2">Adicionar</button>
        





    </form>

        </div>
@endsection
