<?php
 
namespace App\Http\Controllers\Api;
 use Exception;
 use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;
use Illuminate\Support\Facades\Storage;

 
class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        try {
            return response()->json([$categorias, 200]);
        } catch(Exception $e) {
            return request()->json(['Erro' => "Erro ao listar os dados", 500]);
        }  
    }
 
    public function show(string $id)
    {
        try {
            $categoria = Categoria::findOrFail($id);
            return response()->json($categoria, 200);
        } catch(Exception $e) {
            return request()->json(['Erro' => "Erro ao listar os dados", 400]);
        }
    }
 
    public function store(Request $request)
    {
 
        $request->validate([
            'titulo' => 'required',
            'descricao' => 'required',
            'imagem' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
 
        try {
 
       
 
        $data = [
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
        ];
 
        if ($request->hasFile('imagem')) {
            $caminhoImagem = $request->file('imagem')->store('categorias', 'public');
            $data['imagem'] = "/storage/".$caminhoImagem; // Salva o caminho da imagem
        }
 
        $categoria = Categoria::create($data);
 
        return response()->json($categoria, 201);
 
        }catch (Exception $e) {
            return request()->json(["'ERRO" => "Erro ao listar os dados", 500]);
        }
    }


    public function update(Request $request, string $id)
    {
        $request->validate([
            'titulo' => 'required',
            'descricao' => 'required',
            'imagem' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        try{
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
        return response()->json($categoria,200);
    }catch (Exception $e) {
        return request()->json(["'ERRO" => "Erro ao atualizar categoria", 500]);
    }
    }
}