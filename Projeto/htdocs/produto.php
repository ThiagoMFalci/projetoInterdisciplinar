<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/data/products.php';

$productId = isset($_GET['id']) ? (int)$_GET['id'] : 1;
$product = getProductById($productId);

if (!$product) {
    header('Location: categoria.php');
    exit;
}

$pageTitle = $product['name'];
$extraCss = 'assets/css/product.css';
$extraJs = 'assets/js/gallery.js';
include __DIR__ . '/includes/header.php';

// Produtos relacionados
$relatedProducts = array_filter($PRODUCTS, fn($p) => $p['id'] !== $product['id']);
$relatedSample = array_slice($relatedProducts, 0, 4);

$defaultColor = $product['colors'][0]['name'] ?? 'Padrão';
$defaultSize = $product['sizes'][0] ?? 'M';
?>

<main class="container pdp-section">

  <!-- Breadcrumbs -->
  <nav class="breadcrumb">
    <a href="index.php">Início</a>
    <span class="breadcrumb-sep">/</span>
    <a href="categoria.php?cat=<?php echo urlencode($product['category']); ?>"><?php echo htmlspecialchars($product['category_label']); ?></a>
    <span class="breadcrumb-sep">/</span>
    <span><?php echo htmlspecialchars($product['name']); ?></span>
  </nav>

  <div class="pdp-grid">

    <!-- 1. Galeria de Fotos em Alta Resolução -->
    <div class="pdp-gallery">
      <!-- Miniaturas Laterais -->
      <div class="gallery-thumbs">
        <?php foreach ($product['images'] as $idx => $img): ?>
          <div class="thumb-item <?php echo $idx === 0 ? 'active' : ''; ?>" data-full-img="<?php echo htmlspecialchars($img); ?>">
            <img src="<?php echo htmlspecialchars($img); ?>" alt="Miniatura <?php echo $idx + 1; ?>">
          </div>
        <?php endforeach; ?>
      </div>

      <!-- Imagem Principal com Efeito de Lupa/Zoom -->
      <div class="gallery-main" id="galleryMainContainer">
        <img src="<?php echo htmlspecialchars($product['images'][0]); ?>" 
             alt="<?php echo htmlspecialchars($product['name']); ?>" 
             class="gallery-main-img" 
             id="galleryMainImage">
        <div class="zoom-hint">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
            <line x1="11" y1="8" x2="11" y2="14"></line>
            <line x1="8" y1="11" x2="14" y2="11"></line>
          </svg>
          Passe o mouse para zoom
        </div>
      </div>
    </div>

    <!-- 2. Coluna de Informações e Consulta no Ateliê -->
    <div class="pdp-details">
      
      <!-- Badges -->
      <div class="pdp-badge-wrap">
        <?php if (!empty($product['is_new'])): ?>
          <span class="badge badge-new">Novidade</span>
        <?php endif; ?>
        <?php if (!empty($product['is_best_seller']) && empty($product['is_new'])): ?>
          <span class="badge badge-bestseller">Destaque</span>
        <?php endif; ?>
      </div>

      <h1 class="pdp-title"><?php echo htmlspecialchars($product['name']); ?></h1>

      <!-- Preço -->
      <div class="pdp-price-wrap" style="border-bottom: none; margin-bottom: 8px; padding-bottom: 0;">
        <span class="pdp-price"><?php echo formatPrice($product['price']); ?></span>
        <span style="font-size: 0.85rem; color: var(--color-success); font-weight: 600; display: inline-flex; align-items: center; gap: 4px;">
          ● Disponível para prova no Ateliê
        </span>
      </div>

      <p class="pdp-short-desc">
        <?php echo htmlspecialchars($product['short_description']); ?>
      </p>

      <!-- Variações: Cores Disponíveis -->
      <?php if (!empty($product['colors'])): ?>
        <div class="variant-block">
          <div class="variant-label">
            <span>Cores em Acervo:</span>
            <span class="variant-value" id="selectedColorLabel"><?php echo htmlspecialchars($defaultColor); ?></span>
          </div>
          <div class="color-swatches-list">
            <?php foreach ($product['colors'] as $idx => $c): ?>
              <button type="button" 
                      class="color-swatch-option <?php echo $idx === 0 ? 'active' : ''; ?>" 
                      style="background-color: <?php echo htmlspecialchars($c['hex']); ?>;" 
                      title="<?php echo htmlspecialchars($c['name']); ?>"
                      onclick="selectColor('<?php echo htmlspecialchars($c['name']); ?>', this)">
              </button>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endif; ?>

      <!-- Variações: Tamanhos Confeccionados -->
      <div class="variant-block">
        <div class="variant-label">
          <span>Tamanhos Disponíveis:</span>
          <a href="javascript:void(0)" class="size-guide-link" id="openSizeGuidePdp">
            Guia de Medidas & Taças
          </a>
        </div>
        
        <div class="size-options-grid">
          <?php foreach ($product['sizes'] as $idx => $s): ?>
            <button type="button" 
                    class="size-btn <?php echo $idx === 0 ? 'active' : ''; ?>"
                    onclick="selectSize('<?php echo htmlspecialchars($s); ?>', this)">
              <?php echo htmlspecialchars($s); ?>
            </button>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Caixa de Ação: Atendimento & WhatsApp -->
      <div style="background-color: var(--color-surface-subtle); border: 1px solid var(--color-border); border-radius: var(--radius-xs); padding: var(--space-xl); margin: var(--space-xl) 0;">
        <h3 style="font-size: 1.15rem; margin-bottom: 6px;">Deseja experimentar ou reservar?</h3>
        <p style="font-size: 0.88rem; color: var(--color-text-secondary); margin-bottom: 18px; line-height: 1.5;">
          Nossas peças possuem tiragem limitada. Fale diretamente com nossa consultora no WhatsApp para reservar seu tamanho ou agendar sua visita ao nosso Ateliê.
        </p>

        <div style="display: flex; flex-direction: column; gap: 10px;">
          <!-- Botão WhatsApp -->
          <a href="#" id="whatsappBtn" class="btn btn-primary" style="background-color: #128C7E; border-color: #128C7E; color: #fff; height: 50px; font-size: 0.9rem;" target="_blank" rel="noopener">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" style="margin-right: 6px;">
              <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.669-.699c.969.542 1.998.813 3.097.813 3.18 0 5.767-2.586 5.767-5.766.001-3.18-2.585-5.766-5.766-5.766zm9.969 5.766c0 5.505-4.495 10-10 10-1.745 0-3.376-.452-4.802-1.242l-5.198 1.362 1.39-5.078c-.901-1.488-1.423-3.235-1.423-5.042 0-5.505 4.495-10 10-10 5.505 0 10 4.495 10 10z"/>
            </svg>
            Consultar Peça no WhatsApp
          </a>

          <!-- Botão Conhecer o Ateliê -->
          <a href="atelie.php" class="btn btn-outline" style="height: 48px; font-size: 0.85rem;">
            Ver Endereço & Horários do Ateliê
          </a>
        </div>
      </div>

      <!-- Acordeões de Informações e Transparência -->
      <div class="pdp-accordions">
        
        <!-- Detalhes e Composição -->
        <div class="accordion-item open">
          <button class="accordion-header" type="button">
            <span>Composição & Detalhes Técnicos</span>
            <span class="accordion-icon">+</span>
          </button>
          <div class="accordion-body" style="max-height: 500px;">
            <div class="accordion-content">
              <div class="spec-list">
                <?php foreach ($product['details'] as $label => $val): ?>
                  <div class="spec-row">
                    <span class="spec-label"><?php echo htmlspecialchars($label); ?></span>
                    <span><?php echo htmlspecialchars($val); ?></span>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>

        <!-- Instruções de Lavagem e Cuidados -->
        <div class="accordion-item">
          <button class="accordion-header" type="button">
            <span>Cuidados para Preservação</span>
            <span class="accordion-icon">+</span>
          </button>
          <div class="accordion-body">
            <div class="accordion-content">
              <ul style="padding-left: 20px; list-style: disc; display: flex; flex-direction: column; gap: 6px;">
                <?php foreach ($product['care'] as $c): ?>
                  <li><?php echo htmlspecialchars($c); ?></li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
        </div>

        <!-- Experiência no Ateliê -->
        <div class="accordion-item">
          <button class="accordion-header" type="button">
            <span>Experiência no Ateliê AURA</span>
            <span class="accordion-icon">+</span>
          </button>
          <div class="accordion-body">
            <div class="accordion-content">
              <p style="margin-bottom: 8px;">
                <strong>Ambiente Reservado:</strong> Nosso espaço foi projetado para oferecer tranquilidade e privacidade. Provadores amplos com iluminação difusa e natural para você se sentir inteiramente confortável.
              </p>
              <p>
                <strong>Consultoria Sob Medida:</strong> Se desejar, nossa equipe auxilia você a encontrar o tamanho exato e a taça ideal para seu biotipo corporal.
              </p>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Peças Relacionadas -->
  <section style="margin-top: var(--space-4xl); padding-top: var(--space-3xl); border-top: 1px solid var(--color-border);">
    <div style="text-align: center; margin-bottom: var(--space-2xl);">
      <span style="font-size: 0.78rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.15em; color: var(--color-accent);">Coleção AURA</span>
      <h2 style="font-size: 2rem; margin-top: 4px;">Outras Peças do Acervo</h2>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(260px, 1fr)); gap: var(--space-xl);">
      <?php foreach ($relatedSample as $prod): ?>
        <?php $product = $prod; include __DIR__ . '/includes/product-card.php'; ?>
      <?php endforeach; ?>
    </div>
  </section>

</main>

<script>
let currentProduct = <?php echo json_encode($product['name']); ?>;
let currentSize = <?php echo json_encode($defaultSize); ?>;
let currentColor = <?php echo json_encode($defaultColor); ?>;

function updateWhatsAppLink() {
  const phone = "5511999998888"; // Telefone da boutique
  const msg = encodeURIComponent(`Olá! Vi no catálogo da AURA a peça "${currentProduct}" (Cor: ${currentColor}, Tamanho: ${currentSize}) e gostaria de saber se está disponível no Ateliê para prova.`);
  const btn = document.getElementById('whatsappBtn');
  if (btn) {
    btn.href = `https://wa.me/${phone}?text=${msg}`;
  }
}

function selectColor(colorName, element) {
  currentColor = colorName;
  document.getElementById('selectedColorLabel').textContent = colorName;
  document.querySelectorAll('.color-swatch-option').forEach(el => el.classList.remove('active'));
  element.classList.add('active');
  updateWhatsAppLink();
}

function selectSize(sizeName, element) {
  currentSize = sizeName;
  document.querySelectorAll('.size-btn').forEach(el => el.classList.remove('active'));
  element.classList.add('active');
  updateWhatsAppLink();
}

document.addEventListener('DOMContentLoaded', updateWhatsAppLink);
</script>

<?php include __DIR__ . '/includes/footer.php'; ?>
