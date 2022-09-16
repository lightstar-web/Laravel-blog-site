<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'title' => 'First post',
                'excerpt' => 'First post excerpt',
                'body' => 'First post body',
                'min_to_read' => 1,
                'image_path' => 'https://picsum.photos/200/300',
                'is_published' => true
            ],
            [
                'title' => 'Second post',
                'excerpt' => 'Second post excerpt',
                'body' => 'Second post body',
                'min_to_read' => 2,
                'image_path' => 'https://picsum.photos/200/300',
                'is_published' => true
            ],
            [
                'title' => 'Third post',
                'excerpt' => 'Third post excerpt',
                'body' => 'Third post body',
                'min_to_read' => 3,
                'image_path' => 'https://picsum.photos/200/300',
                'is_published' => true
            ],
            [
                'title' => 'Fourth post',
                'excerpt' => 'Fourth post excerpt',
                'body' => 'Fourth post body',
                'min_to_read' => 4,
                'image_path' => 'https://picsum.photos/200/300',
                'is_published' => true
            ],
            [
                'title' => 'Fifth post',
                'excerpt' => 'Fifth post excerpt',
                'body' => 'Fifth post body',
                'min_to_read' => 5,
                'image_path' => 'https://picsum.photos/200/300',
                'is_published' => true
            ],
        ];

        foreach ($posts as $key => $value){
            Post::create($value);
        }
    }
}
