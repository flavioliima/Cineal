@extends('template')

@section('titulo', 'Cineal - Login')

@section('conteudo_principal') 
<div id="ajusteformulario">
    <form action="{{url('login')}}">
            <div class="moverbotao">
                <button class="btn btn-danger">Sair</button>
            </div>
    </form>
</div>
@endsection