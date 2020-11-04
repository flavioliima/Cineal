
@extends('template')

@section('titulo', 'Cineal - Home')

@section('conteudo_principal')

                <div id="conteudo"> <!-- Inicio conteudo -->
                    <div id="lateral">
                        <div class="caixa-lateral">
                            <h2>Gêneros Filmes</h2>
                            <div class="caixa-conteudo-lateral">
                                <ul>
                                    <li><a href="">Ação</a></li>
                                    <li><a href="">Animação</a></li>
                                    <li><a href="">Aventura</a></li>
                                    <li><a href="">Comédia</a></li>
                                    <li><a href="">Documentário</a></li>
                                    <li><a href="">Fantasia</a></li>
                                    <li><a href="">Faroeste</a></li>
                                    <li><a href="">Guerra</a></li>
                                    <li><a href="">Musicais</a></li>
                                    <li><a href="">Romance</a></li>
                                    <li><a href="">Suspense</a></li>
                                    <li><a href="">Terror</a></li>
                                    <li><a href="">Drama</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="caixa-lateral">
                            <h2>Busca</h2>
                            <div class="caixa-conteudo-lateral">
                                <form>
                                    <div>
                                        <input type="text" name="campo-busca" id="busca" placeholder="Por filme, gênero ou cinema"> <br>
                                    </div>
                                    <div>
                                        <input type="submit" value="Buscar" id="botao-busca">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div id="primario">
                        <div class="caixa-primaria">
                            <h2>Filmes em cartaz</h2>
                            <div class="caixa-conteudo-primario">
                                <h3 class="conteudo">ARLEQUINA EM AVES DE RAPINA</h3>
                                <img class="filmes" src="/img/arlequina-em-aves-de-rapina.jpg" alt="">
                                <div class="form-group col-md-12">
                                    <button class="btn btn-success" > Comprar </button>
                                </div>
                            </div>

                            <div class="caixa-conteudo-primario">
                                <h3 class="conteudo">BLOODSHOT</h3>
                                <img class="filmes" src="/img/bloodshot.jpg" alt="">
                                <div class="form-group col-md-12">
                                    <button class="btn btn-success" > Comprar </button>
                                </div>
                            </div>

                            <div class="caixa-conteudo-primario">
                                <h3 class="conteudo">JURASSIC WORLD: REINO AMEAÇADO</h3>
                                <img class="filmes" src="/img/jurassic-world-reino-ameacado.jpg" alt="">
                                <div class="form-group col-md-12">
                                    <button class="btn btn-success" > Comprar </button>
                                </div>
                            </div>

                            <div class="caixa-conteudo-primario">
                                <h3 class="conteudo">O ROUBO DO SÉCULO</h3>
                                <img class="filmes" src="/img/o-roubo-do-seculo.jpg" alt="">
                                <div class="form-group col-md-12">
                                    <button class="btn btn-success" > Comprar </button>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div id="secundario">
                        <div class="caixa-primaria">
                            <h2>Lançamentos</h2>
                            <div class="caixa-conteudo-primario">
                                <h3 class="conteudo">A HORA DA SUA MORTE</h3>
                                <img class="filmes" src="/img/a-hora-da-sua-morte.jpg" alt="">
                                <div class="form-group col-md-12">
                                    <button class="btn btn-warning" > Sinopse </button>
                                </div>
                            </div>

                            <div class="caixa-conteudo-primario">
                                <h3 class="conteudo">AGENTES SELVAGENS</h3>
                                <img class="filmes" src="/img/agentes-selvagens.jpg" alt="">
                                <div class="form-group col-md-12">
                                    <button class="btn btn-warning" > Sinopse </button>
                                </div>
                            </div>

                            <div class="caixa-conteudo-primario">
                                <h3 class="conteudo">A MALDIÇÃO DO ESPELHO</h3>
                                <img class="filmes" src="/img/a-maldicao-do-espelho.jpg" alt="">
                                <div class="form-group col-md-12">
                                    <button class="btn btn-warning" > Sinopse </button>
                                </div>
                            </div>

                            <div class="caixa-conteudo-primario">
                                <h3 class="conteudo">FUGA DE PRETÓRIA</h3>
                                <img class="filmes" src="/img/fuga-de-pretoria.jpg" alt="">
                                <div class="form-group col-md-12">
                                    <button class="btn btn-warning" > Sinopse </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>              <!-- Fim conteudo -->
            
@endsection