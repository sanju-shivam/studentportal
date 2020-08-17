<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
             $table->string('Frenchise_name');
             $table->string('frenchise_code');
            $table->string('Frenchise_address');
            $table->string('Frenchise_contactno');
            $table->string('Frenchise_email');
            $table->string('Frenchise_password');
            $table->string('Frenchise_contactperson_name');
            $table->string('Frenchise_contactperson_number');
            $table->string('Frenchise_accountno');
            $table->string('Frenchise_IFSC_code');
            $table->string('Frenchise_accountholder_name');
            $table->string('Frenchise_bankname');
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
        Schema::dropIfExists('admins');
    }
}
