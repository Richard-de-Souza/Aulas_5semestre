<?php include('template_start.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Guia Zumbi - Blog Informativo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color:rgb(21, 90, 42);
            color: #f1f1f1;
            font-family: Arial, sans-serif;
        }

        .header {
            padding: 50px 0;
            text-align: center;
            background:rgb(42, 107, 34);
            box-shadow: 0 4px 10px rgba(0,0,0,0.6);
        }

        .header h1 {
            color:rgb(60, 255, 0);
            font-size: 3em;
        }

        .post-card {
            background-color: #1e1e1e;
            border: 1px solid #333;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 30px;
            transition: transform 0.2s ease;
        }

        .post-title {
            color:rgb(0, 255, 242);
        }

        .post-date {
            font-size: 0.9em;
            color: #aaa;
        }

        .post-content {
            color: #ddd;
        }

        /* animação de flip*/
        .flip-card {
            background-color: transparent;
            perspective: 1000px;
            margin-bottom: 30px;
        }

        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 300px;
            transition: transform 0.6s;
            transform-style: preserve-3d;
        }

        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }

        .flip-card-front, .flip-card-back {
            position: absolute;
            width: 100%;
            border-radius: 10px;
            backface-visibility: hidden;
            overflow: hidden;
        }

        .flip-card-front {
            background-color:rgb(16, 141, 4);
        }

        .flip-card-back {
            background-size: cover;
            background-position: center;
            background-color: rgba(255, 255, 255, 0.7);
            transform: rotateY(180deg);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card-text{
            color:rgb(0, 0, 0);
        }

    </style>
</head>
<body>
    <div class="header">
        <h1>🌄 Pacotes de Viagem</h1>
        <p>Escolha seu destino e prepare-se para a aventura!</p>
    </div>

    <div class="container my-5">
        <div class="row text-center">

            <!-- Pacote 1 -->
            <div class="col-md-4 mb-4">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <!-- Frente do card -->
                        <div class="flip-card-front text-light">
                            <img src="img/montanha.jpg" class="card-img-top" alt="Trilha nas montanhas">
                            <div class="card-body">
                                <h5 class="card-title">Trilha nas Montanhas</h5>
                            </div>
                        </div>

                        <!-- Verso do card -->
                        <div class="flip-card-back text-light d-flex flex-column align-items-center justify-content-center text-center p-3">
                            <p class="mb-3 card-text px-3 ">
                                Explore paisagens incríveis em uma aventura de altitude e contato puro com a natureza.
                            </p>
                            <a href="contato.php" class="btn btn-primary">Saiba Mais</a>
                        </div>

                    </div>
                </div>
            </div>


            <!-- Pacote 2 -->
             <div class="col-md-4 mb-4">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <!-- Frente do card -->
                        <div class="flip-card-front text-light">
                            <img src="img/cachoeira.jpg" class="card-img-top" alt="Refúgio na cachoeira">
                            <div class="card-body">
                                <h5 class="card-title">Refúgio na Cachoeira</h5>
                            </div>
                        </div>

                        <!-- Verso do card -->
                        <div class="flip-card-back text-light d-flex flex-column align-items-center justify-content-center text-center p-3">
                            <p class="px-3 mb-3 card-text">
                                Desconecte-se do mundo em meio ao som das águas e à energia renovadora das trilhas.
                            </p>
                            <a href="contato.php" class="btn btn-primary">Saiba Mais</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pacote 3 -->
            <div class="col-md-4 mb-4">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <!-- Frente do card -->
                        <div class="flip-card-front text-light">
                            <img src="img/selva.jpg" class="card-img-top" alt="Expedição na selva">
                            <div class="card-body">
                                <h5 class="card-title">Expedição na Selva</h5>
                            </div>
                        </div>
                        <!-- Verso do card -->
                        <div class="flip-card-back text-light d-flex flex-column align-items-center justify-content-center text-center p-3">
                            <p class="px-3 mb-3 card-text">Explore a selva e os animais selvagens em uma aventura inesquecivel.</p>
                            <a href="contato.php" class="btn btn-primary">Saiba Mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>


<?php include('template_end.php'); ?>