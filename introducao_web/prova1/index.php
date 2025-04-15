<?php
include('template_start.php');
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Landing Page - Aventura e Natureza</title>

    <style>
        body {
            margin: 0;
            font-family: system-ui, sans-serif;
            background-image: url('img/imagemNatura.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: #fff;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .banner {
            position: relative;
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .banner-texto {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 40px;
            border-radius: 10px;
        }

        .banner-texto h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .banner-texto p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .cta-button {
            background-color: #28a745;
            color: white;
            padding: 15px 30px;
            font-size: 1.1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .cta-button:hover {
            background-color: #218838;
        }

        .beneficios, .formulario {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 60px 20px;
            text-align: center;
        }

        .beneficios h2, .formulario h2 {
            font-size: 2rem;
            margin-bottom: 30px;
        }

        .beneficios ul {
            list-style: none;
            padding: 0;
            font-size: 1.1rem;
        }

        .beneficios li {
            margin-bottom: 15px;
        }

        .formulario form {
            max-width: 500px;
            margin: 0 auto;
            text-align: left;
        }

        .formulario label {
            display: block;
            margin-bottom: 5px;
        }

        .formulario input, .formulario textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: none;
        }

        .formulario button {
            background-color: #007bff;
            color: white;
            padding: 10px 25px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
        }

        .formulario button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="banner">
        <div class="banner-texto">
            <h1>Aventura e Natureza Esperam por Você!</h1>
            <p>Descubra experiências incríveis ao ar livre. Conecte-se com a natureza e viva momentos inesquecíveis.</p>
            <a href="#formulario"><button class="cta-button">Quero Saber Mais</button></a>
        </div>
    </div>

    <div class="beneficios container">
        <h2>Por que escolher nossa aventura?</h2>
        <ul>
            <li>🌲 Trilhas exclusivas em meio à natureza</li>
            <li>🏞️ Cenários paradisíacos para fotos incríveis</li>
            <li>🧘 Atividades de relaxamento e conexão</li>
            <li>🔥 Experiência segura e acompanhada por guias</li>
        </ul>
    </div>

    <div id="formulario" class="formulario container">
        <h2>Fale com a gente</h2>
        <form action="processa_formulario.php" method="post">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" required>

            <label for="mensagem">Mensagem</label>
            <textarea id="mensagem" name="mensagem" rows="4"></textarea>

            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>

<?php
include('template_end.php');
?>