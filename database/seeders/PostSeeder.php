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
                'description' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.',
                'status' => 'published',
                'category_id' => 1,
                'post_cover' => public_path() . 'front/assets/images/news/article-default.png',
            ],
            [
                'title' => 'Accompagnement stratégique d’un groupe agroalimentaire 2',
                'slug' => Str::slug('Accompagnement stratégique d’un groupe agroalimentaire 2'),
                'short_description' => 'Participation aux échanges sur l’épargne longue, le financement des économies africaines et les marchés capitaux.',
                'description' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.',
                'status' => 'published',
                'category_id' => 2,
                'post_cover' => public_path() . 'front/assets/images/news/article-default.png',
            ],
            [
                'title' => 'Accompagnement stratégique d’un groupe agroalimentaire 3',
                'slug' => Str::slug('Accompagnement stratégique d’un groupe agroalimentaire 3'),
                'short_description' => 'Participation aux échanges sur l’épargne longue, le financement des économies africaines et les marchés capitaux.',
                'description' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.',
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
