
# PH Lingerie

PH Lingerie é um projeto interdisciplinar de desenvolvimento web que consiste em um site vitrine para uma loja de roupas íntimas femininas. O objetivo do projeto é oferecer um catálogo digital elegante e funcional, onde clientes podem navegar pelos produtos da loja — sutiãs, calcinhas, cuecas, meias e básicos —, consultar detalhes técnicos das peças, descobrir o tamanho ideal e entrar em contato diretamente via WhatsApp para realizar pedidos. O site também apresenta o ateliê físico da marca, com endereço, horários de funcionamento e formulário de agendamento de visitas.

## Integrantes do Grupo

Thiago Mendonça Falci
Pedro Henrique Mesquita
Víctor Sturaro Figueiredo Bueno Quirino.

## Tecnologias Utilizadas

PHP 8.3
HTML5 
CSS3
JavaScript

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

