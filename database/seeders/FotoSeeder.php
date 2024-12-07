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
               'imagem' => 'img/categoria-informatica.jpg',
                'servico_id'=> 1
            ],
            [
                'imagem' => 'img/categoria-informatica.jpg',
                'servico_id' => 2
            ],
            [
                'imagem' => 'img/categoria-informatica.jpg',
                'servico_id' => 3
            ],
            [
                'imagem' => 'img/categoria-informatica.jpg',
                'servico_id' => 4
            ],
            [
                'imagem' => 'img/categoria-informatica.jpg',
                'servico_id' => 5
            ],
            [
                'imagem' => 'img/categoria-informatica.jpg',
                'servico_id' => 6
            ],
            [
                'imagem' => 'img/categoria-informatica.jpg',
                'servico_id' => 7
            ],
            [
                'imagem' => 'img/categoria-informatica.jpg',
                'servico_id' => 8
            ],
            [
                'imagem' => 'img/categoria-informatica.jpg',
                'servico_id' => 9
            ],
            [
                'imagem' => 'img/categoria-informatica.jpg',
                'servico_id' => 10
            ],

        ]);
    }
}
