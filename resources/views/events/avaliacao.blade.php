<!-- Chama o layout padrão main-->
@extends('layouts.main')

<!-- Alterar o titulo e h1 -->
@section('title', 'Avaliação')

@section('h1', 'O que achou sobre a plataforma?')

<!-- Conteúdo -->
@section('content')

<main class="comentarios">
		<p>Esta seção é destinada para o envio de comentários. Então, fique à vontade para expressar sua opinião,
			críticas e sugestão em relação aos temas apresentados.</p>
		<form action="/avaliacoes" method="POST" id="formComentario">
		@csrf {{--Diretiva do blade --}}
			<!--  -->
			<div class="form-group">
				<label for="nome"><ion-icon name="person-outline"></ion-icon> Nome:</label>
				<input type="text" id="nome" name="nome" placeholder="Seu nome" required>
			</div>
			<div class="form-group">
				<label for="email"><ion-icon name="mail-outline"></ion-icon> Email:</label>
				<input type="email" id="email" name="email" placeholder="Seu email" required>
			</div>
			<div class="comentario-box">
				<textarea id="comentario-area" placeholder="Digite seu comentário aqui..." name="box-comentarios"></textarea>
				<button class="botao-enviar" type="submit">Enviar</button>
			</div>
		</form>
</main>

<!-- Fim do conteúdo -->
@endsection
