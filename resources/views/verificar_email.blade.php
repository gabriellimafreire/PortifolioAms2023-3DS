@extends('layout.layout')


@section('vite')
    @vite(['resources/css/AtualizarContaDoador.css'])
@endsection



@section('conteudo')
                <h4>Veirifique seu email para utlizar nossos serviços de forma completa</h4>

                <form action="{{route('verification.send')}}" method="post">
                <button class="btn" type="submit">Enviar email</button>
                </form>
            </div>
        </div>
    </div>
@endsection