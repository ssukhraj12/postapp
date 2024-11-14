<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $userIds = User::pluck('id')->all();

        Post::factory()->count(5000)->make()->each(function ($post) use ($userIds) {
            $post->user_id = $userIds[array_rand($userIds)];
            $post->save();
        });
    }
}
