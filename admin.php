<?php
session_start();
if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    header('Location: login.php');
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
<body>
    <header>
        <div class="container">
            <h1>Admin - LN Modas</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Voltar ao Site</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <main>
        <div class="container">
            <h2>Área Administrativa</h2>
            <button id="add-product-btn" class="btn">Adicionar Novo Produto</button>
        </div>
    </main>

    <script src="js/admin.js"></script>
</body>
</html>
