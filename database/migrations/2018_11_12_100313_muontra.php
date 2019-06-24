<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Muontra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('muontra', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_gv');
            $table->integer('id_lophoc');
            $table->integer('id_phonghoc');
            $table->integer('id_monhoc');
            $table->date('ngaymuon');
            $table->time('giomuon');
            $table->date('ngaytra')->nullable(); //->default(null)
            $table->time('giotra')->nullable();
            $table->string('ghichu')->nullable();
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
        Schema::dropIfExists('muontra');
    }
}
