<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Thietbi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thietbi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_phonghoc');
            $table->string('mathietbi');
            $table->string('tenthietbi');
            $table->integer('soluongtot');
            $table->integer('soluonghong');
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
        Schema::dropIfExists('thietbi');
    }
}
