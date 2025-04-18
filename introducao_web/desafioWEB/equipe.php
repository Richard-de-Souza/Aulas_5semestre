<?php include 'template_start.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Equipe Matadora de Zumbis</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #111;
      color: #f8f9fa;
      font-family: 'Segoe UI', sans-serif;
    }

    .team-member {
        background-color: #1e1e1e;
        border-radius: 15px;
        box-shadow: 0 0 20px rgba(255, 0, 0, 0.3);
        padding: 30px;
        width: 100%;
        max-width: 800px;
        margin: 0 auto;
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        text-align: center;
        }


    .team-member.fade-in {
      opacity: 1;
      transform: translateY(0);
    }

    .team-member img {
        width: 200px;
        height: 200px;
        object-fit: cover;
        border-radius: 10px;
        margin-bottom: 15px;
    }

    .team-title {
      color: #ff4e4e;
      font-size: 2.2rem;
      text-align: center;
      margin-top: 30px;
      margin-bottom: 50px;
    }

    .desc {
      font-size: 1rem;
      line-height: 1.6;
    }
  </style>
</head>
<body>

<div class="container py-5">
  <h1 class="team-title">Equipe Matadora de Zumbis</h1>
  <div class="row">
    <?php
    $equipe = [
      ["titulo" => "Líder", "img" => "img/lider.png", "desc" => "Estratégico, corajoso e sempre na linha de frente. Conduz a equipe com firmeza em meio ao caos."],
      ["titulo" => "Matador", "img" => "img/matador.png", "desc" => "Especialista em eliminar zumbis com precisão. Ninguém escapa de sua mira afiada."],
      ["titulo" => "Arquiteta", "img" => "img/apresentadora.png", "desc" => "Mestre em criar fortificações e armadilhas. Transforma qualquer abrigo em uma fortaleza."],
      ["titulo" => "Faxineira", "img" => "img/faxineira.png", "desc" => "Responsável por limpar tudo… inclusive os zumbis que sobrarem. Não deixa rastros."],
      ["titulo" => "Cozinheiro", "img" => "img/cozinheiro.png", "desc" => "Mantém todos de pé com suas refeições. Em tempos de apocalipse, sabor é sobrevivência."]
    ];

    foreach ($equipe as $membro) {
        echo '<div class="col-12 team-member-container mb-4">';
        echo '  <div class="team-member">';
        echo '    <div class="row align-items-center">';
        echo '      <div class="col-md-4 text-center">';
        echo "        <img src=\"{$membro['img']}\" alt=\"{$membro['titulo']}\" class=\"img-fluid team-img\">";
        echo '      </div>';
        echo '      <div class="col-md-8">';
        echo "        <h3>{$membro['titulo']}</h3>";
        echo "        <p class=\"desc\">{$membro['desc']}</p>";
        echo '      </div>';
        echo '    </div>';
        echo '  </div>';
        echo '</div>';
    }
        
    ?>
  </div>
</div>

<script>
  // Efeito de fade-in ao rolar a página
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('fade-in');
      }
    });
  }, { threshold: 0.2 });

  document.querySelectorAll('.team-member').forEach(el => observer.observe(el));
</script>

</body>
</html>
