<!-- Chama o layout padrão main-->
@extends('layouts.main')

<!-- Alterar o titulo e h1 -->
@section('title', 'Curso de informática') 

@section('h1', 'Curso de informática - Google Workspace')

<!-- Conteúdo -->
@section('content')

<main id="servicos">
  <div class="servico">
    <div class="alinha">
      <h2>DIN na comunidade</h2>
      <p>Disciplina DIN na comunidade</p>
      <button class="btn-servicos">
        <a href="https://drive.google.com/file/d/1OBZUjLfxHYYRES4EvVsCNFgJkt_1eDDO/view" target="_blank"><ion-icon name="navigate-outline"></ion-icon> Saiba mais</a>
      </button>
    </div>
  </div>

  <div class="servico">
    <div class="alinha1">
      <h2>PROJETO</h2>
      <p>Informações sobre o curso de informática</p>
      <button class="btn-servicos">
        <a href="saibaMais.blade.php"><ion-icon name="navigate-outline"></ion-icon> Saiba mais</a>
      </button>
    </div>
  </div>

  <div class="servico">
    <div class="alinha2">
      <h2>Informática - UEM</h2>
      <p>Sobre o curso de bacharelado em informática na UEM</p>
      <button class="btn-servicos">
        <a href="https://www.uem.br/din/graduacao/informatica/informatica" target="_blank"><ion-icon name="navigate-outline"></ion-icon> Saiba mais</a>
      </button>
    </div>
  </div>
</main>

<!-- Fim do conteúdo -->
@endsection