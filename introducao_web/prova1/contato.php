<?php include('template_start.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Fale Conosco</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color:rgb(41, 129, 33); /* bege esverdeado */
            color: #2e3d2f;
            font-family: 'Segoe UI', sans-serif;
        }

        .contato-header {
            padding: 60px 0 30px 0;
            text-align: center;
            background-color:rgb(184, 214, 177); /* verde claro */
        }

        .contato-header h1 {
            color: #3a5a40; /* verde floresta */
            font-size: 2.5rem;
            font-weight: bold;
        }

        .contato-header p {
            color: #5c715e;
            font-size: 1rem;
        }

        .form-container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.08);
            max-width: 700px;
            margin: 40px auto;
            border: 1px solid #cce3c1;
        }

        .form-control {
            background-color: #f4f9f2;
            border-color: #b6d3ae;
            color: #2e3d2f;
        }

        .form-control:focus {
            border-color: #88b884;
            box-shadow: 0 0 0 0.2rem rgba(136, 184, 132, 0.25);
        }

        .form-control::placeholder {
            color: #9aab9a;
        }

        .btn-nature {
            background-color: #3a5a40;
            color: #fff;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-nature:hover {
            background-color: #2d4532;
        }

        footer {
            background-color: #d7e3d4;
            color: #3a5a40;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="contato-header">
        <h1>Fale Conosco</h1>
        <p>Envie sua dúvida, sugestão ou peça informações sobre trilhas e aventuras</p>
    </div>

    <div class="form-container">
        <form method="POST" action="#">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome completo</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Ex: Richard de Souza" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail para contato</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="voce@email.com" required>
            </div>
            <div class="mb-3">
                <label for="assunto" class="form-label">Assunto</label>
                <input type="text" class="form-control" id="assunto" name="assunto" placeholder="Assunto da mensagem" required>
            </div>
            <div class="mb-3">
                <label for="mensagem" class="form-label">Mensagem</label>
                <textarea class="form-control" id="mensagem" name="mensagem" rows="5" placeholder="Digite sua mensagem aqui..." required></textarea>
            </div>
            <button type="submit" class="btn btn-nature w-100">Enviar Mensagem</button>
        </form>
    </div>

<?php include('template_end.php'); ?>
