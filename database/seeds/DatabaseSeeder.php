<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Auth
        $this->call(UsersTableSeeder::class);

        //Metier
        $this->call(CompaniesTableSeeder::class);
        $this->call(BilansTableSeeder::class);
        $this->call(CRsTableSeeder::class);
        $this->call(RequestsTableSeeder::class);
    }
}
