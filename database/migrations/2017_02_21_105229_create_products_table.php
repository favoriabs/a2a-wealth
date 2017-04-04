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
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('product_name');
            $table->string('variety');
            $table->string('quantity');
            $table->string('quality');
            $table->string('shelf_life');
            $table->float('price');
            $table->string('fertilization');
            $table->string('production');

            $table->integer('farmer_id')->unsigned();
            $table->foreign('farmer_id')->references('id')->on('farmers');
            
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
        Schema::dropIfExists('products');
    }
}
