@extends('layout.template')

@section('conteudo')
    <main>
        <section id="onebloco">
            <div id="n_a">
                <h2 data-aos="fade-down">Novidades da Área</h2>
            </div>
            <div id="text_na" class="container">
                <div class="row justify-content-center m-5" data-aos="fade-up">
                    <div class="col-md-5 nate">
                        <h3 class="h3na">Abordagens inovadoras de tratamento:</h3>
                        <p class="pna">
                            Terapias inovadoras, como a terapia assistida por animais,
                            terapia de arte e terapia de dança, estão sendo cada vez mais
                            reconhecidas como complementares aos tratamentos tradicionais
                            para uma variedade de condições de saúde mental.
                        </p>
                    </div>
                    <div class="col-md-5 nate">
                        <h3 class="h3na">Ênfase na prevenção e intervenção precoce:</h3>
                        <p class="pna">
                            Há uma crescente conscientização sobre a importância da
                            prevenção e intervenção precoce em saúde mental. Programas de
                            conscientização, triagem em massa e intervenções em estágios
                            iniciais estão sendo promovidos para ajudar a reduzir o impacto
                            de condições como ansiedade, depressão e estresse.
                        </p>
                    </div>
                    <div class="col-md-5 nate">
                        <h3 class="h3na">Tecnologia e saúde mental:</h3>
                        <p class="pna">
                            O uso de aplicativos móveis, plataformas online e dispositivos
                            de rastreamento está se tornando mais comum no campo da saúde
                            mental. Essas tecnologias podem ajudar na triagem, monitoramento
                            e até mesmo na entrega de intervenções terapêuticas.
                        </p>
                    </div>
                    <div class="col-md-5 nate">
                        <h3 class="h3na">Redução do estigma:</h3>
                        <p class="pna">
                            Há um esforço contínuo para reduzir o estigma em torno das
                            questões de saúde mental. Campanhas de conscientização,
                            narrativas pessoais e educação pública estão ajudando a mudar
                            percepções e criar ambientes mais compreensivos e inclusivos
                            para aqueles que lidam com desafios de saúde mental.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="blocoVideo">
            <div class="container">
                <div class="row rows">
                    <div class="col-md-6 text-center" data-aos="fade-right">
                        <h2>Saúde Mental Importa</h2>
                        <p id="textVideo">
                            Você já parou para pensar em como anda sua saúde mental? Neste vídeo, você vai descobrir por que cuidar da mente é tão importante quanto cuidar do corpo. Entenda os sinais de alerta, saiba onde buscar ajuda e veja como pequenas atitudes podem transformar sua vida. Assista agora e dê o primeiro passo para o seu bem-estar!
                        </p>
                    </div>
                    <div class="col-md-6" data-aos="fade-left">
                        <iframe class="iframe" width="560" height="315" src="https://www.youtube.com/embed/2FGI1Zuf--E?start=9"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>

        <section id="twobloco">
            <div class="container">
                <div class="row rows">
                    <div class="col-md-6 text-center" data-aos="fade-right">
                        <img class="iframe" src="img/Palestra.png" alt="Palestra" class="img-fluid" />
                    </div>
                    <div class="col-md-6 text-center" data-aos="fade-left">
                        <p class="textinhos">
                            A Secretaria de Saúde de Marília está no II Congresso
                            Internacional de Saúde Mental na Unesp, recebendo autoridades no
                            Caps Com-Viver. O evento busca promover práticas colaborativas
                            na saúde mental, inspiradas na Escola Internacional Franca e
                            Franco Basaglia.
                        </p>
                    </div>
                </div>
                <div class="row rows">
                    <div class="col-md-6 text-center" data-aos="fade-right">
                        <p class="textinhos">
                            O Grupo de Trabalho de Saúde Mental em Pauta promoveu uma ação
                            social em Marília, contando com apoio de diversas instituições
                            locais e nacionais. A iniciativa incluiu atividades de
                            conscientização, orientações sobre saúde mental, dança circular
                            e cidadania, visando reduzir o impacto dos transtornos mentais e
                            promover comunidades mais saudáveis e resilientes.
                        </p>
                    </div>
                    <div class="col-md-6 text-center" data-aos="fade-left">
                        <img class="iframe" src="img/PasseataIdosos.png" alt="Passeata" class="img-fluid" />
                    </div>
                </div>
                <div class="row rows">
                    <div class="col-md-6 text-center" data-aos="fade-right">
                        <img class="iframe" src="img/EventoSaúde.png" alt="Evento" class="img-fluid" />
                    </div>
                    <div class="col-md-6 text-center" data-aos="fade-left">
                        <p class="textinhos">
                            A caminhada realizada na Avenida das Esmeraldas buscou fazer um
                            alerta para os cuidados com a saúde mental da população, a
                            partir da prevenção das doenças decorrentes do estresse,
                            relações de poder autoritárias, preconceitos, estigmas sociais,
                            rotinas e hábitos pouco saudáveis, incluindo os transtornos
                            mentais mais
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
