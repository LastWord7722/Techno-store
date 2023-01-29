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
        Schema::create('order_product', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedTinyInteger('quantity')->default('1');
            $table->timestamps();

            $table->index('order_id','order_id_idx');
            $table->foreign('order_id','order_id_fk')->on('orders')->references('id')->cascadeOnDelete();

            $table->index('product_id','product_id_idx');
            $table->foreign('product_id','product_id_fk',)->on('products')->references('id')->cascadeOnDelete();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('basket_product');
    }
};
