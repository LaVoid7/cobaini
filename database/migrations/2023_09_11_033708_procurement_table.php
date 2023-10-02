<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('procurements', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('regional');
            $table->unsignedBigInteger('unit_bisnis')->constrained();
            $table->string('juspeng');
            $table->date('tgl_terima_juspeng');
            $table->unsignedBigInteger('custommer')->constrained();
            $table->unsignedBigInteger('portofolio')->constrained();
            $table->unsignedBigInteger('jenis_anggaran')->constrained();
            $table->string('customer');
            $table->string('anggaran');
            $table->string('margin_presentase');
            $table->string('margin_nominal');
            $table->string('nama_PIC');
            $table->string('metode_pengadaan');
            $table->string('mitra_peserta');
            $table->string('penetapan_mitra');
            $table->unsignedBigInteger('status')->constrained();
            $table->string('bidang_pekerjaan');
            $table->string('kontrak');
            $table->date('tgl_penetapan');
            $table->date('tgl_kontrak');
            $table->string('kesepakatan');
            $table->string('margin_presentase_regional');
            $table->string('margin_nominal_regional');
            $table->date('tgl_mulai_pekerjaan');
            $table->date('tgl_selesai_pekerjaan');
            $table->string('keterangan');
            $table->date('tgl_tagihan_mitra');
            $table->date('tgl_kirim_tagihan_mitra');
            $table->date('tgl_bayar_tagihan_mitra');
            $table->timestamps();
            $table->foreign('unit_bisnis')->references('id')->on('unitbisnis');
            $table->foreign('custommer')->references('id')->on('custommer');
            $table->foreign('portofolio')->references('id')->on('portofolio');
            $table->foreign('jenis_anggaran')->references('id')->on('jenisanggaran');
            $table->foreign('status')->references('id')->on('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('procurements');
    }
};
