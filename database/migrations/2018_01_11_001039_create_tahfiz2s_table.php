<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTahfiz2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tahfiz2s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('peringkat');
            $table->string('tahungrad');
            $table->string('institus');
            $table->string('bidang');
            $table->string('cgpa');
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
        Schema::dropIfExists('tahfiz2s');
    }
}
