<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_siswa', function (Blueprint $table) {
            $table->id();
            //$table->string('nis')->unique();
            $table->string('nama');
            $table->string('jk', 1);
            $table->string('nisn', 10);
            $table->string('tmp_lahir');
            $table->date('tgl_lahir');
            $table->string('nik', 16);
            $table->string('agama', 10);
            $table->string('alamat');
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('kecamatan', 100);
            $table->string('kelurahan', 100);
            $table->string('kodepos')->nullable();
            $table->string('jenis_tinggal');
            $table->string('alat_transportasi');
            $table->string('telepon')->nullable();
            $table->string('hp')->nullable();
            $table->string('skhun')->nullable();
            $table->string('penerima_kps');
            $table->string('no_kps')->nullable();
            $table->string('nama_ayah')->nullable();
            $table->string('thn_lahir_ayah')->nullable();
            $table->string('jenjang_pendidikan_ayah')->nullable();
            $table->string('pekerjaan_ayah')->nullable();
            $table->string('penghasilan_ayah')->nullable();
            $table->string('nik_ayah', 16);
            $table->string('nama_ibu')->nullable();
            $table->string('thn_lahir_ibu')->nullable();
            $table->string('jenjang_pendidikan_ibu')->nullable();
            $table->string('pekerjaan_ibu')->nullable();
            $table->string('penghasilan_ibu')->nullable();
            $table->string('nik_ibu', 16);
            $table->string('rombel');
            $table->string('no_ujian_nasional')->nullable();
            $table->string('no_seri_ijazah')->nullable();
            $table->string('penerima_kip');
            $table->string('no_kip')->nullable();
            $table->string('nama_kip')->nullable();
            $table->string('no_kks')->nullable();
            $table->string('no_reg_akta_lahir')->nullable();
            $table->string('bank')->nullable();
            $table->string('no_rek')->nullable();
            $table->string('atas_nama')->nullable();
            $table->string('layak_pip_usulan_sekolah');
            $table->string('alasan_pip')->nullable();
            $table->string('kebutuhan_khusus')->nullable();
            $table->string('asal_sekolah')->nullable();
            $table->string('anak_ke')->nullable();
            $table->string('lintang')->nullable();
            $table->string('bujur')->nullable();
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
        Schema::dropIfExists('mst_siswa');
    }
}
