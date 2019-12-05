<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rides', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('userId');
            $table->string('From');
            $table->string('To');
            $table->string('PickPoint');
            $table->string('DropPoint');
            $table->integer('NumberOfPlaces');
            $table->string('KgPerPerson');
            $table->string('CarModel');
            $table->string('CarColor');
            $table->text('notice');
            $table->integer('price');
            $table->date('DepartureDate');
            $table->time('DepartureTime');
            
            $table->foreign('userId')->references('id')->on('users');

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
        Schema::dropIfExists('rides');
    }
}
