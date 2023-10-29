@extends('layout.layout')


@section('vite')
@vite([
    'resources/css/CadastrarNecessidade.css', 
    ])
@endsection



@section('conteudo')

<h1>Cadastar necessidade</h1>
<div class="container atualizar">
    <div class="row">
        <div class="col">
        <form action="{{route("cadastrarNecessidade")}}" method="post">
            @csrf
                <label for="" class="form-label">Nome:</label>
                <input type="text" class="form-control @error('NomeNecessidade') is-invalid @enderror" name="NomeNecessidade">
                @error('NomeNecessidade')
                    <div class="invalid-feedback">
                        {{$message}}
                  </div>
                @enderror
                <label for="" class="form-label">Descrição:</label>
                <input type="text" class="form-control @error('Descricao') is-invalid @enderror" name="Descricao">
                @error('Descricao')
                    <div class="invalid-feedback">
                        {{$message}}
                  </div>
                @enderror
                <label for="" class="form-label">Tipo:</label>
                <div class="tipo">
                    @foreach ($tipoNecessidade as $tipo)
                    <input class="form-check-input " type="radio" name="Tipo" id="{{$tipo->id}}" value="{{$tipo->id}}">
                    <label class="form-check-label" for="{{$tipo->id}}">
                        {{$tipo->NomeTipoNecessidade}}
                    </label>
                    @endforeach
                </div>
                @error('Tipo')
                    <div class="invalid-feedback">
                        {{$message}}
                  </div>
                @enderror
                <label for="" class="form-label">Meta:</label>
                <input type="text" class="form-control @error('Meta') is-invalid @enderror" name="Meta">
                @error('Meta')
                    <div class="invalid-feedback">
                        {{$message}}
                  </div>
                @enderror
                <label for="" class="form-label">Categoria:</label>
                <select class="form-select @error('Categoria') is-invalid @enderror" aria-label="Default select example" name="Categoria"> 
                    <option selected disabled>Selecione uma categoria...</option>
                    <option value="Roupas">Roupas</option>
                    <option value="Alimentos">Alimentos</option>
                    <option value="Itens de higiene">Itens de higiene</option>
                </select>

                @error('Categoria')
                    <div class="invalid-feedback">
                        {{$message}}
                  </div>
                @enderror
                <div class="container imagens">
                    <div class="row">
                        <div class="col">
                            <img src="{{Vite::asset('resources/img/RoupasInverno.png')}}" alt="" width="200px" height="200px">
                        </div>
                    </div>

                </div>
                <br>
                <button class="btn btn-primary" type="button">Atualizar</button>
                <div class="submit">
                    <input class="btn btn-primary" type="submit" value="Enviar"></input>
                </div>
                </form>
                
        </div>
    </div>
</div>


 
@endsection