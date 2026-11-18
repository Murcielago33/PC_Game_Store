<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatos - PC Store</title>
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
        <h2>Fale com a PC Store</h2>
        <p class="content-lead">Nossa equipe está disponível para esclarecer dúvidas sobre produtos, compatibilidade e atendimento. Escolha o canal mais conveniente para falar conosco.</p>

        <h3>Canais de atendimento</h3>
        <ul>
            <li>E-mail: <a href="mailto:pcstore@email.com">pcstore@email.com</a></li>
            <li>Telefone: <a href="tel:+552440028922">(24) 4002-8922</a></li>
            <li>Endereço: Rua de Lojão, 123 — Centro, Camibeperibe.</li>
        </ul>

        <h3>Horário de atendimento</h3>
        <p>De segunda a sexta-feira, das 8h às 18h. Para agilizar o atendimento, informe o produto ou assunto da sua dúvida.</p>
        <p class="text-center"><a class="button-link" href="produtos.php">Voltar ao catálogo</a></p>
    </main>

    <footer>
        <p>© <?= date("Y") ?> PC Store</p>
        <p> Todos os direitos reservados</p>
        <p><a href="contatos.php">Fale conosco</a></p>
    </footer>
</body>
</html>