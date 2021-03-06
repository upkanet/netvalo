<?php

use Illuminate\Database\Seeder;

class CRsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//Demo A 2010
        DB::table('crs')->insert([
        	'company_id' => 1,
        	'year' => 2010,
        	'ventes_march' => 0,
			'prod_vendue_biens' => 0,
			'prod_vendue_services' => 7127768,
			'prod_stock' => 0,
			'prod_imm' => 0,
			'sub_exploit' => 5389,
			'reprise_amo_prov' => 56121,
			'autres_prod' => 83,
			'achats_march' => 0,
			'var_stock_march' => 0,
			'achats_mp' => 2364619,
			'var_stock_mp' => -3905,
			'autres_achats' => 1649016,
			'impots_taxes' => 86721,
			'salaires' => 1102638,
			'charges_soc' => 781858,
			'dot_ex_imm_amo' => 58245,
			'dot_ex_imm_prov' => 0,
			'dot_ex_ac' => 0,
			'dot_ex_risques' => 0,
			'autres_charges' => 2649,
			'benef_att' => 0,
			'pertes_supp' => 0,
			'prod_fi_part' => 0,
			'prod_autres_valmob' => 0,
			'autres_int' => 0,
			'prod_fi_reprise_prov' => 0,
			'diff_pos_change' => 0,
			'prod_net_cession_valmob' => 17329,
			'dot_fi_amo_prov' => 0,
			'interets' => 8067,
			'diff_neg_change' => 0,
			'charges_net_cession_valmob' => 0,
			'prod_excep_gest' => 1507,
			'prod_excep_cap' => 20272,
			'prod_excep_reprise_prov' => 0,
			'charges_excep_gestion' => 4248,
			'chagres_excep_cap' => 517,
			'dot_excep_amo' => 0,
			'part_sal' => 0,
			'impots_benef' => 394612,
        ]);

        //Demo A 2009
        DB::table('crs')->insert([
        	'company_id' => 1,
        	'year' => 2009,
        	'ventes_march' => 0,
			'prod_vendue_biens' => 0,
			'prod_vendue_services' => 7243775,
			'prod_stock' => 0,
			'prod_imm' => 0,
			'sub_exploit' => 933,
			'reprise_amo_prov' => 81311,
			'autres_prod' => 13,
			'achats_march' => 0,
			'var_stock_march' => 0,
			'achats_mp' => 2167024,
			'var_stock_mp' => -1855,
			'autres_achats' => 1157768,
			'impots_taxes' => 82137,
			'salaires' => 1074629,
			'charges_soc' => 762982,
			'dot_ex_imm_amo' => 76246,
			'dot_ex_imm_prov' => 0,
			'dot_ex_ac' => 10814,
			'dot_ex_risques' => 0,
			'autres_charges' => 12005,
			'benef_att' => 0,
			'pertes_supp' => 0,
			'prod_fi_part' => 0,
			'prod_autres_valmob' => 0,
			'autres_int' => 26243,
			'prod_fi_reprise_prov' => 0,
			'diff_pos_change' => 0,
			'prod_net_cession_valmob' => 16926,
			'dot_fi_amo_prov' => 0,
			'interets' => 9727,
			'diff_neg_change' => 0,
			'charges_net_cession_valmob' => 0,
			'prod_excep_gest' => 16257,
			'prod_excep_cap' => 1,
			'prod_excep_reprise_prov' => 0,
			'charges_excep_gestion' => 933,
			'chagres_excep_cap' => 47,
			'dot_excep_amo' => 0,
			'part_sal' => 0,
			'impots_benef' => 683500,

        ]);

        //Demo A 2008
        DB::table('crs')->insert([
        	'company_id' => 1,
        	'year' => 2008,
        	'ventes_march' => 0,
			'prod_vendue_biens' => 0,
			'prod_vendue_services' => 7161316,
			'prod_stock' => 0,
			'prod_imm' => 0,
			'sub_exploit' => 0,
			'reprise_amo_prov' => 27208,
			'autres_prod' => 45,
			'achats_march' => 0,
			'var_stock_march' => 0,
			'achats_mp' => 2489987,
			'var_stock_mp' => 12125,
			'autres_achats' => 1391429,
			'impots_taxes' => 74662,
			'salaires' => 1001617,
			'charges_soc' => 708738,
			'dot_ex_imm_amo' => 75185,
			'dot_ex_imm_prov' => 0,
			'dot_ex_ac' => 59185,
			'dot_ex_risques' => 0,
			'autres_charges' => 1831,
			'benef_att' => 0,
			'pertes_supp' => 0,
			'prod_fi_part' => 0,
			'prod_autres_valmob' => 0,
			'autres_int' => 0,
			'prod_fi_reprise_prov' => 0,
			'diff_pos_change' => 0,
			'prod_net_cession_valmob' => 54502,
			'dot_fi_amo_prov' => 0,
			'interets' => 12036,
			'diff_neg_change' => 0,
			'charges_net_cession_valmob' => 0,
			'prod_excep_gest' => 0,
			'prod_excep_cap' => 0,
			'prod_excep_reprise_prov' => 0,
			'charges_excep_gestion' => 1930,
			'chagres_excep_cap' => 286,
			'dot_excep_amo' => 0,
			'part_sal' => 0,
			'impots_benef' => 476801,
        ]);

		//Demo B 2015
        DB::table('crs')->insert([
        	'company_id' => 2,
        	'year' => 2015,
        	'ventes_march' => 75038,
			'prod_vendue_biens' => 0,
			'prod_vendue_services' => 7548491,
			'prod_stock' => -1169636,
			'prod_imm' => 0,
			'sub_exploit' => 1254,
			'reprise_amo_prov' => 34332,
			'autres_prod' => 11922,
			'achats_march' => 0,
			'var_stock_march' => 0,
			'achats_mp' => 1710175,
			'var_stock_mp' => -1618,
			'autres_achats' => 2654626,
			'impots_taxes' => 82287,
			'salaires' => 1121046,
			'charges_soc' => 530715,
			'dot_ex_imm_amo' => 144617,
			'dot_ex_imm_prov' => 0,
			'dot_ex_ac' => 0,
			'dot_ex_risques' => 10000,
			'autres_charges' => 42769,
			'benef_att' => 0,
			'pertes_supp' => 0,
			'prod_fi_part' => 0,
			'prod_autres_valmob' => 0,
			'autres_int' => 44093,
			'prod_fi_reprise_prov' => 20348,
			'diff_pos_change' => 0,
			'prod_net_cession_valmob' => 0,
			'dot_fi_amo_prov' => 0,
			'interets' => 373,
			'diff_neg_change' => 0,
			'charges_net_cession_valmob' => 0,
			'prod_excep_gest' => 0,
			'prod_excep_cap' => 20023,
			'prod_excep_reprise_prov' => 0,
			'charges_excep_gestion' => 0,
			'chagres_excep_cap' => 13246,
			'dot_excep_amo' => 0,
			'part_sal' => 30292,
			'impots_benef' => 83846,
		]);

		//Demo B 2014
        DB::table('crs')->insert([
        	'company_id' => 2,
        	'year' => 2014,
        	'ventes_march' => 62510,
			'prod_vendue_biens' => 0,
			'prod_vendue_services' => 7400215,
			'prod_stock' => 891598,
			'prod_imm' => 0,
			'sub_exploit' => 7578,
			'reprise_amo_prov' => 28549,
			'autres_prod' => 2350,
			'achats_march' => 0,
			'var_stock_march' => 0,
			'achats_mp' => 1826058,
			'var_stock_mp' => 5733,
			'autres_achats' => 4430159,
			'impots_taxes' => 71871,
			'salaires' => 1240185,
			'charges_soc' => 556089,
			'dot_ex_imm_amo' => 162764,
			'dot_ex_imm_prov' => 0,
			'dot_ex_ac' => 0,
			'dot_ex_risques' => 3208,
			'autres_charges' => 720,
			'benef_att' => 0,
			'pertes_supp' => 0,
			'prod_fi_part' => 0,
			'prod_autres_valmob' => 0,
			'autres_int' => 39205,
			'prod_fi_reprise_prov' => 17842,
			'diff_pos_change' => 0,
			'prod_net_cession_valmob' => 819,
			'dot_fi_amo_prov' => 0,
			'interets' => 2081,
			'diff_neg_change' => 0,
			'charges_net_cession_valmob' => 0,
			'prod_excep_gest' => 0,
			'prod_excep_cap' => 15600,
			'prod_excep_reprise_prov' => 0,
			'charges_excep_gestion' => 0,
			'chagres_excep_cap' => 7726,
			'dot_excep_amo' => 0,
			'part_sal' => 8147,
			'impots_benef' => 43313,
		]);

		//Demo B 2013
        DB::table('crs')->insert([
        	'company_id' => 2,
        	'year' => 2013,
        	'ventes_march' => 103326,
			'prod_vendue_biens' => 0,
			'prod_vendue_services' => 6809768,
			'prod_stock' => 1714075,
			'prod_imm' => 0,
			'sub_exploit' => 11700,
			'reprise_amo_prov' => 11233,
			'autres_prod' => 11372,
			'achats_march' => 0,
			'var_stock_march' => 0,
			'achats_mp' => 2751661,
			'var_stock_mp' => 4756,
			'autres_achats' => 3688761,
			'impots_taxes' => 64205,
			'salaires' => 1040003,
			'charges_soc' => 523996,
			'dot_ex_imm_amo' => 158591,
			'dot_ex_imm_prov' => 0,
			'dot_ex_ac' => 0,
			'dot_ex_risques' => 0,
			'autres_charges' => 24266,
			'benef_att' => 0,
			'pertes_supp' => 0,
			'prod_fi_part' => 0,
			'prod_autres_valmob' => 0,
			'autres_int' => 74118,
			'prod_fi_reprise_prov' => 0,
			'diff_pos_change' => 0,
			'prod_net_cession_valmob' => 7220,
			'dot_fi_amo_prov' => 129529,
			'interets' => 4405,
			'diff_neg_change' => 0,
			'charges_net_cession_valmob' => 0,
			'prod_excep_gest' => 0,
			'prod_excep_cap' => 27598,
			'prod_excep_reprise_prov' => 0,
			'charges_excep_gestion' => 0,
			'chagres_excep_cap' => 22352,
			'dot_excep_amo' => 0,
			'part_sal' => 69814,
			'impots_benef' => 89046,
		]);

		//World Company 2016
        DB::table('crs')->insert([
        	'company_id' => 3,
        	'year' => 2016,
        	'ventes_march' => 0,
			'prod_vendue_biens' => 0,
			'prod_vendue_services' => 6396077,
			'prod_stock' => 0,
			'prod_imm' => 0,
			'sub_exploit' => 4100,
			'reprise_amo_prov' => 61837,
			'autres_prod' => 49,
			'achats_march' => 0,
			'var_stock_march' => 0,
			'achats_mp' => 1619745,
			'var_stock_mp' => -520,
			'autres_achats' => 2841178,
			'impots_taxes' => 68830,
			'salaires' => 984197,
			'charges_soc' => 448145,
			'dot_ex_imm_amo' => 5326,
			'dot_ex_imm_prov' => 0,
			'dot_ex_ac' => 0,
			'dot_ex_risques' => 0,
			'autres_charges' => 93,
			'benef_att' => 0,
			'pertes_supp' => 0,
			'prod_fi_part' => 0,
			'prod_autres_valmob' => 0,
			'autres_int' => 80089,
			'prod_fi_reprise_prov' => 0,
			'diff_pos_change' => 0,
			'prod_net_cession_valmob' => 0,
			'dot_fi_amo_prov' => 0,
			'interets' => 590,
			'diff_neg_change' => 0,
			'charges_net_cession_valmob' => 0,
			'prod_excep_gest' => 0,
			'prod_excep_cap' => 0,
			'prod_excep_reprise_prov' => 0,
			'charges_excep_gestion' => 434,
			'chagres_excep_cap' => 0,
			'dot_excep_amo' => 0,
			'part_sal' => 0,
			'impots_benef' => 169501,
		]);

		//World Company 2015
        DB::table('crs')->insert([
        	'company_id' => 3,
        	'year' => 2015,
        	'ventes_march' => 0,
			'prod_vendue_biens' => 0,
			'prod_vendue_services' => 5978875,
			'prod_stock' => 0,
			'prod_imm' => 0,
			'sub_exploit' => 12300,
			'reprise_amo_prov' => 712,
			'autres_prod' => 612,
			'achats_march' => 0,
			'var_stock_march' => 0,
			'achats_mp' => 1555800,
			'var_stock_mp' => -2169,
			'autres_achats' => 2602760,
			'impots_taxes' => 39080,
			'salaires' => 879606,
			'charges_soc' => 378408,
			'dot_ex_imm_amo' => 3394,
			'dot_ex_imm_prov' => 0,
			'dot_ex_ac' => 0,
			'dot_ex_risques' => 36200,
			'autres_charges' => 185,
			'benef_att' => 0,
			'pertes_supp' => 0,
			'prod_fi_part' => 0,
			'prod_autres_valmob' => 0,
			'autres_int' => 67966,
			'prod_fi_reprise_prov' => 0,
			'diff_pos_change' => 0,
			'prod_net_cession_valmob' => 0,
			'dot_fi_amo_prov' => 0,
			'interets' => 0,
			'diff_neg_change' => 0,
			'charges_net_cession_valmob' => 0,
			'prod_excep_gest' => 0,
			'prod_excep_cap' => 0,
			'prod_excep_reprise_prov' => 0,
			'charges_excep_gestion' => 541,
			'chagres_excep_cap' => 0,
			'dot_excep_amo' => 0,
			'part_sal' => 0,
			'impots_benef' => 162617,
		]);

		//World Company 2014
        DB::table('crs')->insert([
        	'company_id' => 3,
        	'year' => 2014,
        	'ventes_march' => 0,
			'prod_vendue_biens' => 0,
			'prod_vendue_services' => 4838768,
			'prod_stock' => 0,
			'prod_imm' => 0,
			'sub_exploit' => 3660,
			'reprise_amo_prov' => 21890,
			'autres_prod' => 213,
			'achats_march' => 0,
			'var_stock_march' => 0,
			'achats_mp' => 1071263,
			'var_stock_mp' => 3204,
			'autres_achats' => 2268679,
			'impots_taxes' => 36922,
			'salaires' => 730436,
			'charges_soc' => 299542,
			'dot_ex_imm_amo' => 2226,
			'dot_ex_imm_prov' => 0,
			'dot_ex_ac' => 0,
			'dot_ex_risques' => 20983,
			'autres_charges' => 19630,
			'benef_att' => 0,
			'pertes_supp' => 0,
			'prod_fi_part' => 0,
			'prod_autres_valmob' => 0,
			'autres_int' => 58133,
			'prod_fi_reprise_prov' => 0,
			'diff_pos_change' => 0,
			'prod_net_cession_valmob' => 0,
			'dot_fi_amo_prov' => 0,
			'interets' => 1297,
			'diff_neg_change' => 0,
			'charges_net_cession_valmob' => 0,
			'prod_excep_gest' => 0,
			'prod_excep_cap' => 1937,
			'prod_excep_reprise_prov' => 0,
			'charges_excep_gestion' => 0,
			'chagres_excep_cap' => 1937,
			'dot_excep_amo' => 0,
			'part_sal' => 0,
			'impots_benef' => 130955,
		]);
    }
}
