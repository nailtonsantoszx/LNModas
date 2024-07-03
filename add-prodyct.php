<?php
session_start();
if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    header('Location: index.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lógica para adicionar produto (exemplo básico)
    $categoria = $_POST['categoria'];
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $imagem = $_POST['imagem']; // Em um cenário real, você deve processar o upload de arquivos

    // Aqui você pode adicionar o produto ao banco de dados
    // Por exemplo: insira no banco de dados, valide os dados, etc.
    
    header('Location: admin.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Produto - LN Modas</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="admin">
    <header>
        <div class="container">
            <h1>Adicionar Novo Produto</h1>
            <nav>
                <ul>
                    <li><a href="../admin.php">Voltar</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <main>
        <div class="container">
            <form action="add-product.php" method="POST">
                <label for="categoria">Categoria</label>
                <select name="categoria" id="categoria">
                    <option value="camisas">Camisas</option>
                    <option value="calcas">Calças</option>
                    <option value="shorts">Shorts</option>
                    <option value="tenis">Tênis</option>
                </select>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" required>
                <label for="preco">Preço</label>
                <input type="text" name="preco" id="preco" required>
                <label for="imagem">Imagem (URL)</label>
                <input type="text" name="imagem" id="imagem" required>
                <button type="submit">Adicionar Produto</button>
            </form>
        </div>
    </main>
</body>
</html>
