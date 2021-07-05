<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class LoginController extends Controller
{

    public function index(Request $request)
    {
        $erro = '';

        if($request->get('erro') == 1) {
            $erro = 'Usuário e/ou senha não existe';
        }
        
        return view('login', ['erro' => $erro]);
    }

    public function autenticacao(Request $request) {

        $regras = [
            'email' =>'required|email',
            'senha' => 'required'
        ];

        $feedback = [
            'required' => 'O campo :attribute precisa ser preenchido',
            'email.email' => 'Um e-mail válido deve ser informado'
        ];

        //validação dos dados recebidos por parâmetro
        $request->validate($regras, $feedback);

        //armazenamento dos dados recebidos do formulário
        $email = $request->get('email');
        $senha = $request->get('senha');

        $usuario = new Usuario();

        //compara os dados recebidos na requisição com os dados armazenados no banco de dados
        $login = $usuario->where('email', $email)->where('senha', $senha)->get()->first();

        //inicia a seção caso exista um usuário com os dados informados, se não existir, devolve um erro
        if(isset($login)) {
            session_start();
            $_SESSION['nome'] = $login->nome;
            $_SESSION['email'] = $login->email;

            return redirect()->route('login');
        } else {
            return redirect()->route('login', ['erro' => 1]);
        }

    }

}
