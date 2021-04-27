<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_addresses', function (Blueprint $table) {
            $table->unsignedBigInteger('employee_id');
            $table->string('e_governorate')->nullable();
            $table->string('e_district')->nullable();
            $table->string('e_rea')->nullable();
            $table->string('e_town')->nullable();
            $table->string('e_street')->nullable();
            $table->string('e_neighborhood')->nullable();
            $table->string('e_building')->nullable();
            $table->string('e_floor')->nullable();
            $table->string('e_rea_number')->nullable();
            $table->string('e_division_number')->nullable();
            $table->string('e_phone')->nullable();
            $table->string('e_other_phone')->nullable();
            $table->string('e_fax')->nullable();
            $table->string('e_mailbox')->nullable();
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
        Schema::dropIfExists('employee_addresses');
    }
}
