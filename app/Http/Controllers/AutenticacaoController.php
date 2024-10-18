<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AutenticacaoController extends Controller
{
   
    public function formLogin(){
        return view("admin.autenticacao.login");
    }

    public function login(Request $request)
    {
        $dadosUsuario = $request->validate([
            "email" => ['required', 'email'],
            "password" => "required",
        ]);

        if(Auth::attempt($dadosUsuario)){
            
            if ($request->expectsJson()) {
                return response()->json([
                    'message' => 'Login realizado com sucesso!',
                    'user' => Auth::user(),
                    'token' => $request->user()->createToken('api_token')->plainTextToken
                ], 200);
            }

            $request->session()->regenerate();
            
            return redirect()->intended("/admin/dashboard");
        }

    
        if ($request->expectsJson()) {
            return response()->json(['message' => 'Usuário ou senha inválida'], 401);
        }

        return redirect()->back()->withErrors(["email"=> "Usuário ou Senha Inválida"]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        if ($request->expectsJson()) {
            return response()->json(['message' => 'Logout realizado com sucesso!'], 200);
        }

        return redirect("/");
    }
}
