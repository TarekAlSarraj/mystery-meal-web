<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyLawyersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_lawyers', function (Blueprint $table) {
            $table->unsignedBigInteger('company_id');
            $table->string('lawyer_name')->nullable();
            $table->string('lawyer_email')->nullable();
            $table->string('lawyer_phone')->nullable();
            $table->string('lawyer_mobile')->nullable();
            $table->string('lawyer_fax')->nullable();
            $table->string('lawyer_address')->nullable();
            $table->string('law_office_name')->nullable();
            $table->string('lawyer_mof_number')->nullable();

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
        Schema::dropIfExists('company_lawyers');
    }
}
