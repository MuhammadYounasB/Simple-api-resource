<?php

use Illuminate\Database\Seeder;
use App\Post;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Muhammad Younas',
            'email' => 'user1@gmail.com',
            'password' => Hash::make('admin'),
        ]);

        DB::table('users')->insert([
            'name' => 'Muhammad Hamza',
            'email' => 'user2@gmail.com',
            'password' => Hash::make('admin'),
        ]);

    }
}
