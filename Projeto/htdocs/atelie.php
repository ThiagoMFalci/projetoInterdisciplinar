<?php
require_once __DIR__ . '/config/config.php';

$pageTitle = 'O Ateliê & Contato';
include __DIR__ . '/includes/header.php';

$messageSent = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_form'])) {
    $messageSent = true;
}
?>

<main class="container" style="padding-top: var(--space-3xl); padding-bottom: var(--space-4xl);">

  <!-- Breadcrumbs -->
  <nav class="breadcrumb">
    <a href="index.php">Início</a>
    <span class="breadcrumb-sep">/</span>
    <span>O Ateliê</span>
  </nav>

  <!-- Cabeçalho Editorial -->
  <div style="max-width: 760px; margin-bottom: var(--space-3xl);">
    <span style="font-size: 0.8rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.18em; color: var(--color-accent); display: block; margin-bottom: 8px;">
      Nosso Espaço Físico & Filosofia
    </span>
    <h1 style="font-size: clamp(2.4rem, 4vw, 3.4rem); line-height: 1.15; margin-bottom: 20px;">
      Um refúgio de tranquilidade dedicado ao corpo feminino.
    </h1>
    <p style="font-size: 1.1rem; line-height: 1.8; color: var(--color-text-secondary);">
      A <strong>PH Lingerie</strong> nasceu da inquietação com lingeries que apertam, pinicam e priorizam a estética masculina em detrimento do bem-estar de quem as veste. Criamos um ateliê físico onde o tempo desacelera e você é acolhida com delicadeza e escuta.
    </p>
  </div>

  <!-- Bloco de Imagens do Ateliê e Filosofia -->
  <div style="display: grid; grid-template-columns: 1.2fr 1fr; gap: var(--space-3xl); align-items: center; margin-bottom: var(--space-4xl);">
    <div style="aspect-ratio: 16 / 18; border-radius: var(--radius-xs); overflow: hidden; box-shadow: var(--shadow-md);">
      <img src="/Images/Sonhe1.jpg" 
           alt="Interior do Ateliê PH Lingerie" 
           style="width: 100%; height: 100%; object-fit: cover;">
    </div>
    <div>
      <h2 style="font-size: 1.9rem; margin-bottom: 16px;">O Toque que Você Merece Sentir</h2>
      <p style="margin-bottom: 16px; line-height: 1.7; color: var(--color-text-secondary);">
        Acreditamos que a escolha da roupa íntima é um ritual de autocuidado profundo. Em nosso espaço físico, você pode tocar as rendas, sentir a elasticidade dos tecidos tecnológicos e experimentar cada modelo em provadores amplos com luz suave e aconchegante.
      </p>
      <p style="line-height: 1.7; color: var(--color-text-secondary);">
        Nossa equipe de consultoria é especializada em biometria e caimento, pronta para ajudá-la a identificar sua taça exata sem nenhum julgamento ou constrangimento.
      </p>
    </div>
  </div>

  <!-- Seção de Localização & Endereço -->
  <section id="localizacao" style="background-color: var(--color-surface); border: 1px solid var(--color-border); border-radius: var(--radius-xs); padding: var(--space-3xl); margin-bottom: var(--space-4xl);">
    
    <div style="text-align: center; max-width: 600px; margin: 0 auto var(--space-3xl);">
      <span style="font-size: 0.78rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.15em; color: var(--color-accent);">Visite-nos</span>
      <h2 style="font-size: 2.2rem; margin-top: 6px;">Endereço & Como Chegar</h2>
      <p style="color: var(--color-text-secondary); margin-top: 8px;">
        Localizado em um ponto nobre e tranquilo dos Jardins, com fácil acesso e estacionamento conveniado.
      </p>
    </div>

    <div style="display: grid; grid-template-columns: 1fr 1.2fr; gap: var(--space-3xl); align-items: center;">
      
      <!-- Detalhes do Endereço e Horários -->
      <div style="display: flex; flex-direction: column; gap: var(--space-xl);">
        
        <div style="display: flex; gap: 16px; align-items: flex-start;">
          <div style="width: 44px; height: 44px; border-radius: 50%; background-color: var(--color-surface-subtle); display: flex; align-items: center; justify-content: center; color: var(--color-accent); flex-shrink: 0;">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
              <circle cx="12" cy="10" r="3"></circle>
            </svg>
          </div>
          <div>
            <h3 style="font-size: 1.15rem; margin-bottom: 4px;">Endereço do Ateliê</h3>
            <p style="color: var(--color-text-primary); font-size: 1rem; font-weight: 500; margin: 0;">
              Alameda Lorena, 1420 — Jardins<br>
              São Paulo - SP, CEP 01424-001
            </p>
            <span style="font-size: 0.82rem; color: var(--color-text-muted); display: block; margin-top: 4px;">
              (Próximo à Rua Oscar Freire e Metrô Oscar Freire - Linha 4 Amarela)
            </span>
          </div>
        </div>

        <div style="display: flex; gap: 16px; align-items: flex-start;">
          <div style="width: 44px; height: 44px; border-radius: 50%; background-color: var(--color-surface-subtle); display: flex; align-items: center; justify-content: center; color: var(--color-accent); flex-shrink: 0;">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="10"></circle>
              <polyline points="12 6 12 12 16 14"></polyline>
            </svg>
          </div>
          <div>
            <h3 style="font-size: 1.15rem; margin-bottom: 4px;">Horários de Funcionamento</h3>
            <p style="color: var(--color-text-primary); margin: 0; font-size: 0.95rem; line-height: 1.6;">
              <strong>Segunda a Sexta-feira:</strong> 10h00 às 19h00<br>
              <strong>Sábados:</strong> 10h00 às 17h00<br>
              <span style="color: var(--color-text-muted);">Domingos e Feriados: Fechado</span>
            </p>
          </div>
        </div>

        <div style="display: flex; gap: 16px; align-items: flex-start;">
          <div style="width: 44px; height: 44px; border-radius: 50%; background-color: var(--color-surface-subtle); display: flex; align-items: center; justify-content: center; color: var(--color-accent); flex-shrink: 0;">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
              <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
            </svg>
          </div>
          <div>
            <h3 style="font-size: 1.15rem; margin-bottom: 4px;">Comodidades</h3>
            <p style="color: var(--color-text-secondary); margin: 0; font-size: 0.9rem; line-height: 1.5;">
              Valet com manobrista na porta • Espaço pet-friendly • Café especial e água aromatizada cortesia.
            </p>
          </div>
        </div>

      </div>

      <!-- Mapa Estilizado / Embed -->
      <div style="position: relative; aspect-ratio: 4 / 3; border-radius: var(--radius-xs); overflow: hidden; border: 1px solid var(--color-border); background-color: var(--color-surface-subtle);">
        <iframe 
          title="Mapa do Ateliê PH Lingerie"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.0754261882483!2d-46.66986422384666!3d-23.565734361755106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59d045d44d71%3A0xe54e60e5a8f90ab5!2sAlameda%20Lorena%2C%201420%20-%20Jardins%2C%20S%C3%A3o%20Paulo%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1710000000000!5m2!1spt-BR!2sbr" 
          width="100%" 
          height="100%" 
          style="border:0;" 
          allowfullscreen="" 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>

    </div>

  </section>

  <!-- Seção de Contato & Agendamento de Visita -->
  <section id="contato" style="display: grid; grid-template-columns: 1fr 1.3fr; gap: var(--space-4xl); align-items: start;">
    
    <div>
      <span style="font-size: 0.78rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.15em; color: var(--color-accent);">Fale Conosco</span>
      <h2 style="font-size: 2.2rem; margin: 8px 0 16px;">Estamos aqui para ouvir você</h2>
      <p style="color: var(--color-text-secondary); line-height: 1.7; margin-bottom: 28px;">
        Ficou com alguma dúvida sobre tecidos, deseja reservar um modelo que viu em nosso catálogo ou quer marcar um horário de prova com consultora exclusiva? Escolha seu canal preferido:
      </p>

      <!-- Cartões de Contato Rápido -->
      <div style="display: flex; flex-direction: column; gap: 14px;">
        
        <a href="https://wa.me/5599998888?text=Ol%C3%A1!%20Gostaria%20de%20tirar%20uma%20d%C3%BAvida%20sobre%20as%20pe%C3%A7as%20da%20PH Lingerie." 
           target="_blank" 
           rel="noopener" 
           style="display: flex; align-items: center; gap: 14px; padding: 16px; background-color: var(--color-surface); border: 1px solid var(--color-border); border-radius: var(--radius-xs); transition: border-color 0.2s;">
          <div style="width: 40px; height: 40px; border-radius: 50%; background-color: #E8F7F2; color: #128C7E; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor">
              <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.669-.699c.969.542 1.998.813 3.097.813 3.18 0 5.767-2.586 5.767-5.766.001-3.18-2.585-5.766-5.766-5.766zm9.969 5.766c0 5.505-4.495 10-10 10-1.745 0-3.376-.452-4.802-1.242l-5.198 1.362 1.39-5.078c-.901-1.488-1.423-3.235-1.423-5.042 0-5.505 4.495-10 10-10 5.505 0 10 4.495 10 10z"/>
            </svg>
          </div>
          <div>
            <span style="font-weight: 600; color: var(--color-text-primary); font-size: 0.95rem; display: block;">WhatsApp Direto da Consultoria</span>
            <span style="font-size: 0.82rem; color: var(--color-text-muted);">(11) 99999-8888 — Atendimento ágil e atencioso</span>
          </div>
        </a>

        <div style="display: flex; align-items: center; gap: 14px; padding: 16px; background-color: var(--color-surface); border: 1px solid var(--color-border); border-radius: var(--radius-xs);">
          <div style="width: 40px; height: 40px; border-radius: 50%; background-color: var(--color-surface-subtle); color: var(--color-text-primary); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
              <polyline points="22,6 12,13 2,6"></polyline>
            </svg>
          </div>
          <div>
            <span style="font-weight: 600; color: var(--color-text-primary); font-size: 0.95rem; display: block;">E-mail do Ateliê</span>
            <span style="font-size: 0.82rem; color: var(--color-text-muted);">contato@PH Lingerielingerie.com.br</span>
          </div>
        </div>

        <div style="display: flex; align-items: center; gap: 14px; padding: 16px; background-color: var(--color-surface); border: 1px solid var(--color-border); border-radius: var(--radius-xs);">
          <div style="width: 40px; height: 40px; border-radius: 50%; background-color: var(--color-surface-subtle); color: var(--color-text-primary); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
              <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
              <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
            </svg>
          </div>
          <div>
            <span style="font-weight: 600; color: var(--color-text-primary); font-size: 0.95rem; display: block;">Instagram</span>
            <span style="font-size: 0.82rem; color: var(--color-text-muted);">@PH Lingerielingerie.atelie</span>
          </div>
        </div>

      </div>
    </div>

    <!-- Formulário Minimalista de Contato / Agendamento -->
    <div style="background-color: var(--color-surface); border: 1px solid var(--color-border); border-radius: var(--radius-xs); padding: var(--space-2xl);">
      <h3 style="font-size: 1.35rem; margin-bottom: 8px;">Envie uma Mensagem ou Agende sua Prova</h3>
      <p style="font-size: 0.88rem; color: var(--color-text-secondary); margin-bottom: 24px;">
        Preencha o formulário abaixo e responderemos no mesmo dia.
      </p>

      <?php if ($messageSent): ?>
        <div style="padding: 16px; background-color: var(--color-accent-subtle); border-left: 3px solid var(--color-accent); border-radius: var(--radius-xs); margin-bottom: 20px;">
          <p style="font-weight: 600; color: var(--color-text-primary); margin: 0 0 4px;">Mensagem enviada com sucesso!</p>
          <p style="font-size: 0.85rem; color: var(--color-text-secondary); margin: 0;">Nossa equipe entrará em contato em breve pelo WhatsApp ou e-mail informado.</p>
        </div>
      <?php endif; ?>

      <form method="POST" action="atelie.php#contato">
        <input type="hidden" name="contact_form" value="1">

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: var(--space-md); margin-bottom: var(--space-md);">
          <div class="form-group">
            <label for="contactName" style="font-size: 0.82rem; font-weight: 600; color: var(--color-text-secondary); margin-bottom: 6px; display: block;">Seu Nome *</label>
            <input type="text" id="contactName" name="name" placeholder="Como podemos te chamar?" required style="width: 100%; padding: 12px; border: 1px solid var(--color-border); border-radius: var(--radius-xs); background-color: var(--color-bg); font-size: 0.9rem; outline: none;">
          </div>

          <div class="form-group">
            <label for="contactPhone" style="font-size: 0.82rem; font-weight: 600; color: var(--color-text-secondary); margin-bottom: 6px; display: block;">WhatsApp / Telefone *</label>
            <input type="tel" id="contactPhone" name="phone" placeholder="(11) 99999-9999" required style="width: 100%; padding: 12px; border: 1px solid var(--color-border); border-radius: var(--radius-xs); background-color: var(--color-bg); font-size: 0.9rem; outline: none;">
          </div>
        </div>

        <div class="form-group" style="margin-bottom: var(--space-md);">
          <label for="contactEmail" style="font-size: 0.82rem; font-weight: 600; color: var(--color-text-secondary); margin-bottom: 6px; display: block;">E-mail *</label>
          <input type="email" id="contactEmail" name="email" placeholder="seuemail@exemplo.com" required style="width: 100%; padding: 12px; border: 1px solid var(--color-border); border-radius: var(--radius-xs); background-color: var(--color-bg); font-size: 0.9rem; outline: none;">
        </div>

        <div class="form-group" style="margin-bottom: var(--space-md);">
          <label for="contactSubject" style="font-size: 0.82rem; font-weight: 600; color: var(--color-text-secondary); margin-bottom: 6px; display: block;">Assunto de Interesse</label>
          <select id="contactSubject" name="subject" style="width: 100%; padding: 12px; border: 1px solid var(--color-border); border-radius: var(--radius-xs); background-color: var(--color-bg); font-size: 0.9rem; outline: none; cursor: pointer;">
            <option value="visita">Agendar Visita & Prova com Consultora</option>
            <option value="duvida_peca">Dúvida sobre Peça do Catálogo</option>
            <option value="tamanho">Consultoria de Tamanho & Taça</option>
            <option value="outro">Outro Assunto</option>
          </select>
        </div>

        <div class="form-group" style="margin-bottom: var(--space-xl);">
          <label for="contactMessage" style="font-size: 0.82rem; font-weight: 600; color: var(--color-text-secondary); margin-bottom: 6px; display: block;">Sua Mensagem</label>
          <textarea id="contactMessage" name="message" rows="4" placeholder="Conte-nos o que você procura ou qual dia/horário prefere para sua visita..." style="width: 100%; padding: 12px; border: 1px solid var(--color-border); border-radius: var(--radius-xs); background-color: var(--color-bg); font-size: 0.9rem; outline: none; resize: vertical;"></textarea>
        </div>

        <button type="submit" class="btn btn-primary btn-full" style="height: 50px;">
          Enviar Mensagem
        </button>
      </form>
    </div>

  </section>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
