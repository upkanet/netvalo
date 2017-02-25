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
        	'name' => 'Demo A',
        	'siret' => '00000000000000',
    	]);

        DB::table('companies')->insert([
            'user_id' => 1,
            'name' => 'Demo B',
            'siret' => '00000000000000',
        ]);

        DB::table('companies')->insert([
            'user_id' => 2,
            'name' => 'World Company (test)',
            'siret' => '00000000000000',
        ]);
    }
}
