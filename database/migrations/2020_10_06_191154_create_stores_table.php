<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('owner_id')
                  ->nullable()
                  ->constrained()
                  ->onDelete('cascade');

           
            $table->string('s_name');
            $table->string('s_picture')->nullable();
            $table->string('s_category')->nullable();
            $table->string('s_address')->nullable();
            $table->string('s_phone')->nullable();
            $table->string('s_close_time')->nullable();

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
        Schema::dropIfExists('stores');
        
    }
}
