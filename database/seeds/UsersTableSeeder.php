<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'Omar',
            'email' => 'omar@gmail.com',
            'password' => bcrypt('password')
        ]);
    }
}
