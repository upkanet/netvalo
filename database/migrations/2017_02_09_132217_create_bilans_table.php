<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBilansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bilans', function (Blueprint $table) {
            $table->increments('id');

            //Relation with companies table
            $table->integer('company_id')->unsigned();
            $table->foreign('company_id')->references('id')->on('companies');

            $table->smallInteger('year')->unsigned();
            //Figures fields
            $fields = array_keys(config('balance_fields.bilan_fields'));
            foreach ($fields as $field) {
                $table->bigInteger($field)->unsigned();
            }
            //Timestamps
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bilans');
    }
}
