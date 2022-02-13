<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResumeBayaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resume_bayaran', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');
            $table->String('bayaran');
            $table->String('jenisbayaran');
            $table->String('no_slip_rujukan');
            $table->String('no_siri');
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
        Schema::dropIfExists('resume_bayaran');
    }
}
