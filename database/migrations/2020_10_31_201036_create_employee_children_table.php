<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeChildrenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_children', function (Blueprint $table) {
            $table->id();


            $table->foreignId('employee_id')
            ->nullable()
            ->constrained()
            ->onDelete('cascade');

            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('father')->nullable();
            $table->string('mother')->nullable();
            $table->date('birthplace')->nullable();
            $table->string('birthdate')->nullable();
            $table->string('deathdate')->nullable();
            $table->string('sex')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('disability')->nullable();
            $table->string('student')->nullable();
            $table->string('edu_name')->nullable();
            $table->string('level')->nullable();
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
        Schema::dropIfExists('employee_children');
    }
}
