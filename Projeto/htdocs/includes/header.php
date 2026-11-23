<?php
require_once __DIR__ . '/../config/config.php';
$currentCategory = $_GET['cat'] ?? '';
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) . ' | ' . SITE_NAME : SITE_NAME . ' — Catálogo & Ateliê'; ?></title>
  <meta name="description" content="AURA Lingerie — Catálogo de moda íntima feminina minimalista e atemporal. Visite nosso ateliê físico e experimente peças com caimento impecável e tecidos nobres.">
  
  <!-- Estilos Globais e Componentes -->
  <link rel="stylesheet" href="assets/css/variables.css">
  <link rel="stylesheet" href="assets/css/global.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <?php if (isset($extraCss)): ?>
    <link rel="stylesheet" href="<?php echo htmlspecialchars($extraCss); ?>">
  <?php endif; ?>
</head>
<body>

  <!-- Barra Superior Sutil -->
  <aside class="topbar" aria-label="Avisos Importantes">
    <span>
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
      Ateliê Físico Aberto para Visitas & Prova com Hora Marcada
    </span>
    <span style="opacity: 0.4; margin: 0 8px;">•</span>
    <span>Consultoria de Medidas Personalizada</span>
    <span style="opacity: 0.4; margin: 0 8px;">•</span>
    <span>São Paulo, SP</span>
  </aside>

  <!-- Header Principal Fixo -->
  <header class="header" id="mainHeader">
    <div class="container header-inner">
      
      <!-- Botão Hambúrguer Mobile -->
      <button class="mobile-toggle" id="mobileMenuToggle" aria-label="Abrir Menu de Navegação">
        <span></span>
        <span></span>
        <span></span>
      </button>

      <!-- Logomarca Minimalista -->
      <a href="index.php" class="logo">
        <span class="logo-title"><?php echo SITE_NAME; ?></span>
        <span class="logo-sub">ATELIÊ & LINGERIE</span>
      </a>

      <!-- Menu Principal de Navegação -->
      <nav class="nav-menu" id="navMenu">
        <a href="categoria.php" class="nav-link <?php echo empty($currentCategory) && $currentPage === 'categoria.php' ? 'active' : ''; ?>">Catálogo Geral</a>
        <a href="categoria.php?cat=sutias" class="nav-link <?php echo $currentCategory === 'sutias' ? 'active' : ''; ?>">Sutiãs</a>
        <a href="categoria.php?cat=calcinhas" class="nav-link <?php echo $currentCategory === 'calcinhas' ? 'active' : ''; ?>">Calcinhas</a>
        <a href="categoria.php?cat=Cuecas" class="nav-link <?php echo $currentCategory === 'Cuecas' ? 'active' : ''; ?>">Cuecas</a>
        <a href="categoria.php?cat=Meias" class="nav-link <?php echo $currentCategory === 'Meias' ? 'active' : ''; ?>">Meias</a>
        <a href="categoria.php?cat=basicos" class="nav-link <?php echo $currentCategory === 'basicos' ? 'active' : ''; ?>">Básicos</a>
        <!-- Nova Aba: O Ateliê -->
        <a href="atelie.php" class="nav-link <?php echo $currentPage === 'atelie.php' ? 'active' : ''; ?>" style="color: var(--color-accent); font-weight: 600;">O Ateliê</a>
      </nav>

      <!-- Ações: Guia de Medidas e Localização -->
      <div class="header-actions">
        <!-- Ícone de Guia de Medidas -->
        <button class="action-btn" id="openSizeGuideHeader" title="Guia de Medidas" aria-label="Abrir Guia de Medidas">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21.3 15.3l-8.6-8.6a2 2 0 0 0-2.8 0L2.7 13.9a2 2 0 0 0 0 2.8l3.6 3.6a2 2 0 0 0 2.8 0l8.6-8.6a2 2 0 0 0 0-2.8z"></path>
            <path d="M14.5 9.5l2 2"></path>
            <path d="M11.5 6.5l2 2"></path>
            <path d="M8.5 9.5l2 2"></path>
            <path d="M5.5 12.5l2 2"></path>
          </svg>
        </button>

        <!-- Botão Visitar o Ateliê -->
        <a href="atelie.php" class="btn btn-outline btn-sm" style="display: none; @media(min-width: 768px){display: inline-flex;}">
          Como Chegar
        </a>
      </div>

    </div>
  </header>
