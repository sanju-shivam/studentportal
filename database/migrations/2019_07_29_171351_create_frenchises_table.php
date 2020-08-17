<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrenchisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frenchises', function (Blueprint $table) {
            $table->increments('id');
            $table->string('regno')->nullable();
            $table->string('name');
            $table->string('father_name');
            $table->string('dob');
            $table->string('college');
            $table->string('course');
            $table->text('picture');
            $table->string('mobile');
            $table->string('email');
            $table->string('course_fees');
            $table->string('submitted_fees');
            
            $table->string('registration_date');
            $table->string('Frenchise_name')->nullable();
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
        Schema::dropIfExists('frenchises');
    }
}
