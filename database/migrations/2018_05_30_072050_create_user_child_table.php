<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserChildTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_child', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->primary('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('nama');
            //$table->string('gambar');
            $table->date('tgl_lahir');
            $table->text('alamat');
            $table->string('pekerjaan');
            $table->string('no_hp');
            $table->string('gender');
            $table->rememberToken();
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
        Schema::dropIfExists('user_child');
    }
}
