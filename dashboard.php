<?php
require_once __DIR__ . '/includes/auth.php';
$usuarioNome = $_SESSION['usuario_nome'] ?? null;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel - PC Store</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/site.js" defer></script>
</head>
<body>
    <header>
        <div class="header-main">
            <div class="brand">
                <img class="logo" src="img/logo.jpeg" alt="Logo da PC Store">
                <div class="brand-copy"><h1>PC Store</h1><p>Sua loja de informática.</p></div>
            </div>
            <form class="site-search" action="produtos.php" method="get">
                <label for="site-search">Buscar produtos</label>
                <input type="search" id="site-search" name="q" placeholder="Buscar produtos...">
                <button type="submit" aria-label="Buscar">🔍</button>
            </form>
            <div class="header-actions">
                <div class="account-links"><a href="login.php">Login</a><a href="cadastro.php">Cadastro</a></div>
                <a class="cart-button" href="dashboard.php#cart" aria-label="Abrir carrinho">🛒</a>
                <button class="theme-toggle" type="button" id="theme-toggle" aria-label="Ativar tema escuro" aria-pressed="false">🌙</button>
            </div>
        </div>
        <nav class="nav-bar">
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="produtos.php">Produtos</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="contatos.php">Contatos</a></li>
                <li><a href="dashboard.php">Painel</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2>Painel do cliente</h2>
        <?php if ($usuarioNome !== null): ?>
            <p>Bem-vindo, <?= pcstore_h($usuarioNome) ?>!</p>
        <?php else: ?>
            <p>Você pode consultar o catálogo e usar o carrinho sem entrar. Para acessar seu perfil, <a href="login.php">faça login</a>.</p>
        <?php endif; ?>

        <h3>O que você deseja fazer?</h3>
        <ul>
            <li><a class="button-link" href="produtos.php">Consultar produtos e preços</a></li>
            <li><a class="button-link" href="contatos.php">Falar com a equipe</a></li>
            <li><a class="button-link" href="index.php">Voltar ao início</a></li>
        </ul>

        <h3 id="cart">Meu carrinho</h3>
        <p id="cart-empty">Seu carrinho está vazio. <a href="produtos.php">Explorar produtos</a>.</p>
        <div class="cards order-list" id="cart-items"></div>
        <p id="cart-summary" class="price" hidden></p>
        <p><a class="buy-button" id="checkout-link" href="pagamento.php">Continuar para pagamento</a></p>
    </main>

    <footer>
        <p>© <?= date('Y') ?> PC Store</p>
        <p>Todos os direitos reservados</p>
        <p><a href="contatos.php">Fale conosco</a></p>
    </footer>
</body>
</html>
