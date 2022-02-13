<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSPMsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_p_ms', function (Blueprint $table) {
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
            $table->string('mt9')->null;
            $table->string('grd9')->null;
            $table->string('mt10')->null;
            $table->string('grd10')->null;
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
            $table->string('mt16')->null;
            $table->string('grd16')->null;
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
        Schema::dropIfExists('s_p_ms');
    }
}
