<?php

namespace App\Http\Controllers;

use App\Models\Servico;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        //$servicos = Servico::with('fotos')->get();
        $servicos = Servico::all();

        //dd($servicos);
     
       return view('home', compact('servicos')); 

    }

    public function sobreNos()
    {
        return view('sobre-nos');
    }

    public function contato()
    {

    }
}
