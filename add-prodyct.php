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
    <title>Adicionar Produto</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h2>Adicionar Novo Produto</h2>
        <form action="scripts/add-product.php" method="post" enctype="multipart/form-data">
            <label for="product-name">Nome do Produto:</label>
            <input type="text" id="product-name" name="product_name" required>
            <label for="product-category">Categoria:</label>
            <select id="product-category" name="category" required>
                <option value="camisas">Camisas</option>
                <option value="calcas">Calças</option>
                <option value="shorts">Shorts</option>
                <option value="tenis">Tênis</option>
            </select>
            <label for="product-price">Preço:</label>
            <input type="text" id="product-price" name="price" required>
            <label for="product-image">Imagem do Produto:</label>
            <input type="file" id="product-image" name="image" accept="image/*" required>
            <button type="submit" class="btn">Adicionar Produto</button>
        </form>
    </div>
</body>
</html>
