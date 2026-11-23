/**
 * AURA Lingerie - Galeria com Zoom Interativo (Vanilla JS)
 */

document.addEventListener('DOMContentLoaded', () => {
  initPdpGallery();
});

function initPdpGallery() {
  const mainContainer = document.getElementById('galleryMainContainer');
  const mainImg = document.getElementById('galleryMainImage');
  const thumbs = document.querySelectorAll('.thumb-item');

  if (!mainContainer || !mainImg || thumbs.length === 0) return;

  // 1. Troca de imagem ao clicar nas miniaturas
  thumbs.forEach(thumb => {
    thumb.addEventListener('click', () => {
      thumbs.forEach(t => t.classList.remove('active'));
      thumb.classList.add('active');

      const newSrc = thumb.dataset.fullImg || thumb.querySelector('img').src;
      mainImg.src = newSrc;
    });
  });

  // 2. Efeito de Zoom / Lupa ao passar o mouse sobre os detalhes da peça
  mainContainer.addEventListener('mousemove', (e) => {
    const rect = mainContainer.getBoundingClientRect();
    const x = ((e.clientX - rect.left) / rect.width) * 100;
    const y = ((e.clientY - rect.top) / rect.height) * 100;

    mainImg.style.transformOrigin = `${x}% ${y}%`;
    mainImg.style.transform = 'scale(1.8)';
  });

  mainContainer.addEventListener('mouseleave', () => {
    mainImg.style.transformOrigin = 'center center';
    mainImg.style.transform = 'scale(1)';
  });
}
