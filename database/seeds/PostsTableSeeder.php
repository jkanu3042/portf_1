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
        $users = \App\User::all();

        foreach($users as $user) {
            $user->posts()->save(
                factory(App\Post::class)->make()
            );
        }
    }
}
