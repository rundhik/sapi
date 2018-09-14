<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKelompokTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelompok', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_kelompok');
            $table->string('deskripsi');
            $table->integer('wilayah_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('wilayah_id')->references('id')->on('wilayah')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelompok');
    }
}
