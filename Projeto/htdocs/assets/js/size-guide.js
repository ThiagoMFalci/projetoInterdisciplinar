/**
 * AURA Lingerie - Calculadora de Tamanho & Medidas
 */

function calculateRecommendedSize() {
  const bustoInput = document.getElementById('inputBusto');
  const toraxInput = document.getElementById('inputTorax');
  const resultDisplay = document.getElementById('calcResultDisplay');

  if (!bustoInput || !toraxInput || !resultDisplay) return;

  const busto = parseFloat(bustoInput.value);
  const torax = parseFloat(toraxInput.value);

  if (isNaN(busto) || isNaN(torax)) {
    alert('Por favor, informe valores numéricos para o busto e tórax.');
    return;
  }

  let recommendedSize = 'M (42)';
  let cupEstimate = 'Taça B';

  if (busto <= 86 && torax <= 72) {
    recommendedSize = 'P (40)';
  } else if (busto <= 92 && torax <= 77) {
    recommendedSize = 'M (42)';
  } else if (busto <= 98 && torax <= 82) {
    recommendedSize = 'G (44)';
  } else {
    recommendedSize = 'GG (46)';
  }

  // Diferença entre busto e tórax indica profundidade da taça
  const diff = busto - torax;
  if (diff <= 12) cupEstimate = 'Taça A (Busto proporcional)';
  else if (diff <= 16) cupEstimate = 'Taça B (Padrão anatômico)';
  else if (diff <= 20) cupEstimate = 'Taça C (Busto mais volumoso)';
  else cupEstimate = 'Taça D (Sustentação extra recomendada)';

  resultDisplay.style.display = 'block';
  resultDisplay.innerHTML = `
    <div style="display: flex; align-items: center; gap: 10px;">
      <span style="font-size: 1.4rem;">✨</span>
      <div>
        <p style="font-weight: 700; color: var(--color-text-primary); margin-bottom: 2px;">
          Seu tamanho recomendado é: <span style="color: var(--color-accent); font-size: 1.1rem;">${recommendedSize}</span>
        </p>
        <p style="font-size: 0.82rem; color: var(--color-text-secondary); margin: 0;">
          Estimativa de curvatura: <strong>${cupEstimate}</strong>.
        </p>
      </div>
    </div>
  `;
}
