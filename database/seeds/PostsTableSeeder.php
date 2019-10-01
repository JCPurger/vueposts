<?php

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
      factory(App\Models\User::class, 5)->create()->each(function ($user) {
        $user->posts()->saveMany(factory(App\Models\Post::class, 60)->make());
      });
    }
}
