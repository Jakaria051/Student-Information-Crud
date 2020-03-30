<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Student extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   
    public function up()
    {
        Schema::create('Student', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->timestamps();

            $table->string('One');
            $table->string('firstName');
            $table->string('SecondName');
            $table->integer('age');
            $table->string('Speciality');



        
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Student');
    }
}
