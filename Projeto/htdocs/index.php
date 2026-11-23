<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/data/products.php';

$pageTitle = 'Ateliê & Moda Íntima Minimalista';
include __DIR__ . '/includes/header.php';

// Seleciona produtos para os blocos da home
$bestSellers = array_filter($PRODUCTS, fn($p) => !empty($p['is_best_seller']));
$newArrivals = array_filter($PRODUCTS, fn($p) => !empty($p['is_new']));
?>

<!-- Hero Editorial Minimalista -->
<section class="hero-section" style="position: relative; background-color: var(--color-surface-subtle); min-height: 80vh; display: flex; align-items: center; overflow: hidden;">
  <div class="container" style="display: grid; grid-template-columns: 1fr 1fr; align-items: center; gap: var(--space-3xl); padding-top: var(--space-3xl); padding-bottom: var(--space-3xl);">
    
    <div style="max-width: 540px;">
      <span style="font-size: 0.8rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.18em; color: var(--color-accent); display: block; margin-bottom: 12px;">
        Ateliê & Catálogo Exclusivo
      </span>
      <h1 style="font-size: clamp(2.4rem, 4.5vw, 3.8rem); line-height: 1.15; margin-bottom: 20px;">
        A arte de se sentir bem na própria pele.
      </h1>
      <p style="font-size: 1.05rem; line-height: 1.7; color: var(--color-text-secondary); margin-bottom: 32px;">
        Lingerie atemporal desenhada para abraçar as formas femininas com naturalidade. Conheça nosso catálogo digital e venha experimentar as peças em nosso ateliê físico em São Paulo.
      </p>
      
      <div style="display: flex; gap: 16px; flex-wrap: wrap;">
        <a href="categoria.php" class="btn btn-primary">
          Explorar Catálogo
        </a>
        <a href="atelie.php" class="btn btn-outline">
          Conhecer o Ateliê
        </a>
      </div>

      <!-- Métricas / Selos Rápidos -->
      <div style="display: flex; gap: 32px; margin-top: 48px; padding-top: 24px; border-top: 1px solid var(--color-border);">
        <div>
          <span style="font-family: var(--font-serif); font-size: 1.8rem; font-weight: 600; color: var(--color-text-primary);">100%</span>
          <span style="display: block; font-size: 0.78rem; text-transform: uppercase; color: var(--color-text-muted); letter-spacing: 0.05em;">Algodão nos Forros</span>
        </div>
        <div>
          <span style="font-family: var(--font-serif); font-size: 1.8rem; font-weight: 600; color: var(--color-text-primary);">Zero</span>
          <span style="display: block; font-size: 0.78rem; text-transform: uppercase; color: var(--color-text-muted); letter-spacing: 0.05em;">Aperto ou Marcas</span>
        </div>
        <div>
          <span style="font-family: var(--font-serif); font-size: 1.8rem; font-weight: 600; color: var(--color-text-primary);">Jardins</span>
          <span style="display: block; font-size: 0.78rem; text-transform: uppercase; color: var(--color-text-muted); letter-spacing: 0.05em;">Ateliê em São Paulo</span>
        </div>
      </div>
    </div>

    <!-- Imagem Hero de Alta Definição -->
    <div style="position: relative;">
      <div style="aspect-ratio: 4 / 5; border-radius: var(--radius-xs); overflow: hidden; box-shadow: var(--shadow-lg);">
        <img src="/Images/Sutia.jpg" 
             alt="AURA Lingerie Minimalista" 
             style="width: 100%; height: 100%; object-fit: cover;">
      </div>
    </div>

  </div>
</section>

<!-- Grid de Categorias Visuais -->
<section style="padding: var(--space-4xl) 0 var(--space-2xl);">
  <div class="container">
    <div style="text-align: center; max-width: 600px; margin: 0 auto var(--space-3xl);">
      <span style="font-size: 0.78rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.15em; color: var(--color-accent);">Categorias do Acervo</span>
      <h2 style="font-size: 2.2rem; margin-top: 6px;">Escolha por Ocasião & Conforto</h2>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: var(--space-lg);">
      
      <a href="categoria.php?cat=sutias" style="display: block; position: relative; border-radius: var(--radius-xs); overflow: hidden;">
        <div style="aspect-ratio: 3 / 4; background-color: var(--color-surface-subtle); overflow: hidden;">
          <img src="/Images/Sutia1.jpg" alt="Sutiãs & Tops" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
        <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 20px; background: linear-gradient(to top, rgba(0,0,0,0.65), transparent); color: #fff;">
          <h3 style="color: #fff; font-size: 1.35rem; margin-bottom: 2px;">Sutiãs & Tops</h3>
          <span style="font-size: 0.78rem; text-transform: uppercase; letter-spacing: 0.1em; opacity: 0.9;">Ver Modelos →</span>
        </div>
      </a>

      <a href="categoria.php?cat=calcinhas" style="display: block; position: relative; border-radius: var(--radius-xs); overflow: hidden;">
        <div style="aspect-ratio: 3 / 4; background-color: var(--color-surface-subtle); overflow: hidden;">
          <img src="/Images/Calcinha.jpg" alt="Calcinhas" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
        <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 20px; background: linear-gradient(to top, rgba(0,0,0,0.65), transparent); color: #fff;">
          <h3 style="color: #fff; font-size: 1.35rem; margin-bottom: 2px;">Calcinhas Anatômicas</h3>
          <span style="font-size: 0.78rem; text-transform: uppercase; letter-spacing: 0.1em; opacity: 0.9;">Ver Modelos →</span>
        </div>
      </a>

      <a href="categoria.php?cat=Cuecas" style="display: block; position: relative; border-radius: var(--radius-xs); overflow: hidden;">
        <div style="aspect-ratio: 3 / 4; background-color: var(--color-surface-subtle); overflow: hidden;">
          <img src="/Images/Cueca1.jpg" alt="Cuecas" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
        <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 20px; background: linear-gradient(to top, rgba(0,0,0,0.65), transparent); color: #fff;">
          <h3 style="color: #fff; font-size: 1.35rem; margin-bottom: 2px;">Cuecas & Tule</h3>
          <span style="font-size: 0.78rem; text-transform: uppercase; letter-spacing: 0.1em; opacity: 0.9;">Ver Modelos →</span>
        </div>
      </a>

      <a href="categoria.php?cat=Meias" style="display: block; position: relative; border-radius: var(--radius-xs); overflow: hidden;">
        <div style="aspect-ratio: 3 / 4; background-color: var(--color-surface-subtle); overflow: hidden;">
          <img src="/images/Meias.jpg" alt="Meias" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
        <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 20px; background: linear-gradient(to top, rgba(0,0,0,0.65), transparent); color: #fff;">
          <h3 style="color: #fff; font-size: 1.35rem; margin-bottom: 2px;">Meias</h3>
          <span style="font-size: 0.78rem; text-transform: uppercase; letter-spacing: 0.1em; opacity: 0.9;">Ver Modelos →</span>
        </div>
      </a>

    </div>
  </div>
</section>

<!-- Seção: Destaques do Acervo -->
<section style="padding: var(--space-3xl) 0;">
  <div class="container">
    <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: var(--space-2xl);">
      <div>
        <span style="font-size: 0.78rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.15em; color: var(--color-accent);">Seleção Especial</span>
        <h2 style="font-size: 2.2rem; margin-top: 4px;">Peças em Exibição</h2>
      </div>
      <a href="categoria.php" class="btn btn-outline btn-sm">Ver Catálogo Completo</a>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(260px, 1fr)); gap: var(--space-xl);">
      <?php foreach (array_slice($bestSellers, 0, 4) as $product): ?>
        <?php include __DIR__ . '/includes/product-card.php'; ?>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Bloco de Convite ao Ateliê Físico -->
<section style="background-color: var(--color-surface-subtle); padding: var(--space-4xl) 0; margin-top: var(--space-3xl);">
  <div class="container" style="display: grid; grid-template-columns: 1fr 1fr; align-items: center; gap: var(--space-4xl);">
    
    <div style="aspect-ratio: 4 / 5; border-radius: var(--radius-xs); overflow: hidden; box-shadow: var(--shadow-md);">
      <img src="/Images/Sonhe1.jpg" 
           alt="Ateliê AURA em São Paulo" 
           style="width: 100%; height: 100%; object-fit: cover;">
    </div>

    <div>
      <span style="font-size: 0.8rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.15em; color: var(--color-accent);">Experiência Presencial</span>
      <h2 style="font-size: clamp(2rem, 3.5vw, 2.8rem); line-height: 1.2; margin: 12px 0 20px;">
        Venha sentir o toque dos tecidos e provar sua medida perfeita.
      </h2>
      <p style="margin-bottom: 24px; font-size: 1rem; line-height: 1.7;">
        Nosso ateliê nos Jardins foi planejado como um refúgio acolhedor. Provadores amplos, café quentinho e consultoria individualizada para quem deseja redescobrir o conforto sem aros desconfortáveis nem rendas que pinicam.
      </p>

      <div style="display: flex; flex-direction: column; gap: 14px; margin-bottom: 32px;">
        <div style="display: flex; align-items: center; gap: 12px;">
          <span style="width: 22px; height: 22px; border-radius: 50%; background-color: var(--color-accent); color: #fff; display: flex; align-items: center; justify-content: center; font-size: 0.75rem;">✓</span>
          <span style="font-weight: 500; font-size: 0.95rem;">Alameda Lorena, 1420 — Jardins, São Paulo</span>
        </div>
        <div style="display: flex; align-items: center; gap: 12px;">
          <span style="width: 22px; height: 22px; border-radius: 50%; background-color: var(--color-accent); color: #fff; display: flex; align-items: center; justify-content: center; font-size: 0.75rem;">✓</span>
          <span style="font-weight: 500; font-size: 0.95rem;">Atendimento com hora marcada ou visita espontânea</span>
        </div>
        <div style="display: flex; align-items: center; gap: 12px;">
          <span style="width: 22px; height: 22px; border-radius: 50%; background-color: var(--color-accent); color: #fff; display: flex; align-items: center; justify-content: center; font-size: 0.75rem;">✓</span>
          <span style="font-weight: 500; font-size: 0.95rem;">Consultoria anatômica de medidas e taças</span>
        </div>
      </div>

      <a href="atelie.php" class="btn btn-primary">Ver Detalhes do Ateliê & Contato</a>
    </div>

  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
