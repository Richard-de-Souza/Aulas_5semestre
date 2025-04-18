<?php include('template_start.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Armas e Defesa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #111;
            color: #fff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .parallax {
            background-attachment: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .arma-info {
            background-color: rgba(0, 0, 0, 0.75);
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            max-width: 600px;
        }

        .arma-info h2 {
            color: #ff3333;
        }

        .arma-info p {
            color: #ccc;
        }

        section.texto {
            background-color: #1a1a1a;
            padding: 40px 0;
        }

        .texto .container p {
            color: #ddd;
            font-size: 1.1em;
        }
    </style>
</head>
<body>

    <!-- Arma 1 - Parallax -->
    <section class="parallax" style="background-image: url('img/armasCorpoaCorpo.png');">
        <div class="arma-info">
            <h2>Armas Corpo-a-Corpo</h2>
            <p>Machado, bastão, faca</p>
            <p>Silenciosas e eficazes em curtas distâncias</p>
        </div>
    </section>

    <section class="texto">
        <div class="container">
        <p>
           Armas corpo-a-corpo são essenciais quando o silêncio é vital. Você pode encontrá-las em oficinas, garagens, cabanas de madeira e até em supermercados — lugares que tenham ferramentas e utensílios de uso diário. Um machado de lenhador, um bastão de baseball ou uma faca de cozinha reforçada são letais em distâncias curtas. Mantenha o fio da lâmina sempre afiado e evite armas pesadas demais que possam cansar rápido. 
       </p>
        <p>
           Para improvisar, use um cabo de vassoura e fixe uma lâmina de faca com fita isolante e pregos. Um pedaço de cano de ferro também pode ser envolto com arame farpado ou cheio de pregos na ponta para causar maior dano. Essas soluções caseiras podem ser construídas em minutos e salvar sua vida quando tudo mais falhar.
       </p>

        </div>
    </section>

    <!-- Arma 2 - Parallax -->
    <section class="parallax" style="background-image: url('img/armasDeFogo.png');">
        <div class="arma-info">
            <h2>Armas de Fogo</h2>
            <p>Revólveres, espingardas, rifles</p>
            <p>Poderosas, mas chamativas</p>
        </div>
    </section>

    <section class="texto">
        <div class="container">
        <p>
            Armas de fogo são poderosas e eficientes para defesa à distância, mas o som dos disparos atrai zumbis de todos os lados. Você pode encontrá-las em casas de caçadores, delegacias, armazéns militares abandonados ou até veículos policiais. Tenha sempre um revólver leve e uma espingarda por perto, além de carregar munição extra de forma organizada.
        </p>
        <p>
            Nunca dispare por impulso. Mire com calma e escolha alvos importantes. Se tiver habilidades de manutenção, aprenda a desmontar e limpar sua arma para evitar falhas. Lembre-se: uma arma suja é uma arma inútil.
        </p>

        </div>
    </section>

    <!-- Arma 3 - Parallax -->
    <section class="parallax" style="background-image: url('img/armasImprovisadas.png');">
        <div class="arma-info">
            <h2>Armas Improvisadas</h2>
            <p>Martelo, taco de sinuca, caixa de ferramentas</p>
            <p>Úteis em momentos críticos</p>
        </div>
    </section>

    <section class="texto">
        <div class="container">
        <p>
            Quando estiver sem recursos, qualquer objeto pode virar arma. Martelos encontrados em caixas de ferramentas, tacos de sinuca de bares abandonados ou mesmo chaves de roda em oficinas são ótimos exemplos. O segredo está na criatividade e na força de vontade.
        </p>
        <p>
            Para criar sua própria arma improvisada, amarre pedras pesadas em um pano resistente e use como maça. Use cintos com fivelas grandes para chicotear zumbis ou prenda pregos em um pedaço de madeira. Ferramentas podem ser tão mortais quanto uma arma tradicional — só exigem prática e coragem.
        </p>

        </div>
    </section>

    <!-- Defesa - Parallax -->
    <section class="parallax" style="background-image: url('img/localSeguro.png');">
        <div class="arma-info">
            <h2>Estratégias de Defesa</h2>
            <p>Barreiras, armadilhas e organização</p>
            <p>Planejar é sobreviver</p>
        </div>
    </section>

    <section class="texto">
        <div class="container">
        <p>
            Defender seu abrigo é tão importante quanto estar armado. As melhores barricadas são feitas com móveis pesados (sofás, mesas de madeira, armários), fixados com tábuas e parafusos em portas e janelas. Use cordas ou cintas para travar estruturas. Para reforçar ainda mais, monte a barricada com ângulo de inclinação para resistir ao empurrão de múltiplos zumbis.
       </p>
        <p> 
            Para construir cercas, procure por arame farpado, grades, canos de metal ou até bambus grossos. Fixe-os no chão com cimento ou entulho. Você pode intercalar com garrafas de vidro presas com cola e fita para alertar com barulho quando forem tocadas. Posicione armadilhas ao redor da cerca — como tábuas com pregos voltados para cima ou latas com pedras que fazem barulho ao serem chutadas. Lembre-se: quanto mais camadas de defesa, mais chances você tem de sobreviver.
        </p>

        </div>
    </section>

</body>
</html>
