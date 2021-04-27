<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('client_id')
                  ->nullable()
                  ->constrained()
                  ->onDelete('cascade');


            $table->string('c_name');
            $table->string('c_email');
            $table->string('c_type')->nullable();
            $table->string('com_fame')->nullable();
            $table->string('f_number')->nullable();
            $table->date('mof_date')->nullable();
            $table->string('ssn_number')->nullable();
            $table->string('com_reg_place')->nullable();
            $table->string('com_reg_number')->nullable();
            $table->date('com_reg_date')->nullable();
            $table->string('mof_uname')->nullable();
            $table->string('mof_pass')->nullable();

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
        Schema::dropIfExists('companies');
        
    }
}
