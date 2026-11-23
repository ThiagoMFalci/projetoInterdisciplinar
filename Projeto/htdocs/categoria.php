<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/data/products.php';

$catSlug = $_GET['cat'] ?? 'todos';
$selectedSize = $_GET['size'] ?? '';
$sortBy = $_GET['sort'] ?? 'destaques';

// Categorias disponíveis
$categoryLabels = [
    'todos' => 'Coleção Completa',
    'sutias' => 'Sutiãs & Tops',
    'calcinhas' => 'Calcinhas Anatômicas',
    'Cuecas' => 'Cuecas',
    'Meias' => 'Meias',
    'basicos' => 'Básicos & Dia a Dia'
];

$pageTitle = $categoryLabels[$catSlug] ?? 'Coleção';
include __DIR__ . '/includes/header.php';

// Filtra produtos
$filteredProducts = getProductsByCategory($catSlug === 'todos' ? null : $catSlug);

// Filtra por tamanho se especificado
if (!empty($selectedSize)) {
    $filteredProducts = array_filter($filteredProducts, function($p) use ($selectedSize) {
        foreach ($p['sizes'] as $s) {
            if (stripos($s, $selectedSize) !== false) return true;
        }
        return false;
    });
}

// Ordenação
if ($sortBy === 'preco_menor') {
    usort($filteredProducts, fn($a, $b) => $a['price'] <=> $b['price']);
} elseif ($sortBy === 'preco_maior') {
    usort($filteredProducts, fn($a, $b) => $b['price'] <=> $a['price']);
} elseif ($sortBy === 'novos') {
    usort($filteredProducts, fn($a, $b) => ($b['is_new'] ? 1 : 0) <=> ($a['is_new'] ? 1 : 0));
}
?>

<main class="container" style="padding-top: var(--space-3xl); padding-bottom: var(--space-4xl);">
  
  <!-- Breadcrumb -->
  <nav class="breadcrumb">
    <a href="index.php">Início</a>
    <span class="breadcrumb-sep">/</span>
    <span><?php echo htmlspecialchars($pageTitle); ?></span>
  </nav>

  <!-- Cabeçalho do Catálogo -->
  <div style="display: flex; flex-direction: column; gap: 8px; margin-bottom: var(--space-2xl);">
    <h1><?php echo htmlspecialchars($pageTitle); ?></h1>
    <p style="font-size: 1rem; color: var(--color-text-secondary); max-width: 600px;">
      Descubra modelagens leves que se adaptam à sua rotina com elegância e conforto absoluto.
    </p>
  </div>

  <!-- Barra de Filtros e Ordenação Minimalista -->
  <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: var(--space-md); padding-bottom: var(--space-lg); border-bottom: 1px solid var(--color-border); margin-bottom: var(--space-2xl);">
    
    <!-- Filtros de Categoria em Pílulas -->
    <div style="display: flex; flex-wrap: wrap; gap: 8px;">
      <a href="categoria.php?cat=todos" class="btn btn-sm <?php echo $catSlug === 'todos' ? 'btn-primary' : 'btn-outline'; ?>">
        Todos
      </a>
      <a href="categoria.php?cat=sutias" class="btn btn-sm <?php echo $catSlug === 'sutias' ? 'btn-primary' : 'btn-outline'; ?>">
        Sutiãs
      </a>
      <a href="categoria.php?cat=calcinhas" class="btn btn-sm <?php echo $catSlug === 'calcinhas' ? 'btn-primary' : 'btn-outline'; ?>">
        Calcinhas
      </a>
      <a href="categoria.php?cat=Cuecas" class="btn btn-sm <?php echo $catSlug === 'Cuecas' ? 'btn-primary' : 'btn-outline'; ?>">
        Cuecas
      </a>
      <a href="categoria.php?cat=Meias" class="btn btn-sm <?php echo $catSlug === 'Meias' ? 'btn-primary' : 'btn-outline'; ?>">
        Meias
      </a>
      <a href="categoria.php?cat=basicos" class="btn btn-sm <?php echo $catSlug === 'basicos' ? 'btn-primary' : 'btn-outline'; ?>">
        Básicos
      </a>
    </div>

    <!-- Controles da Direita: Contador e Ordenação -->
    <div style="display: flex; align-items: center; gap: var(--space-lg);">
      <span style="font-size: 0.85rem; color: var(--color-text-muted);">
        <?php echo count($filteredProducts); ?> <?php echo count($filteredProducts) === 1 ? 'peça' : 'peças'; ?>
      </span>

      <form method="GET" style="display: flex; align-items: center; gap: 6px;">
        <input type="hidden" name="cat" value="<?php echo htmlspecialchars($catSlug); ?>">
        <label for="sortSelect" style="font-size: 0.82rem; font-weight: 600; text-transform: uppercase; color: var(--color-text-secondary);">Ordenar:</label>
        <select id="sortSelect" name="sort" onchange="this.form.submit()" style="padding: 6px 12px; border: 1px solid var(--color-border); border-radius: var(--radius-xs); background: var(--color-surface); font-size: 0.85rem; outline: none; cursor: pointer;">
          <option value="destaques" <?php echo $sortBy === 'destaques' ? 'selected' : ''; ?>>Destaques</option>
          <option value="preco_menor" <?php echo $sortBy === 'preco_menor' ? 'selected' : ''; ?>>Menor Preço</option>
          <option value="preco_maior" <?php echo $sortBy === 'preco_maior' ? 'selected' : ''; ?>>Maior Preço</option>
          <option value="novos" <?php echo $sortBy === 'novos' ? 'selected' : ''; ?>>Lançamentos</option>
        </select>
      </form>
    </div>

  </div>

  <!-- Grid de Produtos -->
  <?php if (empty($filteredProducts)): ?>
    <div style="text-align: center; padding: var(--space-4xl) 0;">
      <p style="font-size: 1.1rem; color: var(--color-text-secondary); margin-bottom: 16px;">
        Nenhum produto encontrado com os filtros selecionados.
      </p>
      <a href="categoria.php" class="btn btn-primary btn-sm">Limpar Filtros</a>
    </div>
  <?php else: ?>
    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(270px, 1fr)); gap: var(--space-2xl) var(--space-xl);">
      <?php foreach ($filteredProducts as $product): ?>
        <?php include __DIR__ . '/includes/product-card.php'; ?>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
