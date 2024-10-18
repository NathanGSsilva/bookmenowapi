<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('pt_BR');

        $categorias = [
            'Tecnologia',
            'Mecânico',
            'Eletricista',
            'Pintor',
            'Pedreiro',
            'Jardineiro'
        ];

        foreach($categorias as $categoria){

            DB::table('categorias')->insert([
                'titulo' => $categoria,
                'imagem' => asset('img/categoria-carro.jpg'),
                'descricao' => $faker->sentence()
            ]);
            
            
        }


    }
}
