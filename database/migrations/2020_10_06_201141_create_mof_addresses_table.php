<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMofAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mof_addresses', function (Blueprint $table) {
            $table->unsignedBigInteger('company_id');
            $table->string('governorate')->nullable();
            $table->string('district')->nullable();
            $table->string('street')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('real_estate_area')->nullable();
            $table->string('real_estate_number')->nullable();
            $table->string('division_number')->nullable();
            $table->string('building')->nullable();
            $table->string('floor')->nullable();
            $table->string('phone')->nullable();
            $table->string('fax')->nullable();
            $table->string('mailbox')->nullable();
            $table->string('region')->nullable();
            $table->date('changed_date')->nullable();
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
        Schema::dropIfExists('mof_addresses');
    }
}
