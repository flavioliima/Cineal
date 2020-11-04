
@extends('template')

@section('titulo', 'Cineal - CadastrarUsuario')

@section('conteudo_principal')
<div id="ajusteformulario">
    <form id="cadastrousuario" action="{{url('cadastrar')}}" method="POST" >
        @csrf
        <h1>Dados Cadastrais</h1>
        <hr>
        <br>

        @if($errors->any())
            <!--INICIO VALIDACAO LOGIN -->
            <div class="alert alert-danger">
                <strong>Erro! <br></strong>
                @foreach ($errors->all() as $erro)
                {{$erro}}<br>
                @endforeach
            </div>
            <!--FIM VALIDACAO LOGIN -->
        @endif

        <div class="col-md-12">
            <div class="form-group">
                <label for="campo-nome"><strong>Nome: </strong></label>
            <input type="text" class="form-control" name="nome" id="campo-nome" value="{{old('nome')}}">
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="campo-sobrenome"><strong>Sobrenome:</strong></label>
                <input type="text" class="form-control" name="sobrenome" id="campo-sobrenome" value="{{old('sobrenome')}}">
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="campo-email"><strong>Email:</strong></label>
                <input type="email" class="form-control" name="email" id="campo-email" value="{{old('email')}}">
            </div>
        </div>

        <div class="col-md-8">
            <div class="form-group">
                <label for="campo-cpf"><strong>CPF: </strong></label>
                <input type="text" class="form-control" name="cpf" id="campo-cpf" value="{{old('cpf')}}">
            </div>
        </div>

        <div class="col-md-8">
            <div class="form-group">
                <label for="campo-senha"><strong>Senha:</strong></label>
                <input type="password" class="form-control" name="senha" id="campo-senha">
            </div>
        </div>

        <div class="col-md-8">
            <div class="form-group">
                <label for="campo-confirmarsenha"><strong>Confirmar senha: </strong></label>
                <input type="password" class="form-control" name="confirmarsenha" id="campo-confirmarsenha">
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-success">Cadastrar</button>
    </form>
</div>

@endsection