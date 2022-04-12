<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('states', function (Blueprint $table) {
            $table->id();
            $table->foreignId('organization_id')->constrained();
            $table->foreignId('division_id')->constrained();
            $table->string('position');
            $table->string('stake');
            $table->integer('timetable');
            $table->integer('hours_per_week');
            $table->string('surname');
            $table->string('lastname');
            $table->string('patronymic')->nullable();
            $table->integer('payment');
            $table->decimal('mo', 2,1)->nullable();
            $table->decimal('to', 2,1)->nullable();
            $table->decimal('we', 2,1)->nullable();
            $table->decimal('th', 2,1)->nullable();
            $table->decimal('fr', 2,1)->nullable();
            $table->decimal('sa', 2,1)->nullable();
            $table->decimal('su', 2,1)->nullable();
            $table->decimal('dinner', 2,1)->nullable();
            $table->foreignId('user_id')->constrained();
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
        Schema::dropIfExists('states');
    }
}
