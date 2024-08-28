<!-- Chama o layout padrão main-->
@extends('layouts.main')

<!-- Alterar o titulo e h1 -->
@section('title', 'Saiba Mais') 

@section('h1', 'Saiba mais sobre o curso e a Universidade')

<!-- Conteúdo -->
@section('content')

<main class="mainSaibaMais">
	<div class="descricaoServicos">
		<h2 id="din">Proposta do curso</h2><br>
		<p>A disciplina DIN na comunidade propõe aos estudantes que façam uma ação extensionista envolvendo tecnologia para a comunidade, a ação proposta é um curso de quatro aulas intensivo de informática com foco nas ferramentas do google workspace</p>
		<h3>Curso é separado em quatro aulas de:</h3>
		<h4>1. Conceitos de informática</h4>
		<h4>2. Google</h4>
		<h4>3. Ferramentas Workspace I</h4>
		<h4>4. Ferramentas Workspace II</h4>
		<br>
		<h3>Objetivos do curso:</h3>
		<ul>
			<li>Conceitos e práticas dos Sistemas Operacionais Windows</li>
			<li>Conceitos e práticas de Redes de Computadores e Navegadores</li>
			<li>Noção essencial de Hardwares e Softwares</li>
			<li>Noções essenciais de Segurança da Informação</li>
			<li>Trabalhar com serviço de armazenamento em nuvem</li>
			<li>Manutenção do sistema de forma simples e efetiva</li>
			<li>Desenvolver planilhas</li>
			<li>Trabalhar com ferramentas de edição de texto</li>
			<li>Desenvolver apresentações</li>
			<li>Utilizar e-mail</li>
			<li>Utilizar ferramentas alternativas para produção de apresentações</li>
		</ul>
		<h3>Outras informações</h3>
		<ul>
			<li><strong>Docente/Orientador:</strong> Daniel Kikuti</li>
			<li><strong>Email docente:</strong> dkikuti@uem.br</li>
			<li><strong>Estudantes:</strong>
				<ul>
					<li>Bruno Manganoti</li>
					<li>Gabriel Saraiva de Gouveia</li>
					<li>Olga Maria dos Santos</li>
					<li>Yasser Farid</li>
				</ul>
			</li>
		</ul>
	</div>
	<div class="descricaoServicos">
		<h2 id="din">Departamento de Informática da UEM</h2><br>
		<p>O Departamento de Informática da UEM oferece uma ampla gama de cursos e atividades voltadas para a formação de profissionais altamente capacitados na área de tecnologia da informação. Nosso objetivo é proporcionar uma educação de qualidade, preparando os alunos para os desafios do mercado de trabalho. </p>
		<h3>Projetos e Conquistas:</h3>
		<p>Nossos alunos e professores estão constantemente envolvidos em projetos inovadores e de pesquisa, com várias conquistas reconhecidas nacional e internacionalmente.</p>
		<ul>
			<li>Desenvolvimento de softwares inovadores</li>
			<li>Publicações em revistas científicas de alto impacto</li>
			<li>Parcerias com empresas de tecnologia</li>
			<li>Participação em competições e conferências</li>
		</ul>
	</div>
</main>
    
<!-- Fim do conteúdo -->
@endsection