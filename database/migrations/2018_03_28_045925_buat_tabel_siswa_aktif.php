<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelSiswaAktif extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_siswa_aktif', function (Blueprint $table) {
            $table->increments('id_nis_aktif');
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('sekolah_asal');
            $table->string('kelas_diterima');
            $table->date('tgl_diterima');
            $table->longtext('alamat');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('pekerjaan_ayah');
            $table->string('pekerjaan_ibu');
            $table->longtext('alamat_ortu');
            $table->string('nama_wali');
            $table->longtext('alamat_wali');
            $table->string('foto')->nullable();
            $table->unsignedInteger('kd_tahun');
            $table->foreign('kd_tahun')->references('id_tahun')->on('tbl_tahun')->onDelete('CASCADE');
    


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
        Schema::dropIfExists('tbl_siswa_aktif');
    }
}
