<?php
/**
 * Configuração Geral da Loja
 * Loja de Moda Íntima Feminina Minimalista - AURA Lingerie
 */

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Inicializa carrinho na sessão caso não exista
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

define('SITE_NAME', 'PH Lingerie');
define('SITE_TAGLINE', 'Moda Íntima Atemporal & Minimalista');
define('FREE_SHIPPING_THRESHOLD', 199.00);
define('CURRENCY_SYMBOL', 'R$');

/**
 * Formata um valor numérico para o padrão de moeda brasileiro (BRL)
 */
function formatPrice(float $value): string {
    return CURRENCY_SYMBOL . ' ' . number_format($value, 2, ',', '.');
}

/**
 * Retorna o subtotal do carrinho
 */
function getCartSubtotal(): float {
    $subtotal = 0;
    if (!empty($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $item) {
            $subtotal += $item['price'] * $item['quantity'];
        }
    }
    return $subtotal;
}

/**
 * Retorna a quantidade total de itens no carrinho
 */
function getCartCount(): int {
    $count = 0;
    if (!empty($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $item) {
            $count += $item['quantity'];
        }
    }
    return $count;
}
