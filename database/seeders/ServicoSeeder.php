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
        $faker = Faker::create("pt-BR");



        DB::table('servicos')->insert([
            'titulo' => 'Formatação de computador ',
            'descricao' => $faker->sentence(),
            'valor' => 30.00,
            'qtde_votos' => 5,
            'total_votos' => 10,
            'telefone' => 1499999999,
            'celular' => 14888888888,
            'endereco' => 'rua:dante vrech',
            'numero' => 316,
            'bairro' => 'santa antonieta',
            'complemento' => "casa",
            'cidade' => 'Marilia',
            'estado' => 'SP',
            'CEP' => 17512792,
            'usuario_id' => rand(1, 10),
            'categoria_id' => rand(1, 6)
        ]);

        DB::table('servicos')->insert([
            'titulo' => 'mecanico ',
            'descricao' => $faker->sentence(),
            'valor' => 50.00,
            'qtde_votos' => 4,
            'total_votos' => 16,
            'telefone' => 1466666666,
            'celular' => 14877778888,
            'endereco' => 'rua:dante flora',
            'numero' => 36,
            'bairro' => ' antonieta',
            'complemento' => "casa",
            'cidade' => 'Marilia',
            'estado' => 'SP',
            'CEP' => 17512555,
            'usuario_id' => rand(1, 10),
            'categoria_id' => rand(1, 6)
        ]);

        DB::table('servicos')->insert([
            'titulo' => 'informatica',
            'descricao' => $faker->sentence(),
            'valor' => 60.00,
            'qtde_votos' => 5,
            'total_votos' => 20,
            'telefone' => 14444444444,
            'celular' => 14888666666,
            'endereco' => 'rua:vrech',
            'numero' => 31,
            'bairro' => 'santa ',
            'complemento' => "casa",
            'cidade' => 'Marilia',
            'estado' => 'SP',
            'CEP' => 17518888,
            'usuario_id' => rand(1, 10),
            'categoria_id' => rand(1, 6)
        ]);
        DB::table('servicos')->insert([
            'titulo' => 'pedeiro',
            'descricao' => $faker->sentence(),
            'valor' => 100.00,
            'qtde_votos' => 5,
            'total_votos' => 15,
            'telefone' => 147777779,
            'celular' => 1488222288,
            'endereco' => 'rua:flora martins',
            'numero' => 16,
            'bairro' => 'joque',
            'complemento' => "casa",
            'cidade' => 'Marilia',
            'estado' => 'SP',
            'CEP' => 17511999,
            'usuario_id' => rand(1, 10),
            'categoria_id' => rand(1, 6)
        ]);

        DB::table('servicos')->insert([
            'titulo' => 'Formatação de computador ',
            'descricao' => $faker->sentence(),
            'valor' => 90.00,
            'qtde_votos' => 5,
            'total_votos' => 90,
            'telefone' => 14000000009,
            'celular' => 1482365478,
            'endereco' => 'rua:julianas paz',
            'numero' => 1,
            'bairro' => 'maria da paz',
            'complemento' => "casa",
            'cidade' => 'Marilia',
            'estado' => 'SP',
            'CEP' => 1745623,
            'usuario_id' => rand(1, 10),
            'categoria_id' => rand(1, 6)
        ]);
        DB::table('servicos')->insert([
            'titulo' => 'costureira ',
            'descricao' => $faker->sentence(),
            'valor' => 3.00,
            'qtde_votos' => 5,
            'total_votos' => 10,
            'telefone' => 1495555555,
            'celular' => 14881235888,
            'endereco' => 'rua:dante vrech',
            'numero' => 316,
            'bairro' => 'jose floro',
            'complemento' => "casa",
            'cidade' => 'Marilia',
            'estado' => 'PA',
            'CEP' => 17516662,
            'usuario_id' => rand(1, 10),
            'categoria_id' => rand(1, 6)
        ]);
        DB::table('servicos')->insert([
            'titulo' => 'desenvolvedor web ',
            'descricao' => $faker->sentence(),
            'valor' => 303.00,
            'qtde_votos' => 5,
            'total_votos' => 10,
            'telefone' => 1494568793,
            'celular' => 14812365445,
            'endereco' => 'rua:josefina duarte',
            'numero' => 316,
            'bairro' => 'duarte',
            'complemento' => "casa",
            'cidade' => 'Marilia',
            'estado' => 'SP',
            'CEP' => 17452312,
            'usuario_id' => rand(1, 10),
            'categoria_id' => rand(1, 6)
        ]);
        DB::table('servicos')->insert([
            'titulo' => 'Formatação de computador ',
            'descricao' => $faker->sentence(),
            'valor' => 30.00,
            'qtde_votos' => 5,
            'total_votos' => 10,
            'telefone' => 14362514785,
            'celular' => 149854758,
            'endereco' => 'rua:dante vrech',
            'numero' => 396,
            'bairro' => 'santa antonieta',
            'complemento' => "casa",
            'cidade' => 'Marilia',
            'estado' => 'SP',
            'CEP' => 17519541,
            'usuario_id' => rand(1, 10),
            'categoria_id' => rand(1, 6)
        ]);
        DB::table('servicos')->insert([
            'titulo' => 'Formatação de computador ',
            'descricao' => $faker->sentence(),
            'valor' => 30.00,
            'qtde_votos' => 5,
            'total_votos' => 10,
            'telefone' => 1499874562,
            'celular' => 14872251565,
            'endereco' => 'rua:dante sei la vrech',
            'numero' => 616,
            'bairro' => 'santa de la antonieta',
            'complemento' => "casa",
            'cidade' => 'Marilia',
            'estado' => 'SP',
            'CEP' => 1425785,
            'usuario_id' => rand(1, 10),
            'categoria_id' => rand(1, 6)
        ]);
        DB::table('servicos')->insert([
            'titulo' => 'Formatação de computador ',
            'descricao' => $faker->sentence(),
            'valor' => 30.00,
            'qtde_votos' => 5,
            'total_votos' => 10,
            'telefone' => 152336448,
            'celular' => 9874562311,
            'endereco' => 'rua:dante norte vrech',
            'numero' => 336,
            'bairro' => 'santa sul antonieta',
            'complemento' => "casa",
            'cidade' => 'Marilia',
            'estado' => 'SP',
            'CEP' => 175198745,
            'usuario_id' => rand(1, 10),
            'categoria_id' => rand(1, 6)
        ]);
       
        
        
    }
}
