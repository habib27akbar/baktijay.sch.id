<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendaftaranModel extends Model
{
    use HasFactory;
    protected $table = 'pendaftaran';
    protected $fillable = [
        'id_sekolah',
        'kd_angkatan',
        'nama',
        'jk',
        'nisn',
        'tmp_lahir',
        'tgl_lahir',
        'nik',
        'agama',
        'hubungan_keluarga',
        'alamat',
        'rt',
        'rw',
        'kodepos',
        'kecamatan',
        'kelurahan',
        'jenis_tinggal',
        'alat_transportasi',
        'telepon',
        'hp',
        'skhun',
        'penerima_kps',
        'no_kps',
        'nama_ayah',
        'thn_lahir_ayah',
        'jenjang_pendidikan_ayah',
        'pekerjaan_ayah',
        'penghasilan_ayah',
        'nik_ayah',
        'nama_ibu',
        'thn_lahir_ibu',
        'jenjang_pendidikan_ibu',
        'pekerjaan_ibu',
        'penghasilan_ibu',
        'nik_ibu',
        'rombel',
        'no_ujian_nasional',
        'no_seri_ijazah',
        'penerima_kip',
        'no_kip',
        'nama_kip',
        'no_kks',
        'no_reg_akta_lahir',
        'bank',
        'no_rek',
        'atas_nama',
        'layak_pip_usulan_sekolah',
        'alasan_pip',
        'kebutuhan_khusus',
        'asal_sekolah',
        'anak_ke',
        'lintang',
        'bujur',
        'snap_token',
        'status'
    ];
}
