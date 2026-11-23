<?php
/**
 * Catálogo de Produtos - AURA Moda Íntima
 * Produtos com dados realistas, especificações de tecido e modelagem
 */

$PRODUCTS = [
    [
        'id' => 1,
        'slug' => 'sutia-triangulo-renda-nocturne',
        'name' => 'Sutiã sem bojo',
        'category' => 'sutias',
        'category_label' => 'Sutiãs',
        'price' => 149.90,
        'original_price' => 179.90,
        'is_new' => true,
        'is_best_seller' => true,
        'rating' => 4.9,
        'reviews_count' => 38,
        'images' => [
            '/Images/Sutia.jpg',
            
        ],
        'colors' => [
            ['name' => 'Preto Ébano', 'hex' => '#C1A'],
            ['name' => 'Nude Areia', 'hex' => '#D5BFA7'],
            ['name' => 'Terracota Suave', 'hex' => '#B87A65']
        ],
        'sizes' => ['P (40)', 'M (42)', 'G (44)', 'GG (46)'],
        'short_description' => 'Sutiã sem aro com modelagem triangular anatômica. Renda floral delicada com toque suave na pele e elástico aveludado na base para sustentação natural.',
        'details' => [
            'Modelagem' => 'Triângulo sem aro nem bojo estruturado',
            'Composição da Renda' => '88% Poliamida, 12% Elastano',
            'Forro do Busto' => 'Tule invisível respirável de toque sedoso',
            'Fecho' => 'Posterior com 3 níveis de regulagem em gancho metálico hipoalergênico',
            'Alças' => 'Reguláveis e macias com acabamento acetinado de 10mm'
        ],
        'care' => [
            'Lavar exclusivamente à mão com sabão neutro',
            'Não utilizar alvejantes ou amaciantes fortes',
            'Secar à sombra em superfície horizontal',
            'Não passar a ferro'
        ]
    ],
    [
        'id' => 2,
        'slug' => 'calcinha-alta-sem-costura-essential',
        'name' => 'Calcinha Hot Pant Sem Costura Essential',
        'category' => 'calcinhas',
        'category_label' => 'Calcinhas',
        'price' => 59.90,
        'original_price' => null,
        'is_new' => true,
        'is_best_seller' => true,
        'rating' => 4.8,
        'reviews_count' => 64,
        'images' => [
            '/Images/Calcinha.jpg',
             ],
        'colors' => [
            ['name' => 'Nude Areia', 'hex' => '#D5BFA7'],
            ['name' => 'Preto Ébano', 'hex' => '#1A1A1A'],
        ],
        'sizes' => ['P', 'M', 'G', 'GG'],
        'short_description' => 'Cintura alta desenhada a laser sem costuras visíveis. Não marca sob vestidos ou roupas justas. Forro íntimo em 100% algodão biológico.',
        'details' => [
            'Modelagem' => 'Cintura alta (Hot Pant) com corte anatômico a laser',
            'Tecido Principal' => 'Microfibra tecnológica ultrafina (82% Poliamida, 18% Elastano)',
            'Forro Íntimo' => '100% Algodão Puro Hipoalergênico (Proteção natural da flora íntima)',
            'Acabamento' => 'Termofusionado sem costuras laterais'
        ],
        'care' => [
            'Pode ser lavada à mão ou em ciclo delicado em saquinho protetor',
            'Não torcer ou usar secadora',
            'Secar em varal à sombra'
        ]
    ],
    [
        'id' => 3,
        'slug' => 'body-manga-longa-tule-second-skin',
        'name' => 'Cueca infantil masculina',
        'category' => 'Cuecas',
        'category_label' => 'Cuecas',
        'price' => 219.90,
        'original_price' => 249.90,
        'is_new' => false,
        'is_best_seller' => true,
        'rating' => 5.0,
        'reviews_count' => 29,
        'images' => [
            '/Images/Cueca1.jpg',],
        'colors' => [
            ['name' => 'Preto Noir', 'hex' => '#1A1A1A'],
            ['name' => 'Moka Avelã', 'hex' => '#8C6754']
        ],
        'sizes' => ['P', 'M', 'G'],
        'short_description' => 'Peça de alfaiataria íntima que transita com perfeição da intimidade para a composição de looks com blazers e calças fluidas. Tule elástico com toque aveludado.',
        'details' => [
            'Modelagem' => 'Ajustada ao corpo com decote canoa e mangas longas elegantes',
            'Tecido' => 'Tule de alta elasticidade com memória de forma (90% Poliamida, 10% Elastano)',
            'Fechamento Inferior' => 'Ganchos discretos com 2 regulagens e forro de algodão',
            'Transparência' => 'Média/sutil'
        ],
        'care' => [
            'Lavar à mão com água fria',
            'Evitar atrito com joias e anéis pontiagudos ao vestir',
            'Não secar em máquina'
        ]
    ],
    [
        'id' => 4,
        'slug' => 'conjunto-seda-pura-camisole-solstice',
        'name' => 'Conjunto meias infantis masculino',
        'category' => 'Meias',
        'category_label' => 'Meias',
        'price' => 289.00,
        'original_price' => null,
        'is_new' => true,
        'is_best_seller' => false,
        'rating' => 4.9,
        'reviews_count' => 15,
        'images' => [
            '/Images/Meias1.jpg',
            '/Images/Meias2.jpg'
        ],
        'colors' => [
            ['name' => 'Champanhe Dourado', 'hex' => '#E6D7C3'],
            ['name' => 'Verde Oliva Pálido', 'hex' => '#8C907A'],
            ['name' => 'Preto Acetinado', 'hex' => '#111111']
        ],
        'sizes' => ['P', 'M', 'G'],
        'short_description' => 'Toque acetinado ultra-suave com caimento solto e fluido. O conjunto perfeito para  tranquilas de descanso com sofisticação atemporal.',
        'details' => [
            'Peças Inclusas' => 'Meais reguláveis + 1 Short com elástico flexível',
            'Tecido' => 'Cetim de Seda Tecnológico (Toque similar à seda pura com durabilidade superior)',
            'Composição' => '96% Poliéster Premium Acetinado, 4% Elastano',
            'Corte' => 'Evasê suave com bainha francesa'
        ],
        'care' => [
            'Lavar em água fria com sabão líquido suave',
            'Passar a vapor ou a ferro em temperatura muito baixa do lado avesso'
        ]
    ],
    [
        'id' => 5,
        'slug' => 'sutia-balconet-com-aro-cleo',
        'name' => 'Sutiã Estruturado',
        'category' => 'sutias',
        'category_label' => 'Sutiãs',
        'price' => 169.90,
        'original_price' => 199.90,
        'is_new' => false,
        'is_best_seller' => true,
        'rating' => 4.8,
        'reviews_count' => 47,
        'images' => [
            '/Images/Sutia1.jpg',
            ],
        'colors' => [
            ['name' => 'Rosa', 'hex' => '#b94e72'],
            ],
        'sizes' => ['40B', '42B', '42C', '44B', '44C', '46B'],
        'short_description' => 'Decote reto no estilo Balconet parisiense. Conta com aros anatômicos que elevam e desenham o colo sem apertar.',
        'details' => [
            'Modelagem' => 'Balconet com aro de sustentação anatômico flexível',
            'Bojo' => 'Sem bojo de espuma; forro duplo de microtule que molda a curvatura natural',
            'Composição' => '85% Poliamida, 15% Elastano',
            'Alças' => 'Posicionadas mais abertas nos ombros para valorizar decotes'
        ],
        'care' => [
            'Lavar à mão para preservar a estrutura dos aros',
            'Secar naturalmente sem torcer'
        ]
    ],
    [
        'id' => 6,
        'slug' => 'calcinha-fio-renda-artesanal-aura',
        'name' => 'Calcinha Artesanal Aura',
        'category' => 'calcinhas',
        'category_label' => 'Calcinhas',
        'price' => 49.90,
        'original_price' => null,
        'is_new' => false,
        'is_best_seller' => true,
        'rating' => 4.9,
        'reviews_count' => 82,
        'images' => [
            '/images/calcinha1.jpg',
            '/images/calcinha2.jpg',
         ],
        'colors' => [
            ['name' => 'Preto Ébano', 'hex' => '#1A1A1A'],
            ['name' => 'Nude Areia', 'hex' => '#D5BFA7'],
            ['name' => 'Bordeaux Profundo', 'hex' => '#5C2223']
        ],
        'sizes' => ['P', 'M', 'G'],
        'short_description' => 'Fio duplo com laterais rendadas médias que não apertam nem marcam a lateral dos quadris. Forro 100% algodão para uso confortável diário.',
        'details' => [
            'Modelagem' => 'Fio dental com lateral média rendada e cós elástico aveludado',
            'Forro Íntimo' => '100% Algodão Natural Hipoalergênico',
            'Renda' => '86% Poliamida, 14% Elastano com acabamento antidesfiamento'
        ],
        'care' => [
            'Lavar à mão com sabonete neutro ou de glicerina',
            'Secar à sombra'
        ]
    ],
    [
        'id' => 7,
        'slug' => 'robe-longo-fluido-aurora',
        'name' => 'Meia feminina colorida conjunto',
        'category' => 'Meias',
        'category_label' => 'Meias',
        'price' => 269.90,
        'original_price' => 310.00,
        'is_new' => true,
        'is_best_seller' => false,
        'rating' => 4.9,
        'reviews_count' => 19,
        'images' => [
            '/Images/Meias.jpg'
        ],
        'colors' => [
            ['name' => 'Branco', 'hex' => '#ffffff'],
            ['name' => 'Pink', 'hex' => '#da2727']
        ],
        'sizes' => ['P/M (Único)', 'G/GG'],
        'short_description' => 'Comprimento midi elegante, mangas amplas estilo quimono e faixa ajustável de amarração na cintura. Toque de seda com movimento natural.',
        'details' => [
            'Modelagem' => 'Transpassada estilo quimono com passantes laterais e amarração',
            'Composição' => '95% Poliéster Acetinado High-Grade, 5% Elastano',
            'Comprimento' => 'Midi (logo abaixo dos joelhos)'
        ],
        'care' => [
            'Lavagem delicada à mão ou máquina com saco protetor',
            'Secar em cabide à sombra'
        ]
    ],
    [
        'id' => 8,
        'slug' => 'top-conforto-algodao-organico-pure',
        'name' => 'Top Bralette em Algodão Orgânico Pure',
        'category' => 'basicos',
        'category_label' => 'Básicos & Dia a Dia',
        'price' => 89.90,
        'original_price' => null,
        'is_new' => false,
        'is_best_seller' => true,
        'rating' => 5.0,
        'reviews_count' => 112,
        'images' => [
            '/Images/Top.jpg',
            '/Images/Top1.jpg',
        ],
        'colors' => [
            ['name' => 'Rosa', 'hex' => '#CC11EA'],
            ['name' => 'Verde', 'hex' => '#22C222'],
            ['name' => 'Azul', 'hex' => '#1a78b6']
        ],
        'sizes' => ['P', 'M', 'G', 'GG'],
        'short_description' => 'Projetado para respirar. Tecido em 95% algodão biológico certificado com toque extremamente macio. Perfeito para trabalhar de casa ou dormir.',
        'details' => [
            'Modelagem' => 'Bralette sem aros, sem bojo e sem fechos metálicos nas costas',
            'Tecido' => '95% Algodão Orgânico Penteado, 5% Elastano',
            'Certificação' => 'Algodão sustentável amigo da pele'
        ],
        'care' => [
            'Pode ser lavado em máquina em ciclo normal de algodão',
            'Evitar água excessivamente quente'
        ]
    ]
];

/**
 * Busca produto por ID
 */
function getProductById(int $id): ?array {
    global $PRODUCTS;
    foreach ($PRODUCTS as $product) {
        if ($product['id'] === $id) {
            return $product;
        }
    }
    return null;
}

/**
 * Busca produto por Slug
 */
function getProductBySlug(string $slug): ?array {
    global $PRODUCTS;
    foreach ($PRODUCTS as $product) {
        if ($product['slug'] === $slug) {
            return $product;
        }
    }
    return null;
}

/**
 * Filtra produtos por categoria
 */
function getProductsByCategory(?string $category = null): array {
    global $PRODUCTS;
    if (!$category || $category === 'todos') {
        return $PRODUCTS;
    }
    return array_filter($PRODUCTS, function($p) use ($category) {
        return strtolower($p['category']) === strtolower($category);
    });
}
