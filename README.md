# RoteStore

Uma plataforma de e-commerce inspirada em sites de venda, desenvolvida para simular uma experiência de navegação, listagem e gerenciamento de carrinho de compras. O sistema utiliza Seeders e Factories do Laravel para gerar um catálogo aleatório de produtos a cada execução.

---

## Tecnologias Utilizadas

* **Backend:** [Laravel](https://laravel.com/)
* **Database:** MySQL / HeidiSQL
* **Styling:** [Tailwind CSS](https://tailwindcss.com/)
* **UI Components:** [daisyUI](https://daisyui.com/)

---

## Funcionalidades

* **Geração Dinâmica de Produtos:** População automática do catálogo usando Laravel Seeders & Factories.
* **Catálogo de Produtos:** Exibição em grid responsivo com componentes do daisyUI.
* **Carrinho de Compras:** Adição, remoção e atualização de quantidade de itens em tempo real.
* **Filtros e Busca:** Navegação fluida pelas categorias e produtos simulados.

---

## Como rodar o projeto localmente

### Pré-requisitos
* PHP (v8.2 ou superior)
* Composer
* Node.js & NPM
* MySQL ou HeidiSQL

---

### Passo a Passo

1. **Clonar o repositório**
   ```bash
   git clone https://github.com/soliveira-09/siteteste-laravel.git
   cd siteteste-laravel
   ```

2. **Instalar as dependências do PHP**
    ```
    composer install
    ```

3. **Instalar e compilar as dependências de Frontend (Tailwind + daisyUI)**
    ```
    npm install
    npm run build
    ```

4. **Configurar as Variáveis de Ambiente**
    ```
    cp .env.example .env
    ```

5. **Gerar a chave da aplicação**
    ```
    php artisan key:generate
    ```

6. **Rodar as Migrations e Popular o Banco (Seeders)**
    ```
    php artisan migrate --seed
    ```

7. **Iniciar o servidor de desenvolvimento**
    ```
    php artisan serve
    ```