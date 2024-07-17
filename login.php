<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar - LN Modas</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <div class="hero">
        <div class="hero-text">
            <h2>Entre na sua conta</h2>
        </div>
    </div>

    <form action="process_login.php" method="POST">
        <h2>Entrar</h2>
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" required>
        
        <label for="password">Senha</label>
        <input type="password" id="password" name="password" required>
        
        <button type="submit">Entrar</button>

        <?php if (isset($_GET['error'])): ?>
            <div class="message error">E-mail ou senha incorretos</div>
        <?php endif; ?>
    </form>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
