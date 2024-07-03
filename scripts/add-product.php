<?php
session_start();
if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    header('Location: ../login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productName = $_POST['product_name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $image = $_FILES['image'];

    // Conectar ao banco de dados (substitua os valores com os dados reais do banco de dados)
    $pdo = new PDO('mysql:host=localhost;dbname=ln_modas', 'root', '');

    // Adicionar produto ao banco de dados
    $stmt = $pdo->prepare('INSERT INTO products (name, category, price) VALUES (:name, :category, :price)');
    $stmt->execute([
        'name' => $productName,
        'category' => $category,
        'price' => $price
    ]);

    $productId = $pdo->lastInsertId();

    // Adicionar a imagem do produto
    if ($image['error'] === UPLOAD_ERR_OK) {
        $imagePath = '../images/' . basename($image['name']);
        move_uploaded_file($image['tmp_name'], $imagePath);
        
        $stmt = $pdo->prepare('UPDATE products SET image = :image WHERE id = :id');
        $stmt->execute([
            'image' => basename($image['name']),
            'id' => $productId
        ]);
    }

    header('Location: ../admin.php');
    exit;
}
?>
