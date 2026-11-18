'use strict';

// Lê a preferência antes de inicializar os componentes da página.
document.documentElement.dataset.theme = localStorage.getItem('pcstore-theme') === 'dark' ? 'dark' : 'light';

document.addEventListener('DOMContentLoaded', function () {
    configurarTema();
    configurarCarrinho();
    configurarCarrossel();
    configurarPagamento();
    configurarBusca();
});

function configurarTema() {
    const botaoTema = document.getElementById('theme-toggle');
    if (!botaoTema) {
        return;
    }

    function aplicarTema(tema) {
        const escuro = tema === 'dark';
        document.documentElement.dataset.theme = escuro ? 'dark' : 'light';
        botaoTema.setAttribute('aria-pressed', String(escuro));
        botaoTema.setAttribute('aria-label', escuro ? 'Ativar tema claro' : 'Ativar tema escuro');
        botaoTema.textContent = escuro ? '☀️' : '🌙';
        // A preferência é compartilhada pelas páginas da loja via armazenamento local.
        localStorage.setItem('pcstore-theme', tema);
    }

    aplicarTema(localStorage.getItem('pcstore-theme') === 'dark' ? 'dark' : 'light');
    botaoTema.addEventListener('click', function () {
        aplicarTema(document.documentElement.dataset.theme === 'dark' ? 'light' : 'dark');
    });
}

function configurarCarrinho() {
    const chaveCarrinho = 'pcstore-cart';
    const carrinho = JSON.parse(localStorage.getItem(chaveCarrinho) || '[]');
    const botaoCarrinho = document.querySelector('.cart-button');
    const listaCarrinho = document.getElementById('cart-items');

    function atualizarContador() {
        const quantidade = carrinho.reduce(function (total, item) {
            return total + item.quantity;
        }, 0);

        if (botaoCarrinho) {
            botaoCarrinho.textContent = quantidade ? '🛒 (' + quantidade + ')' : '🛒';
            botaoCarrinho.setAttribute('aria-label', 'Abrir carrinho com ' + quantidade + ' itens');
        }
    }

    function salvarCarrinho() {
        // Somente itens do catálogo são armazenados no navegador.
        localStorage.setItem(chaveCarrinho, JSON.stringify(carrinho));
        atualizarContador();
    }

    document.querySelectorAll('.add-cart').forEach(function (botao) {
        botao.addEventListener('click', function () {
            const cartao = botao.closest('.product-card');
            const nome = cartao.querySelector('h4').textContent.trim();
            const item = carrinho.find(function (produto) {
                return produto.name === nome;
            });

            if (item) {
                item.quantity += 1;
            } else {
                carrinho.push({
                    name: nome,
                    price: cartao.querySelector('.price').textContent.trim(),
                    image: cartao.querySelector('img').getAttribute('src'),
                    quantity: 1
                });
            }

            salvarCarrinho();
            botao.textContent = 'Adicionado';
            window.setTimeout(function () {
                botao.textContent = '+ 🛒';
            }, 1200);
        });
    });

    if (listaCarrinho) {
        const mensagemVazia = document.getElementById('cart-empty');
        const resumoCarrinho = document.getElementById('cart-summary');
        const linkPagamento = document.getElementById('checkout-link');

        function exibirCarrinho() {
            listaCarrinho.replaceChildren();
            mensagemVazia.hidden = carrinho.length > 0;
            resumoCarrinho.hidden = carrinho.length === 0;
            linkPagamento.hidden = carrinho.length === 0;

            const total = carrinho.reduce(function (soma, item, indice) {
                const cartao = document.createElement('article');
                const imagem = document.createElement('img');
                const titulo = document.createElement('h4');
                const quantidade = document.createElement('p');
                const preco = document.createElement('p');
                const acoes = document.createElement('div');
                const remover = document.createElement('button');

                cartao.className = 'product-card';
                imagem.src = item.image;
                imagem.alt = '';
                titulo.textContent = item.name;
                quantidade.textContent = 'Quantidade: ' + item.quantity;
                preco.className = 'price';
                preco.textContent = item.price;
                acoes.className = 'order-actions';
                remover.className = 'remove-button';
                remover.type = 'button';
                remover.dataset.cartIndex = String(indice);
                remover.setAttribute('aria-label', 'Remover ' + item.name + ' do carrinho');
                remover.textContent = '🗑️';

                acoes.appendChild(remover);
                cartao.append(imagem, titulo, quantidade, preco, acoes);
                listaCarrinho.appendChild(cartao);

                const valor = Number(item.price.replace(/[^\d,]/g, '').replace(/\./g, '').replace(',', '.'));
                return soma + valor * item.quantity;
            }, 0);

            resumoCarrinho.textContent = 'Total do pedido: ' + total.toLocaleString('pt-BR', {
                style: 'currency',
                currency: 'BRL'
            });
        }

        listaCarrinho.addEventListener('click', function (evento) {
            const alvo = evento.target;
            const botaoRemover = alvo instanceof Element ? alvo.closest('[data-cart-index]') : null;
            if (!botaoRemover) {
                return;
            }

            // A posição do botão identifica o item a remover no array do carrinho.
            carrinho.splice(Number(botaoRemover.dataset.cartIndex), 1);
            salvarCarrinho();
            exibirCarrinho();
        });

        exibirCarrinho();
    }

    atualizarContador();
}

function configurarCarrossel() {
    const carrossel = document.querySelector('.carousel');
    if (!carrossel) {
        return;
    }

    const slides = Array.from(carrossel.querySelectorAll('.slide'));
    const indicadores = Array.from(carrossel.querySelectorAll('[data-slide-to]'));
    let slideAtual = 0;
    let temporizador;

    function exibirSlide(indice) {
        slideAtual = (indice + slides.length) % slides.length;
        slides.forEach(function (slide, posicao) {
            const ativo = posicao === slideAtual;
            slide.classList.toggle('is-active', ativo);
            slide.setAttribute('aria-hidden', String(!ativo));
        });
        indicadores.forEach(function (indicador, posicao) {
            indicador.setAttribute('aria-current', String(posicao === slideAtual));
        });
    }

    function iniciarCarrossel() {
        window.clearInterval(temporizador);
        temporizador = window.setInterval(function () {
            exibirSlide(slideAtual + 1);
        }, 5000);
    }

    indicadores.forEach(function (indicador) {
        indicador.addEventListener('click', function () {
            exibirSlide(Number(indicador.dataset.slideTo));
            // Recomeça o intervalo após a escolha manual do indicador.
            iniciarCarrossel();
        });
    });

    carrossel.addEventListener('mouseenter', function () {
        window.clearInterval(temporizador);
    });
    carrossel.addEventListener('mouseleave', iniciarCarrossel);

    exibirSlide(0);
    iniciarCarrossel();
}

function configurarPagamento() {
    const formulario = document.getElementById('payment-form');
    if (!formulario) {
        return;
    }

    const opcoes = Array.from(formulario.querySelectorAll('input[name="metodo"]'));
    const camposCartao = document.getElementById('card-details');
    const camposPix = document.getElementById('pix-details');
    const status = document.getElementById('payment-status');
    const botaoRevisar = document.getElementById('review-payment');

    function atualizarCampos() {
        const metodo = opcoes.find(function (opcao) {
            return opcao.checked;
        });
        const usarCartao = metodo && metodo.value !== 'pix';

        // Desativa os campos do método não selecionado para evitar validação indevida.
        camposCartao.hidden = !usarCartao;
        camposCartao.disabled = !usarCartao;
        camposPix.hidden = !metodo || metodo.value !== 'pix';
        camposPix.disabled = !metodo || metodo.value !== 'pix';
        status.textContent = '';
    }

    opcoes.forEach(function (opcao) {
        opcao.addEventListener('change', atualizarCampos);
    });
    formulario.addEventListener('submit', function (evento) {
        evento.preventDefault();
        botaoRevisar.click();
    });
    formulario.addEventListener('input', function () {
        status.textContent = '';
    });
    botaoRevisar.addEventListener('click', function () {
        if (!formulario.reportValidity()) {
            return;
        }

        status.textContent = 'Dados validados. Confira as informações antes de confirmar seu pedido.';
    });

    atualizarCampos();
}

function configurarBusca() {
    const campoBusca = document.querySelector('.site-search input[name="q"]');
    if (!campoBusca || !window.location.pathname.endsWith('produtos.php')) {
        return;
    }

    const cartoes = Array.from(document.querySelectorAll('.product-card'));
    const status = document.createElement('p');
    status.setAttribute('role', 'status');
    status.setAttribute('aria-live', 'polite');
    document.querySelector('main').insertBefore(status, document.querySelector('main .cards'));

    function filtrarProdutos() {
        const consulta = campoBusca.value.trim().toLocaleLowerCase('pt-BR');
        let quantidadeVisivel = 0;

        // O texto do cartão reúne nome, descrição e preço para a busca.
        cartoes.forEach(function (cartao) {
            const corresponde = cartao.textContent.toLocaleLowerCase('pt-BR').includes(consulta);
            cartao.hidden = !corresponde;
            quantidadeVisivel += corresponde ? 1 : 0;
        });

        status.textContent = consulta && quantidadeVisivel === 0
            ? 'Nenhum produto encontrado.'
            : consulta
                ? quantidadeVisivel + (quantidadeVisivel === 1 ? ' produto encontrado.' : ' produtos encontrados.')
                : '';
    }

    campoBusca.value = new URLSearchParams(window.location.search).get('q') || '';
    campoBusca.addEventListener('input', filtrarProdutos);
    filtrarProdutos();
}
