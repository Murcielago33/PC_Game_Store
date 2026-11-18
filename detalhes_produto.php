<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do produto - PC Store</title>
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
        <h2>Detalhes do produto</h2>
        <section class="product-detail">
            <img src="img/backgrond_car.jpeg" alt="Notebook para estudos">
            <div>
                <h3>Notebook para estudos</h3>
                <p>Uma opção prática para acompanhar sua rotina de estudos, trabalho e entretenimento. Consulte as especificações e escolha os acessórios mais adequados para o seu dia a dia.</p>
                <ul>
                    <li>Memória de 8 GB para tarefas diárias.</li>
                    <li>Armazenamento SSD de 256 GB.</li>
                    <li>Indicado para estudos, trabalho e navegação.</li>
                </ul>
                <p class="price">R$ 2.500,00</p>
                <a class="button-link buy-button" href="pagamento.php">Ir para pagamento</a>
            </div>
        </section>
        <p class="content-lead">Precisa de ajuda para escolher? Nossa equipe pode orientar você sobre compatibilidade, acessórios e opções para seu perfil.</p>
        <p class="text-center">Dúvidas? <a href="contatos.php">Entre em contato com nossa equipe</a>.</p>
    </main>

    <footer>
        <p>© <?= date("Y") ?> PC Store</p>
        <p>Todos os direitos reservados</p>
        <p><a href="contatos.php">Fale conosco</a></p>
    </footer>
</body>
</html>