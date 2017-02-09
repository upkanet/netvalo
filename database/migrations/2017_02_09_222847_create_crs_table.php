<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crs', function (Blueprint $table) {
            $fields = array_keys(config('balance_fields.cr_fields'));
            $table->increments('id');
            foreach ($fields as $field) {
                $table->bigInteger($field)->unsigned();
            }
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
        Schema::dropIfExists('crs');
    }
}
