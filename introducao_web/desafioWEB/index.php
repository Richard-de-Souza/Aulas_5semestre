<?php include('template_start.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Guia Zumbi - Blog Informativo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #121212;
            color: #f1f1f1;
            font-family: Arial, sans-serif;
        }

        .header {
            padding: 50px 0;
            text-align: center;
            background: #1a1a1a;
            box-shadow: 0 4px 10px rgba(0,0,0,0.6);
        }

        .header h1 {
            color: #ff3333;
            font-size: 3em;
        }

        .post-card {
            background-color: #1e1e1e;
            border: 1px solid #333;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 30px;
            box-shadow: 0 0 10px rgba(255, 0, 0, 0.2);
            transition: transform 0.2s ease;
        }

        .post-card:hover {
            transform: scale(1.02);
            box-shadow: 0 0 20px rgba(255, 0, 0, 0.3);
        }

        .post-title {
            color: #ff4c4c;
        }

        .post-date {
            font-size: 0.9em;
            color: #aaa;
        }

        .post-content {
            color: #ddd;
        }

        a.read-more {
            color: #ff6666;
            text-decoration: none;
        }

        a.read-more:hover {
            text-decoration: underline;
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
            height: 100%;
            border-radius: 10px;
            backface-visibility: hidden;
            overflow: hidden;
        }

        .flip-card-front {
            background-color: #1e1e1e;
            padding: 20px;
            box-shadow: 0 0 10px rgba(255, 0, 0, 0.2);
        }

        .flip-card-back {
            background-size: cover;
            background-position: center;
            transform: rotateY(180deg);
            box-shadow: 0 0 15px rgba(255, 0, 0, 0.4);
        }

    </style>
</head>
<body>

    <div class="header">
        <h1>📖 Relatos e Dicas de Sobrevivência</h1>
        <p>Informações essenciais direto do front do apocalipse.</p>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row">

            <!-- Post 1 -->
            <div class="col-md-6">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <!-- Frente do card -->
                        <div class="flip-card-front">
                            <h3 class="post-title">Como Montar um Kit de Sobrevivência Básico</h3>
                            <p class="post-date">Publicado em 8 de Abril de 2025</p>
                            <p class="post-content">
                                Ter os itens certos pode salvar sua vida. Neste post listamos o que não pode faltar no seu kit: água potável, lanternas, rádio de emergência e muito mais...
                            </p>
                            <a href="#" class="read-more">Ler mais →</a>
                        </div>

                        <!-- Verso do card -->
                        <div class="flip-card-back" style="background-image: url('img/kit.png'); padding: 20px">
                            <p class="post-content" style="background-color:rgba(0, 0, 0, 0.5); padding: 20px; border-radius: 10px">
                                Um kit de sobrevivência básico pode salvar sua vida — literalmente. Em um mundo onde o inesperado se tornou rotina, cada item carrega um peso vital. 
                                A água potável, por exemplo, não é apenas essencial para a hidratação: ela é crucial para a sanidade, para cozinhar, para esterilizar, para sobreviver. 
                                Ter um recipiente adequado e um método confiável de purificação pode significar a diferença entre a vida e uma infecção fatal.
                            </p>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Post 2 -->
            <div class="col-md-6">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <!-- Frente do card -->
                        <div class="flip-card-front">
                            <h3 class="post-title">Melhores Locais para se Esconder na Cidade</h3>
                            <p class="post-date">Publicado em 5 de Abril de 2025</p>
                            <p class="post-content">
                                A cidade pode ser uma armadilha mortal ou uma fortaleza. Descubra quais prédios têm melhor estrutura para resistir a ataques e como fortificá-los.
                            </p>
                            <a href="#" class="read-more">Ler mais →</a>
                        </div>

                        <!-- Verso do card -->
                        <div class="flip-card-back" style="background-image: url('img/cidade.jpg');">
                            <!-- imagem de fundo, nada mais necesario -->
                        </div>
                    </div>
                </div>
            </div>


            <!-- Post 3 -->
            <div class="col-md-6">
                <div class="post-card">
                    <h3 class="post-title">Alimentos que Duram Mais no Apocalipse</h3>
                    <p class="post-date">Publicado em 2 de Abril de 2025</p>
                    <p class="post-content">
                        Saiba quais alimentos não perecíveis você deve estocar — e quais podem ser improvisados com ingredientes encontrados no mundo pós-colapso.
                    </p>
                    <a href="#" class="read-more">Ler mais →</a>
                </div>
            </div>

            <!-- Post 4 -->
            <div class="col-md-6">
                <div class="post-card">
                    <h3 class="post-title">Como Lidar com Grupos Hostis</h3>
                    <p class="post-date">Publicado em 30 de Março de 2025</p>
                    <p class="post-content">
                        Nem todo inimigo anda devagar e geme. Grupos hostis podem ser mais perigosos que zumbis. Veja estratégias para negociação, fuga ou confronto direto.
                    </p>
                    <a href="#" class="read-more">Ler mais →</a>
                </div>
            </div>

        </div>
    </div>

</body>
</html>
