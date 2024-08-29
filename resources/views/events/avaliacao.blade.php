<!-- Chama o layout padrão main-->
@extends('layouts.main')

<!-- Alterar o titulo e h1 -->
@section('title', 'Avaliação')

@section('h1', 'O que achou da proposta do curso?')

<!-- Conteúdo -->
@section('content')

<main class="mainSaibaMais">
	<div class="comentarios">
		<h2 id="comentarios">Comentários</h2><br>
		<p>Esta seção é destinada para o envio de comentários. Então, fique à vontade para expressar sua opinião,
			críticas e sugestão em relação aos temas apresentados.</p>
		<form action="/comentarios" method="POST" id="formComentario">
		@csrf {{--Diretiva do blade --}}
			<!--  -->
			<label for="id"></label>
			<input type="text" id="id" name="id" required><br> 
			<div class="comentario-box">
				<textarea id="comentario-area" placeholder="Digite seu comentário aqui..." name="box-comentarios"></textarea>
				<button class="botao-enviar" type="button">Enviar</button>
			</div>
		</form>
	</div>
</main>

{{--@if () se o nivel de acesso logado for admin, então mostra outro tipo de tela @endif--}}

<!-- Fim do conteúdo -->
@endsection
