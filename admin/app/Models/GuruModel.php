<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuruModel extends Model
{
    use HasFactory;
    protected $table = 'mst_guru';
    protected $fillable = [
        'id_sekolah',
        'nama',
        'nuptk',
        'jk',
        'tmp_lahir',
        'tgl_lahir',
        'nip',
        'nik',
        'status_kepegawaian',
        'jenis_ptk',
        'agama',
        'alamat',
        'rt',
        'rw',
        'dusun',
        'kecamatan',
        'kelurahan',
        'kodepos',
        'telepon',
        'hp',
        'email',
        'tugas_tambahan',
        'sk_cpns',
        'tgl_cpns',
        'sk_pengangkatan',
        'tmt_pengangkatan',
        'lembaga_pengangkatan',
        'pangkat_golongan',
        'sumber_gaji',
        'nama_ibu',
        'status_perkawinan',
        'nama_suami_istri',
        'nip_suami_istri',
        'pekerjaan_suami_istri',
        'tmt_pns',
        'lisensi_kepsek',
        'pernah_diklat_kepegawaian',
        'keahlian_braille',
        'keahlian_bahasa_isyarat',
        'npwp',
        'nama_wp',
        'kewarganegaraan'
    ];
}
