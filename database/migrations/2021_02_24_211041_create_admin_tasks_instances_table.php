<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminTasksInstancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_tasks_instances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admin_tasks_id')
            ->nullable()
            ->constrained()
            ->onDelete('cascade');
            $table->string('task_description');
            $table->dateTime('task_start_time');
            $table->dateTime('task_end_time')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_tasks_instances');
    }
}
