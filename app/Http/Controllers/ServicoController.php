<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Servico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $servicos = Servico::all();
        return view('admin.servicos.index', compact('servicos'));
    }

    /**
     * Show the form for creating a new resource.
     */
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
            

    

        return redirect()->route('servico.index')->with('sucesso','Cadastro Realizado com Sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $servico = Servico::findOrFail($id);
        return view('admin.servicos.visualizar', compact('servico'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $servico = Servico::findOrFail($id);
        return view('admin.servicos.editar', compact('servico'));
    }

    /**
     * Update the specified resource in storage.
     */
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

        return redirect()->route('servico.index')->with('sucesso', 'Atualização Realizado com Sucesso!');
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
            return redirect()->route('servico.index')->with('sucesso', 'Serviço deletado com sucesso!!!');
        } catch (\Exception $e) {
            return redirect()->route('servico.index')->with('error', 'Erro ao deletar o serviço');
        }
    }
}
