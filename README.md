Mini projeto de exemplo pra testar um componente PDF no PHP.

```bash
# 1 - instala a dependência do PDF
composer install setasign/fpdf

# 2 - rodar local
php -S localhost:8000 -t src

# 3 - abra no navegador
# http://localhost:8000/
```

## Pré requisitos
- PHP 7.3
- Composer

# Sobre o componente "fpdf"

Segundo esse artigo, esse é o melhor componente de PDF para o PHP. E, de fato, ele funcionou bem de primeira. Enquanto o outro componente apresentou problemas.

https://ourcodeworld.com/articles/read/226/top-5-best-open-source-pdf-generation-libraries-for-php

# Sobre o Autoload

Nossas dependências Também são carregadas pelo autoloader do composer. Bastou apenas configurar o nome da nossa namespace e a pasta correspondente.

composer.json

```
"autoload": {
    "psr-4": {
      "raffaClasses\\": "src/classes"
    }
```

```bash
# E depois atualizar o autoloader.
composer update
```
