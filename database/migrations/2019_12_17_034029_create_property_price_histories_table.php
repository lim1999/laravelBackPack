<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyPriceHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_price_histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('property_id');
            $table->float('rent_price')->nullable();
            $table->float('sale_price')->nullable();
            $table->float('list_price')->nullable();
            $table->float('sold_price')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
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
        Schema::dropIfExists('property_price_histories');
    }
}
