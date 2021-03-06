{{-- extende de /layout/main.blade.php o layout total do html --}}
@extends('layouts.main')

{{-- selecione "CRUD" como parâmetro de title--}}
@section('title','Criar Cliente')

{{-- selectiona o paramentro de content, dentro da section até o final--}}
@section('content')
    {{-- PÁGINA DE CADASTRO DE CLIENTE --}}
    <div id="criar-cliente-container" class="col-md-6 offset-md-3">
        <h3>Cadastrar Cliente</h3>
        <form action="/cliente" method="POST">
            @csrf {{-- DIRETIVA DO BLADE PARA PERMITIR ADICIONAR DADOS NO BANCO --}}
            <div class="form-group">
                <label for="title">Cliente:</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Cliente">
            </div>
            <div class="form-group">
                <label for="title">CPF:</label>
                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF do Cliente">
            </div>
            <div class="form-group">
                <label for="title">Email:</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Email do Cliente">
            </div>
            <div class="form-group">
                <label for="title">Nacionalidade:</label>
                <input type="text" class="form-control" id="nacionalidade" name="nacionalidade" placeholder="Nacionalidade do Cliente">
            </div>
            <div class="form-group">
                <label for="title">Telefone:</label>
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone do Cliente">
            </div>
            <div class="form-group">
                <label for="title">Profissão:</label>
                <input type="text" class="form-control" id="profissao" name="profissao" placeholder="Profissão do Cliente">
            </div>
            <div class="form-group">
                <label for="endereco">Selecione o Endereco deste Cliente</label>
                <select name="endereco_id" id="endereco_id" class="form-control">
                    <option value="" selected disabled hidden>Selecione...</option>
                    @foreach ($endereco as $e)
                        <option value="{{ $e->id }}"> ID: {{ $e->id }} | {{ $e->logradouro }} | {{ $e->cidade }} | {{ $e->estado }}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" class="btn btn-primary" value="Cadastrar">
        </form>
    </div>

@endsection
