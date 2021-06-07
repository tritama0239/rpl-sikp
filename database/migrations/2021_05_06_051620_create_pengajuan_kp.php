<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuanKp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_kp', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('semester');
            $table->string('tahun');
            $table->string('judul_kp');
            $table->string('sts_kp');
            $table->string('nim');
            $table->string('nik');
            $table->string('tools');
            $table->string('spesifikasi');
            $table->binary('dokumen');
            $table->string('penguji');
            $table->string('ruang');
            $table->string('lembaga');
            $table->string('pimpinan');
            $table->string('alamat');
            $table->string('no_tlp');
            $table->string('sts_ujian');
            $table->date('jdwl_ujian');
            $table->date('bts_pelaksanaan');
            $table->string('sts_verif');
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
        Schema::dropIfExists('pengajuan_kp');
    }
}
