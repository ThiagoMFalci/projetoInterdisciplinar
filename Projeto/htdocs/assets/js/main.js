/**
 * AURA Lingerie - Interações Gerais (Vanilla JS)
 * Menu Mobile, Sticky Header, Acordeões e Modais
 */

document.addEventListener('DOMContentLoaded', () => {
  initMobileMenu();
  initStickyHeader();
  initAccordions();
  initSizeModal();
});

/**
 * 1. Menu Mobile
 */
function initMobileMenu() {
  const toggleBtn = document.getElementById('mobileMenuToggle');
  const navMenu = document.getElementById('navMenu');

  if (!toggleBtn || !navMenu) return;

  toggleBtn.addEventListener('click', () => {
    navMenu.classList.toggle('open');
    const isOpen = navMenu.classList.contains('open');
    toggleBtn.setAttribute('aria-expanded', isOpen);
  });

  // Fecha menu ao clicar em links
  navMenu.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', () => {
      navMenu.classList.remove('open');
    });
  });
}

/**
 * 2. Header Fixo com Sombra no Scroll
 */
function initStickyHeader() {
  const header = document.getElementById('mainHeader');
  if (!header) return;

  window.addEventListener('scroll', () => {
    if (window.scrollY > 40) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  }, { passive: true });
}

/**
 * 3. Acordeões de Especificações
 */
function initAccordions() {
  const accordionItems = document.querySelectorAll('.accordion-item');

  accordionItems.forEach(item => {
    const header = item.querySelector('.accordion-header');
    const body = item.querySelector('.accordion-body');

    if (!header || !body) return;

    header.addEventListener('click', () => {
      const isOpen = item.classList.contains('open');

      // Fecha outros se quiser comportamento de sanfona única:
      // accordionItems.forEach(other => other.classList.remove('open'));

      if (isOpen) {
        item.classList.remove('open');
        body.style.maxHeight = null;
      } else {
        item.classList.add('open');
        body.style.maxHeight = body.scrollHeight + 'px';
      }
    });
  });
}

/**
 * 4. Modal do Guia de Medidas
 */
function initSizeModal() {
  const modal = document.getElementById('sizeGuideModal');
  const openBtns = document.querySelectorAll('.open-size-modal-btn, #openSizeGuideHeader, #openSizeGuidePdp');
  const closeBtn = document.getElementById('closeSizeModal');

  if (!modal) return;

  const openModal = () => {
    modal.classList.add('open');
    document.body.style.overflow = 'hidden';
  };

  const closeModal = () => {
    modal.classList.remove('open');
    document.body.style.overflow = '';
  };

  openBtns.forEach(btn => btn.addEventListener('click', (e) => {
    e.preventDefault();
    openModal();
  }));

  if (closeBtn) {
    closeBtn.addEventListener('click', closeModal);
  }

  modal.addEventListener('click', (e) => {
    if (e.target === modal) {
      closeModal();
    }
  });

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && modal.classList.contains('open')) {
      closeModal();
    }
  });
}

/**
 * Função utilitária para Toast / Notificação rápida
 */
function showNotification(message) {
  let toast = document.getElementById('auraToast');
  if (!toast) {
    toast = document.createElement('div');
    toast.id = 'auraToast';
    toast.style.position = 'fixed';
    toast.style.bottom = '24px';
    toast.style.left = '50%';
    toast.style.transform = 'translateX(-50%) translateY(100px)';
    toast.style.backgroundColor = 'var(--color-text-primary)';
    toast.style.color = 'var(--color-text-light)';
    toast.style.padding = '12px 24px';
    toast.style.borderRadius = 'var(--radius-xs)';
    toast.style.fontSize = '0.88rem';
    toast.style.fontWeight = '500';
    toast.style.boxShadow = 'var(--shadow-lg)';
    toast.style.zIndex = '300';
    toast.style.transition = 'transform 0.3s cubic-bezier(0.16, 1, 0.3, 1)';
    document.body.appendChild(toast);
  }

  toast.textContent = message;
  toast.style.transform = 'translateX(-50%) translateY(0)';

  setTimeout(() => {
    toast.style.transform = 'translateX(-50%) translateY(100px)';
  }, 3000);
}
