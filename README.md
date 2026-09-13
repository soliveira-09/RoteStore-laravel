# RoteStore

Uma plataforma de e-commerce inspirada em sites de venda, desenvolvida para simular uma experiência de navegação, listagem e gerenciamento de carrinho de compras. O sistema utiliza Seeders e Factories do Laravel para gerar um catálogo aleatório de produtos a cada execução.

![Demonstração da RoteStore](assets/preview.gif)


---

## Tecnologias Utilizadas

* **Backend:** [Laravel](https://laravel.com/)
* **Database:** MySQL / HeidiSQL
* **Styling:** [Tailwind CSS](https://tailwindcss.com/) (via CDN)
* **UI Components:** [daisyUI](https://daisyui.com/) (via CDN)

---

## Funcionalidades

* **Geração Dinâmica de Produtos:** População automática do catálogo usando Laravel Seeders & Factories.
* **Catálogo de Produtos:** Exibição em grid responsivo com componentes do daisyUI.
* **Carrinho de Compras:** Adição, remoção e atualização de quantidade de itens em tempo real.
* **Filtros e Busca:** Navegação fluida pelas categorias e produtos simulados.

---

## Como rodar o projeto

### Pré-requisitos
* PHP (v8.2 ou superior)
* Composer
* MySQL ou HeidiSQL

---

### Passo a Passo

1. **Clonar o repositório**
   ```bash
   git clone https://github.com/soliveira-09/RoteStore-laravel.git
   cd RoteStore-laravel
   ```

2. **Instalar as dependências do PHP**
    ```
    composer install
    ```

3. **Configurar as Variáveis de Ambiente**
    ```
    cp .env.example .env
    ```
    > ⚠️ Abra o arquivo .env e configure o `DB_DATABASE`, `DB_USERNAME` e `DB_PASSWORD`, além de criar o banco
    antes dos próximos passos

4. **Gerar a chave da aplicação**
    ```
    php artisan key:generate
    ```

5. **Rodar as Migrations e Popular o Banco (Seeders)**
    ```
    php artisan migrate --seed
    ```

6. **Iniciar o servidor de desenvolvimento**
    ```
    php artisan serve
    ```

---

### Melhorias futuras

* **Funcionalidades nos Botões + e - no carrinho**
* **Implementar Autenticação de Usuários**
* **Criar Painel para Cadastro de Produtos**