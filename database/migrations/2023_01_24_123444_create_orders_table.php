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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('address_id')->constrained('addresses');
            $table->foreignId('product_id')->constrained('products');
            $table->foreignId('discount_id')->constrained('discounts');
            $table->string('product_qty');
            $table->string('product_price');
            $table->string('total_price');
            $table->string('payment_method');
            $table->boolean('status')->default(0)
                ->comment('0 = accept, 1 = decline');
            $table->softDeletes();
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
        Schema::dropIfExists('orders');
    }
};
