<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Produto - LN Modas</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <main>
        <section class="product-detail">
            <?php
            // Array de produtos com categorias, imagens e informações
            $products = [
                ["nome" => "Camisa do Corinthians 2015", "preco" => "R$ 149,99", "imagem" => "camisa-corinthians-2015.jpg", "categoria" => "camisas"],
                ["nome" => "Camisa do Barcelona 2009 Messi", "preco" => "R$ 299,99", "imagem" => "camisa-barcelona-2009-messi.jpg", "categoria" => "camisas"],
                ["nome" => "Camisa Polo Lacoste Verde", "preco" => "R$ 189,99", "imagem" => "camisa-polo-lacoste-verde.jpg", "categoria" => "camisas"],
                ["nome" => "Camisa Corinthians 2024 Preta", "preco" => "R$ 159,99", "imagem" => "camisa-corinthians-2024-preta.jpg", "categoria" => "camisas"],
                ["nome" => "Boné Lacoste Branco", "preco" => "R$ 99,99", "imagem" => "bone-lacoste-branco.jpg", "categoria" => "bone"],
                ["nome" => "Boné Lacoste Preto", "preco" => "R$ 99,99", "imagem" => "bone-lacoste-preto.jpg", "categoria" => "bone"],
                ["nome" => "Boné Lacoste Vermelho", "preco" => "R$ 99,99", "imagem" => "bone-lacoste-vermelho.jpg", "categoria" => "bone"],
                ["nome" => "Calça Corinthians", "preco" => "R$ 249,99", "imagem" => "calca-corinthians.jpg", "categoria" => "calcas"],
                ["nome" => "Calça Nike", "preco" => "R$ 229,99", "imagem" => "calca-nike.jpg", "categoria" => "calcas"],
                ["nome" => "Short Nike", "preco" => "R$ 139,99", "imagem" => "short-nike.jpg", "categoria" => "shorts"],
                ["nome" => "Camisa do Flamengo 2024", "preco" => "R$ 179,99", "imagem" => "camisa-flamengo-2024.jpg", "categoria" => "camisas"],
                ["nome" => "Boné Adidas Preto", "preco" => "R$ 89,99", "imagem" => "bone-adidas-preto.jpg", "categoria" => "bone"],
                ["nome" => "Tênis Puma", "preco" => "R$ 299,99", "imagem" => "tenis-puma.jpg", "categoria" => "tenis"],
            ];

            // Recuperar o produto selecionado com base no ID (nome do produto)
            $selectedProduct = null;
            if (isset($_GET['id'])) {
                foreach ($products as $product) {
                    if ($product['nome'] == $_GET['id']) {
                        $selectedProduct = $product;
                        break;
                    }
                }
            }

            // Exibir detalhes do produto ou mensagem de não encontrado
            if ($selectedProduct) {
                echo "
                <div class='product-image'>
                    <img src='images/{$selectedProduct['imagem']}' alt='{$selectedProduct['nome']}'>
                </div>
                <div class='product-info'>
                    <h1>{$selectedProduct['nome']}</h1>
                    <p class='price'>{$selectedProduct['preco']}</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel pretium lorem. Phasellus condimentum dictum est, et gravida est ultricies et.</p>
                    <a href='checkout.php?product={$selectedProduct['nome']}' class='button'>Comprar</a>
                </div>";
            } else {
                echo "<p>Produto não encontrado.</p>";
            }
            ?>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
