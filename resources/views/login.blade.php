@extends('template')

@section('titulo', 'Cineal - Login')

@section('conteudo_principal') 
    <div id="conteudo"> <!-- Inicio conteudo -->
        <form id="loginformulario" action="{{url('logar')}}" method="POST">
            @csrf
            <h3>Login</h3>
                        
            @if(session('erro'))
            <!--INICIO VALIDACAO LOGIN -->
            <div class="alert alert-danger">
                <strong>Erro! </strong> {{session('erro')}}
            </div>
            <!--FIM VALIDACAO LOGIN -->
            @endif

            @if(session('sucesso'))
            <!--INICIO VALIDACAO LOGIN -->
            <div class="alert alert-success">
                <strong>Sucesso! </strong>{{session('sucesso')}}
            </div>
            <!--FIM VALIDACAO LOGIN -->
            @endif

            <div class="form-group">
                <label for="email">Email: </label>
                <input type="email" class="form-control" name="email" id="campo_email">
            </div>

            <div class="form-group">
                <label for="senha">Senha: </label>
                <input type="password" class="form-control" name="senha" id="campo_senha">
            </div>

            <button type="submit" class="btn btn-warning" id="botao">Logar</button>
            <br>
            <a id="cadusuario" href="cadusuario">Cadastre-se</a>
            <br>
            <a id="esquecisenha" href="">Esqueci minha senha</a>
        </form>
    </div>              <!-- Fim conteudo -->
@endsection