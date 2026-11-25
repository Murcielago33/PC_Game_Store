<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início - PC Store</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/site.js" defer></script>
</head>
<body>
    <header>
        <div class="header-main">
            <div class="brand">
                <img class="logo" src="img/logo.jpeg" alt="Logo da PC Store">
                <div class="brand-copy">
                    <h1>PC Store</h1>
                    <p>Sua loja de informática.</p>
                </div>
            </div>
            <form class="site-search" action="produtos.php" method="get">
                <label for="site-search">Buscar produtos</label>
                <input type="search" id="site-search" name="q" placeholder="Buscar produtos...">
                <button type="submit" aria-label="Buscar">🔍</button>
            </form>
            <div class="header-actions">
                <div class="account-links">
                    <a href="login.php">Login</a>
                    <a href="cadastro.php">Cadastro</a>
                </div>
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
        <h2>Tecnologia para acompanhar seus planos</h2>
        <p class="content-lead">Na PC Store, você encontra computadores, componentes e acessórios para estudar, trabalhar e aproveitar seus momentos de lazer. Explore o catálogo e encontre soluções para a sua rotina.</p>

        <div class="carousel" aria-label="Imagens da loja PC Store">
            <div class="carousel-images" aria-live="polite">
                <img class="slide is-active" src="img/loja1.png" alt="Interior da loja PC Store">
                <img class="slide" src="img/loja2.png" alt="Produtos da loja PC Store">
                <img class="slide" src="img/loja3.png" alt="Espaço de atendimento da PC Store">
                <img class="slide" src="img/loja4.png" alt="Ambiente da loja PC Store">
                <img class="slide" src="img/loja5.png" alt="Tecnologia disponível na PC Store">
            </div>
            <div class="carousel-controls" aria-label="Escolher imagem">
                <button type="button" data-slide-to="0" aria-label="Mostrar imagem 1"></button>
                <button type="button" data-slide-to="1" aria-label="Mostrar imagem 2"></button>
                <button type="button" data-slide-to="2" aria-label="Mostrar imagem 3"></button>
                <button type="button" data-slide-to="3" aria-label="Mostrar imagem 4"></button>
                <button type="button" data-slide-to="4" aria-label="Mostrar imagem 5"></button>
            </div>
        </div>

        <h3>Seleção em destaque</h3>
        <div class="cards">
            <article class="product-card">
                <img src="img/produto2.png" alt="Notebook LG Novo">
                <h4>Notebook LG Novo</h4>
                <p>Notebook prático para estudos e trabalho.</p>
                <p class="price">R$ 2.500,00</p>
                <button class="add-cart" type="button" aria-label="Adicionar Notebook LG Novo ao carrinho">+ 🛒</button>
                <a class="card-link" href="detalhes_produto.php" aria-label="Abrir detalhes do Notebook LG Novo"></a>
            </article>
            <article class="product-card">
                <img src="img/produto3.png" alt="Teclado USB">
                <h4>Teclado USB</h4>
                <p>Teclado confortável para o uso diário.</p>
                <p class="price">R$ 80,00</p>
                <button class="add-cart" type="button" aria-label="Adicionar Teclado USB ao carrinho">+ 🛒</button>
                <a class="card-link" href="detalhes_produto.php" aria-label="Abrir detalhes do Teclado USB"></a>
            </article>
            <article class="product-card">
                <img src="img/produto4.png" alt="Mouse sem fio">
                <h4>Mouse sem fio</h4>
                <p>Precisão e liberdade para sua rotina.</p>
                <p class="price">R$ 60,00</p>
                <button class="add-cart" type="button" aria-label="Adicionar Mouse sem fio ao carrinho">+ 🛒</button>
                <a class="card-link" href="detalhes_produto.php" aria-label="Abrir detalhes do Mouse sem fio"></a>
            </article>
        </div>
        
        <p class="text-center"><a class="button-link" href="produtos.php">Explorar catálogo completo</a></p>

        <section class="content-section">
            <h3>Uma escolha mais simples para sua rotina</h3>
            <p>A PC Store reúne produtos de informática para diferentes perfis e necessidades. Compare opções, confira os detalhes de cada item e conte com nossos canais de atendimento sempre que precisar de orientação.</p>
            <p>Nosso catálogo inclui equipamentos para produtividade, componentes para atualizações e acessórios que ajudam a compor um espaço de estudo ou trabalho mais confortável.</p>
            <p class="text-center"><a href="sobre.php">Conheça a PC Store</a></p>
        </section>
        <p class="text-center"><a class="button-link" href="contatos.php">Fale conosco</a></p>
    </main>

    <footer>
        <p>© <?= date("Y") ?> PC Store</p>
        <p> Todos os direitos reservados</p>
    </footer>
</body>
</html>
