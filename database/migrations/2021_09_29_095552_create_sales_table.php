<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Sales', function (Blueprint $table) {
            $table->id();
            $table->integer('Wholesale_qty');
            $table->string('Description', 100);
            $table->bigInteger('Product_id')->unsigned();
            $table->bigInteger('Price_id')->unsigned();
            $table->timestamps();

            $table->foreign('Product_id')->references('id')->on('products');
            $table->foreign('Price_id')->references('id')->on('pricing');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
