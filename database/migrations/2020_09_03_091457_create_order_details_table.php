<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles_orders', function (Blueprint $table) {
            $table->bigInteger('articles_id')->unsigned()->index();
            $table->foreign('articles_id')->references('id')->on('articles')->onDelete('cascade');
            $table->bigInteger('orders_id')->unsigned()->index();
            $table->foreign('orders_id')->references('id')->on('orders')->onDelete('cascade');
            $table->integer('amount');
            $table->primary(['article_id', 'order_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_details');
    }
}
