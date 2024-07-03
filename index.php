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
                <div id="category-camisas" class="product-category">
                    <h3>Camisas</h3>
                    <div class="product-item" data-product-id="1">
                        <img src="images/produto1.jpg" alt="Camisa Polo">
                        <h2>Camisa Polo</h2>
                        <span>R$ 119,90</span>
                        <button class="btn">Comprar</button>
                        <?php if ($loggedIn): ?>
                            <button class="btn add-image-btn" data-product-id="1">+</button>
                        <?php endif; ?>
                    </div>
                    <!-- Adicione mais produtos de Camisa aqui -->
                </div>

                <!-- Categoria Calças -->
                <div id="category-calcas" class="product-category">
                    <h3>Calças</h3>
                    <div class="product-item" data-product-id="2">
                        <img src="images/produto2.jpg" alt="Calça Jeans">
                        <h2>Calça Jeans</h2>
                        <span>R$ 149,90</span>
                        <button class="btn">Comprar</button>
                        <?php if ($loggedIn): ?>
                            <button class="btn add-image-btn" data-product-id="2">+</button>
                        <?php endif; ?>
                    </div>
                    <!-- Adicione mais produtos de Calça aqui -->
                </div>

                <!-- Categoria Shorts -->
                <div id="category-shorts" class="product-category">
                    <h3>Shorts</h3>
                    <div class="product-item" data-product-id="3">
                        <img src="images/produto3.jpg" alt="Shorts Casual">
                        <h2>Shorts Casual</h2>
                        <span>R$ 89,90</span>
                        <button class="btn">Comprar</button>
                        <?php if ($loggedIn): ?>
                            <button class="btn add-image-btn" data-product-id="3">+</button>
                        <?php endif; ?>
                    </div>
                    <!-- Adicione mais produtos de Shorts aqui -->
                </div>

                <!-- Categoria Tênis -->
                <div id="category-tenis" class="product-category">
                    <h3>Tênis</h3>
                    <div class="product-item" data-product-id="4">
                        <img src="images/produto4.jpg" alt="Tênis Esportivo">
                        <h2>Tênis Esportivo</h2>
                        <span>R$ 179,90</span>
                        <button class="btn">Comprar</button>
                        <?php if ($loggedIn): ?>
                            <button class="btn add-image-btn" data-product-id="4">+</button>
                        <?php endif; ?>
                    </div>
                    <!-- Adicione mais produtos de Tênis aqui -->
                </div>
            </div>
        </section>

        <?php if ($loggedIn): ?>
            <!-- Botão Adicionar Produto -->
            <div class="add-product">
                <button id="add-product-btn" class="btn">Adicionar Produto</button>
            </div>
        <?php endif; ?>
    </main>

    <!-- Rodapé -->
    <footer>
        <div class="container">
            <p>&copy; 2024 LN Modas. Todos os direitos reservados.</p>
            <ul>
                <li><a href="#">Política de Privacidade</a></li>
                <li><a href="#">Termos de Serviço</a></li>
                <li><a href="#">FAQ</a></li>
            </ul>
        </div>
    </footer>

    <script src="js/main.js"></script>
    <?php if ($loggedIn): ?>
        <script src="js/admin.js"></script>
    <?php endif; ?>
</body>
</html>
