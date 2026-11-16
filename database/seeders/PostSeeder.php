<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $posts = [
            [
                'title' => 'Accompagnement stratégique d’un groupe agroalimentaire 1',
                'slug' => Str::slug('Accompagnement stratégique d’un groupe agroalimentaire 1'),
                'short_description' => 'Participation aux échanges sur l’épargne longue, le financement des économies africaines et les marchés capitaux.',
                'description' => '',
                'status' => 'published',
                'category_id' => 1,
                'post_cover' => public_path() . 'front/assets/images/news/article-default.png',
            ],
            [
                'title' => 'Accompagnement stratégique d’un groupe agroalimentaire 2',
                'slug' => Str::slug('Accompagnement stratégique d’un groupe agroalimentaire 2'),
                'short_description' => 'Participation aux échanges sur l’épargne longue, le financement des économies africaines et les marchés capitaux.',
                'description' => '',
                'status' => 'published',
                'category_id' => 2,
                'post_cover' => public_path() . 'front/assets/images/news/article-default.png',
            ],
            [
                'title' => 'Accompagnement stratégique d’un groupe agroalimentaire 3',
                'slug' => Str::slug('Accompagnement stratégique d’un groupe agroalimentaire 3'),
                'short_description' => 'Participation aux échanges sur l’épargne longue, le financement des économies africaines et les marchés capitaux.',
                'description' => '',
                'status' => 'published',
                'category_id' => 1,
                'post_cover' => public_path() . 'front/assets/images/news/article-default.png',
            ],
        ];



        foreach ($posts as $postData) {
            $postCover = $postData['post_cover'];
            
            $post = Post::create(collect($postData)->except(['post_cover'])->toArray());

            if (is_file($postCover)) {
                $post->addMedia($postCover)
                    ->preservingOriginal()
                    ->toMediaCollection('post_cover');
            }
        }
    }
}
