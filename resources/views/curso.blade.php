<!-- Chama o layout padrão main-->
@extends('layouts.main')

<!-- Alterar o titulo e h1 -->
@section('title', 'Emenda')

@section('h1', 'Curso de informática com foco no Google Workspace')

<!-- Conteúdo -->
@section('content')

<main id="curso">
	<h3>Proposta</h3> <br>
	<p>A disciplina DIN na comunidade propõe aos estudantes que façam uma ação extensionista envolvendo tecnologia para
		a comunidade. A ação proposta é um curso de quatro aulas intensivo de informática com foco nas ferramentas do
		Google Workspace.</p>
	<div class="emenda"> <br>
		<h3>Ementa do Curso</h3>
		<ul>
			<li><strong>Aula 1 - Conceitos de Informática</strong>
				<ul>
					<li>Componentes de um computador</li>
					<li>Sistema operacional</li>
					<li>Periféricos</li>
					<li>Introdução ao Windows</li>
					<li>Painel de controle</li>
					<li>Navegadores</li>
					<li>Atalhos</li>
					<li>Criar pastas</li>
					<li>Printar tela</li>
					<li>Configurações do computador</li>
					<li>Compactar/Descompactar</li>
					<li>Instalar e remover programas</li>
					<li>Alterar programas padrão</li>
					<li>Outras ferramentas essenciais</li>
				</ul>
			</li>
			<li><strong>Aula 2 - Google</strong>
				<ul>
					<li>Orientações sobre navegador</li>
					<li>Explicação do Google Workspace</li>
					<li>Extensão no Google</li>
					<li>Bitwarden</li>
					<li>Criação de email e explicação do Gmail</li>
					<li>Armazenamento em cloud (Google Drive)</li>
					<li>Como instalar Drive</li>
					<li>Organização de pastas no Drive</li>
					<li>Upload de arquivos</li>
					<li>Compartilhamento de pastas pelo Drive</li>
				</ul>
			</li>
			<li><strong>Aula 3 - Ferramentas Workspace I</strong>
				<ul>
					<li>Explicações de diferentes pacotes (Office, LibreOffice…)</li>
					<li>Docs</li>
					<li>Slides</li>
					<li>Keep</li>
					<li>Projeto final - Docs (Criação de currículo e Edição de texto em normas ABNT)</li>
					<li>Projeto final - Slides (Criação de apresentação)</li>
				</ul>
			</li>
			<li><strong>Aula 4 - Ferramentas Workspace II</strong>
				<ul>
					<li>Sheets</li>
					<li>Calendar</li>
					<li>Forms</li>
					<li>Projeto final Sheets (Criação de orçamento financeiro, com gráficos e dashboards)</li>
				</ul>
			</li>
		</ul>
	</div>
	<br>
	<div id="cronograma">
		<h2>Cronograma</h2>
		<table style="margin-left: auto; margin-right: auto;">
			<thead>
				<tr>
					<th>Aula</th>
					<th>Data</th>
					<th>Horário</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Aula 1</td>
					<td>16/09/2024</td>
					<td>19h - 22h</td>
				</tr>
				<tr>
					<td>Aula 2</td>
					<td>17/09/2024</td>
					<td>19h - 22h</td>
				</tr>
				<tr>
					<td>Aula 3</td>
					<td>18/09/2024</td>
					<td>19h - 22h</td>
				</tr>
				<tr>
					<td>Aula 4</td>
					<td>19/09/2024</td>
					<td>19h - 22h</td>
				</tr>
			</tbody>
		</table>
	</div>
</main>

<!-- Fim do conteúdo -->
@endsection