<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);
        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-family-post',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam incidunt placeat molestias doloribus voluptatibus facere omnis rerum iure debitis. Nisi culpa obcaecati facilis accusamus, modi vel! Vel sequi quaerat asperiores?'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'My Personal Post',
            'slug' => 'my-personal-post',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam incidunt placeat molestias doloribus voluptatibus facere omnis rerum iure debitis. Nisi culpa obcaecati facilis accusamus, modi vel! Vel sequi quaerat asperiores?'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam incidunt placeat molestias doloribus voluptatibus facere omnis rerum iure debitis. Nisi culpa obcaecati facilis accusamus, modi vel! Vel sequi quaerat asperiores?'
        ]);
    }
}
