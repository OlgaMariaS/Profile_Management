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
      <img src="https://www.aen.pr.gov.br/sites/default/arquivos_restritos/files/imagem/2024-01/2021-10-28_fotos_fachada_reitoria-2.jpg" alt="uem">
      <h2>DIN na comunidade</h2>
      <p>Disciplina DIN na comunidade</p>
      <button class="btn-servicos">
        <a href="https://drive.google.com/file/d/1OBZUjLfxHYYRES4EvVsCNFgJkt_1eDDO/view" target="_blank"><ion-icon name="navigate-outline"></ion-icon> Saiba mais</a>
      </button>
    </div>
  </div>

  <div class="servico">
    <div class="alinha1">
      <img src="https://www.hardware.com.br/wp-content/uploads/static/wp/2022/09/20/capa.png" alt="curso do google workspace">
      <h2>PROJETO</h2>
      <p>Informações sobre o curso de informática</p>
      <button class="btn-servicos">
        <a href="/saibaMais"><ion-icon name="navigate-outline"></ion-icon> Saiba mais</a>
      </button>
    </div>
  </div>

  <div class="servico">
    <div class="alinha2">
      <img src="https://web.icmc.usp.br/SCAPINST/cursos_grad/bcc.jpg" alt="graduação em engenharia de software">
      <h2>Engenharia de Software - UEM</h2>
      <p>Sobre o bacharelado em Engenharia de software na UEM</p>
      <button class="btn-servicos">
        <a href="https://www.uem.br/din/graduacao/informatica/informatica" target="_blank"><ion-icon name="navigate-outline"></ion-icon> Saiba mais</a>
      </button>
    </div>
  </div>
</main>

<!-- Fim do conteúdo -->
@endsection