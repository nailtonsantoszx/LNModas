<?php
session_start();
if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - LN Modas</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="admin">
    <header>
        <div class="container">
            <h1>Admin - LN Modas</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Voltar ao Site</a></li>
                    <li><a href="logout.php">Sair</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <main>
        <div class="container">
            <h2>Administração</h2>
            <div class="add-product">
                <button class="btn">Adicionar Novo Produto</button>
            </div>
            <div class="product-list">
                <!-- A lista de produtos será exibida aqui -->
            </div>
        </div>
    </main>

    <script src="js/admin.js"></script>
</body>
</html>
