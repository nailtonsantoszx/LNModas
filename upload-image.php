<?php
session_start();
if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    header('Location: index.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['imagem'])) {
    $target_dir = "../images/";
    $target_file = $target_dir . basename($_FILES["imagem"]["name"]);
    $uploadOk = 1;

    // Verifica se o arquivo é uma imagem
    $check = getimagesize($_FILES["imagem"]["tmp_name"]);
    if ($check === false) {
        echo "O arquivo não é uma imagem.";
        $uploadOk = 0;
    }

    // Verifica se o arquivo já existe
    if (file_exists($target_file)) {
        echo "Desculpe, o arquivo já existe.";
        $uploadOk = 0;
    }

    // Verifica o tamanho do arquivo
    if ($_FILES["imagem"]["size"] > 5000000) {
        echo "Desculpe, o arquivo é muito grande.";
        $uploadOk = 0;
    }

    // Verifica o formato do arquivo
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Desculpe, apenas arquivos JPG, JPEG, PNG & GIF são permitidos.";
        $uploadOk = 0;
    }

    if ($uploadOk === 0) {
        echo "Desculpe, seu arquivo não foi enviado.";
    } else {
        if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $target_file)) {
            echo "O arquivo " . htmlspecialchars(basename($_FILES["imagem"]["name"])) . " foi enviado com sucesso.";
        } else {
            echo "Desculpe, houve um erro ao enviar seu arquivo.";
        }
    }
}
?>
