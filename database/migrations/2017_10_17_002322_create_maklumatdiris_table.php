<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaklumatdirisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maklumatdiris', function (Blueprint $table) {
            $table->increments('id');
            $table->String('nama');
            $table->string('ic');
            $table->string('alamat');
            $table->string('poskod');
            $table->string('daerah');
            $table->string('negeri');
            $table->string('kewarganegaraan');
            $table->string('jantina');
            $table->string('nosuratberanak');
            $table->string('tempatlahir');
            $table->string('status');
            $table->string('email');
            $table->string('nohp');
            $table->string('hpr');
            $table->string('sekolah');
            $table->string('jenissekolah');
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
        Schema::dropIfExists('maklumatdiris');
    }
}
