<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Alterar titulo dinâmicamente -->
    <title>@yield('title')</title>

    <!-- Fonte Roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <!-- Styles and JS-->
    <link rel="stylesheet" href="{{ asset('/css/styles.css') }}">
    <script src="{{ asset('/js/index.js') }}"></script>

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> 
</head>

<body>
    <header class="headerPrincipal">
        <div class="logo">
            <a href="index.blade.php"><img src="img/logo_uem.png" alt="Logo do Site"></a>
        </div>
            <!-- Alterar h1 dinâmicamente -->
            <h1>@yield('h1')</h1>
            <div class="spacer"></div>
    </header>

    <nav id="menu">
        <ul class="nav-bar">
            <li class="nav-item"><a href="/"><ion-icon name="home-outline"></ion-icon> Home</a></li>
            <li class="nav-item"><a href="/curso"><ion-icon name="qr-code-outline"></ion-icon> Curso</a></li>
            @guest
                <!-- se foi acessado a página estes campos somem -->
                <li class="nav-item"><a href="/login"><ion-icon name="enter-outline"></ion-icon> Login do administrador</a></li>
                <li class="nav-item"><a href="/register"><ion-icon name="person-circle-outline"></ion-icon> Cadastre-se</a></li>
                <li class="nav-item"><a href="/saibaMais"><ion-icon name="information-circle-outline"></ion-icon> Saiba mais</a></li>
            @endguest
            @auth
                <!-- se foi acessado a página estes campos ficam disponíveis -->
                <li class="nav-item"><a href="/cadastrar"><ion-icon name="person-add-outline"></ion-icon> Cadastrar</a></li>
                <li class="nav-item"><a href="/inscritos"><ion-icon name="people-outline"></ion-icon> Inscritos</a></li>
                <li class="nav-item"><a href="/avaliacao"><ion-icon name="star-half-outline"></ion-icon> Avaliar</a></li>
                <li class="nav-item">
                    <form action="/logout" method="POST">
                        @csrf
                        <!-- logout da página -->
                        <a href="/logout" onclick="event.preventDefault(); this.closest('form').submit();">
                            <ion-icon name="exit-outline"></ion-icon> Sair
                        </a>
                    </form>
                </li>
            @endauth
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!--Se houver uma mensagem, mostra ela-->
            @if (session('msg'))
                <p class="msg">{{session('msg')}}</p>
            @endif
        </div>
    </div>   

    <!-- Alterar conteúdo dinâmicamente -->
    @yield('content')
    
    <footer>
        @Curso de informatica versão 2.0 | By: Gabriel Saraiva & Olga Maria
    </footer>
    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
