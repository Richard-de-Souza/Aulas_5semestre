<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Guia Zumbi - Sobrevivência</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <!-- Estilo personalizado -->
    <style>
        body {
            background-color: #1c1c1c;
            color: #f1f1f1;
            margin: 0;
            padding: 0;
        }

        .menu {
            background-color: rgba(112, 3, 3, 0.8);
            padding: 20px 0;
            margin-bottom: 50px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            width: 100%;
        }

        .item-menu {
            margin: 5px;
            padding: 15px 20px;
            background-color: #2c2c2c;
            border: 1px solid #444;
            border-radius: 8px;
            text-align: center;
            transition: all 0.3s ease-in-out;
            opacity: 0;
        }

        .item-menu a {
            color: #f1f1f1;
            text-decoration: none;
            font-size: 18px;
        }

        .item-menu:hover {
            background-color: #b30000;
            transform: scale(1.1);
            box-shadow: 0 0 15px #ff0000aa;
        }

        .menu nav {
            display: flex;
            justify-content: flex-start;
            flex-wrap: wrap;
        }
        /* Força o menu colapsado a ficar em linha (horizontal) */
        .navbar-nav {
            flex-direction: row !important;
            justify-content: center !important;
            margin-right: 60px !important;
        }

        .navbar-nav .nav-item {
            margin: 0 10px !important;
        }

        .menu-site{
            padding: 10px 30px;
        }

        .container {
            width: 100%;
            border-radius: 10px;
            padding: 20px;
            background-color:rgb(70, 70, 70);
        }

        .item-menu.active {
            background-color: #b30000;
            box-shadow: 0 0 15px #ff0000aa;
            transform: scale(1.08);
        }

        .item-menu.active a {
            font-weight: bold;
            color: #fff;
        }


        @keyframes slideIn {
            from {
                transform: translateX(-30px);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        #navbarMenu.show .nav-item {
            animation: slideIn 0.5s ease forwards;

        }

        /* Aplica atraso sequencial em cada item para efeito em cascata */
        #navbarMenu.show .nav-item:nth-child(1) { animation-delay: 0s; }
        #navbarMenu.show .nav-item:nth-child(2) { animation-delay: 0.1s; }
        #navbarMenu.show .nav-item:nth-child(3) { animation-delay: 0.2s; }
        #navbarMenu.show .nav-item:nth-child(4) { animation-delay: 0.3s; }
        #navbarMenu.show .nav-item:nth-child(5) { animation-delay: 0.4s; }
        #navbarMenu.show .nav-item:nth-child(6) { animation-delay: 0.5s; }

        #loading-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.5s ease-in;
        }

        .loading-gif {
            width: 100px;
            height: 100px;
        }

    </style>
</head>

<body>
    <!-- Tela de loading -->
    <div id="loading-screen">
        <img src="img/Zumbi.gif" alt="Carregando..." class="loading-gif">
    </div>


    <div class="menu">
    <nav class="navbar navbar-dark menu-site d-flex align-items-center justify-content-between">
    <a class="navbar-brand text-light" href="#">🧟 Guia Zumbi</a>

    <div class="d-flex align-items-center">
        <div class="collapse navbar-collapse me-3" id="navbarMenu">
            <ul class="navbar-nav flex-row">
                <li class="nav-item item-menu">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item item-menu">
                    <a class="nav-link" href="abrigos.php">Abrigos seguros</a>
                </li>
                <li class="nav-item item-menu">
                    <a class="nav-link" href="armamento.php">Armas e defesa</a>
                </li>
                <li class="nav-item item-menu">
                    <a class="nav-link" href="equipe.php">Equipe</a>
                </li>
                <li class="nav-item item-menu">
                    <a class="nav-link" href="dicas_sobrevivencia.php">Dicas de fuga</a>
                </li>
                <li class="nav-item item-menu">
                    <a class="nav-link" href="contato.php">Contato</a>
                </li>
            </ul>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script>
    // Detecta página atual para marcar item do menu
    const path = window.location.pathname;
    const page = path.split("/").pop();

    document.querySelectorAll(".item-menu a").forEach(link => {
        const href = link.getAttribute("href");
        const li = link.closest(".item-menu");

        if ((page === "" && href === "index.php") || href === page) {
            li.classList.add("active");
        }
    });

    const startTime = Date.now();

    window.addEventListener('load', function () {
        const loader = document.getElementById('loading-screen');
        const elapsed = Date.now() - startTime;
        const delay = Math.max(0, 1000 - elapsed); // Garante 1s mínimo

        setTimeout(() => {
            loader.style.opacity = '0';
            setTimeout(() => {
                loader.style.display = 'none';
            }, 500); // tempo do fade-out
        }, delay);
    });
</script>

</html>
