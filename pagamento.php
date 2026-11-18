<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento - PC Store</title>
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
        <h2>Pagamento</h2>
        <p class="content-lead">Selecione uma forma de pagamento e informe os dados solicitados para concluir seu pedido com praticidade.</p>
        <form id="payment-form" action="" method="post">
            <h3>Forma de pagamento</h3>
            <fieldset class="payment-methods">
                <legend>Selecione uma opção</legend>
                <label><input type="radio" name="metodo" value="debito" required> Débito</label>
                <label><input type="radio" name="metodo" value="credito"> Crédito</label>
                <label><input type="radio" name="metodo" value="pix"> Pix</label>
            </fieldset>
            <fieldset class="payment-fields" id="card-details" hidden disabled>
                <legend>Dados do cartão</legend>
                <p>
                    <label for="card-holder">Nome impresso no cartão</label>
                    <input type="text" id="card-holder" name="titular_cartao" autocomplete="cc-name" required>
                </p>
                <p>
                    <label for="card-number">Número do cartão</label>
                    <input type="text" id="card-number" name="numero_cartao" inputmode="numeric" autocomplete="cc-number" pattern="[0-9 ]{13,19}" maxlength="19" placeholder="0000 0000 0000 0000" required>
                </p>
                <div class="payment-fields-row">
                    <p>
                        <label for="card-expiration">Validade</label>
                        <input type="text" id="card-expiration" name="validade_cartao" inputmode="numeric" autocomplete="cc-exp" pattern="[0-9]{2}/[0-9]{2}" placeholder="MM/AA" maxlength="5" required>
                    </p>
                    <p>
                        <label for="card-security-code">Código de segurança</label>
                        <input type="password" id="card-security-code" name="codigo_seguranca" inputmode="numeric" autocomplete="cc-csc" pattern="[0-9]{3,4}" maxlength="4" required>
                    </p>
                </div>
            </fieldset>
            <fieldset class="payment-fields" id="pix-details" hidden disabled>
                <legend>Dados do Pix</legend>
                <p>
                    <label for="pix-key">Chave Pix</label>
                    <input type="text" id="pix-key" name="chave_pix" autocomplete="off" required>
                </p>
            </fieldset>
            <button class="pay-button" type="button" id="review-payment">Revisar pagamento</button>
            <p class="form-status" id="payment-status" role="status" aria-live="polite"></p>
        </form>
    </main>

    <footer>
        <p>© <?= date("Y") ?> PC Store</p>
        <p>Todos os direitos reservados</p>
        <p><a href="contatos.php">Fale conosco</a></p>
    </footer>
</body>
</html>