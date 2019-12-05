<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyingUserInfosForMoreColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_infos', function (Blueprint $table) {
            //
             $table->string('FisrtName')->nullable();
             $table->string('LastName')->nullable();
             $table->string('UserType')->nullable();
             $table->string('sexe')->nullable();
             $table->string('city')->nullable();
             $table->string('quater')->nullable();
             $table->date('DOB')->nullable();
             $table->string('PlaceOfBirth')->nullable();
             $table->string('IsConvoiturage')->nullable();
             $table->string('DriverLicenceNumber')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_infos', function (Blueprint $table) {
            //
        });
    }
}
