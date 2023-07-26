<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProdutoSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('produtos')->insert(
            [
                [   'nome' => 'Vassoura',
                'descricao' => 'Utensilio para varrer a casa',
                'valor' => 13.59,
                'id_categoria' => 1
            ],
            ['nome' => 'Fone de ouvido',
            'descricao' => 'Fones para escutar músicas',
            'valor' => 25,
            'id_categoria' => 2
        ],
        ['nome' => 'Post-It',
        'descricao' => 'Papel para escrever anotações e colar em lugares',
        'valor' => 1.99,
        'id_categoria' => 3
        ]
        ]
    );  
}
}
