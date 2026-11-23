<!-- Modal do Guia de Medidas & Calculadora de Tamanhos -->
<div class="modal-overlay" id="sizeGuideModal" role="dialog" aria-modal="true" aria-labelledby="modalTitle">
  <div class="modal-content">
    <button class="modal-close" id="closeSizeModal" aria-label="Fechar Guia de Medidas">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <line x1="18" y1="6" x2="6" y2="18"></line>
        <line x1="6" y1="6" x2="18" y2="18"></line>
      </svg>
    </button>

    <h2 id="modalTitle" style="margin-bottom: 8px;">Guia de Medidas & Caimento</h2>
    <p style="margin-bottom: 16px;">
      Para garantir que sua lingerie vista com absoluto conforto, meça com uma fita métrica sem apertar em volta do corpo.
    </p>

    <!-- Tabela Visual de Medidas -->
    <table class="size-table">
      <thead>
        <tr>
          <th>Tamanho</th>
          <th>Equivalência</th>
          <th>Busto (cm)</th>
          <th>Tórax / Abaixo do Busto</th>
          <th>Quadril (cm)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><strong>P</strong></td>
          <td>40</td>
          <td>80 a 86 cm</td>
          <td>68 a 72 cm</td>
          <td>88 a 94 cm</td>
        </tr>
        <tr>
          <td><strong>M</strong></td>
          <td>42</td>
          <td>87 a 92 cm</td>
          <td>73 a 77 cm</td>
          <td>95 a 102 cm</td>
        </tr>
        <tr>
          <td><strong>G</strong></td>
          <td>44</td>
          <td>93 a 98 cm</td>
          <td>78 a 82 cm</td>
          <td>103 a 110 cm</td>
        </tr>
        <tr>
          <td><strong>GG</strong></td>
          <td>46</td>
          <td>99 a 105 cm</td>
          <td>83 a 88 cm</td>
          <td>111 a 118 cm</td>
        </tr>
      </tbody>
    </table>

    <!-- Calculadora Interativa de Tamanho -->
    <div class="size-calculator-box">
      <h3 style="font-size: 1.15rem; margin-bottom: 4px;">Descubra seu Tamanho Ideal</h3>
      <p style="font-size: 0.85rem; color: var(--color-text-secondary);">
        Insira suas medidas em centímetros para recomendação instantânea:
      </p>

      <form id="sizeCalculatorForm" onsubmit="event.preventDefault(); calculateRecommendedSize();">
        <div class="calc-inputs-row">
          <div class="calc-input-group">
            <label for="inputBusto">Busto (cm)</label>
            <input type="number" id="inputBusto" placeholder="Ex: 88" min="60" max="140" required>
          </div>
          <div class="calc-input-group">
            <label for="inputTorax">Tórax / Cintura (cm)</label>
            <input type="number" id="inputTorax" placeholder="Ex: 74" min="50" max="130" required>
          </div>
        </div>

        <button type="submit" class="btn btn-primary btn-sm btn-full">
          Calcular Meu Tamanho
        </button>
      </form>

      <div class="calc-result" id="calcResultDisplay">
        <!-- Preenchido via size-guide.js -->
      </div>
    </div>

  </div>
</div>
