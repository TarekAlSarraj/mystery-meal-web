<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('company_id')
                  ->nullable()
                  ->constrained()
                  ->onDelete('cascade');
                
            $table->string('e_father')->nullable();
            $table->string('e_mother')->nullable();
            $table->string('e_sex')->nullable();
            $table->string('e_nationality')->nullable();
            $table->string('e_religion')->nullable();
            $table->date('e_birthdate')->nullable();
            $table->string('e_birthplace')->nullable();
            $table->string('record_number')->nullable();
            $table->string('record_place')->nullable();
            $table->string('id_car_number')->nullable();
            $table->string('e_id_governorate')->nullable();
            $table->string('e_id_district')->nullable();
            $table->string('e_id_rea')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('job_desc')->nullable();
            $table->string('job_type')->nullable();
            $table->string('work_time')->nullable();
            $table->string('salary_type')->nullable();
            $table->date('start_working_date')->nullable();
            $table->date('left_working_date')->nullable();
            $table->date('back_working_date')->nullable();
            $table->string('e_mof_number')->nullable();
            $table->date('e_mof_date')->nullable();
            $table->string('ssn_isregistered')->nullable();
            $table->string('e_ssn_number')->nullable();
            $table->date('e_ssn_date')->nullable();
            $table->string('spouse_works')->nullable();
            $table->string('family_compensation')->nullable();
            $table->string('children_compensation_count')->nullable();
            $table->string('income_tax_concession')->nullable();
            $table->string('itc_children_count')->nullable();
            $table->string('salary_basis')->nullable();
            $table->string('daily_transportation')->nullable();
            $table->string('working_days')->nullable();
            $table->string('representation_allowance')->nullable();
            $table->string('housing_allowance')->nullable();
            $table->string('food_voucher')->nullable();
            $table->string('cash_food_allowance')->nullable();
            $table->string('other_benefits')->nullable();
            $table->string('other_company')->nullable();
            $table->string('other_company_name')->nullable();
            $table->string('other_company_mofnumber')->nullable();
            $table->string('other_company_ssnnumber')->nullable();
            



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
        Schema::dropIfExists('employees');
    }
}
