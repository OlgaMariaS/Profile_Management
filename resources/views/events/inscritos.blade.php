<!-- Chama o layout padrão main-->
@extends('layouts.main')

<!-- Alterar o titulo e h1 -->
@section('title', 'inscritos')

@section('h1', 'Inscritos')

<!-- Conteúdo -->
@section('content')

@if (count($pessoas) == 0)
    <p>Não há inscrições ainda</p>
@else
    <table cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pessoas as $pessoa)
                <tr>
                    <td>{{ $pessoa->id }}</td>
                    <td>{{ $pessoa->nome }}</td>
                    <td>{{ $pessoa->email }}</td>
                    <td>{{ $pessoa->telefone }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif

<!-- Fim do conteúdo -->
@endsection
