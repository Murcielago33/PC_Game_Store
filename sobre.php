<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre - PC Store</title>
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
        <h2>Sobre a PC Store</h2>
        <p class="content-lead">A PC Store aproxima pessoas da tecnologia com um catálogo pensado para diferentes momentos e necessidades. Reunimos computadores, componentes e acessórios para apoiar projetos de estudo, trabalho e entretenimento.</p>
        <p>Queremos tornar a escolha mais clara: apresentamos informações objetivas sobre os produtos e mantemos canais de atendimento para ajudar você a comparar opções e encontrar uma solução adequada ao seu perfil.</p>

        <section class="content-section">
        <h3>Produtos e atendimento</h3>
        <ul>
            <li>Computadores e notebooks para diferentes rotinas.</li>
            <li>Componentes para atualizar e expandir seu equipamento.</li>
            <li>Periféricos e acessórios para um ambiente mais funcional.</li>
            <li>Orientação para comparar características e compatibilidade.</li>
        </ul>
        <p>Seja para montar um espaço de trabalho, atualizar seu computador ou escolher um acessório, nossa equipe está disponível para esclarecer dúvidas e orientar sua busca.</p>
        </section>
        
        <section class="faq" aria-labelledby="faq-title">
            <h3 id="faq-title">Perguntas frequentes</h3>
            <details>
                <summary>Quais produtos a PC Store oferece?</summary>
                <p>O catálogo reúne computadores, componentes e acessórios para estudo, trabalho e entretenimento.</p>
            </details>
            <details>
                <summary>Como posso tirar dúvidas sobre um produto?</summary>
                <p>Entre em contato com a equipe pela página Contatos para receber ajuda na escolha.</p>
            </details>
            <details>
                <summary>Quais formas de pagamento estão disponíveis?</summary>
                <p>O checkout permite selecionar débito, crédito ou Pix e solicita os dados correspondentes a cada opção.</p>
            </details>
        </section>
        <p class="text-center"><a class="button-link" href="produtos.php">Conhecer o catálogo</a></p>
    </main>

    <footer>
        <p>© <?= date("Y") ?> PC Store</p>
        <p> Todos os direitos reservados</p>
        <p><a href="contatos.php">Fale conosco</a></p>
    </footer>
</body>
</html>
