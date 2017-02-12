<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
        	'user_id' => 1,
        	'name' => 'World Company',
        	'siret' => '123456789ABCDE',
    	]);

        DB::table('companies')->insert([
            'user_id' => 1,
            'name' => 'Empty Company',
            'siret' => '88776655443345',
        ]);
    }
}
