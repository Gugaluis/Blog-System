<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'user_id' => 1,
                'title' => 'Bem-vindo ao Post-System!',
                'content' => 'Seja bem-vindo à comunidade do Post-System! Este é um espaço onde você pode compartilhar suas ideias, pensamentos e experiências. Estamos ansiosos para ter você conosco!'
            ],
            [
                'user_id' => 2,
                'title' => 'Dicas para iniciantes',
                'content' => 'Confira algumas dicas úteis para quem está começando no Post-System. Explore e aproveite o melhor da nossa comunidade!'
            ],
            [
                'user_id' => 1,
                'title' => 'Curiosidades sobre tecnologia',
                'content' => 'Descubra curiosidades fascinantes sobre tecnologia e como ela tem mudado o mundo ao nosso redor.'
            ],
            [
                'user_id' => 2,
                'title' => 'Como melhorar sua produtividade',
                'content' => 'Compartilhe e descubra técnicas para aumentar a sua produtividade no trabalho e nos estudos.'
            ],
            [
                'user_id' => 1,
                'title' => 'Receitas saudáveis e rápidas',
                'content' => 'Encontre receitas fáceis e saudáveis para incluir no seu dia a dia sem complicações!'
            ],
            [
                'user_id' => 2,
                'title' => 'Viagens incríveis pelo mundo',
                'content' => 'Confira relatos e dicas de viagens incríveis que podem te inspirar para o próximo destino!'
            ],
            [
                'user_id' => 1,
                'title' => 'Livros que todo mundo deveria ler',
                'content' => 'Uma lista de livros indispensáveis que vão mudar a forma como você enxerga o mundo.'
            ],
            [
                'user_id' => 2,
                'title' => 'Desafios do empreendedorismo',
                'content' => 'Discussões sobre os desafios e as recompensas de começar e manter o próprio negócio.'
            ],
            [
                'user_id' => 1,
                'title' => 'Histórias inspiradoras de superação',
                'content' => 'Leia e compartilhe histórias reais que mostram como as pessoas superaram grandes obstáculos em suas vidas.'
            ],
            [
                'user_id' => 2,
                'title' => 'Novidades sobre o mundo dos games',
                'content' => 'Fique por dentro das últimas novidades e lançamentos no mundo dos games.'
            ]
        ];
        
        DB::table('posts')->insert($posts);
    }
}
