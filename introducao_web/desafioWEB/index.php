<?php
include('template_start.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Início | Mundo Zumbi</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            scroll-behavior: smooth;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: white;
        }
        .menu{
            margin-bottom:  0px !important;
        }
        .parallax {
            position: relative;
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .parallax-bg-1 {
            background-image: url('img/homeimg.png');
        }

        .parallax-bg-2 {
            background-image: url('img/equipe.png');
        }

        .content {
            background: rgba(0, 0, 0, 0.5);
            padding: 2rem;
            border-radius: 8px;
        }

        .btn {
            padding: 10px 20px;
            border: none;
            font-size: 1.1rem;
            border-radius: 5px;
            text-decoration: none;
        }

        .btn-danger {
            background-color: #dc3545;
            color: white;
        }

        .btn-outline-light {
            border: 1px solid white;
            color: white;
        }

        .section-content {
            background-color: #111;
            padding: 4rem 4rem;
        }

        .paragrafo {
            font-size: 1rem;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>

    <!-- Parallax Section 1 -->
    <section class="parallax parallax-bg-1">
        <div class="content text-center">
            <h1 class="display-4">Bem Vindo ao Guia do Zumbi</h1>
            <p class="lead">Seu portal de sobrevivência em tempo real.</p>
            <p class="lead">Sobreviva! Explore! Descubra o desconhecido!</p>
            <a href="#historia" class="btn btn-danger mt-3">Começar</a>
        </div>
    </section>  

    <!-- Conteúdo fixo -->
    <section id="historia" class="section-content">
        <div class="container text-center">
            <h2>Nossa Missão</h2>
            <p class="paragrafo">O Guia do Zumbi é um serviço essencial para quem luta pela sobrevivência em um mundo dominado pelo caos. Através de atualizações em tempo real, nosso sistema informa locais seguros, rotas de fuga, abrigos ainda ativos e zonas críticas sob ameaça de infestação.</p>
            <p class="paragrafo">Além disso, nosso sistema de alertas avançado identifica invasões zumbis em andamento e envia notificações instantâneas para que você e sua equipe possam agir rápido.</p>
            <br>
            <p>Guia do Zumbi — porque sobreviver não é questão de sorte. É questão de informação.</p>
            <a href="#next" class="btn btn-danger mt-3">Continuar</a>
        </div>
    </section>


    <!-- Parallax Section 2 -->
    <section id="next" class="section-content">
    <section class="parallax parallax-bg-2">
        <div class="content text-center">
            <h2>Você está pronto?</h2>
            <a href="contato.php" class="btn btn-outline-light">Junte-se a nós</a>
        </div>
    </section>

</body>
</html>
