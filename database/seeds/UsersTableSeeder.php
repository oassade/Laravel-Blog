<?php

use Illuminate\Database\Seeder;
use App\Profile;

class UsersTableSeeder extends Seeder 
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([
            'name' => 'Omar',
            'email' => 'omar@gmail.com',
            'password' => bcrypt('password'),
            'admin' => 1
        ]);

        App\Profile::create([

            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/1.png',
            'about' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis consectetur cumque incidunt at eius, adipisci, fuga, accusamus libero ut nesciunt illum itaque natus dolorum architecto consequatur molestiae quibusdam omnis corrupti.',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com',

        ]);
    }
}
