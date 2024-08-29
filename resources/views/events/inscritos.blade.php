<!-- Chama o layout padrão main-->
@extends('layouts.main')

<!-- Alterar o titulo e h1 -->
@section('title', 'inscritos')

@section('h1', 'Inscritos')

<!-- Conteúdo -->
@section('content')

<main  class="inscritos">
    {{-- Se não houver cadastros --}}
    @if (count($pessoas) == 0)
        <p id="msgInscritos">Não encontrado cadastros </p>
        <p><a href="/" id="voltar"> Voltar <ion-icon name="arrow-undo-outline"></ion-icon></a></p>
    @else
        <form action="/inscritos" method="GET">
            <div class="search-container">
                <ion-icon name="search-outline"></ion-icon>
                <input type="text" id="search" name="search" class="form-control" placeholder="Pesquisar aqui o nome...">
            </div>
        </form>
        @if ($search)
            <p> 
                Busca por: {{$search}} 
                <a href="/inscritos" id="voltar"> Voltar <ion-icon name="arrow-undo-outline"></ion-icon></a>
            </p>
        @endif
        <table cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Idade</th>
                    <th>Telefone</th>
                    <th>Cidade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pessoas as $pessoa)
                    <tr>
                        <td>{{ $pessoa->id }}</td>
                        <td>{{ $pessoa->nome }}</td>
                        <td>{{ $pessoa->email }}</td>
                        <td>{{ $pessoa->idade }}</td>
                        <td>{{ $pessoa->telefone }}</td>
                        <td>{{ $pessoa->cidade }}</td>
                        <td class="acoes">
                            <a href="/pessoas/editar/{{ $pessoa->id }}" class="btn btn-info edit-btn" name="editar">
                                <ion-icon name="pencil-outline"></ion-icon> Editar
                            </a>
                            <form action="/pessoas/{{ $pessoa->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger delete-btn" name="excluir">
                                    <ion-icon name="trash-outline"></ion-icon> Deletar
                                </button>
                            </form>
                        </td>                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</main>

<!-- Fim do conteúdo -->
@endsection
