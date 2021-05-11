<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuanSk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_sk', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('semester');
            $table->year('tahun');
            $table->string('nim');
            $table->string('lembaga');
            $table->string('no_tlp');
            $table->string('alamat');
            $table->string('fax');
            $table->binary('dokumen');
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
        Schema::dropIfExists('pengajuan_sk');
    }
}
