<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengalamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengalamen', function (Blueprint $table) {
            $table->increments('id');
            $table->String('namasyr');
            $table->String('alamatsyr');
            $table->String('notelsyr');
            $table->String('jwtnsyr');
            $table->String('tempohkhidmat');
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
        Schema::dropIfExists('pengalamen');
    }
}
