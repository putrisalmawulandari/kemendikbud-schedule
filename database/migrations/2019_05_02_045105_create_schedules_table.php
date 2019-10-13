<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('officer_id')->unsigned();
            $table->date('date');
            $table->string('departure');
            $table->time('departure_time');
            $table->integer('employee_id')->unsigned();
            $table->integer('companion_id')->unsigned()->nullable();
            $table->integer('transportationgenerate_id')->unsigned();
            $table->integer('transportation_from_id')->unsigned()->nullable();
            $table->enum('status',['aktif','selesai']);
            $table->string('arrive');
            $table->boolean('routine')->default(0);
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
        Schema::dropIfExists('schedules');
    }
}
