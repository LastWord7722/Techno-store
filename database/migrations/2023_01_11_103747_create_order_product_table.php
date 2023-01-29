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
        Schema::create('basket_product', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('basket_id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedTinyInteger('quantity');
            $table->timestamps();

            $table->index('basket_id','basket_id_idx');
            $table->foreign('basket_id','basket_id_fk')->on('baskets')->references('id')->cascadeOnDelete();

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
