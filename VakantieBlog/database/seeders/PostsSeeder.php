<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsSeeder extends Seeder
{
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'Blog Titel',
            'slug' => 'blog_titel',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque maximus ultricies consequat. Sed sit amet diam mi. Phasellus et luctus massa, ac porta augue. Proin congue lectus quis odio lacinia aliquam. Maecenas erat orci, bibendum eget placerat eget, feugiat et magna. Proin semper felis a condimentum gravida. Aenean tincidunt auctor erat vitae aliquet.',
            'image_path' => '63ea0f84253a7-Nieuwe blog.jpg'
        ]);
    }

}
