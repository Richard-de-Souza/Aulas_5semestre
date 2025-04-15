<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Explore a natureza</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <!-- Estilo personalizado -->
    <link href="css/estilo.css" rel="stylesheet">
</head>

<body>
    <div class="menu">
        <nav class="navbar navbar-dark menu-site d-flex align-items-center justify-content-between">
            <img class="logo" src="img/logo.png" alt="">
            
            <div class="d-flex align-items-center">
                <div class="collapse navbar-collapse me-3" id="navbarMenu">
                    <ul class="navbar-nav flex-row">
                        <li class="nav-item item-menu">
                            <a class="nav-link" href="index.php">Início</a>
                        </li>
                        <li class="nav-item item-menu">
                            <a class="nav-link" href="pacotes.php">Pacote</a>
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
    <div style="height: 180px"></div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script>
    // Pega o caminho da URL
    const path = window.location.pathname;
    
    // Extrai o nome do arquivo atual (ex: "index.php")
    const page = path.split("/").pop();

    // Seleciona todos os links do menu
    document.querySelectorAll(".item-menu a").forEach(link => {
        const href = link.getAttribute("href");

        // Se o link termina com o nome da página atual
        if (page === "" && href === "index.php") {
            // Caso especial: URL termina com uma barra (ex: "/prova1/")
            link.parentElement.classList.add("active");
        } else if (href === page) {
            link.parentElement.classList.add("active");
        }
    });
</script>


</html>
