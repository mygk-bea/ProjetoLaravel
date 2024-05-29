@extends('site.layouts.basico')

@section('titulo', 'Nossos Fornecedores')

@section('conteudo')
    @include('site.layouts._partials.menu')
    <h1>Fornecedores</h1>
    
    @isset($fornecedores)
        @foreach($fornecedores as $indice => $fornecedor)
            Interação: {{ $loop->iteration }}
            <br>
            @if($loop->first)
                <h3>Primeiro Fornecedor da lista</h3>
            @endif
            Fornecedor: {{ $fornecedor['nome'] }}
            <br>
            Status: {{ $fornecedor['status'] ?? 'Sem status definido!' }}
            <hr>
        @endforeach
    @endisset
@endsection

{{-- @dd($fornecedores) --}}

{{-- @if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Há alguns fornecedores cadastrados</h3>
@elseif (count($fornecedores) > 10)
    <h3>Existem muitos fornecedores cadastrados</h3>
@else 
    <h3>Não há fornecedores cadastrados</h3>
@endif
 --}}
