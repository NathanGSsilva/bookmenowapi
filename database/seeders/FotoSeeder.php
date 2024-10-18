<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('fotos')->insert([
            [
               'imagem' => asset('img/categoria-informatica.jpg'),
                'servico_id'=> 1
            ],
            [
                'imagem' => asset('img/categoria-informatica.jpg'),
                'servico_id' => 2
            ],
            [
                'imagem' => asset('img/categoria-informatica.jpg'),
                'servico_id' => 3
            ],
            [
                'imagem' => asset('img/categoria-informatica.jpg'),
                'servico_id' => 4
            ],
            [
                'imagem' => asset('img/categoria-informatica.jpg'),
                'servico_id' => 5
            ],
            [
                'imagem' => asset('img/categoria-informatica.jpg'),
                'servico_id' => 6
            ],
            [
                'imagem' => asset('img/categoria-informatica.jpg'),
                'servico_id' => 7
            ],
            [
                'imagem' => asset('img/categoria-informatica.jpg'),
                'servico_id' => 8
            ],
            [
                'imagem' => asset('img/categoria-informatica.jpg'),
                'servico_id' => 9
            ],
            [
                'imagem' => asset('img/categoria-informatica.jpg'),
                'servico_id' => 10
            ],

        ]);
    }
}
