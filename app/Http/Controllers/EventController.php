<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pessoa;
use App\Models\Comentario;
use App\Models\User;

class EventController extends Controller
{
    public function index(){
        return view('index');
    }
    public function saibaMais(){
        return view('saibaMais');
    }
    public function curso(){
        return view('curso');
    }
    //Após autenticação
    public function cadastrar(){
        return view('events.cadastrar');
    }
    public function avaliacao(){
        return view('events.avaliacao');
    }

    public function inscritos(){
        //Dados do usuario logado
        $user = auth()->user();

        //Pega o que está na escrito no form de pesquisa com nome 'search'
        $search = request('search');

        //Se possui algo para pesquisar
        if($search){
            //Procura no banco informações parecidas com o requisitado no search
            $pessoas = Pessoa::where([
                ['nome', 'like', '%'.$search.'%'] //
            ])->get();

        }else{ //Se não estiver fazendo pesquisa, mostre todos os cadastros do usuario logado

            //Chama todos os cadastros da tabela Pessoa (por meio do Model "Pessoa")
            $pessoas = $user->pessoas;
        }

        //Retorno dos cadastros
        return view('events.inscritos', ['pessoas' => $pessoas, 'search'=>$search]);
    }

    //Faz inserções do cadastro no banco
    public function store(Request $request){
        $pessoa = new Pessoa;

        $pessoa->nome = $request->nome;
        $pessoa->email = $request->email;
        $pessoa->idade = $request->idade;
        $pessoa->telefone = $request->telefone;
        $pessoa->cidade = $request->cidade;

        //O usuário logado fica atrelado a essa Pessoa
        $user = auth()->user();
        $pessoa->user_id = $user->id;

        $pessoa->save();

        //Redireciona para a tela de login
        return redirect('cadastrar')->with('msg', "Cadastro realizada com sucesso!");
    }
    
    //Recebe os dados da pessoa e o comentario e armazena no banco
    public function storeAvaliacao(Request $request){
        $comentario = new Comentario;

        $comentario->nome = $request->nome; 
        $comentario->email = $request->email; 
        $comentario->comentario = $request->comentario;
        
        //O usuário logado fica atrelado ao comentario
        $user = auth()->user();
        $comentario->user_id = $user->id;

        $comentario->save();

        return redirect('avaliacao')->with('msg', "Obrigado pelo seu feedback😄");
    }

    //Remove cadastros da tabela Pessoa
    public function destroy($id){

        Pessoa::findOrFail($id)->delete();

        return redirect('/inscritos')->with('msg', "Cadastro excluido");
    }

    //A partir do ID selecionado, pega os dados da pessoa no banco e redireciona pra tela para edição
    public function edit($id){

        $pessoa = Pessoa::findOrFail($id);

        return view('events.editar', ['pessoa' => $pessoa]);
    }

    //Salva no banco as novas informações do cadastro
    public function update(Request $request){
        
        Pessoa::findOrFail($request->id)->update($request->all());

        return redirect('/inscritos')->with('msg', "Cadastro atualizado com sucesso!");
    }
}
