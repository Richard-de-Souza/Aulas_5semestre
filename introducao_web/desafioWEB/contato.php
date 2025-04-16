<?php include 'template_start.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Contato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        body {
            background-image: url('img/cidadeAbandonadaFundo.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: #f1f1f1;
        }

        .form-container {
            background-color: rgba(30, 30, 30, 0.9);
            padding: 30px;
            margin-top: 80px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(255, 0, 0, 0.4);
        }

        label {
            color: #ff4c4c;
        }

        .btn-primary {
            background-color: #ff3333;
            border: none;
        }

        .btn-primary:hover {
            background-color: #ff1a1a;
        }

        .container {
            background-color: rgba(0, 0, 0, 0.5);
        }
    </style>
</head>

<body>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6 form-container">
                <h2 class="text-center mb-4">Contato Zumbi</h2>
                <form action="contato.php" method="post" id="contatoForm">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="cpf" class="form-label">CPF:</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" required maxlength="14" placeholder="000.000.000-00">
                    </div>
                    <div class="mb-3">
                        <label for="cep" class="form-label">CEP:</label>
                        <input type="text" class="form-control" id="cep" name="cep" required maxlength="9" placeholder="00000-000">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Enviar</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Máscara CPF
        document.getElementById('cpf').addEventListener('input', function (e) {
            let v = e.target.value.replace(/\D/g, '');
            if (v.length > 11) v = v.slice(0, 11);
            v = v.replace(/(\d{3})(\d)/, '$1.$2');
            v = v.replace(/(\d{3})(\d)/, '$1.$2');
            v = v.replace(/(\d{3})(\d{1,2})$/, '$1-$2');
            e.target.value = v;
        });

        // Máscara CEP
        document.getElementById('cep').addEventListener('input', function (e) {
            let v = e.target.value.replace(/\D/g, '');
            if (v.length > 8) v = v.slice(0, 8);
            v = v.replace(/(\d{5})(\d)/, '$1-$2');
            e.target.value = v;
        });

        // Validação no envio
        document.getElementById('contatoForm').addEventListener('submit', function (e) {
            const cpf = document.getElementById('cpf').value.replace(/\D/g, '');
            const cep = document.getElementById('cep').value.replace(/\D/g, '');

            if (!validaCPF(cpf)) {
                e.preventDefault();
                Swal.fire({
                    icon: 'error',
                    title: 'CPF inválido!',
                    text: 'Por favor, insira um CPF válido.',
                    background: '#1e1e1e',
                    color: '#fff',
                    confirmButtonColor: '#ff3333'
                });
                return;
            }

            if (cep.length !== 8) {
                e.preventDefault();
                Swal.fire({
                    icon: 'error',
                    title: 'CEP inválido!',
                    text: 'O CEP deve conter 8 números.',
                    background: '#1e1e1e',
                    color: '#fff',
                    confirmButtonColor: '#ff3333'
                });
                return;
            }
        });

        function validaCPF(cpf) {
            if (cpf.length !== 11 || /^(\d)\1+$/.test(cpf)) return false;
            let soma = 0;
            for (let i = 0; i < 9; i++) soma += parseInt(cpf.charAt(i)) * (10 - i);
            let resto = (soma * 10) % 11;
            if (resto === 10 || resto === 11) resto = 0;
            if (resto !== parseInt(cpf.charAt(9))) return false;
            soma = 0;
            for (let i = 0; i < 10; i++) soma += parseInt(cpf.charAt(i)) * (11 - i);
            resto = (soma * 10) % 11;
            if (resto === 10 || resto === 11) resto = 0;
            return resto === parseInt(cpf.charAt(10));
        }
    </script>
</body>

</html>
