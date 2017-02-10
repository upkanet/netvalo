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
    	//2010
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
			'prod_excep_ reprise_prov' => 0,
			'charges_excep_gestion' => 4248,
			'chagres_excep_cap' => 517,
			'dot_excep_amo' => 0,
			'part_sal' => 0,
			'impots_benef' => 394612,
        ]);
    }
}
