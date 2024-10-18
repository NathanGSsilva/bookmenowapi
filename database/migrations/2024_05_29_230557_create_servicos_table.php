<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('servicos', function (Blueprint $table) {
            $table->id();
            $table->string("titulo",100);
            $table->text("descricao");
            $table->decimal("valor");
            $table->integer("qtde_votos")->default(0);
            $table->integer("total_votos")->default(0);
            $table->string("telefone",20)->nullable();
            $table->string("celular",20);
            $table->string("endereco");
            $table->string("numero",10);
            $table->string("complemento",45)->nullable();
            $table->string("bairro",80);
            $table->string("cidade",80);
            $table->string("estado",2);
            $table->string("cep",45);
            $table->foreignId("usuario_id")->constrained();
            $table->foreignId("categoria_id")->constrained();          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicos');
    }
};
