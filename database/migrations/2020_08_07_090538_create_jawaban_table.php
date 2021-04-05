<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('isi',255);
            
            $table->unsignedBigInteger('profil_id');
            $table->unsignedBigInteger('pertanyaan_id');
            $table->timestamps();

            $table->foreign('profil_id')->references('id')->on('profiles');
            $table->foreign('pertanyaan_id')->references('id')->on('pertanyaan');
        });
        Schema::table('pertanyaan', function (Blueprint $table) {
            $table->foreign('jawaban_tepat_id')->references('id')->on('jawaban');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pertanyaan', function (Blueprint $table) {
            $table->dropForeign('pertanyaan_jawaban_tepat_id_foreign');
        });
        Schema::dropIfExists('jawaban');
    }
}
