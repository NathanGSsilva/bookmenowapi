<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Foto;
use App\Models\Servico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ServicoController extends Controller
{
 
    public function index()
    {
        $servicos = Servico::all();

        try {
            return response()->json([$servicos, 200]);
        } catch (Exception $e) {
            return request()->json(['Erro' => "Erro ao listar os dados", 500]);
        }

    }

    public function create()
    {
        return view('admin.servicos.cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo'=> 'required|string|max:100',
            'descricao'=> 'required',
            'valor'=> 'required|numeric',
            'celular'=> 'required|string|max:20',
            'endereco'=> 'required',
            'numero'=> 'required',
            'bairro'=> 'required',
            'cidade'=>'required',
            'estado'=> 'required',
            'cep'=> 'required',
            'usuario_id'=> 'required',
            'categoria_id'=> 'required'

        ]);


        $servico = Servico::create($request->all());

        if ($request->hasFile('foto')) {
            foreach ($request->file('foto') as $file) {
                $caminhoFoto = $file->store('fotos','public');
                Foto::create([
                    'servico_id'=> $servico->id,
                    'imagem'=> $caminhoFoto
                ]);
            }
        }
            
        try {
            return response()->json([$servico, 200]);
        } catch (Exception $e) {
            return request()->json(['Erro' => "Erro ao listar os dados", 500]);
        }
    }

    public function show(string $id)
    {
        $servico = Servico::findOrFail($id);

        try {
            return response()->json([$servico, 200]);
        } catch (Exception $e) {
            return request()->json(['Erro' => "Erro ao listar os dados", 500]);
        }
    }

    public function edit(string $id)
    {
        $servico = Servico::findOrFail($id);

        try {
            return response()->json([$servico, 200]);
        } catch (Exception $e) {
            return request()->json(['Erro' => "Erro ao listar os dados", 500]);
        }
    }

    public function update(Request $request, string $id)
    {
        // Validação dos dados
        $request->validate([
            'titulo' => 'required|string|max:100',
            'descricao' => 'required',
            'valor' => 'required|numeric',
            'celular' => 'required|string|max:20',
            'endereco' => 'required',
            'numero' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'estado' => 'required',
            'cep' => 'required',
            'usuario_id' => 'required',
            'categoria_id' => 'required'
        ]);


        $servico = Servico::findOrFail($id);


        $servico->update($request->all());

    
        if ($request->hasFile('foto')) {


            foreach ($servico->fotos as $foto) {
                Storage::disk('public')->delete($foto->imagem);         
                $foto->delete();
            }
        
            foreach ($request->file('foto') as $file) {
                $caminhoFoto = "/storage/".$file->store('fotos', 'public');
                Foto::create([
                    'servico_id' => $servico->id,
                    'imagem' => $caminhoFoto
                ]);
            }
        }

        try {
            return response()->json([$servico, 200]);
        } catch (Exception $e) {
            return request()->json(['Erro' => "Erro ao listar os dados", 500]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $servico = Servico::findOrFail($id);
            foreach ($servico->fotos as $foto) {
                Storage::disk('public')->delete($foto->imagem);
                $foto->delete();
            }
            $servico->delete();
            return response()->json([$servico, 200]);
        } catch (\Exception $e) {
            return request()->json(['Erro' => "Erro ao listar os dados", 500]);
        }
    }
}
