<?php
session_start();
$loggedIn = isset($_SESSION['admin']) && $_SESSION['admin'] === true;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LN Modas - Venda de Roupas</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Cabeçalho -->
    <header>
        <div class="container">
            <h1>LN Modas</h1>
            <nav>
                <ul>
                    <li><a href="#">Início</a></li>
                    <li><a href="#">Produtos</a></li>
                    <li><a href="#">Sobre Nós</a></li>
                    <li><a href="#">Contato</a></li>
                    <?php if ($loggedIn): ?>
                        <li><a href="admin.php">Admin</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    <?php else: ?>
                        <li><a href="login.php">Login</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </header>
    
    <!-- Seção Principal -->
    <main>
        <!-- Filtros de Categoria -->
        <div class="filters">
            <button class="filter-btn" data-filter="all">Todos</button>
            <button class="filter-btn" data-filter="camisas">Camisas</button>
            <button class="filter-btn" data-filter="calcas">Calças</button>
            <button class="filter-btn" data-filter="shorts">Shorts</button>
            <button class="filter-btn" data-filter="tenis">Tênis</button>
        </div>

        <!-- Seção Produtos -->
        <section class="products">
            <div class="container">
                <h2>Nossos Produtos</h2>

                <!-- Categoria Camisas -->
                <div id="category-camisas" class="product-category camisas">
                    <h3>Camisas</h3>
                    <div class="product-item" data-product-id="1" data-category="camisas">
                        <img src="images/produto1.jpg" alt="Camisa Polo">
                        <h2>Camisa Polo</h2>
                        <span>R$ 119,90</span>
                        <button class="btn">Comprar</button>
                        <?php if ($loggedIn): ?>
                            <button class="btn add-image-btn" data-product-id="1">Adicionar Imagem</button>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Categoria Calças -->
                <div id="category-calcas" class="product-category calcas">
                    <h3>Calças</h3>
                    <div class="product-item" data-product-id="2" data-category="calcas">
                        <img src="images/produto2.jpg" alt="Calça Jeans">
                        <h2>Calça Jeans</h2>
                        <span>R$ 149,90</span>
                        <button class="btn">Comprar</button>
                        <?php if ($loggedIn): ?>
                            <button class="btn add-image-btn" data-product-id="2">Adicionar Imagem</button>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Categoria Shorts -->
                <div id="category-shorts" class="product-category shorts">
                    <h3>Shorts</h3>
                    <div class="product-item" data-product-id="3" data-category="shorts">
                        <img src="images/produto3.jpg" alt="Shorts Casual">
                        <h2>Shorts Casual</h2>
                        <span>R$ 89,90</span>
                        <button class="btn">Comprar</button>
                        <?php if ($loggedIn): ?>
                            <button class="btn add-image-btn" data-product-id="3">Adicionar Imagem</button>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Categoria Tênis -->
                <div id="category-tenis" class="product-category tenis">
                    <h3>Tênis</h3>
                    <div class="product-item" data-product-id="4" data-category="tenis">
                        <img src="images/produto4.jpg" alt="Tênis Esportivo">
                        <h2>Nome do Tênis</h2>
                        <span>R$ 199,90</span>
                        <button class="btn">Comprar</button>
                        <?php if ($loggedIn): ?>
                            <button class="btn add-image-btn" data-product-id="4">Adicionar Imagem</button>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Rodapé -->
    <footer>
        <div class="container">
            <ul>
                <li><a href="#">Política de Privacidade</a></li>
                <li><a href="#">Termos de Serviço</a></li>
            </ul>
        </div>
    </footer>

    <script src="js/main.js"></script>
    <?php if ($loggedIn): ?>
        <script src="js/admin.js"></script>
    <?php endif; ?>
</body>
</html>
