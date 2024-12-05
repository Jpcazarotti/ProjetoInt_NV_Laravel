@extends('layout.template')

@section('conteudo')
    <main>
        <section id="banner">
            <div id="BM_CAM" class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7 texto_banner">
                        <h2 id="bem_vindo" class="mb-3 text-center" data-aos="fade-down">
                            Bem vindo ao C.A.M.
                        </h2>
                        <h2 id="sig_cam" class="mb-4 text-center" data-aos="fade-down">
                            <em>Caminhos para um Amanhã Melhor</em>
                        </h2>
                        <p id="objetivo" class="text-center" data-aos="fade-up">
                            Nosso projeto visa fornecer informações cruciais e recursos
                            essenciais para apoiar a saúde mental e prevenir o suicídio.
                            Reconhecendo a importância de disponibilizar suporte e
                            orientação para aqueles que enfrentam desafios emocionais,
                            estamos comprometidos em criar uma plataforma informativa
                            acessível e acolhedora.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="botoes">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <p id="botoes_aten" class="text-center" data-aos="fade-up">
                            <button id="button_aten_online" class="btn bot" type="button" data-bs-toggle="collapse"
                                data-bs-target="#aten_online" aria-expanded="false" aria-controls="aten_online">
                                <h5>Instituições Online</h5>
                                <img src="img/aten_online.png" alt="Atendimento Online. Clique para saber mais."
                                    width="300" class="img-fluid bt_img" />
                            </button>
                            <button id="button_aten_presencial" class="btn bot" type="button" data-bs-toggle="collapse"
                                data-bs-target="#aten_presencial" aria-expanded="false" aria-controls="aten_presencial">
                                <h5>Instituições Presenciais</h5>
                                <img src="img/aten_presencial.png" alt="Atendimento Presencial. Clique para saber mais."
                                    width="300" class="img-fluid bt_img" />
                            </button>
                        </p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div id="rowonline" class="row justify-content-center coalp">
                    <div class="col-md-10">
                        <div class="collapse multi-collapse" id="aten_online">
                            <div class="card card-body backBotoes">
                                <div class="btn-group" role="group" aria-label="botoes_aten_online">
                                    <button type="button" class="btn btn_text">
                                        <a href="https://casademarias.com/" target="_blank">
                                            <div class="boxImg">
                                                <img src="img/casa_marias.png" alt="casa das marias" class="img-fluid" />
                                            </div>
                                            <h5>Casa De Marias</h5>
                                        </a>
                                    </button>
                                    <button type="button" class="btn btn_text">
                                        <a href="https://www.casaum.org/" target="_blank">
                                            <div class="boxImg">
                                                <img src="img/casa1.png" alt="casa1" class="img-fluid" />
                                            </div>
                                            <h5>Casa 1</h5>
                                        </a>
                                    </button>
                                    <button type="button" class="btn btn_text">
                                        <a href="https://www.bemdoestar.org/" target="_blank">
                                            <div class="boxImg">
                                                <img src="img/bem_do_estar.png" alt="Instituto bem do estar"
                                                    class="img-fluid" />
                                            </div>
                                            <h5>Bem Do Estar</h5>
                                        </a>
                                    </button>
                                    <button type="button" class="btn btn_text">
                                        <a href="https://institutoborboletaazul.org.br/" target="_blank">
                                            <div class="boxImg">
                                                <img src="img/borboletaAzul.png" alt="Instituto Borboleta Azul"
                                                    class="img-fluid" />
                                            </div>
                                            <h5>Borboleta Azul</h5>
                                        </a>
                                    </button>
                                    <button type="button" class="btn btn_text">
                                        <a href="https://ipefem.org.br/" target="_blank">
                                            <div class="boxImg">
                                                <img src="img/ipefem.png" alt="Instituto Ipefem" class="img-fluid" />
                                            </div>
                                            <h5>Ipefem</h5>
                                        </a>
                                    </button>
                                    <button type="button" class="btn btn_text">
                                        <a href="https://cvv.org.br/" target="_blank">
                                            <div class="boxImg">
                                                <img src="img/cvv.png" alt="Centro de Valorização da Vida"
                                                    class="img-fluid" />
                                            </div>
                                            <h5>CVV</h5>
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div id="rowpresencial" class="row justify-content-center coalp">
                    <div class="col-md-8">
                        <div class="collapse multi-collapse" id="aten_presencial">
                            <div class="card card-body backBotoes">
                                <h5 class="text-center">Instituições - Marília-SP</h5>
                                <h6 class="text-center">Clique para saber mais.</h6>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn_text">
                                        <a href="https://www.gov.br/saude/pt-br/composicao/saes/desmad/raps/caps"
                                            target="_blank">
                                            <div class="boxImg">
                                                <img src="img/caps.png" alt="caps" class="img-fluid" />
                                            </div>
                                            <h5>CAPS</h5>
                                        </a>
                                    </button>
                                    <button type="button" class="btn toggle-button btn_text" onclick="toggleNumber()">
                                        <div id="ahref">
                                            <div class="boxImg">
                                                <img src="img/samu.png" alt="samu" class="img-fluid" />
                                            </div>
                                            <h5>SAMU</h5>
                                            <div id="samu-number" class="hidden-number">
                                                Ligar 192
                                            </div>
                                        </div>
                                    </button>
                                    <button type="button" class="btn btn_text">
                                        <a href="https://blog.unimar.br/2020/07/22/clinica-de-psicologia-da-unimar/"
                                            target="_blank">
                                            <div class="boxImg">
                                                <img src="img/unimar.png" alt="Unimar" class="img-fluid" />
                                            </div>
                                            <h5>Unimar</h5>
                                        </a>
                                    </button>
                                    <button type="button" class="btn btn_text">
                                        <a href="https://www.aa.org.br/" target="_blank">
                                            <div class="boxImg">
                                                <img src="img/AA.png" alt="alcolicos anonimos" class="img-fluid" />
                                            </div>
                                            <h5>Alcoólicos Anônimos</h5>
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="carrosel_fundo">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col titulo" data-aos="fade-up">
                        <h2 class="text-center">Eventos Saúde Mental</h2>
                        <h5 class="text-center">Marília-SP</h5>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div id="carrosel" class="carousel slide" data-bs-ride="carousel" data-aos="fade-up">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carrosel" data-bs-slide-to="0" class="active"
                                    aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carrosel" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carrosel" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="img/PasseataIdosos.png" class="d-block w-100 img-carrosel"
                                        alt="passeata dos idosos" />
                                    <div class="carousel-caption d-none d-md-block texto_carrosel">
                                        <h5>Passeata para Saúde</h5>
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="10000">
                                    <img src="img/EventoSaúde.png" class="d-block w-100 img-carrosel" alt="evento" />
                                    <div class="carousel-caption d-none d-md-block texto_carrosel">
                                        <h5>Caminhada pela Vida</h5>
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="10000">
                                    <img src="img/Palestra.png" class="d-block w-100 img-carrosel" alt="palestra" />
                                    <div class="carousel-caption d-none d-md-block texto_carrosel">
                                        <h5>Palestra Sobre Saúde Mental</h5>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carrosel"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Anterior</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carrosel"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Próximo</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
