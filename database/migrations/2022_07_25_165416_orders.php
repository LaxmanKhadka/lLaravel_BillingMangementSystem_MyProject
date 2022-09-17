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
        schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('Customer_select');
            // $table->string('customerEmail');
            $table->string('customerPhone');
            $table->string('shippingAddress1');
            $table->string('shippingAddress2');
            $table->string('State');
            $table->string('City');
            $table->string('Country');
            $table->string('subtotalAmount');
            $table->string('taxAmount')->nullable();
            $table->string('discountAmount')->nullable();
            $table->string('totalAmount');
            $table->string('paid_by')->nullable();
            $table->string('Paid_Ref_No')->nullable();
            $table->string('bankName')->nullable();
            $table->string('Invoice_no')->nullable();
            $table->string('remarks')->nullable();
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
        schema::dropIfExists('orders');
    }
};
