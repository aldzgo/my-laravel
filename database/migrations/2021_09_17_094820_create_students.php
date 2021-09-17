<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Students', function (Blueprint $table) {
            $table->id();
            $table->string('Firstname', 66)->nullable();
            $table->string('Middlename', 66)->nullable();
            $table->string('Lastname', 66)->nullable();
            $table->date('Birthdate')->nullable();
            $table->string('Gender', 20)->nullabel();
            $table->string('Address', 599)->nullabe();
            $table->string('Citizenship', 50)->nullable();
            $table->string('Religion', 99)->nullable();
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
        Schema::dropIfExists('students');
    }
}
