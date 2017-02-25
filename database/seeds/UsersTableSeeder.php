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
        DB::table('users')->insert([
        	'name' => 'SeedUser',
        	'email' => 'seed@netvalo.fr',
        	'password' => bcrypt('seed'),
    	]);

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@netvalo.fr',
            'password' => bcrypt('netvalo'),
        ]);
    }
}
