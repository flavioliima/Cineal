<!DOCTYPE html>
<html lang="PT-BR">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('titulo')</title>
        <link rel="">
        <link rel="stylesheet" href="{{asset('css/estilo.css')}}">
        <link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css')}}" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>

    <body>
        <div id="container"><!-- Inicio Container --> 
                    <div id="topo"> <!-- Inicio Topo -->
                        <h1 class="logo">Cineal</h1>
                            <ul id="navegacao">
                                <li><a id="home" href="home">Home</a></li>
                                <li><a id="cinema" href="historia">Historia</a></li>
                                <li><a id="filmes" href="filmes">Filmes</a></li>
                                <li><a id="login" href="login">Login</a></li>
                            </ul>
                    </div>          <!-- Fim Topo -->
        
    <!-- Inicio Conteudo -->

    @yield('conteudo_principal')

    <!--fim conteudo-->

        </div>                <!-- Fim Container -->
    <div id="rodape">
                <h4>&copy; Todos os direitos reservados</h4>
            </div>
        </div>
    </body>

</html>