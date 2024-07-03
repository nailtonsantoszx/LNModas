<?php
session_start();
if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    header('Location: ../login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productId = $_POST['product_id'];
    $image = $_FILES['image'];

    if ($image['error'] === UPLOAD_ERR_OK) {
        // Conectar ao banco de dados (substitua os valores com os dados reais do banco de dados)
        $pdo = new PDO('mysql:host=localhost;dbname=ln_modas', 'root', '');

        // Adicionar imagem ao produto
        $imagePath = '../images/' . basename($image['name']);
        move_uploaded_file($image['tmp_name'], $imagePath);
        
        $stmt = $pdo->prepare('UPDATE products SET image = :image WHERE id = :id');
        $stmt->execute([
            'image' => basename($image['name']),
            'id' => $productId
        ]);
        
        echo '<div class="container">
                <p>Imagem enviada com sucesso!</p>
                <a href="admin.php" class="btn">Voltar</a>
              </div>';
    } else {
        echo '<div class="container">
                <p>Erro ao enviar a imagem.</p>
                <a href="admin.php" class="btn">Voltar</a>
              </div>';
    }
}
?>
