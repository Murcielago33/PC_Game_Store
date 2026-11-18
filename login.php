<?php
require_once __DIR__ . '/includes/auth.php';

$mensagem = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!pcstore_valid_csrf($_POST['csrf_token'] ?? null)) {
        $mensagem = 'Sua sessão expirou. Atualize a página e tente novamente.';
    } else {
        $email = strtolower(trim((string) ($_POST['email'] ?? '')));
        $senha = (string) ($_POST['senha'] ?? '');

        if (!filter_var($email, FILTER_VALIDATE_EMAIL) || $senha === '') {
            $mensagem = 'Informe um e-mail válido e sua senha.';
        } else {
            try {
                require_once __DIR__ . '/database/conexao.php';
                $pdo = pcstore_db();
                $consulta = $pdo->prepare(
                    'SELECT id, nome, senha_hash, tipo FROM usuarios WHERE email = :email LIMIT 1'
                );
                $consulta->execute(['email' => $email]);
                $usuario = $consulta->fetch();

                if ($usuario && password_verify($senha, $usuario['senha_hash'])) {
                    session_regenerate_id(true);
                    $_SESSION['usuario_id'] = (int) $usuario['id'];
                    $_SESSION['usuario_nome'] = $usuario['nome'];
                    $_SESSION['usuario_tipo'] = $usuario['tipo'];

                    header('Location: dashboard.php');
                    exit;
                }

                $mensagem = 'E-mail ou senha inválidos.';
            } catch (PDOException $exception) {
                error_log($exception->getMessage());
                $mensagem = 'Não foi possível entrar. Confira a configuração do banco de dados.';
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - PC Store</title>
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
        <h2>Entrar na PC Store</h2>
        <p class="content-lead">Acesse sua conta para acompanhar seus dados e aproveitar os recursos da PC Store.</p>

        <form action="login.php" method="post">
            <input type="hidden" name="csrf_token" value="<?= pcstore_h(pcstore_csrf_token()) ?>">
            <p>
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" placeholder="aluno@email.com" autocomplete="email" required>
            </p>
            <p>
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" autocomplete="current-password" required>
            </p>
            <button type="submit">Login</button>
            <p class="form-status" role="status" aria-live="polite"><?= pcstore_h($mensagem) ?></p>
        </form>
        <p class="text-center"><a class="button-link" href="cadastro.php">Criar uma conta</a></p>
    </main>

    <footer>
        <p>© <?= date('Y') ?> PC Store</p>
        <p>Todos os direitos reservados</p>
        <p><a href="contatos.php">Fale conosco</a></p>
    </footer>
</body>
</html>
