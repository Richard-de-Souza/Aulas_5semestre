<?php 
    include ('template_start.php'); 
?>




<style>
    body {
        background-color: #333;
    }
    .item-menu:hover {
        color: red;
        background-color: red;
        transform: scale(1.1);
        transition: 0.2s;
    }
    .menu {
        display: flex;
        justify-content: space-between;
        background-color: #333;
    }
    .item-menu {
        display: flex;
        justify-content: center;
        align-items: center;
        max-width: 300px;
        background-color: blue;
        height: 50px;
        padding: 10px;
    }
</style>

<html lang="pt-br">
    <head>

        <!-- Bootstrap CSS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <meta charset="UTF-8">
        <title>Home</title>
    </head>
    <body>
        <div class="menu">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="menu">
                            <div class="item-menu">
                                <a href="index.php">Home</a>
                            </div>
                            <div class="item-menu">
                                <a href="abrigos.php">Abrigos seguros</a>
                            </div>
                            <div class="item-menu">
                                <a href="armamento.php">Armas e defesa</a>
                            </div>
                            <div class="item-menu">
                                <a href="equipe.php">Equipe</a>
                            </div>
                            <div class="item-menu">
                                <a href="dicas.php">Dicas de fuga</a>
                            </div>
                            <div class="item-menu">
                                <a href="contato.php">Contato</a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        
    </body>
</html>

