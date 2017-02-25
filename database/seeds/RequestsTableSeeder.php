<?php

use Illuminate\Database\Seeder;

class RequestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Init Request Types
        DB::table('request_types')->insert([
        	'acronyme' => 'strat',
        	'name' => 'Conseil en Stratégie'
        ]);

        DB::table('request_types')->insert([
        	'acronyme' => 'vente',
        	'name' => 'Vendre la société'
        ]);

        DB::table('request_types')->insert([
        	'acronyme' => 'achat',
        	'name' => 'Acheter la société'
        ]);

        DB::table('request_types')->insert([
        	'acronyme' => 'detail_valo',
        	'name' => 'Obtenir une valorisation détaillée'
        ]);

        //Init Request Levels
        DB::table('request_levels')->insert([
        	'level' => 0,
        	'acronyme' => 'send',
        	'name' => 'Demande envoyée'
        ]);
        
        DB::table('request_levels')->insert([
        	'level' => 1,
        	'acronyme' => 'ackowledge',
        	'name' => 'Demande reçue'
        ]);

        DB::table('request_levels')->insert([
        	'level' => 2,
        	'acronyme' => 'identified_partner',
        	'name' => 'Partenaires identifiés'
        ]);

        DB::table('request_levels')->insert([
        	'level' => 3,
        	'acronyme' => 'proposed_partner',
        	'name' => 'Partenaires proposés'
        ]);

        DB::table('request_levels')->insert([
        	'level' => 4,
        	'acronyme' => 'match',
        	'name' => 'Mise en relation effectuée'
        ]);

        DB::table('request_levels')->insert([
        	'level' => 5,
        	'acronyme' => 'success',
        	'name' => 'Demande effectuée/terminée'
        ]);

        DB::table('request_levels')->insert([
        	'level' => -1,
        	'acronyme' => 'refused',
        	'name' => 'Demande non effectuée/terminée'
        ]);

        //Spoof Requests
        DB::table('requests')->insert([
        	'user_id' => 2,
        	'request_type_id' => 1,
        	'company_id' => 1,
        	'valo_year' => 2010,
        	'request_level_id' => 1,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:d'),
        	'snapshot' => json_encode([
        		'user' => 'JD',
        		'company' => 'World Company',
        		'valo' => '5,0M€ - 6,5M€ (2010)'
        	])
        ]);

        DB::table('requests')->insert([
            'user_id' => 2,
            'request_type_id' => 2,
            'company_id' => 1,
            'valo_year' => 2010,
            'request_level_id' => 2,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:d'),
            'snapshot' => json_encode([
                'user' => 'JD',
                'company' => 'World Company',
                'valo' => '5,0M€ - 6,5M€ (2010)'
            ])
        ]);

        DB::table('requests')->insert([
            'user_id' => 2,
            'request_type_id' => 3,
            'company_id' => 1,
            'valo_year' => 2010,
            'request_level_id' => 3,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:d'),
            'snapshot' => json_encode([
                'user' => 'JD',
                'company' => 'World Company',
                'valo' => '5,0M€ - 6,5M€ (2010)'
            ])
        ]);

        DB::table('requests')->insert([
            'user_id' => 2,
            'request_type_id' => 3,
            'company_id' => 1,
            'valo_year' => 2010,
            'request_level_id' => 4,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:d'),
            'snapshot' => json_encode([
                'user' => 'JD',
                'company' => 'World Company',
                'valo' => '5,0M€ - 6,5M€ (2010)'
            ])
        ]);

        DB::table('requests')->insert([
            'user_id' => 2,
            'request_type_id' => 2,
            'company_id' => 1,
            'valo_year' => 2010,
            'request_level_id' => 5,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:d'),
            'snapshot' => json_encode([
                'user' => 'JD',
                'company' => 'World Company',
                'valo' => '5,0M€ - 6,5M€ (2010)'
            ])
        ]);

        DB::table('requests')->insert([
            'user_id' => 2,
            'request_type_id' => 4,
            'company_id' => 1,
            'valo_year' => 2010,
            'request_level_id' => 2,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:d'),
            'snapshot' => json_encode([
                'user' => 'JD',
                'company' => 'World Company',
                'valo' => '5,0M€ - 6,5M€ (2010)'
            ])
        ]);

        DB::table('requests')->insert([
            'user_id' => 2,
            'request_type_id' => 2,
            'company_id' => 1,
            'valo_year' => 2010,
            'request_level_id' => 6,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:d'),
            'snapshot' => json_encode([
                'user' => 'JD',
                'company' => 'World Company',
                'valo' => '5,0M€ - 6,5M€ (2010)'
            ])
        ]);

        DB::table('requests')->insert([
            'user_id' => 2,
            'request_type_id' => 1,
            'company_id' => 1,
            'valo_year' => 2010,
            'request_level_id' => 7,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:d'),
            'snapshot' => json_encode([
                'user' => 'JD',
                'company' => 'World Company',
                'valo' => '5,0M€ - 6,5M€ (2010)'
            ])
        ]);

        DB::table('requests')->insert([
            'user_id' => 2,
            'request_type_id' => 1,
            'company_id' => 1,
            'valo_year' => 2010,
            'request_level_id' => 3,
            'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:d'),
            'snapshot' => json_encode([
                'user' => 'JD',
                'company' => 'World Company',
                'valo' => '5,0M€ - 6,5M€ (2010)'
            ])
        ]);


    }
}
