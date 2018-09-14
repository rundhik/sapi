<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;

class CreateSapisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sapi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('anggota_id')->unsigned();
            $table->integer('tipe_sapi_id')->unsigned();
            $table->integer('fase_sapi_id')->unsigned();
            $table->integer('jenis_kelamin');
            $table->date('tgl_lhr')->default(Carbon::now());
            $table->string('eartag')->nullable();
            $table->integer('status')->default(1);
            $table->string('foto')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('anggota_id')->references('id')->on('anggota')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('tipe_sapi_id')->references('id')->on('tipe_sapi')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('fase_sapi_id')->references('id')->on('fase_sapi')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sapi');
    }
}
