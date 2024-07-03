<?php
session_start();
if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    header('Location: index.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'];
    
    if ($action === 'add-image') {
        // Lógica para adicionar imagem (exemplo básico)
        $productId = $_POST['product_id'];
        $imagePath = $_POST['image_path']; // Em um cenário real, você deve processar o upload de arquivos

        // Aqui você pode adicionar a imagem ao banco de dados ou atualizar o produto
        // Por exemplo: insira no banco de dados, valide os dados, etc.
        
        header('Location: admin.php');
        exit;
    }
}
?>
