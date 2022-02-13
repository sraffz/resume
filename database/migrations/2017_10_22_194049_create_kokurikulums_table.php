<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKokurikulumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kokurikulums', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sukan');
            $table->string('peringkat');
            $table->string('sukan2');
            $table->string('peringkat2');
            $table->string('sukan3');
            $table->string('peringkat3');
            $table->string('sukan4');
            $table->string('peringkat4');
            $table->string('sukan5');
            $table->string('peringkat5');
            $table->string('namakelab');
            $table->string('jawatan');
            $table->string('peringkatkelab');
            $table->string('namakelab2');
            $table->string('jawatan2');
            $table->string('peringkatkelab2');
            $table->string('namakelab3');
            $table->string('jawatan3');
            $table->string('peringkatkelab3');
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
        Schema::dropIfExists('kokurikulums');
    }
}
