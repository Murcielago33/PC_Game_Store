<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - PC Store</title>
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
        <h2>Catálogo de produtos</h2>
        <p class="content-lead">Encontre computadores, periféricos e componentes para montar ou atualizar seu espaço de trabalho, estudo e entretenimento. Use a busca para localizar rapidamente o que procura.</p>

        <h3>Computadores</h3>
        <div class="cards">
            <article class="product-card">
                <img src="img/produto2.png" alt="Notebook para estudos">
                <h4>Notebook para estudos</h4>
                <p>8 GB de memória e SSD de 256 GB.</p>
                <p class="price">R$ 2.500,00</p>
                <button class="add-cart" type="button" aria-label="Adicionar Notebook para estudos ao carrinho">+ 🛒</button>
                <a class="card-link" href="detalhes_produto.php" aria-label="Abrir detalhes do Notebook para estudos"></a>
            </article>
            <article class="product-card">
                <img src="img/produto1.png" alt="Computador de mesa">
                <h4>Computador de mesa</h4>
                <p>16 GB de memória e SSD de 512 GB.</p>
                <p class="price">R$ 3.200,00</p>
                <button class="add-cart" type="button" aria-label="Adicionar Computador de mesa ao carrinho">+ 🛒</button>
                <a class="card-link" href="detalhes_produto.php" aria-label="Abrir detalhes do Computador de mesa"></a>
            </article>
        </div>

        <br>
        <hr>
        <h3>Acessórios</h3>
        <div class="cards">
            <article class="product-card"><img src="img/produto3.png" alt="Teclado USB"><h4>Teclado USB</h4><p>Conforto e praticidade para digitar todos os dias.</p><p class="price">R$ 80,00</p><button class="add-cart" type="button" aria-label="Adicionar Teclado USB ao carrinho">+ 🛒</button><a class="card-link" href="detalhes_produto.php" aria-label="Abrir detalhes do Teclado USB"></a></article>
            <article class="product-card"><img src="img/produto4.png" alt="Mouse sem fio"><h4>Mouse sem fio</h4><p>Precisão e liberdade de movimento para sua rotina.</p><p class="price">R$ 60,00</p><button class="add-cart" type="button" aria-label="Adicionar Mouse sem fio ao carrinho">+ 🛒</button><a class="card-link" href="detalhes_produto.php" aria-label="Abrir detalhes do Mouse sem fio"></a></article>
            <article class="product-card"><img src="img/produto5.png" alt="Monitor de 24 polegadas"><h4>Monitor de 24 polegadas</h4><p>Mais espaço de visualização para suas tarefas.</p><p class="price">R$ 750,00</p><button class="add-cart" type="button" aria-label="Adicionar Monitor ao carrinho">+ 🛒</button><a class="card-link" href="detalhes_produto.php" aria-label="Abrir detalhes do Monitor de 24 polegadas"></a></article>
            <article class="product-card"><img src="img/produto6.png" alt="Fone de ouvido com microfone"><h4>Fone de ouvido</h4><p>Áudio claro e microfone integrado para chamadas.</p><p class="price">R$ 120,00</p><button class="add-cart" type="button" aria-label="Adicionar Fone de ouvido ao carrinho">+ 🛒</button><a class="card-link" href="detalhes_produto.php" aria-label="Abrir detalhes do Fone de ouvido"></a></article>
        </div>

        <br>
        <hr>
        <h3>Peças</h3>
        <div class="cards">
            <article class="product-card"><img src="img/produto7.png" alt="Memória RAM de 8 GB"><h4>Memória RAM de 8 GB</h4><p>Amplie a memória disponível para suas atividades.</p><p class="price">R$ 150,00</p><button class="add-cart" type="button" aria-label="Adicionar Memória RAM ao carrinho">+ 🛒</button><a class="card-link" href="detalhes_produto.php" aria-label="Abrir detalhes da Memória RAM de 8 GB"></a></article>
            <article class="product-card"><img src="img/produto8.png" alt="SSD de 480 GB"><h4>SSD de 480 GB</h4><p>Armazenamento ágil para arquivos e aplicativos.</p><p class="price">R$ 250,00</p><button class="add-cart" type="button" aria-label="Adicionar SSD ao carrinho">+ 🛒</button><a class="card-link" href="detalhes_produto.php" aria-label="Abrir detalhes do SSD de 480 GB"></a></article>
        </div>
        <p>Precisa de ajuda para escolher? <a href="contatos.php">Entre em contato com nossos especialistas</a>.</p>
    </main>

    <footer>
        <p>© <?= date("Y") ?> PC Store</p>
        <p> Todos os direitos reservados</p>
        <p><a href="contatos.php">Fale conosco</a></p>
    </footer>
</body>
</html>
