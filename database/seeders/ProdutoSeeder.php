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
                'descricao' => 'Utensilio para varrer a casa Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut accumsan risus. Sed lobortis molestie dignissim. Morbi sagittis eu odio non pellentesque. Sed sed tincidunt metus. Duis et diam orci. Quisque in mi eget magna rhoncus tempor. Curabitur imperdiet dui ac eleifend tristique. Nam at nulla bibendum, fringilla tellus et, tempor ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas quis vulputate lectus. Praesent malesuada in urna fermentum maximus. Ut laoreet ex et maximus porttitor. Integer vitae mattis massa. Donec eu feugiat orci. Curabitur sed eros in lorem cursus facilisis. Cras eu urna iaculis, eleifend nisl at, aliquam augue.

                Donec feugiat volutpat magna, nec eleifend mauris egestas in. Praesent bibendum cursus porta. Morbi elementum ipsum id dolor hendrerit, eu fringilla sapien pretium. Quisque varius tellus ac orci eleifend ultricies. Cras egestas orci eu mattis ornare. Aliquam et molestie magna. Nam justo odio, fermentum et turpis in, eleifend tempor orci. Pellentesque malesuada, eros nec finibus porttitor, erat nunc porttitor mauris, a pulvinar urna odio eget lacus. Morbi eu velit et massa efficitur dictum. Curabitur ut faucibus tortor. Integer et nunc libero.
                
                Ut eget tortor eu nunc molestie vestibulum eget ut enim. Aliquam diam velit, volutpat ut neque eu, convallis ullamcorper orci. Pellentesque gravida velit quis nisi porttitor mollis. Aliquam erat volutpat. Ut ultricies arcu orci, non iaculis velit luctus sed. Ut tincidunt ligula at laoreet porttitor. Integer ac auctor arcu, ac faucibus diam.
                
                Suspendisse mauris nibh, dapibus ac mollis in, mattis sit amet nisl. Suspendisse blandit ipsum eu libero sollicitudin malesuada. Nam aliquam eleifend leo, sit amet rhoncus leo hendrerit eu. Fusce faucibus tortor vel commodo ullamcorper. Pellentesque sed venenatis sapien. In nec quam at felis faucibus dictum in vitae tortor. Sed a pretium augue, eu condimentum nisl. Etiam faucibus dui dui, et luctus felis finibus a. Nam tincidunt ante nec eros mollis rutrum. Phasellus malesuada ultricies porta. Donec nulla quam, efficitur vitae scelerisque quis, condimentum et turpis. Mauris et lobortis dolor, eu semper ex. Quisque sit amet massa dui. Sed rutrum auctor pretium.',
                'valor' => 13.59,
                'id_categoria' => 1,
                'imagem' => 'images/vassoura.jpg'
            ],
            ['nome' => 'Fone de ouvido',
            'descricao' => 'Fones para escutar músicas',
            'valor' => 25,
            'id_categoria' => 2,
            'imagem' => 'images/fone_de_ouvido.jpg'
        ],
        ['nome' => 'Post-It',
        'descricao' => 'Papel para escrever anotações e colar em lugares',
        'valor' => 1.99,
        'id_categoria' => 3,
        'imagem' => 'images/post-it.jpg'
    ],
    ['nome' => 'Carregador de Celular',
        'descricao' => 'Dispositivo utilizado para carregar o celular, disponivel somente para usb-c',
        'valor' => 50.0,
        'id_categoria' => 2,
        'imagem' => 'images/carregador-de-celular.jpeg'
        ]
        ]
    );  
}
}
