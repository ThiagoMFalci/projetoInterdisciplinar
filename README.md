
# PH Lingerie

PH Lingerie é um projeto interdisciplinar de desenvolvimento web que consiste em um site vitrine para uma loja de roupas íntimas femininas. O objetivo do projeto é oferecer um catálogo digital elegante e funcional, onde clientes podem navegar pelos produtos da loja — sutiãs, calcinhas, cuecas, meias e básicos —, consultar detalhes técnicos das peças, descobrir o tamanho ideal e entrar em contato diretamente via WhatsApp para realizar pedidos. O site também apresenta o ateliê físico da marca, com endereço, horários de funcionamento e formulário de agendamento de visitas.

## Integrantes do Grupo

O projeto foi desenvolvido por Thiago Mendonça Falci, Pedro Henrique Mesquita e Víctor Sturaro Figueiredo Bueno Quirino.

## Tecnologias Utilizadas

O projeto foi desenvolvido inteiramente com PHP 8.3 no back-end, responsável pela renderização dinâmica das páginas, filtragem e ordenação dos produtos e geração automática dos links do WhatsApp. A estrutura das páginas foi construída com HTML5 semântico, a estilização com CSS3 utilizando variáveis customizadas, Grid e Flexbox para layout responsivo, e toda a interatividade do front-end com JavaScript puro (Vanilla JS), sem dependência de frameworks externos. O mapa do ateliê é embutido via Google Maps Embed, e as fontes utilizadas são Cormorant Garamond (títulos) e Plus Jakarta Sans (interface), ambas do Google Fonts.

## Requisitos e Dependências

Para rodar o projeto localmente é necessário ter o PHP na versão 8.0 ou superior instalado na máquina. Não há banco de dados — o catálogo de produtos está definido diretamente no arquivo `data/products.php`. Nenhuma extensão adicional do PHP é necessária além do core padrão. Para o mapa e as fontes carregarem corretamente, é necessário estar conectado à internet.

## Instalação, Configuração e Execução

Para executar o projeto, clone o repositório e navegue até a pasta `Projeto/htdocs`. Em seguida, inicie o servidor embutido do PHP com o comando `php -S localhost:8000` e acesse `http://localhost:8000` no navegador. Alternativamente, é possível copiar a pasta `Projeto/htdocs` para dentro do diretório `htdocs` de um servidor local como XAMPP, Laragon ou WAMP, iniciar o Apache pelo painel do servidor e acessar a aplicação pelo endereço correspondente no navegador. Não é necessária nenhuma configuração adicional de banco de dados ou variáveis de ambiente.

## Funcionalidades Principais

A página inicial apresenta um hero editorial com chamada para o catálogo e o ateliê, um grid de categorias visuais para navegação rápida, e seções de produtos mais vendidos e lançamentos.

O catálogo de produtos permite filtrar por categoria (Sutiãs, Calcinhas, Cuecas, Meias, Básicos ou Coleção Completa) e por tamanho (P, M, G, GG), além de ordenar os resultados por destaques, menor preço, maior preço ou mais recentes.

A página de cada produto conta com galeria de fotos com zoom interativo ao passar o mouse, seletor de cor e tamanho com atualização dinâmica, ficha técnica detalhada com composição do tecido e cuidados de conservação em acordeão expansível, calculadora de tamanho (onde a cliente informa as medidas de busto e tórax em centímetros e recebe a recomendação instantânea do tamanho ideal), e um botão que abre o WhatsApp com uma mensagem já preenchida com o nome do produto, cor e tamanho selecionados.

A página do ateliê apresenta a filosofia da marca, endereço e horários de funcionamento, mapa interativo via Google Maps, canais de contato (WhatsApp, e-mail e Instagram) e formulário de agendamento de visitas.

O design do site é minimalista e 100% responsivo, com paleta de cores neutra e quente, tipografia refinada, header fixo com menu hambúrguer animado para mobile e amplo uso de espaço em branco para leitura confortável.

## Estrutura de Arquivos

A raiz do projeto fica em `Projeto/htdocs/`. Os arquivos principais de páginas são `index.php` (home), `categoria.php` (catálogo com filtros), `produto.php` (detalhes do produto) e `atelie.php` (página do ateliê). Os estilos estão organizados em `assets/css/` nos arquivos `variables.css`, `global.css`, `components.css` e `product.css`. Os scripts JavaScript estão em `assets/js/` nos arquivos `main.js`, `gallery.js` e `size-guide.js`. As configurações globais e funções auxiliares ficam em `config/config.php`, o catálogo de produtos em `data/products.php`, os componentes reutilizáveis de cabeçalho, rodapé e cards em `includes/`, e as imagens dos produtos em `Images/`.

