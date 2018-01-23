<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PRODUCTS', function (Blueprint $table) {
            $table->string('ID');
            $table->string('REFERENCE');
            $table->string('CODE');
            $table->string('CODETYPE');
            $table->string('NAME');
            $table->double('PRICEBUY');
            $table->double('PRICESELL');
            $table->string('CATEGORY');
            $table->string('TAXCAT');
            $table->string('ATTRIBUTESET_ID');
            $table->double('STOCKCOST');
            $table->double('STOCKVOLUME');
            $table->binary('IMAGE');
            $table->boolean('ISCOM');
            $table->boolean('ISSCLAE');
            $table->binary('ATTRIBUTES');
            $table->boolean('INCAT');
            $table->integer('CATORDER');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PRODUCTS');
    }
}
