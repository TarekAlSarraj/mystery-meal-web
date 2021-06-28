<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
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
            $table->unsignedBigInteger('customer_id');
            $table->float('total_order_price');

            $table->foreignId('box_id')
            ->nullable()
            ->constrained()
            ->onDelete('cascade');


            $table->foreignId('store_id')
            ->nullable()
            ->constrained()
            ->onDelete('cascade');

            $table->timestamp('time')->useCurrent = true;

            $table->string('status')->default('pending');
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
}
