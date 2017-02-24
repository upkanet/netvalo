<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->increments('id');
            //Relationship with Users table
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            //Relationship with request_types table
            $table->integer('request_type_id')->unsigned();
            $table->foreign('request_type_id')->references('id')->on('request_types');

            //Relationship with companies table
            $table->integer('company_id')->unsigned();
            $table->foreign('company_id')->references('id')->on('companies');

            //Valo Year
            $table->smallInteger('valo_year')->unsigned();

            //Relationship with request_levels table
            $table->integer('request_level_id')->unsigned();
            $table->foreign('request_level_id')->references('id')->on('request_levels');

            //Snapshot de la demande si les données sur l'entreprise sont modifiées en cours de route
            $table->json('snapshot');

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
        Schema::dropIfExists('requests');
    }
}
