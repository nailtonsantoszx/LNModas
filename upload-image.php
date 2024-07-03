<?php
session_start();
if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    header('Location: login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productId = $_POST['productId'];
    ?>
    <!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Upload de Imagem</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="container">
            <h2>Adicionar Imagem ao Produto</h2>
            <form action="scripts/upload-image.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($productId); ?>">
                <label for="image">Imagem do Produto:</label>
                <input type="file" id="image" name="image" accept="image/*" required>
                <button type="submit" class="btn">Enviar Imagem</button>
            </form>
        </div>
    </body>
    </html>
    <?php
}
?>
