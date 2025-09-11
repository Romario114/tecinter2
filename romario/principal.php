<?php
session_start();

if (!isset($_SESSION['nome'])) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f7f7f7;
            padding: 0;
            margin: 0;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            max-width: 1000px;
            margin: 0 auto;
        }

        .header {
            background-color: #00bcd4;
            color: white;
            padding: 20px;
            text-align: center;
            width: 100%;
            margin-bottom: 20px;
        }

        .header h1 {
            font-size: 2rem;
        }

        .sidebar {
            width: 20%;
            background-color: #f4f4f4;
            padding: 20px;
            min-height: 400px;
            border-right: 2px solid #ccc;
        }

        .sidebar h3 {
            margin-bottom: 15px;
            font-size: 1.2rem;
            color: #333;
        }

        .sidebar ul {
            list-style-type: none;
            padding-left: 0;
        }

        .sidebar ul li {
            margin: 10px 0;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: #333;
            font-size: 1rem;
        }

        .sidebar ul li a:hover {
            color: #00bcd4;
        }

        .main-content {
            width: 80%;
            background-color: #ddd;
            padding: 20px;
            min-height: 400px;
        }

        .main-content h2 {
            font-size: 1.5rem;
            color: #333;
        }

        .main-content p {
            font-size: 1rem;
            color: #555;
            line-height: 1.6;
        }

        .btn-logout {
            background-color: #e74c3c;
            color: white;
            padding: 10px 20px;
            font-size: 1rem;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn-logout:hover {
            background-color: #c0392b;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                padding: 20px;
            }

            .sidebar {
                width: 100%;
                margin-bottom: 20px;
            }

            .main-content {
                width: 100%;
            }
        }
    </style>
    <script>
        // Função para redirecionar para a página de logout
        function logout() {
            // Aqui você pode redirecionar para a página de logout ou destruir a sessão, se necessário
            window.location.href = "logout.php"; // Altere para sua página de logout
        }
    </script>
</head>
<body>

    <!-- Container principal -->
    <div class="container">

        <!-- Cabeçalho -->
        <div class="header">
            <!-- Exibe o nome do usuário logado -->
            <h1>Olá, <?php echo htmlspecialchars($_SESSION['nome']); ?></h1>
        </div>

        <!-- Menu lateral -->
        <div class="sidebar">
            <h3>Menu</h3>
            <ul>
                <li><a href="#">Página Inicial</a></li>
                <li><a href="#">Configurações</a></li>
                <li><a href="#">Relatórios</a></li>
                <li><a href="#" onclick="logout()">Sair</a></li>
            </ul>
        </div>

        <!-- Conteúdo principal -->
        <div class="main-content">
            <h2>Conteúdo Principal</h2>
            <p>Bem-vindo à página principal do sistema. Aqui você pode acessar as funcionalidades principais do site, como relatórios, configurações e muito mais.</p>
            <!-- Botão de Sair -->
            <button class="btn-logout" onclick="logout()">Sair</button>
        </div>

    </div>

</body>
</html>
