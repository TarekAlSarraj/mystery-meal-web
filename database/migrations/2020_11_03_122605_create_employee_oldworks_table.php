<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeOldworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_oldworks', function (Blueprint $table) {
            $table->id();

            $table->foreignId('employee_id')
            ->nullable()
            ->constrained()
            ->onDelete('cascade');


            $table->string('company_name')->nullable();
            $table->string('company_owner')->nullable();
            $table->text('company_address')->nullable();
            $table->string('ssn_number')->nullable();
            $table->string('mof_number')->nullable();
            $table->string('last_salary')->nullable();
            $table->date('date_started')->nullable();
            $table->date('date_left')->nullable();

           
          
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
        Schema::dropIfExists('employee_oldworks');
    }
}
