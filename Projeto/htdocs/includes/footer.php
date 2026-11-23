<?php
require_once __DIR__ . '/../config/config.php';
?>
  <!-- Rodapé Institucional e de Confiança -->
  <footer class="footer">
    <div class="container">
      
      <!-- Barra de Pilares do Ateliê -->
      <div class="footer-trust-bar">
        <div class="trust-item">
          <svg class="trust-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
            <circle cx="12" cy="10" r="3"></circle>
          </svg>
          <div>
            <h4 class="trust-title">Ateliê Reservado</h4>
            <p class="trust-desc">Ambiente intimista e acolhedor em São Paulo com provadores privativos.</p>
          </div>
        </div>

        <div class="trust-item">
          <svg class="trust-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
            <polyline points="9 12 11 14 15 10"></polyline>
          </svg>
          <div>
            <h4 class="trust-title">Forros 100% Algodão</h4>
            <p class="trust-desc">Tecidos biológicos e hipoalergênicos que respeitam a pele feminina.</p>
          </div>
        </div>

        <div class="trust-item">
          <svg class="trust-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21.3 15.3l-8.6-8.6a2 2 0 0 0-2.8 0L2.7 13.9a2 2 0 0 0 0 2.8l3.6 3.6a2 2 0 0 0 2.8 0l8.6-8.6a2 2 0 0 0 0-2.8z"></path>
            <path d="M14.5 9.5l2 2"></path>
            <path d="M11.5 6.5l2 2"></path>
          </svg>
          <div>
            <h4 class="trust-title">Consultoria Sob Medida</h4>
            <p class="trust-desc">Apoio individual para descobrir a modelagem e a taça ideal para você.</p>
          </div>
        </div>

        <div class="trust-item">
          <svg class="trust-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
            <line x1="16" y1="2" x2="16" y2="6"></line>
            <line x1="8" y1="2" x2="8" y2="6"></line>
            <line x1="3" y1="10" x2="21" y2="10"></line>
          </svg>
          <div>
            <h4 class="trust-title">Visitas com Hora Marcada</h4>
            <p class="trust-desc">Agende seu horário para atendimento exclusivo e sem pressa.</p>
          </div>
        </div>
      </div>

      <!-- Grid Principal do Rodapé -->
      <div class="footer-grid">
        <div>
          <a href="index.php" class="logo" style="align-items: flex-start;">
            <span class="logo-title" style="font-size: 1.8rem;"><?php echo SITE_NAME; ?></span>
            <span class="logo-sub">ATELIÊ & LINGERIE</span>
          </a>
          <p class="footer-about-text">
            Um refúgio de autocuidado e elegância atemporal. Confeccionamos peças íntimas com respeito à anatomia feminina e matérias-primas de toque suave. Visite nosso espaço físico.
          </p>
        </div>

        <div>
          <h4 class="footer-col-title">Catálogo</h4>
          <ul class="footer-links">
            <li><a href="categoria.php?cat=sutias" class="footer-link">Sutiãs & Tops</a></li>
            <li><a href="categoria.php?cat=calcinhas" class="footer-link">Calcinhas Anatômicas</a></li>
            <li><a href="categoria.php?cat=Cuecas" class="footer-link">Cuecas em Renda</a></li>
            <li><a href="categoria.php?cat=Meias" class="footer-link">Meias & Seda</a></li>
            <li><a href="categoria.php?cat=basicos" class="footer-link">Linha Pure Cotton</a></li>
          </ul>
        </div>

        <div>
          <h4 class="footer-col-title">O Ateliê</h4>
          <ul class="footer-links">
            <li><a href="atelie.php" class="footer-link">Conheça Nosso Espaço</a></li>
            <li><a href="atelie.php#localizacao" class="footer-link">Endereço & Como Chegar</a></li>
            <li><a href="atelie.php#agendamento" class="footer-link">Agendar Visita / Prova</a></li>
            <li><a href="javascript:void(0)" class="footer-link open-size-modal-btn">Guia de Medidas</a></li>
            <li><a href="atelie.php#contato" class="footer-link">Canais de Contato</a></li>
          </ul>
        </div>

        <div>
          <h4 class="footer-col-title">Endereço & Horários</h4>
          <p style="font-size: 0.9rem; color: var(--color-text-secondary); line-height: 1.6; margin-bottom: 12px;">
            Alameda Lorena, 1420 — Jardins<br>
            São Paulo - SP, 01424-001
          </p>
          <p style="font-size: 0.85rem; color: var(--color-text-muted); line-height: 1.5;">
            Segunda a Sexta: 10h às 19h<br>
            Sábados: 10h às 17h
          </p>
          <a href="https://wa.me/5511999998888" target="_blank" rel="noopener" class="btn btn-outline btn-sm" style="margin-top: 14px;">
            Falar pelo WhatsApp
          </a>
        </div>
      </div>

      <!-- Linha Final de Copyright -->
      <div class="footer-bottom">
        <p>© <?php echo date('Y'); ?> <?php echo SITE_NAME; ?> Ateliê de Moda Íntima — Todos os direitos reservados.</p>
        <div style="display: flex; gap: 16px; align-items: center;">
          <a href="atelie.php">O Ateliê</a>
          <span>•</span>
          <a href="categoria.php">Catálogo</a>
          <span>•</span>
          <a href="javascript:void(0)" class="open-size-modal-btn">Guia de Medidas</a>
        </div>
      </div>

    </div>
  </footer>

  <!-- Modal do Guia de Medidas -->
  <?php include __DIR__ . '/size-modal.php'; ?>

  <!-- Scripts JavaScript Vanilla -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/size-guide.js"></script>
  <?php if (isset($extraJs)): ?>
    <script src="<?php echo htmlspecialchars($extraJs); ?>"></script>
  <?php endif; ?>
</body>
</html>
