@extends('layout.layout')


@section('vite')
@vite([
    'resources/css/AtualizarNecessidade.css', 
])
@endsection



@section('conteudo')

<h1>Atualizar necessidade: {{$Necessidade->NomeNecessidade}}</h1>
<div class="container atualizar">
    <div class="row">
        <div class="col">
        <form action="{{route('atualizarNecessidade', ['id' => $id])}}" method="post">
            @csrf
            <label for="" class="form-label">id:</label>
                <input type="text" class="form-control" name="NomeNecessidade" value={{$id}} disabled>

                <label for="" class="form-label">Nome:</label>
                <input type="text" class="form-control @error('NomeNecessidade') is-invalid @enderror" name="NomeNecessidade" value="{{$Necessidade->NomeNecessidade}}">
                @error('NomeNecessidade')
                    <div class="invalid-feedback">
                        {{$message}}
                  </div>
                @enderror
                <label for="" class="form-label">Descrição:</label>
                <input type="text" class="form-control @error('Descricao') is-invalid @enderror" name="Descricao" value="{{$Necessidade->descricao}}">
                @error('Descricao')
                    <div class="invalid-feedback">
                        {{$message}}
                  </div>
                @enderror
                <label for="" class="form-label">Meta:</label>
                <input type="text" class="form-control @error('Meta') is-invalid @enderror" name="Meta" value="{{$Necessidade->meta}}">
                @error('Meta')
                    <div class="invalid-feedback">
                        {{$message}}
                  </div>
                @enderror
                <label for="" class="form-label">Categoria:</label>
                <select class="form-select @error('Categoria') is-invalid @enderror" aria-label="Default select example" name="Categoria">
                    <option selected disabled>Categoria</option>
                    <option value="1">Roupas</option>
                    <option value="2">Alimentos</option>
                    <option value="3">Itens de higiene</option>
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
                    <input class="btn btn-primary enviar" type="submit" value="Enviar">
                </div>
                </form>
                
        </div>
    </div>
</div>

@endsection
