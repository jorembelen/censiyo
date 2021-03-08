<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'Jorem Belen',
                'email' => 'jorembelen@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$PeLgJzkz7kvQbTntUB63HO/nGslqHeVPtOXfl.nmGxYHpEprXLf.y',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2021-03-05 17:27:58',
                'updated_at' => '2021-03-07 02:27:05',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 1,
                'name' => 'Arnel Palma',
                'email' => 'arnel@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$K9eec2yRtkHZIhKELqxe7O3BYHO3AomPNUJ2uvuzsygdpLnkDSqAy',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2021-03-07 02:29:17',
                'updated_at' => '2021-03-07 02:29:17',
            ),
        ));
        
        
    }
}