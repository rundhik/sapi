<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnggotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('no_anggota');
            $table->string('nama');
            $table->integer('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('dusun');
            $table->string('desa');
            $table->integer('wilayah_id')->unsigned();
            $table->integer('kelompok_id')->unsigned();
            $table->string('no_registrasi');
            $table->integer('status');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('wilayah_id')->references('id')->on('wilayah')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('kelompok_id')->references('id')->on('kelompok')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anggota');
    }
}
