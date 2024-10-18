<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descricao',
        'valor',
        'qtde_votos',
        'total_votos',
        'telefone',
        'celular',
        'endereco',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'estado',
        'cep',
        'usuario_id',
        'categoria_id',
    ];

    public function fotos(){
        return $this->hasMany(Foto::class);
    }

    public function usuario(){
        return $this->belongsTo(User::class);
    }

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
    
}
