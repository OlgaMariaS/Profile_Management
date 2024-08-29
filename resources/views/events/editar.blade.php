<!-- Chama o layout padrão main-->
@extends('layouts.main')

<!-- Alterar o titulo e h1 -->
@section('title', 'Editando') 

@section('h1', 'Editando cadastro de: '. $pessoa->nome)

<!-- Conteúdo -->
@section('content')

<main class="mainCadastro">
  <form action="/pessoas/update/{{ $pessoa->id }}" method="POST" id="cadastro-form">
      @csrf <!-- Diretiva do Blade -->
      @method('PUT')

      <div class="form-group">
        <label for="nome"><ion-icon name="person-outline"></ion-icon> Nome:</label>
        <input type="text" id="nome" name="nome" required value="{{ $pessoa->nome }}">
      </div>

      <div class="form-group">
        <label for="email"><ion-icon name="mail-outline"></ion-icon> Email:</label>
        <input type="email" id="email" name="email" value="{{ $pessoa->email }}" required>
      </div>

      <div class="form-group">
        <label for="idade"><ion-icon name="calendar-outline"></ion-icon> Idade:</label>
        <input type="number" id="idade" name="idade" required value="{{ $pessoa->idade }}" min="0">
      </div>

      <div class="form-group">
        <label for="telefone"><ion-icon name="logo-whatsapp"></ion-icon> Telefone:</label>
        <input type="text" id="telefone" name="telefone" value="{{ $pessoa->telefone }}">
      </div>

      <div class="form-group">
        <label for="cidade"><ion-icon name="location-outline"></ion-icon> Cidade:</label>
        <input type="text" id="cidade" name="cidade" value="{{ $pessoa->cidade }}">
      </div>

      <button type="submit">Salvar</button>
  </form>
</main>

<!-- Fim do conteúdo -->
@endsection