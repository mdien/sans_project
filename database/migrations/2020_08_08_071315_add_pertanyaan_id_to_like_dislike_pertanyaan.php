<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPertanyaanIdToLikeDislikePertanyaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('like_dislike_pertanyaans', function (Blueprint $table) {
            $table->unsignedBigInteger('pertanyaan_id');
            $table->foreign('pertanyaan_id')->constrained('pertanyaans')->references('id')
            ->on('pertanyaans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('like_dislike_pertanyaan', function (Blueprint $table) {
            //
        });
    }
}
