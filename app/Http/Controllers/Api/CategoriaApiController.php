<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Models\Categoria;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoriaApiController extends Controller
{
  // Lista todas as categorias
  public function index()
  {
    try {
      $categorias = Categoria::all();

      // $categorias = $categorias->map(function ($categoria) {
      // if ($categoria->imagem) {
      //     $categoria->imagem = str_replace("http://projetobookmenow.test", "http://127.165.25.65", $categoria->imagem);
      //   }
      //   return $categoria;
      // });

      return response()->json($categorias, 200);
    } catch (Exception $e) {
      return response()->json(['error' => 'Erro ao listar as categorias'], 500);
    }
  }

  // Cria uma nova categoria
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
        $data['imagem'] = "/storage/" . $caminhoImagem; // Salva o caminho da imagem
      }

      $categoria = Categoria::create($data);
      return response()->json($categoria, 201); // Retorna a categoria criada com código 201
    } catch (Exception $e) {
      return response()->json(['error' => 'Erro ao criar categoria'], 500);
    }
  }

  // Mostra uma categoria específica
  public function show($id)
  {
    try {
      $categoria = Categoria::findOrFail($id);
      return response()->json($categoria, 200);
    } catch (Exception $e) {
      return response()->json(['error' => 'Categoria não encontrada'], 404);
    }
  }

  // Atualiza uma categoria existente
  public function update(Request $request, $id)
  {
    $request->validate([
      'titulo' => 'required',
      'descricao' => 'required',
      'imagem' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    try {
      $categoria = Categoria::findOrFail($id);

      $data = [
        'titulo' => $request->titulo,
        'descricao' => $request->descricao,
      ];

      if ($request->hasFile('imagem')) {
        // Remove a imagem antiga, se existir
        if ($categoria->imagem) {
          Storage::disk('public')->delete($categoria->imagem);
        }

        $caminhoImagem = $request->file('imagem')->store('categorias', 'public');
        $data['imagem'] = "/storage/" . $caminhoImagem; // Salva o novo caminho da imagem
      }

      $categoria->update($data);

      return response()->json($categoria, 200); // Retorna a categoria atualizada
    } catch (Exception $e) {
      return response()->json(['error' => 'Erro ao atualizar categoria'], 500);
    }
  }

  // Deleta uma categoria
  public function destroy($id)
  {
    try {
      $categoria = Categoria::findOrFail($id);

      // Remove a imagem associada, se existir
      if ($categoria->imagem) {
        Storage::disk('public')->delete($categoria->imagem);
      }

      $categoria->delete();

      return response()->json(['message' => 'Categoria deletada com sucesso'], 200);
    } catch (Exception $e) {
      return response()->json(['error' => 'Erro ao deletar categoria'], 500);
    }
  }
}
