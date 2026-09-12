<h1>Empresa</h1>

Meu nome é {{$nome}} e minha idade é {{$idade}} e eu trabalho na {{$ocupacao}} <br> <br>

{{$html}}

{!! $html !!}


<h1>Essa é nossa home</h1>

{{-- Isso é um cométário --}}

{{--

[Verifica se $nome existe e possui valor]
isset($nome) ? 'existe' : 'não existe'

[Se a variável for nula ele vai exibir "padrão"]
$teste ?? 'padrão'

--}}

{{-- -----Estruturas de controle----- --}}

{{-- If --}}

@if ($nome == 'Rodrigo') {{--@unless imprime true se o valor for falso--}}
    true
@else
    false
@endif

{{-- Switch --}}

@switch($idade)
    @case(28)
        idade está ok
        @break
    @case(29)
        idade está errada
        @break
    @default
        default
@endswitch

{{-- Issets --}}

@isset($nome) {{-- Verifica se a variável tá definida ou nula --}}
    Existe
@endisset'

{{-- Empty --}}

@empty($nome)
    esta vazia
@endempty

{{-- Auth --}}

@auth {{-- guest vai retornar um true se não tiver usuário autencado --}}
    esta autenticado
@endauth

{{-- -----Estrutura de repetição----- --}}

{{-- For --}}

@for ($i = 0; $i <= 10; $i++)
    O valor atual é: {{ $i }} <br>
@endfor

{{-- While --}}

@php
    $i = 0;
@endphp

@while ($i <= 15) {{-- precisa de uma variável antes --}}
    O valor atual com o while é: {{ $i }} <br>
    @php $i++ @endphp
@endwhile

{{-- Foreach/Forelse --}}

@Forelse ($frutas as $fruta)
    {{ $fruta }} <br>
@empty
    O array está vazio
@endforelse

@endsection