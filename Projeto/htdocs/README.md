# AURA Lingerie — Catálogo Digital & Ateliê de Moda Íntima Feminina

Projeto de site vitrine e showroom para moda íntima feminina (lingerie), desenvolvido exclusivamente com **PHP**, **HTML5**, **CSS3** e **JavaScript (Vanilla)**.

O site foi desenhado para ser **minimalista**, com **foco em visualização clara de produtos, tecidos, medidas e localização física do Ateliê** (sem fluxo de venda ou sacola online).

---

## 💎 Características Principais

1. **Design Minimalista & Alta Legibilidade:**
   - Paleta de cores neutras e quentes (*off-white*, nude, carvão suave e dourado de luxo).
   - Tipografia refinada (*Cormorant Garamond* para títulos elegantes e *Plus Jakarta Sans* para interface e dados técnicos).
   - Generoso espaço negativo (*whitespace*) para leitura leve e sem distrações visuais.

2. **Catálogo & Vitrine Interativa de Produtos:**
   - **Galeria com Zoom:** Lupa interativa ao passar o mouse para examinar renda, forros e texturas em alta resolução.
   - **Guia de Medidas & Calculadora Interativa:** Modal intuitivo onde a cliente digita as medidas de busto e tórax em centímetros e recebe recomendação instantânea do tamanho ideal (P, M, G, GG).
   - **Transparência de Composição:** Destaque para o forro íntimo em 100% algodão natural hipoalergênico e instruções de conservação.
   - **Botão Direto para WhatsApp:** A cliente escolhe a cor e o tamanho na página do produto e o botão gera automaticamente uma mensagem personalizada para a consultora do Ateliê.

3. **Nova Página: "O Ateliê" (`atelie.php`):**
   - **Filosofia da Marca:** Manifesto sobre conforto, respeito à anatomia feminina e autocuidado.
   - **Experiência Presencial:** Detalhes sobre os provadores privativos e consultoria sob medida.
   - **Localização & Endereço Completo:**
     - Alameda Lorena, 1420 — Jardins, São Paulo - SP.
     - Horários de funcionamento (Segunda a Sábado).
     - Mapa interativo (Google Maps) integrado.
   - **Canais de Contato & Agendamento:**
     - Botão WhatsApp para atendimento ágil.
     - E-mail e Instagram do ateliê.
     - Formulário minimalista de agendamento e dúvidas.

---

## 📁 Estrutura de Arquivos

```text
projetoI/
├── assets/
│   ├── css/
│   │   ├── variables.css      # Cores, fontes e variáveis globais
│   │   ├── global.css         # Reset, container, header e footer
│   │   ├── components.css     # Botões, cards de produto e modal de medidas
│   │   └── product.css        # Galeria com zoom e acordeões técnicos
│   └── js/
│       ├── main.js            # Menu mobile, sticky header, acordeões e modais
│       ├── gallery.js         # Troca de fotos e lupa/zoom interativo
│       └── size-guide.js      # Calculadora de recomendação de tamanho
├── config/
│   └── config.php             # Configurações globais e helpers
├── data/
│   └── products.php           # Catálogo com 8 produtos realistas e detalhados
├── includes/
│   ├── header.php             # Topbar, logotipo e menu de navegação
│   ├── footer.php             # Pilares do ateliê, endereço e horários
│   ├── product-card.php       # Card reutilizável de produto com foto no hover
│   └── size-modal.php         # Janela modal do guia de medidas
├── index.php                  # Página Inicial (Home / Apresentação)
├── categoria.php              # Catálogo completo com filtros e ordenação
├── produto.php                # Página de Detalhes da Peça (PDP)
├── atelie.php                 # Página "O Ateliê" (Sobre, Endereço e Contato)
└── README.md                  # Documentação do projeto
```

---

## 🚀 Como Executar o Projeto Localmente

Abra o terminal (PowerShell ou Prompt de Comando) na pasta do projeto e execute:

```powershell
php -S localhost:8000
```

Em seguida, abra o navegador e acesse:
👉 **[http://localhost:8000](http://localhost:8000)**
