<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CAM</title>
    <link rel="shortcut icon" href="img/Logo_Site.png" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet" />
    <meta name="description"
        content="CAM: Sua jornada de bem-estar começa aqui. Descubra onde encontrar apoio emocional para uma mente mais saudável." />
    <meta name="keywords"
        content="CAM,saúde mental, apoio emocional, conscientização, bem-estar, solidariedade, comunidade, recursos, auto-cuidado, compreensão, esperança,depressão, suicídio." />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DWYC0130QK"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "G-DWYC0130QK");
    </script>
</head>

<body>
    <header id="cabecalho">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h1 id="logo">
                        <a href="{{ route('home') }}"><img src="img/Projeto_logo.png" alt="Logo" width="130"
                                class="img-fluid" /></a>
                    </h1>
                </div>
                <div id="menu" class="col-md-5">
                    <nav>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('sobre-nos') }}">Sobre Nós</a></li>
                            <li><a href="{{ route('nt') }}">Notícias e Atualizações</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    @yield('conteudo')

    <footer id="footer">
        <div id="rodape" class="container">
            <div class="row justify-content-center">
                <div class="col-md-3 rd">
                    <h2>CAM</h2>
                    <ul class="rp">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('sobre-nos') }}">Sobre Nós</a></li>
                        <li><a href="{{ route('nt') }}">Notícias e Atualizações</a></li>
                        <li>
                            <a href="{{ route('pdp') }}">Política de Privacidade</a>
                        </li>
                        <li><a href="{{ route('faq') }}">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h2>Contato</h2>
                    <ul class="rp">
                        <li>
                            <a href="mailto:cam@email.com">
                                <i class="fa-solid fa-envelope"></i>cam@email.com
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="copyright">
            <p>2024 &copy; Copyright - Todos os direitos são reservados</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
