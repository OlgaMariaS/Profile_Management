<!-- Chama o layout padrão main-->
@extends('layouts.main')

<!-- Alterar o titulo e h1 -->
@section('title', 'Cadastro') 

@section('h1', 'Inscreva-se para curso de informática')

<!-- Conteúdo -->
@section('content')

<main class="mainCadastro">
  <form action="/pessoas" method="POST" id="cadastro-form">
    @csrf <!--Diretiva do blade para proteção-->
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha" required><br>

    <label for="telefone">Telefone:</label>
    <input type="tel" id="telefone" name="telefone"><br>

    <label for="cidade">Cidade:</label>
    <input type="text" id="cidade" name="cidade"><br>

    <label for="nivel">Administrator:</label>
    <select name="nivel" id="nivel">
      <option value="0">Não</option>
      <option value="1">Sim</option>
    </select>
    <br>

    <button type="submit" >Cadastrar</button>
  </form>
</main>

<!-- Fim do conteúdo -->
@endsection