<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIjazahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ijazahs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tahungrad');
            $table->string('institusi');
            $table->string('bidang');
            $table->string('cgpa');
            $table->string('transkrip');
            $table->string('sijilkonvo');
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
        Schema::dropIfExists('ijazahs');
    }
}
