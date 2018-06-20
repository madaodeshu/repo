<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGambarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gambars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('gambar');
            $table->string('arc_id');
            $table->string('kaget_id');


             $table->foreign('arc_id')->references('id')->on('archiever')->onUpdate('cascade')->onDelete('cascade');
              $table->foreign('kaget_id')->references('id')->on('kaget')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('gambars');
    }
}
