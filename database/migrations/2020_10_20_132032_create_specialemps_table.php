<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecialempsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specialemps', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('role')->nullable();
            $table->string('position')->nullable();
            $table->string('phone')->nullable();
            $table->string('fax')->nullable();
            $table->string('mof_number')->nullable();

            $table->foreignId('company_id')
                  ->nullable()
                  ->constrained()
                  ->onDelete('cascade');

                  
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
        Schema::dropIfExists('specialemps');
    }
}
