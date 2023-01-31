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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('product_id');
            $table->string('message');
            $table->timestamps();

            $table->index('product_id','comment_product_id_idx');
            $table->foreign('product_id','comment_product_id_fk')->references('id')->on('products')->cascadeOnDelete();

            $table->index('user_id','comment_user_id_idx');
            $table->foreign('user_id','comment_user_id_fk')->references('id')->on('users');
        });

    }

    /**
     * Reverse the migrations.d
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
};
