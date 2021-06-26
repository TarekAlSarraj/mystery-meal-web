<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoxItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('box_items', function (Blueprint $table) {
          $table->unsignedBigInteger('box_id');
          $table->unsignedBigInteger('item_id');
          $table->float('item_price');
          $table->integer('item_quantity');
          $table->primary(['box_id', 'item_id']);
          $table->foreign('box_id')->references('id')->on('boxes')->onDelete('cascade');
          $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');


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
        Schema::dropIfExists('box_items');
    }
}
