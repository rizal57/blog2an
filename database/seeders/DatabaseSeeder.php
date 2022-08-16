<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use App\Models\Comment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Rizal',
        //     'username' => 'rizal57',
        //     'email' => 'rizal@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // User::create([
        //     'name' => 'Citra',
        //     'username' => 'citra57',
        //     'email' => 'citra@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'personal',
            'slug' => 'personal'
        ]);

        Post::factory(30)->create();

        Comment::create([
            'user_id' => 1,
            'post_id' => 1,
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum libero, quae dolores voluptates aliquid vitae minus velit quia modi repudiandae.'
        ]);
        Comment::create([
            'user_id' => 2,
            'post_id' => 1,
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum libero.'
        ]);
    }
}
