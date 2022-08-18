<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblAnggota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('anggota')) {
            Schema::create('anggota', function (Blueprint $table) {
                $table->bigIncrements('id');
                 $table->text('nama');
                 $table->text('jenis_kelamin')->nullable();
                 $table->dateTime('tanggal_lahir')->nullable();
                 $table->text('tempat_lahir')->nullable();
                 $table->text('alamat')->nullable();
                 $table->text('tingkatan')->nullable();
                 $table->text('tahun_masuk')->nullable();
                 $table->dateTime('tanggal')->nullable();
                 $table->text('status')->nullable();
            });
        }
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
