<!-- Chama o layout padrão main-->
@extends('layouts.main')

<!-- Alterar o titulo e h1 -->
@section('title', 'Cadastrar') 

@section('h1', 'Cadastre seus alunos para curso de informática')

<!-- Conteúdo -->
@section('content')

<main class="mainCadastro">
  <form action="/pessoas" method="POST" id="cadastro-form">
      @csrf {{-- Diretiva do Blade --}}

      <div class="form-group">
        <label for="nome"><ion-icon name="person-outline"></ion-icon> Nome:</label>
        <input type="text" id="nome" name="nome" placeholder="Ex: Daenerys Targeryan" required>
      </div>

      <div class="form-group">
        <label for="email"><ion-icon name="mail-outline"></ion-icon> Email:</label>
        <input type="email" id="email" name="email" placeholder="Ex: maedosdragoes@outlook.com" required>
      </div>

      <div class="form-group">
        <label for="idade"><ion-icon name="calendar-outline"></ion-icon> Idade:</label>
        <input type="number" id="idade" name="idade" required placeholder="Ex: 24" min="0">
      </div>

      <div class="form-group">
        <label for="telefone"><ion-icon name="logo-whatsapp"></ion-icon> Telefone:</label>
        <input type="text" id="telefone" name="telefone" placeholder="(XX) XXXXX-XXXX">
      </div>

      <div class="form-group">
        <label for="cidade"><ion-icon name="location-outline"></ion-icon> Cidade:</label>
        <input type="text" id="cidade" name="cidade" placeholder="Ex: Meereen">
      </div>

      <button type="submit">Cadastrar</button>
  </form>
</main>

<!-- Fim do conteúdo -->
@endsection