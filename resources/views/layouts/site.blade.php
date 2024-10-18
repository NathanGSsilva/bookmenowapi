<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>BookMeNow - Conectando aos melhores profissionais</title>
    <meta name="description" content="Conectando aos melhores profissionais do mercado.">
    <meta name="keywords" content="profissionais, prestadores de serviços, autônomos">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

</head>

<body>
    <header id="cabecalho" class="container">

        <div id="botao-menu-mobile">
            <i class="fa-solid fa-bars"></i>
        </div>

        <div id="logotipo">
            <img src="{{ asset('img/logo.png') }}" alt="BookMeNow" height="40">
        </div>

        <nav id="menu">
            <ul>
                <li><a href="javascript:;">Categorias</a></li>
                <li><a href="sobre-nos.html">Sobre nós</a></li>
                <li><a href="contato.html">Contato</a></li>
            </ul>

        </nav>

        <div id="botaoTopo">
            <a href="{{ route('login.form') }}" class="btn-secundario">Login</a>
            <a href="registrar.html" class="btn-secundario">Registrar</a>
        </div>
    </header>

    <div id="banner">
        <div class="container">
            <h2>Conectando Você aos Melhores Profissionais</h2>
            <p>Descubra Qualidade e Confiabilidade em nossos parceiros</p>
            <div id="formPesquisa">
                <form action="#" method="get">
                    <div class="form-icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" name="search" placeholder="O que você esta procurando?">
                    </div>
                    <div class="form-icon">
                        <i class="fa-solid fa-location-arrow"></i>
                        <input type="text" name="location" placeholder="Sua Localização">
                    </div>
                    <button type="submit">Procurar</button>
                </form>
            </div>
            <div class="lista-servicos-banner">
                <ul>
                    <li>Manutenção de Comuptadores</li>
                    <li>Barbeiro</li>
                    <li>Mecânico</li>
                </ul>
            </div>
        </div>
    </div>


    <main class="container">

        @yield('conteudo')

    </main>

    <!-- Bloco como funciona - Atividade Futura -->


    <footer id="rodape">
        <div class="container" id="linha-rodape">
            <div class="coluna-rodape">
                <h2>Categorias</h2>
                <ul>
                    <li><a href="#">TI</a></li>
                    <li><a href="#">Barbeiro</a></li>
                    <li><a href="#">Mecânico</a></li>
                </ul>
            </div>

            <div class="coluna-rodape">
                <h2>BookMeNow</h2>
                <ul>
                    <li><a href="#">Sobre nós</a></li>
                    <li><a href="#">Contato</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Politica de Privacidade</a></li>
                </ul>
            </div>

            <div class="coluna-rodape">
                <h2>Contatos</h2>
                <ul>
                    <li><i class="fa-solid fa-hotel"></i> Paraiba, 125</li>

                    <li><a href="https://wa.me/5514999999999?text=Olá tudo bem"><i class="fa-brands fa-whatsapp"></i>
                            (14) 99999-9999</a></li>

                    <li><a href="tel:1434333698"><i class="fa-solid fa-phone"></i>
                            (14) 3433-3698</a></li>

                    <li><a href="mailto:contato@bookmenow.com.br"><i class="fa-regular fa-envelope"></i>
                            contato@bookmenow.com.br</a></li>
                </ul>
            </div>

            <div class="coluna-rodape">
                <h2>Rede Sociais</h2>
                <div class="rede-social">
                    <a href="https://facebook.com">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="https://instagram.com">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </div>
                <div class="link-app">
                    <img src="{{ asset('img/google-play.png') }}" alt="Baixe nosso APP Google play">
                    <img src="{{ asset('img/app-store.png') }}" alt="Baixe nosso APP Apple Store">
                </div>
            </div>

        </div>

        <div class="copyright">
            <p>&copy; 2023 - Todos os direitos são reservados | Desenvolvido por Edson</p>
        </div>

    </footer>






    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
