<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // make 10 users
        factory(App\User::class, 10)->create()->each(function ($user) {
            $user->leaves()->saveMany(factory(App\Leave::class, 5)->make());
        });
    }
}
