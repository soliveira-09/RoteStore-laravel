<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Tailwind CSS v4 -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- DaisyUI CSS-->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <!-- Google Material Symbols -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

</head>
<body>

<div class="navbar bg-violet-400 min-h-16 px-4">
    <div class="navbar-start">
        <!-- Menu Mobile Hambúrguer -->
        <div class="dropdown md:hidden">
            <div tabindex="0" role="button" class="btn btn-ghost text-white">
                <span class="material-symbols-outlined">menu</span>
            </div>
            <ul tabindex="0" class="dropdown-content menu bg-base-100 text-base-content rounded-box z-50 w-52 p-2 shadow-xl mt-3">
                <li><a href="{{ route('site.index') }}">Home</a></li>
                <li><a href="#">Produtos</a></li>
                <li><a href="{{ route('site.carrinho') }}">Carrinho</a></li>
                <li class="font-bold mt-2 px-3">Categorias:</li>
                @foreach ($categoriasMenu as $categoriaM)
                    <li><a href="{{ route('site.categoria', $categoriaM->id) }}">{{ $categoriaM->nome }}</a></li>
                @endforeach
            </ul>
        </div>

        <!-- Menu Desktop -->
        <ul class="menu menu-horizontal font-medium gap-1 items-center hidden md:flex">
            <li>
                <a href="{{ route('site.index') }}" class="text-white hover:bg-violet-500 rounded-lg py-2 px-4">Home</a>
            </li>
            <li>
                <a href="#" class="text-white hover:bg-violet-500 rounded-lg py-2 px-4">Produtos</a>
            </li>
            <li>
                <a href="{{ route('site.carrinho') }}" class="text-white hover:bg-violet-500 rounded-lg py-2 px-4">Carrinho</a>
            </li>
            <li class="dropdown dropdown-bottom">
                <a tabindex="0" role="button" class="text-white hover:bg-violet-500 rounded-lg py-2 px-4 flex items-center gap-1">
                    Categorias
                    <span class="material-symbols-outlined text-lg">arrow_drop_down</span>
                </a>
                <ul tabindex="0" class="dropdown-content menu bg-base-100 text-base-content rounded-box z-50 w-52 p-2 shadow-xl mt-2 border">
                    @foreach ($categoriasMenu as $categoriaM)
                        <li><a href="{{ route('site.categoria', $categoriaM->id) }}"" class="hover:bg-violet-400 hover:text-white focus:bg-violet-500 focus:text-white">
                            {{ $categoriaM->nome }}</a>
                        </li>
                    @endforeach
                </ul>
            </li>
        </ul>
    </div>
    
    <div class="navbar-end md:navbar-center">
        <a href="{{ route('site.index') }}" class="text-xl md:text-2xl font-bold tracking-wide text-white">RoteStore</a>
    </div>
</div>

    @yield('conteudo')

</body>
</html>