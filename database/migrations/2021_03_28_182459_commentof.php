<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Commentof extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentOfAnswers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('contents');
            $table->unsignedBigInteger('answers_id');
            $table->unsignedBigInteger('profile_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commentOfAnswers');
    }
}
