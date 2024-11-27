# Boilerplate Laravel Livewire TailwindCSS Component Library

## Descrição

Esta é uma biblioteca de componentes para Laravel Livewire utilizando TailwindCSS. Ela facilita a criação de interfaces dinâmicas e responsivas com componentes reutilizáveis.

## Requisitos

- PHP >= 8.4
- Laravel >= 11.x
- Livewire >= 3.x
- TailwindCSS >= 2.x

## Instalação

1. Instale a biblioteca via Composer:

    ```bash
    composer require johngna/boilerplate
    ```

2. Publique os arquivos de configuração (se houver):

    ```bash
    php artisan vendor:publish --tag="boilerplate-config"
    ```

3. Inclua o CSS do TailwindCSS no seu projeto:

    ```bash
    npm install
    npm run dev
    ```

## Uso

### Exemplo de Componente

```php
<x-boilerplate:input />
```

### Customização

Você pode customizar os componentes publicando os arquivos de views:

```bash
php artisan vendor:publish --tag="boilerplate-views"
```

## Contribuição

1. Faça um fork do projeto.
2. Crie uma branch para sua feature (`git checkout -b feature/nova-feature`).
3. Commit suas mudanças (`git commit -am 'Adiciona nova feature'`).
4. Faça push para a branch (`git push origin feature/nova-feature`).
5. Crie um novo Pull Request.

## Licença

Este projeto está licenciado sob a [MIT License](LICENSE).

## Contato

Para mais informações, entre em contato pelo email: [johgnan@gmail.com](mailto:johngna@gmail.com).
