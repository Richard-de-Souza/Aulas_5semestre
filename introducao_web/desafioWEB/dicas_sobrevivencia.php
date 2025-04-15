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
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .modal-backdrop.show {
            background-color: rgba(0, 0, 0, 0.85);
        }


    </style>
</head>
<body>

    <!-- modais -->
    <div class="modal fade" id="kitModal" tabindex="-1" aria-labelledby="kitModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="background-color: #1e1e1e; color: #f1f1f1; border: 1px solid #333; box-shadow: 0 0 20px rgba(255, 0, 0, 0.4); border-radius: 10px;">
            
            <div class="modal-header" style="border-bottom: 1px solid #444;">
                <h5 class="modal-title" id="kitModalLabel" style="color: #ff4c4c;">Kit de Sobrevivência Básico</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body text-center">
                <img src="img/kit.png" alt="Kit de Sobrevivência Básico" class="img-fluid" style="max-width: 100%; height: auto; border-radius: 8px;">
                <p class="mt-3">Kit de Sobrevivência Básico</p>
                <p>Um kit de sobrevivência básico contendo tudo o que um sobrevivente precisa para sobreviver na cidade abandonada.</p>
                <!-- faça um texto enormego aqui -->
                <p class="mt-3">Preco: R$ 1.999,99</p>
                <a href="https://www.paypal.com/paypalme/ricardesouza" class="btn btn-danger" style="border-radius: 5px;">Comprar Agora</a>
            </div>
            
            <div class="modal-footer" style="border-top: 1px solid #444;">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal" style="border-radius: 5px;">Fechar</button>
            </div>
            </div>
        </div>
    </div>

    <!-- modal cidade -->
    <div class="modal fade" id="cidadeModal" tabindex="-1" aria-labelledby="cidadeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="background-color: #1e1e1e; color: #f1f1f1; border: 1px solid #333; box-shadow: 0 0 20px rgba(255, 0, 0, 0.4); border-radius: 10px;">
            
            <div class="modal-header" style="border-bottom: 1px solid #444;">
                <h5 class="modal-title" id="cidadeModalLabel" style="color: #ff4c4c;">Cidade Abandonada</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body text-center">
                <img src="img/cidadeAbandonada.png" alt="Cidade Abandonada" class="img-fluid" style="max-width: 100%; height: auto; border-radius: 8px;">
                <p class="mt-3">Cidade Abandonada</p>
                <p>A cidade pode ser uma armadilha mortal ou uma fortaleza. Descubra quais prédios têm melhor estrutura para resistir a ataques e como fortificá-los.</p>
                <!-- faça um texto enormego aqui -->
                <p class="mt-3">Preco: R$ 1.999,99</p>
                <a href="https://www.paypal.com/paypalme/ricardesouza" class="btn btn-danger" style="border-radius: 5px;">Comprar Agora</a>
            </div>
            
            <div class="modal-footer" style="border-top: 1px solid #444;">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal" style="border-radius: 5px;">Fechar</button>
            </div>
            </div>
        </div>
    </div>

    <!-- modais -->

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
                            <p class="post-content">
                                Um bom kit de sobrevivência básico pode salvar sua vida — literalmente. Em um mundo onde o inesperado se tornou rotina, cada item carrega um peso vital. 
                            </p>
                        </div>

                        <!-- Verso do card -->
                        <div class="flip-card-back" style="background-image: url('img/kit.png'); padding: 20px">
                            <button type="button"  class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#kitModal">Ler mais</button>                                
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
                            <p class="post-content">
                                Bem, se vocês não tem um plano para se esconder, temos uma dica: se vocês estiverem em uma cidade abandonada, a melhor coisa para se esconder eh se esconder em uma torre.
                            </p>
                        </div>

                        <!-- Verso do card -->
                        <div class="flip-card-back" style="background-image: url('img/cidadeAbandonada.png'); padding: 20px; background-size: cover; text-align: center;);">
                            <!-- imagem de fundo, nada mais necesario -->
                            <button type="button"  class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#cidadeModal">Ler mais</button>
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
