<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class CategoriaController extends Controller
{

    public function index()
    {
        $categorias = Categoria::all();
        return view('admin.categorias.index', compact('categorias'));
    }

    public function create()
    {
        return view('admin.categorias.cadastrar');
    }

    public function store(Request $request)
    {

        $request->validate([
            'titulo' => 'required',
            'descricao' => 'required',
            'imagem' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = [
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
        ];

        if ($request->hasFile('imagem')) {
            $caminhoImagem = $request->file('imagem')->store('categorias', 'public');
            $data['imagem'] = "/storage/".$caminhoImagem; // Salva o caminho da imagem
        }

        Categoria::create($data);

        return redirect()->route('categoria.index')->with('sucesso', 'Categoria cadastrada com sucesso!');
    }

    public function show(string $id)
    {
        $categoria = Categoria::findOrFail($id);
        return view('admin.categorias.visualizar', compact('categoria'));
    }

    public function edit(string $id)
    {
        $categoria = Categoria::findOrFail($id);
        return view('admin.categorias.editar', compact('categoria'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'titulo' => 'required',
            'descricao' => 'required',
            'imagem' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $categoria = Categoria::findOrFail($id);

        $data = [
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
        ];

        if ($request->hasFile('imagem')) {
            // Apaga a imagem antiga, se existir
            if ($categoria->imagem) {
                Storage::disk('public')->delete($categoria->imagem);
            }

            $caminhoImagem = $request->file('imagem')->store('categorias', 'public');
            $data['imagem'] = "/storage/".$caminhoImagem; // Salva o novo caminho da imagem
        }

        $categoria->update($data);

        return redirect()->route('categoria.index')->with('sucesso', 'Categoria atualizada com sucesso!');
    }

    public function destroy(string $id)
    {
        try {
            $categoria = Categoria::findOrFail($id);
            $categoria->delete();
            return redirect()->route('categoria.index')->with('sucesso', 'Categoria deletado com sucesso!!!');
        } catch (\Exception $e) {

            return redirect()->route('categoria.index')->with('error', 'Erro ao deletar o usuário');
        }
    }
}
