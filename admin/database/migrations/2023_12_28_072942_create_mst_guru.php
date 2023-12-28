<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstGuru extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_guru', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nuptk')->nullable();
            $table->string('jk', 1);
            $table->string('tmp_lahir');
            $table->date('tgl_lahir');
            $table->string('nip')->nullable();
            $table->string('nik', 16);
            $table->string('status_kepegawaian', 20);
            $table->string('jenis_ptk', 20);
            $table->string('agama', 20);
            $table->string('alamat');
            $table->string('rt');
            $table->string('rw');
            $table->string('dusun')->nullable();
            $table->string('kecamatan', 100);
            $table->string('kelurahan', 100);
            $table->string('kodepos')->nullable();
            $table->string('telepon')->nullable();
            $table->string('hp')->nullable();
            $table->string('email')->nullable();
            $table->string('tugas_tambahan')->nullable();
            $table->string('sk_cpns')->nullable();
            $table->date('tgl_cpns')->nullable();
            $table->string('sk_pengangkatan')->nullable();
            $table->date('tmt_pengangkatan')->nullable();
            $table->string('lembaga_pengangkatan')->nullable();
            $table->string('pangkat_golongan')->nullable();
            $table->string('sumber_gaji')->nullable();
            $table->string('nama_ibu');
            $table->string('status_perkawinan')->nullable();
            $table->string('nama_suami_istri')->nullable();
            $table->string('nip_suami_istri')->nullable();
            $table->string('pekerjaan_suami_istri')->nullable();
            $table->date('tmt_pns')->nullable();
            $table->string('lisensi_kepsek')->nullable();
            $table->string('pernah_diklat_kepegawaian')->nullable();
            $table->string('keahlian_braille')->nullable();
            $table->string('keahlian_bahasa_isyarat')->nullable();
            $table->string('npwp')->nullable();
            $table->string('nama_wp')->nullable();
            $table->string('kewarganegaraan')->nullable();
            $table->string('id_sekolah');
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
        Schema::dropIfExists('mst_guru');
    }
}
