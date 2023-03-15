<?php

namespace Database\Seeders;

use App\Models\Theme;
use Illuminate\Database\Seeder;

class Themes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
            [
                "id" => 1,
                "theme" => "Selecionar todos"
            ],
            [
                "id" => 2,
                "theme" => "Esportes"
            ],
            [
                "id" => 3,
                "theme" => "Ciências Gerais"
            ],
            [
                "id" => 4,
                "theme" => "Gramática"
            ],
            [
                "id" => 6,
                "theme" => "Jogos"
            ],
            [
                "id" => 7,
                "theme" => "Tecnologia"
            ],
            [
                "id" => 8,
                "theme" => "Matemática"
            ],
            [
                "id" => 9,
                "theme" => "Geografia"
            ],
            [
                "id" => 5,
                "theme" => "Conhecimentos Gerais"
            ]
        ];

        foreach ($dados as $dado) {
            Theme::create([
                'id' => $dado['id'],
                'theme' => $dado['theme'],
            ]);
        }
    }
}
