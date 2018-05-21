<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->integer('ID_user')->autoIncrement();
            $table->string('Username');
            $table->char('Password',25);
            $table->string('email');
            $table->string('Name');
            $table->string('Address');
            $table->binary('Picture');
            $table->date('birth_date');
            $table->integer('Rank');
            $table->integer('CurrProbSolved');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
