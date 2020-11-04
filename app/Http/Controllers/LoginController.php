<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function logar(Request $request){
        if($request->email == 'admin@cineal.com' && $request->senha == 'cineal'){
            return redirect('/sistema');
        } else {
            return back()->with('erro', 'Login ou senha inválida');
        }
        
    }

    public function cadusuario(){
        return view('cadusuario');
    }

    public function cadastrar(Request $request){
        $request->validate([
            'nome'          =>'required',
            'sobrenome'     =>'required',
            'email'         =>'email|required',
            'cpf'           =>'max:11|required',
            'senha'         =>'required',
            'confirmarsenha'=>'same:senha|required'
        ]);
        return redirect('login')->with('sucesso', 'Cadastrado.');
        
    }
}
