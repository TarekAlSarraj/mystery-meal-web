<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderBoxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_boxes', function (Blueprint $table) {
          $table->unsignedBigInteger('order_id');
          $table->unsignedBigInteger('box_id');
          $table->primary(['order_id', 'box_id']);
          $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
          $table->foreign('box_id')->references('id')->on('boxes')->onDelete('cascade');
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
        Schema::dropIfExists('order_boxes');
    }
}
