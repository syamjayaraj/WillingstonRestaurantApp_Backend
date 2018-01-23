<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTariffareasProdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TARIFFAREAS_PROD', function (Blueprint $table) {
            $table->string('TARIFFID');
            $table->string('PRODUCTID');
            $table->double('PRICESELL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TARIFFAREAS_PROD');
    }
}
