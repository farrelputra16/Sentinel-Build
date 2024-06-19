<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('s_i_b_s', function (Blueprint $table) {
            $table->id();
            $table->string('tipe_dokumen');
            $table->date('tanggal');
            $table->string('penanggung_jawab');
            $table->string('no');
            $table->string('perusahaan');
            $table->integer('jumlah_orang');
            $table->string('area_kerja');
            $table->text('deskripsi_pekerjaan');
            $table->json('peralatan')->nullable();
            $table->json('pengendalian_bahaya')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('s_i_b_s');
    }
};
