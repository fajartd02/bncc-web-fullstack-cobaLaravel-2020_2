<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('Titles');
            $table->string('Content');
            $table->unsignedBigInteger('CorrectAnswer');
            $table->unsignedBigInteger('User_ID');
            $table->timestamps();
        });
        // Schema::table('questions', function(Blueprint $table){
        //     $table->foreign('User_ID')->references('id')->on('users');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
