
<p align="center">
  <img src="Projeto/htdocs/Images/PH.jpg" alt="PH Lingerie Logo" width="80"/>
</p>

<h1 align="center">PH Lingerie — Catálogo Digital & Ateliê de Moda Íntima</h1>

<p align="center">
  Projeto interdisciplinar de desenvolvimento web — site vitrine completo para moda íntima feminina.
</p>

<p align="center">
  <img src="https://img.shields.io/badge/PHP-8.3-777BB4?logo=php&logoColor=white" alt="PHP"/>
  <img src="https://img.shields.io/badge/HTML5-E34F26?logo=html5&logoColor=white" alt="HTML5"/>
  <img src="https://img.shields.io/badge/CSS3-1572B6?logo=css3&logoColor=white" alt="CSS3"/>
  <img src="https://img.shields.io/badge/JavaScript-F7DF1E?logo=javascript&logoColor=black" alt="JavaScript"/>
  <img src="https://img.shields.io/badge/status-concluído-brightgreen" alt="Status"/>
</p>

---

## 📋 Índice

- [Sobre o Projeto](#-sobre-o-projeto)
- [Integrantes do Grupo](#-integrantes-do-grupo)
- [Tecnologias Utilizadas](#-tecnologias-utilizadas)
- [Requisitos e Dependências](#-requisitos-e-dependências)
- [Instalação e Execução](#-instalação-e-execução)
- [Funcionalidades Principais](#-funcionalidades-principais)
- [Estrutura de Arquivos](#-estrutura-de-arquivos)
- [Exemplos de Funcionamento](#-exemplos-de-funcionamento)

---

## 📌 Sobre o Projeto

A **PH Lingerie** é uma loja de roupas íntimas femininas — sutiãs, calcinhas, cuecas, meias e básicos — apresentada por meio de um **site vitrine digital minimalista e elegante**, desenvolvido como projeto interdisciplinar.

O objetivo do projeto é construir uma plataforma web completa para a PH Lingerie, permitindo que clientes naveguem pelo catálogo de produtos, consultem detalhes técnicos das peças (composição do tecido, modelagem, cuidados), encontrem o tamanho ideal com a calculadora interativa e entrem em contato direto via WhatsApp para concluir pedidos. O site também apresenta o ateliê físico, com localização, horários e formulário de agendamento.

> [!NOTE]
> O projeto **não possui fluxo de e-commerce** (sacola/checkout online). O contato e a venda são realizados por WhatsApp ou visita presencial ao ateliê.

---

## 👥 Integrantes do Grupo

| Nome | GitHub |
|------|--------|
| **Thiago Mendonça Falci** | [@falci](https://github.com/falci) |
| **Pedro Henrique Mesquita** | — |
| **Víctor Sturaro Figueiredo Bueno Quirino** | — |

---

## 🛠 Tecnologias Utilizadas

| Tecnologia | Uso |
|------------|-----|
| **PHP 8.3** | Back-end: renderização de páginas, lógica de filtragem e ordenação de produtos, geração dinâmica de URLs do WhatsApp |
| **HTML5** | Estrutura semântica de todas as páginas |
| **CSS3** | Estilização com variáveis customizadas, layout responsivo (Grid + Flexbox), animações e efeitos |
| **JavaScript (Vanilla)** | Interatividade: menu mobile, sticky header, galeria com zoom, calculadora de tamanho, modais e acordeões |
| **Google Maps Embed** | Mapa interativo na página do Ateliê |
| **Google Fonts** | Tipografia: *Cormorant Garamond* (títulos) e *Plus Jakarta Sans* (interface) |

---

## 📦 Requisitos e Dependências

| Requisito | Versão Mínima | Notas |
|-----------|--------------|-------|
| **PHP** | 8.0+ | Recomendado 8.3 |
| **Servidor Web** | — | XAMPP, Laragon, WAMP, ou PHP embutido (`php -S`) |
| **Navegador moderno** | — | Chrome, Firefox, Edge, Safari |
| **Conexão com internet** | — | Apenas para carregar as fontes do Google Fonts e o mapa |

> [!IMPORTANT]
> Não há banco de dados. O catálogo de produtos está definido diretamente no arquivo `data/products.php`. Nenhuma extensão extra do PHP é necessária além do core.

---

## 🚀 Instalação e Execução

### Opção 1 — Servidor embutido do PHP (mais simples)

```bash
# 1. Clone o repositório
git clone https://github.com/seu-usuario/projetoInterdisciplinar.git
cd projetoInterdisciplinar/Projeto/htdocs

# 2. Inicie o servidor PHP
php -S localhost:8000

# 3. Acesse no navegador
# http://localhost:8000
```

### Opção 2 — XAMPP / Laragon / WAMP

1. Copie a pasta `Projeto/htdocs` para dentro do diretório `htdocs` do seu servidor (ex: `C:\xampp\htdocs\phlingerie`).
2. Inicie o Apache pelo painel do XAMPP/Laragon.
3. Acesse `http://localhost/phlingerie` no navegador.

> [!TIP]
> No Windows com PowerShell, você pode iniciar o servidor diretamente com:
> ```powershell
> cd .\Projeto\htdocs
> php -S localhost:8000
> ```

---

## ✨ Funcionalidades Principais

### 🏠 Página Inicial (`index.php`)
- **Hero editorial** com chamada para o catálogo e o ateliê.
- **Grid de categorias visuais** para navegação rápida.
- **Seção de Mais Vendidos** com destaque para os produtos best sellers.
- **Lançamentos** com produtos marcados como novidade.

### 🗂 Catálogo de Produtos (`categoria.php`)
- **Filtro por categoria:** Sutiãs, Calcinhas, Cuecas, Meias, Básicos ou Coleção Completa.
- **Filtro por tamanho:** P, M, G, GG.
- **Ordenação dinâmica:** Destaques, Menor Preço, Maior Preço, Mais Recentes.
- Cards de produto com imagem em hover, badge de novo/best seller e avaliação com estrelas.

### 🔍 Página de Produto (`produto.php`)
- **Galeria de fotos com zoom interativo** (efeito lupa ao passar o mouse).
- **Seletor de cor e tamanho** com atualização dinâmica via JavaScript.
- **Calculadora de Tamanho:** modal onde a cliente digita medidas de busto e tórax em cm e recebe recomendação do tamanho (P, M, G, GG) instantaneamente.
- **Ficha técnica detalhada:** composição do tecido, modelagem, fecho, alças.
- **Instruções de conservação** em acordeão expansível.
- **Botão de WhatsApp** que gera automaticamente uma mensagem personalizada com produto, cor e tamanho selecionados.
- **Produtos relacionados** ao final da página.

### 🏛 O Ateliê (`atelie.php`)
- **Manifesto de marca:** filosofia de conforto e respeito ao corpo feminino.
- **Endereço e horários** de funcionamento.
- **Mapa interativo** via Google Maps.
- **Canais de contato:** WhatsApp, e-mail e Instagram.
- **Formulário de agendamento** de visita.

### 🎨 Design & UX
- Paleta neutra e quente: *off-white*, nude, carvão suave e dourado de luxo.
- **100% responsivo** — funciona em mobile, tablet e desktop.
- Header fixo (*sticky*) com navegação suave.
- Menu hambúrguer animado para mobile.
- Amplo uso de *whitespace* para leitura confortável.

---

## 📁 Estrutura de Arquivos

```text
projetoInterdisciplinar/
├── Projeto/
│   └── htdocs/                    # Raiz do servidor web
│       ├── index.php              # Página Inicial (Home)
│       ├── categoria.php          # Catálogo com filtros e ordenação
│       ├── produto.php            # Página de detalhes do produto (PDP)
│       ├── atelie.php             # Página do Ateliê (Sobre, Endereço, Contato)
│       ├── products.php           # (legado — dados de produtos)
│       ├── assets/
│       │   ├── css/
│       │   │   ├── variables.css  # Cores, fontes e variáveis CSS globais
│       │   │   ├── global.css     # Reset, container, header e footer
│       │   │   ├── components.css # Botões, cards, modal de medidas
│       │   │   ├── product.css    # Galeria com zoom e acordeões
│       │   │   └── checkout.css   # Estilos de checkout (reservado)
│       │   └── js/
│       │       ├── main.js        # Menu mobile, sticky header, acordeões, modais
│       │       ├── gallery.js     # Troca de fotos e lupa/zoom interativo
│       │       └── size-guide.js  # Calculadora de recomendação de tamanho
│       ├── config/
│       │   └── config.php         # Configurações globais e funções helper
│       ├── data/
│       │   └── products.php       # Catálogo com 8 produtos detalhados
│       ├── includes/
│       │   ├── header.php         # Topbar, logomarca e menu de navegação
│       │   ├── footer.php         # Pilares do ateliê, endereço e horários
│       │   ├── product-card.php   # Card reutilizável de produto
│       │   └── size-modal.php     # Modal do guia de medidas
│       └── Images/                # Fotos dos produtos
│           ├── Sutia.jpg
│           ├── Calcinha.jpg
│           ├── Cueca1.jpg
│           ├── Meias.jpg
│           ├── Top.jpg
│           └── ...
└── README.md                      # Este arquivo
```

---

## 🖼 Exemplos de Funcionamento

### Página Inicial
> Hero editorial com chamada para o catálogo, grid de categorias e seção de destaques.

```
┌──────────────────────────────────────┐
│  PH Lingerie  ATELIÊ & LINGERIE      │  ← Header fixo com nav
├──────────────────────────────────────┤
│                                      │
│  A arte de se sentir bem    [Foto]   │  ← Hero editorial
│  na própria pele.                    │
│  [Explorar Catálogo] [O Ateliê]      │
│                                      │
│  100% Algodão · Zero Aperto          │
├──────────────────────────────────────┤
│  Categorias: Sutiãs · Calcinhas ...  │  ← Grid de categorias
├──────────────────────────────────────┤
│  ★ Mais Vendidos                     │  ← Cards de produtos
└──────────────────────────────────────┘
```

### Calculadora de Tamanho
A cliente informa **busto** e **tórax** em cm e recebe a recomendação instantânea:

| Diferença (busto − tórax) | Tamanho recomendado |
|--------------------------|-------------------|
| Até 14 cm | **P (40)** |
| 15 – 17 cm | **M (42)** |
| 18 – 20 cm | **G (44)** |
| Acima de 20 cm | **GG (46)** |

### Botão WhatsApp
Na página do produto, ao selecionar cor e tamanho e clicar em **"Consultar via WhatsApp"**, o site abre automaticamente uma conversa com a mensagem pré-preenchida:

```
Olá! Tenho interesse no produto:
📦 Sutiã sem bojo
🎨 Cor: Nude Areia
📏 Tamanho: M (42)

Poderia me dar mais informações?
```

---

## 📄 Licença

Projeto acadêmico desenvolvido para fins educacionais. Todos os direitos reservados aos autores.

---

<p align="center">
  Feito com ❤️ por <strong>Thiago Mendonça Falci</strong>, <strong>Pedro Henrique Mesquita</strong> e <strong>Víctor Sturaro Figueiredo Bueno Quirino</strong>
</p>

