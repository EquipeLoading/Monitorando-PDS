<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class CadastroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $locale = null)
    {
        if($locale == null) {
            app()->setLocale('pt-BR');
            return view('cadastro');
        }
    
        else {
            app()->setLocale($locale);
            return view('cadastro');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $regras = [
            'nome' => 'required|min:3|max:60',
            'email' => 'required|email',
            'prontuario' => 'required|min:9|max:9',
            'turma' => 'required|min:3',
            'curso' => 'required|min:5',
            'senha' => 'required|min:3|max:60',
            'confirmacao_senha' => 'required|same:senha'
        ];

        $feedback = [
            'required' => 'O campo :attribute precisa ser preenchido',
            'min' => 'O campo :attribute deve ter no mínimo 3 caracteres',
            'max' => 'O campo :attribute deve ter no máximo 60 caracteres',
            'email.email' => 'Um e-mail válido deve ser informado',
            'prontuario.min' => 'O prontuario deve ter no mínimo 9 caracteres',
            'prontuario.max' => 'O campo prontuário deve ter no máximo 9 caracteres',
            'curso.min' => 'O campo curso deve ter no mínimo 5 caracteres',
            'confirmacao_senha.same' => 'A senha foi digitada incorretamente'
        ];

        $request->validate($regras, $feedback);

        //pega todos os dados enviados pelo formulário e armazena no banco de dados como um novo usuário
        Usuario::create($request->all());

        return redirect()->route('login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
