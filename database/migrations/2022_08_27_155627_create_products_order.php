<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_order', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constraint();
            $table->foreignId('product_id')->constraint();
            $table->string('productName');
            $table->string('productQuantity');
            $table->string('productPrice');
            $table->string('totalAmount');
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
        Schema::dropIfExists('products_order');
    }
};
