<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quantity');
            $table->integer('total_price');
            $table->string('payment_type');
            $table->integer('shipping_country_id')->unsigned();
            $table->foreign('shipping_country_id')->references('id')->on('shipping_country');
            $table->integer('customer_id')->unsigned();
            $table->foreign('customer_id')->references('id')->on('customer');
            $table->integer('products_id')->unsigned();
            $table->foreign('products_id')->references('id')->on('products');
            $table->integer('promotion_id')->unsigned();
            $table->foreign('promotion_id')->references('id')->on('promotion');
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
        Schema::dropForeign(['shipping_country_id']);
        Schema::dropForeign(['customer_id']);
        Schema::dropForeign(['products_id']);
        Schema::dropForeign(['promotion_id']);
        Schema::dropIfExists('orders');

    }
}
