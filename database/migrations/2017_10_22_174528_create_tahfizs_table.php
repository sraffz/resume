<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTahfizsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tahfizs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tahungradsijil');
            $table->string('institusisijil');
            $table->string('bidangsijil');
            $table->string('cgpasijil');
            $table->string('transkripsijil');
            $table->string('sijilkonvosijil');

            $table->string('tahungraddiploma')->null;
            $table->string('institusidiploma')->null;
            $table->string('bidangdiploma')->null;
            $table->string('cgpadiploma')->null;
            $table->string('transkripdiploma')->null;
            $table->string('sijilkonvodiploma')->null;

            $table->string('tahungradijazah')->null;
            $table->string('institusiijazah')->null;
            $table->string('bidangijazah')->null;
            $table->string('cgpaijazahijazah')->null;
            $table->string('transkripijazah')->null;
            $table->string('sijilkonvoijazah')->null;
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
        Schema::dropIfExists('tahfizs');
    }
}
