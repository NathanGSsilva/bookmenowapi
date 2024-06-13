<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ServicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('pt_BR');

        DB::table('servicos')->insert([
            'titulo' => 'Formatação de Computador',
            'descricao' => $faker->sentence(),
            'valor' => 30.00,
            'qtde_votos' => 5,
            'total_votos' => 10,
            'telefone' => '14588885555',
            'celular' => '199999999',
            'endereco' => 'Rua Paraiba',
            'numero' => '125',
            'bairro' => 'centro',
            'cidade' => 'Marília',
            'estado' => 'SP',
            'cep' => '17512800',
            'usuario_id' => rand(1, 10),
            'categoria_id' => rand(1, 6)
        ]);  

        


    }
}
