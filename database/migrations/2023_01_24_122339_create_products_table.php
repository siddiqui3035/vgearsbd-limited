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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('categories');
            $table->foreignId('brand_id')->constrained('brands');
            $table->string('name');
            $table->string('purchase_price');
            $table->string('sale_price');
            $table->string('product_code');
            $table->boolean('packaging_type')
                ->comment('0 = container', '1 = can, 2 = bottol, 3 = others');
            $table->integer('qty');
            $table->text('details');
            $table->string('thumble')->nullable();
            $table->text('images')->nullable();
            $table->foreignId('purchase_unit_id')->constrained('units');
            $table->foreignId('sale_unit_id')->constrained('units');
            $table->foreignId('unit_id')->constrained('units');
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('products');
    }
};
