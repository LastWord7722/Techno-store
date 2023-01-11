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
            $table->string('name');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('brand_id');
            $table->string('slug')->nullable();
            $table->string('image')->nullable();
            $table->decimal('price','10','2',true)->default(0); // разобраться с этим полем 
            $table->timestamps();
            $table->softDeletes();
            
            $table->index('category_id', 'product_category_idx');
            $table->index('brand_id', 'product_brand_idx');

            $table->foreign('category_id','category_id_fk')->on('categories')->references('id')->cascadeOnDelete();
            $table->foreign('brand_id','brand_id_fk')->on('brands')->references('id')->cascadeOnDelete();
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
