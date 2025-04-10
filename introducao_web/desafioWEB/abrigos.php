<?php include('template_start.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Abrigos Seguros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>

        .menu{
            position: fixed;
        }

        body {
            margin: 0;
            padding: 0;
            background-color: #111;
            color: #fff;
            font-family: sans-serif;
        }

        .parallax {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            min-height: 150vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .abrigo-info {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 40px;
            border-radius: 10px;
            text-align: center;
            max-width: 600px;
        }

        .abrigo-info h2 {
            color: #ff3333;
        }

        .abrigo-info p {
            color: #ccc;
        }
    </style>
</head>
<body>

    <!-- Abrigo 1 - Parallax -->
    <section class="parallax" style="background-image: url('img/abrigoMontanha.jpg');">
        <div class="abrigo-info">
            <h2>Abrigo Fortaleza Norte</h2>
            <p>Localização: Montanhas rochosas</p>
            <p>Status: Operacional</p>
        </div>
    </section>

    <!-- Abrigo 1 - Descrição -->
    <section class="bg-dark text-light py-4">
        <div class="container">
            <p>
                Este abrigo foi construído nas montanhas para aproveitar a elevação natural como proteção. Fortificado com paredes de concreto espesso e vigilância constante, é um dos locais mais seguros para pequenos grupos. Possui recursos limitados, mas constantes.
            </p>
        </div>
    </section>


    <!-- Abrigo 2 - Parallax -->
    <section class="parallax" style="background-image: url('img/abrigoSub.jpg');">
        <div class="abrigo-info">
            <h2>Abrigo Subterrâneo SP-07</h2>
            <p>Localização: Interior de São Paulo</p>
            <p>Status: Capacidade quase máxima</p>
        </div>
    </section>

    <!-- Abrigo 2 - Descrição -->
    <section class="bg-dark text-light py-4">
        <div class="container">
            <p>
                Antigo depósito de abastecimento convertido em bunker subterrâneo. Conta com energia solar, poço artesiano e sistemas de filtragem de ar. Ideal para resistir a longos cercos, mas com espaço limitado para novas entradas.
            </p>
        </div>
    </section>


    <!-- Abrigo 3 -->
    <section class="parallax" style="background-image: url('img/abrigoMilitar.jpg');">
        <div class="abrigo-info">
            <h2>Abrigo Militar Zona Alfa</h2>
            <p>Localização: Base abandonada</p>
            <p>Status: Protegido por milícia local</p>
        </div>
    </section>

    <!-- Abrigo 3 - Descrição -->
    <section class="bg-dark text-light py-4">
        <div class="container">
            <p>
                Este abrigo foi construído como um refugio militar para os militares da Zona Alfa. Possui recursos limitados, mas constantes.
            </p>
        </div>
    </section>

    <!-- Abrigo 4 -->
    <section class="parallax" style="background-image: url('img/abrigoOceanico.jpg');">
        <div class="abrigo-info">
            <h2>Abrigo Oceânico</h2>
            <p>Localização: Plataforma no mar</p>
            <p>Status: Isolado e seguro</p>
        </div>
    </section>

    <!-- Abrigo 4 - Descrição -->
    <section class="bg-dark text-light py-4">
        <div class="container">
            <p>
                Este abrigo foi construído como um refugio para animais marinhos. Possui recursos limitados, mas constantes.
            </p>
        </div>
    </section>

    <!-- Abrigo 5 -->
    <section class="parallax" style="background-image: url('img/abrigoEscola.png');">
        <div class="abrigo-info">
            <h2>Abrigo Escola Técnica</h2>
            <p>Localização: Região metropolitana</p>
            <p>Status: Em reconstrução</p>
        </div>
    </section>

    <!-- Abrigo 5 - Descrição -->
    <section class="bg-dark text-light py-4">
        <div class="container">
            <p>
                Este abrigo foi construído como um refugio para animais marinhos. Possui recursos limitados, mas constantes.
            </p>
        </div>
    </section>

</body>
</html>
