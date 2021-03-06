{{-- extende de /layout/main.blade.php o layout total do html --}}
@extends('layouts.main')

{{-- selecione "CRUD" como parâmetro de title --}}
@section('title', 'Criar Produto')

{{-- selectiona o paramentro de content, dentro da section até o final --}}
@section('content')
<div id="criar-produto-container" class="col-md-6 offset-md-3 mt-3">

    <h1>Cadastrar Orçamento</h1>

    <form action=" /orcamento" method="POST">
        @csrf

        <div class="form-group">
            <label for="cliente_id">Selecione o cliente deste Orçamento</label>
            <select name="cliente_id" id="cliente_id" class="form-control">
                @foreach ($cliente as $c)
                    <option value="{{ $c->id }}">{{ $c->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="date">Data do Orçamento:
            </label>
            <input type="date" class="form-control" id="data" name="data">
        </div>

        <div class="form-group">
            <label for="text">Situação do Orçamento:</label>
            <select name="situacao" id="situacao" class="form-control">
                <option value="Ativo">Ativo</option>
                <option value="Inativo">Inativo</option>
                <option value="Demonstrativo">Demonstrativo</option>
            </select>
        </div>

        <input type="submit" class="btn btn-primary" value="Cadastrar">

    </form>

</div>

@endsection
