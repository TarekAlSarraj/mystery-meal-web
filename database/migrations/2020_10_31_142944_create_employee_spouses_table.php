<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeSpousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_spouses', function (Blueprint $table) {
            $table->id();

            $table->foreignId('employee_id')
            ->nullable()
            ->constrained()
            ->onDelete('cascade');

            $table->string('firstname')->nullable();
            $table->string('father')->nullable();
            $table->string('lastname')->nullable();
            $table->string('mother')->nullable();
            $table->string('nationality')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('birthplace')->nullable();
            $table->date('deathdate')->nullable();
            $table->string('record_number')->nullable();
            $table->string('record_place')->nullable();
            $table->string('mof_number')->nullable();
            $table->string('ssn_number')->nullable();
            $table->string('isworking')->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_mof_number')->nullable();
            $table->date('benefit_start_date')->nullable();
            $table->date('benefit_end_date')->nullable();

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
        Schema::dropIfExists('employee_spouses');
    }
}
