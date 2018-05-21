<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AnswerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('choice', function (Blueprint $table) {
            $table->integer('ID_Soal');
            $table->integer('Choice_Number');
            $table->string('Answer');
            $table->boolean('IsCorrect');
            $table->foreign('ID_Soal')->references('ID_Soal')->on('question');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('choice');
    }
}
