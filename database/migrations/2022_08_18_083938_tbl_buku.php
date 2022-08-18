<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblBuku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('buku')) {
            Schema::create('buku', function (Blueprint $table) {
                $table->bigIncrements('id');
                 $table->text('judul');
                 $table->text('penulis')->nullable();
                 $table->text('penerbit')->nullable();
                 $table->text('tahun_terbit')->nullable();
                 $table->text('jumlah')->nullable();
                 $table->text('lokasi')->nullable();
                 $table->text('jenis')->nullable()->comment('1=buku sekolah, 2=buku cerita');
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
        Schema::dropIfExists('buku');

    }
}
