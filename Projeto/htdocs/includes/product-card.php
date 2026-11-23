<?php
/**
 * Componente: Card de Produto Minimalista (Modo Catálogo / Showroom)
 */
if (!isset($product)) return;

$imgPrimary = $product['images'][0] ?? 'assets/images/placeholder.jpg';
$imgSecondary = $product['images'][1] ?? $imgPrimary;
?>
<article class="product-card">
  <div class="product-image-wrapper">
    
    <!-- Badges -->
    <div class="product-badges">
      <?php if (!empty($product['is_new'])): ?>
        <span class="badge badge-new">Novidade</span>
      <?php endif; ?>
      <?php if (!empty($product['is_best_seller']) && empty($product['is_new'])): ?>
        <span class="badge badge-bestseller">Destaque</span>
      <?php endif; ?>
    </div>

    <!-- Imagens com Efeito Suave no Hover -->
    <a href="produto.php?id=<?php echo $product['id']; ?>" class="product-image-link" aria-label="<?php echo htmlspecialchars($product['name']); ?>">
      <img src="<?php echo htmlspecialchars($imgPrimary); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>" class="product-img img-primary" loading="lazy">
      <img src="<?php echo htmlspecialchars($imgSecondary); ?>" alt="<?php echo htmlspecialchars($product['name']); ?> - Detalhe" class="product-img img-secondary" loading="lazy">
    </a>

    <!-- Botão de Ver Detalhes no Hover -->
    <a href="produto.php?id=<?php echo $product['id']; ?>" class="quick-add-btn" aria-label="Ver detalhes de <?php echo htmlspecialchars($product['name']); ?>">
      Ver Detalhes da Peça →
    </a>
  </div>

  <!-- Informações de Texto e Preço com Alto Contraste -->
  <div class="product-info">
    <span class="product-category-tag"><?php echo htmlspecialchars($product['category_label']); ?></span>
    <h3 class="product-title">
      <a href="produto.php?id=<?php echo $product['id']; ?>"><?php echo htmlspecialchars($product['name']); ?></a>
    </h3>
    
    <div class="product-price-row">
      <span class="product-price"><?php echo formatPrice($product['price']); ?></span>
    </div>

    <!-- Amostras de Cores Visuais -->
    <?php if (!empty($product['colors'])): ?>
      <div class="product-colors-preview" title="Cores disponíveis">
        <?php foreach ($product['colors'] as $color): ?>
          <span class="color-swatch-mini" style="background-color: <?php echo htmlspecialchars($color['hex']); ?>;" title="<?php echo htmlspecialchars($color['name']); ?>"></span>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</article>
