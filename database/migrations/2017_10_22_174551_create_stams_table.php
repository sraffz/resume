<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mt');
            $table->string('grd');
            $table->string('mt2');
            $table->string('grd2');
            $table->string('mt3');
            $table->string('grd3');
            $table->string('mt4');
            $table->string('grd4');
            $table->string('mt5');
            $table->string('grd5');
            $table->string('mt6');
            $table->string('grd6');
            $table->string('mt7');
            $table->string('grd7');
            $table->string('mt8');
            $table->string('grd8');
            $table->string('mt9');
            $table->string('grd9');
            $table->string('mt10');
            $table->string('grd10');
            $table->string('mt11')->null;
            $table->string('grd11')->null;
            $table->string('mt12')->null;
            $table->string('grd12')->null;
            $table->string('mt13')->null;
            $table->string('grd13')->null;
            $table->string('mt14')->null;
            $table->string('grd14')->null;
            $table->string('mt15')->null;
            $table->string('grd15')->null;
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
        Schema::dropIfExists('stams');
    }
}
