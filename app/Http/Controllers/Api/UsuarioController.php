<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UsuarioController extends Controller
{

    public function index()
    {
        $usuarios = User::all();

        try {
            return response()->json([$usuarios, 200]);
        } catch (Exception $e) {
            return request()->json(['Erro' => "Erro ao listar os dados", 500]);
        }

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

        $usuario = User::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        try {
            return response()->json([$usuario, 200]);
        } catch (Exception $e) {
            return request()->json(['Erro' => "Erro ao listar os dados", 500]);
        }


    }

    public function show(string $id)
    {
        $usuario = User::findOrFail($id);

        try {
            return response()->json([$usuario, 200]);
        } catch (Exception $e) {
            return request()->json(['Erro' => "Erro ao listar os dados", 500]);
        }
    }

    public function edit(string $id)
    {
        $usuario = User::findOrFail($id);

        try {
            return response()->json([$usuario, 200]);
        } catch (Exception $e) {
            return request()->json(['Erro' => "Erro ao listar os dados", 500]);
        }
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required|string|email|unique:usuarios,email,' . $id,
            'password' => 'nullable|min:8|confirmed'
        ]);

        $usuario = User::findOrFail($id);

        $usuario->update([
            'nome' => $request->nome,
            'email' => $request->email,
            'password' => $request->password ? Hash::make($request->password) : $usuario->password
        ]);

        try {
            return response()->json([$usuario, 200]);
        } catch (Exception $e) {
            return request()->json(['Erro' => "Erro ao listar os dados", 500]);
        }

    }

    public function destroy(string $id)
    {
        try {
            $usuario = User::findOrFail($id);
            $usuario->delete();

            return response()->json([$usuario, 200]);

        } catch (\Exception $e) {

            return request()->json(['Erro' => "Erro ao listar os dados", 500]);
        }

    }
}
