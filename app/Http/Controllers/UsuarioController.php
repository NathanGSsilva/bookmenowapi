<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
  
    public function index()
    {
       $usuarios = User::all();
       return view('admin.usuarios.index', compact('usuarios'));
    }

    public function create()
    {
       return view('admin.usuarios.cadastrar');
    }

    public function store(Request $request)
    {

        $request->validate([
            'nome' => 'required',
            'email' => 'required|string|email|unique:usuarios',
            'password' => 'required|min:8|confirmed'
        ]);
       
        User::create([
            'nome' => $request->nome,
            'email'=> $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('usuario.index')->with('sucesso', 'Usuário cadastrado com sucesso!');
      
    }

    public function show(string $id)
    {
        $usuario = User::findOrFail($id);
       return view('admin.usuarios.visualizar', compact('usuario'));
    }

    public function edit(string $id)
    {
        $usuario = User::findOrFail($id);
        return view('admin.usuarios.editar', compact('usuario'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required|string|email|unique:usuarios,email,'.$id,
            'password' => 'nullable|min:8|confirmed'
        ]);

        $usuario = User::findOrFail($id);

        $usuario->update([
            'nome' => $request->nome,
            'email' => $request->email,
            'password' => $request->password ? Hash::make($request->password): $usuario->password
        ]);

        return redirect()->route('usuario.index')->with('sucesso', 'Usuário atualizado com sucesso!!!');
      
    }

    public function destroy(string $id)
    {
        try{
            $usuario = User::findOrFail($id);
            $usuario->delete();
            return redirect()->route('usuario.index')->with('sucesso', 'Usuário deletado com sucesso!!!');
            
        }catch(\Exception $e){

            return redirect()->route('usuario.index')->with('error', 'Erro ao deletar o usuário');
        }
       
    }
}
