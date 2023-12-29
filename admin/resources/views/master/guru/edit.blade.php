    @extends('layouts.master')
    
    @section('title','Guru')
    @section('content')
    
                <div class="page-title">
                    <h3>Guru</h3>
                </div>
                
                <section class="section">
                    
                   
                       
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    
                                    <div class="card-body">
                                        @include('include.alert')
                                        {{-- <img src="{{ asset('storage/'.$sejarah[0]->image) }}" alt="" srcset=""> --}}
                                        <form action="{{ route('guru.update', ['guru' => $data['id']]) }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Pengajar Sekolah</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <select name="id_sekolah" id="id_sekolah" class="form-control" required>
                                                                <option value="">--Pilih Data--</option>
                                                                @foreach ($data_sekolah as $sekolah)
                                                                    <option {{ $data['id_sekolah'] == $sekolah->id ?'selected':'' }} value="{{ $sekolah->id }}">{{ $sekolah->nama }}</option>
                                                                @endforeach
                                                                    <option {{ $data['id_sekolah'] == 3 ?'selected':'' }} value="3">Keduanya</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Nama</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="text" name="nama" class="form-control" value="{{ $data['nama'] }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">NUPTK</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="text" name="nuptk" class="form-control" value="{{ $data['nuptk'] }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Jenis Kelamin</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <select name="jk" id="jk" class="form-control" required>
                                                                <option value="">--Pilih Data--</option>
                                                                <option {{ $data['jk'] == 'L' ?'selected':'' }} value="L">Laki-Laki</option>
                                                                <option {{ $data['jk'] == 'P' ?'selected':'' }} value="P">Perempuan</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Tempat Lahir</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="text" name="tmp_lahir" class="form-control" required  value="{{ $data['tmp_lahir'] }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Tanggal Lahir</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="date" name="tgl_lahir" class="form-control" required value="{{ $data['tgl_lahir'] }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">NIP</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="number" name="nip" class="form-control" required value="{{ $data['nip'] }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">NIK</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="number" name="nik" class="form-control" required value="{{ $data['nik'] }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Status Kepegawaian</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="text" name="status_kepegawaian" class="form-control" required value="{{ $data['status_kepegawaian'] }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Jenis PTK</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="text" name="jenis_ptk" class="form-control" required value="{{ $data['jenis_ptk'] }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Agama</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <select name="agama" id="agama" class="form-control" required>
                                                                <option value="">--Pilih data--</option>
                                                                <option {{ $data['agama'] == 'Islam' ? 'selected':'' }} value="Islam">Islam</option>
                                                                <option {{ $data['agama'] == 'Katholik' ? 'selected':'' }} value="Katholik">Katholik</option>
                                                                <option {{ $data['agama'] == 'Protestan' ? 'selected':'' }} value="Protestan">Protestan</option>
                                                                <option {{ $data['agama'] == 'Budha' ? 'selected':'' }} value="Budha">Budha</option>
                                                                <option {{ $data['agama'] == 'Hindu' ? 'selected':'' }} value="Hindu">Hindu</option>
                                                                <option {{ $data['agama'] == 'Lain-Lain' ? 'selected':'' }} value="Lain-Lain">Lain-Lain</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-2 col-2" style="width:12.666667%">
                                                            <label class="col-form-label">Alamat</label>
                                                        </div>
                                                        <div class="col-lg-11 col-11" style="width:87.3333333333%;">
                                                            <input type="text" name="alamat" class="form-control" required value="{{ $data['alamat'] }}">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-md-4">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-5 col-5" style="width:37.666667%">
                                                            <label class="col-form-label">RT</label>
                                                        </div>
                                                        <div class="col-lg-7 col-7">
                                                            <input type="number" name="rt" class="form-control" required value="{{ $data['rt'] }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">RW</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="number" name="rw" class="form-control" required value="{{ $data['rw'] }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Dusun</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="text" name="dusun" class="form-control" value="{{ $data['dusun'] }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Kecamatan</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="text" name="kecamatan" class="form-control" required value="{{ $data['kecamatan'] }}">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Kelurahan</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="text" name="kelurahan" class="form-control" required value="{{ $data['kelurahan'] }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Kodepos</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="number" name="kodepos" class="form-control" value="{{ $data['kodepos'] }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Telepon</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="number" name="telepon" class="form-control" value="{{ $data['telepon'] }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">HP</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="number" name="hp" class="form-control" value="{{ $data['hp'] }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Email</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="text" name="email" class="form-control" value="{{ $data['email'] }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Tugas Tambahan</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="text" name="tugas_tambahan" class="form-control" value="{{ $data['tugas_tambahan'] }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">SK CPNS</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="text" name="sk_cpns" class="form-control" value="{{ $data['sk_cpns'] }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Tgl. CPNS</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="date" name="tgl_cpns" class="form-control" value="{{ $data['tgl_cpns'] }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">SK Pengangkatan</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="text" name="sk_pengangkatan" class="form-control" value="{{ $data['sk_pengangkatan'] }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Tgl. Pengangkatan</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="date" name="tmt_pengangkatan" class="form-control" value="{{ $data['tmt_pengangkatan'] }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Lembaga Pengangkatan</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="text" name="lembaga_pengangkatan" class="form-control" value="{{ $data['lembaga_pengangkatan'] }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Pangkat Golongan</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="text" name="pangkat_golongan" class="form-control" value="{{ $data['pangkat_golongan'] }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Sumber Gaji</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="text" name="sumber_gaji" class="form-control" value="{{ $data['sumber_gaji'] }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Nama Ibu</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="text" name="nama_ibu" class="form-control" required value="{{ $data['nama_ibu'] }}">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Status Perkawinan</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <select name="status_perkawinan" id="status_perkawinan" class="form-control" required>
                                                                <option {{ $data['status_perkawinan'] == 'Belum Kawin' ? 'selected':'' }} value="Belum Kawin">Belum Kawin</option>
                                                                <option {{ $data['status_perkawinan'] == 'Kawin' ? 'selected':'' }} value="Kawin">Kawin</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Nama Suami/Istri</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="text" name="nama_suami_istri" class="form-control" value="{{ $data['nama_suami_istri'] }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">NIP Suami/Istri</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="text" name="nip_suami_istri" class="form-control" value="{{ $data['nip_suami_istri'] }}">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Pekerjaan Suami/Istri</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <select name="pekerjaan_suami_istri" class="form-control">
                                                                <option value="">--Pilih Data--</option>
                                                                <option {{ $data['pekerjaan_suami_istri'] == 'PNS/TNI/Polri' ? 'selected':'' }} value="PNS/TNI/Polri">PNS/TNI/Polri</option>
                                                                <option {{ $data['pekerjaan_suami_istri'] == 'Karyawan Swasta' ? 'selected':'' }} value="Karyawan Swasta">Karyawan Swasta</option>
                                                                <option {{ $data['pekerjaan_suami_istri'] == 'Wiraswasta' ? 'selected':'' }} value="Wiraswasta">Wiraswasta</option>
                                                                <option {{ $data['pekerjaan_suami_istri'] == 'Pensiunan' ? 'selected':'' }} value="Pensiunan">Pensiunan</option>
                                                                <option {{ $data['pekerjaan_suami_istri'] == 'Buruh' ? 'selected':'' }} value="Buruh">Buruh</option>
                                                                <option {{ $data['pekerjaan_suami_istri'] == 'Pedagang' ? 'selected':'' }} value="Pedagang">Pedagang</option>
                                                                <option {{ $data['pekerjaan_suami_istri'] == 'Tidak Bekerja' ? 'selected':'' }} value="Tidak Bekerja">Tidak Bekerja</option>
                                                               
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">TMT. PNS</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="date" name="tmt_pns" class="form-control" value="{{ $data['tmt_pns'] }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Lisensi Kepala Sekolah</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <select name="lisensi_kepsek" id="lisensi_kepsek" class="form-control">
                                                                <option {{ $data['lisensi_kepsek'] == 'Tidak' ? 'selected':'' }} value="Tidak">Tidak</option>
                                                                <option {{ $data['lisensi_kepsek'] == 'Ya' ? 'selected':'' }} value="Ya">Ya</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Pernah Diklat Kepegawaian</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <select name="pernah_diklat_kepegawaian" id="pernah_diklat_kepegawaian" class="form-control">
                                                                <option {{ $data['pernah_diklat_kepegawaian'] == 'Tidak' ? 'selected':'' }} value="Tidak">Tidak</option>
                                                                <option {{ $data['pernah_diklat_kepegawaian'] == 'Ya' ? 'selected':'' }} value="Ya">Ya</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Keahlian Braille</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <select name="keahlian_braille" id="keahlian_braille" class="form-control">
                                                                <option {{ $data['keahlian_braille'] == 'Tidak' ? 'selected':'' }} value="Tidak">Tidak</option>
                                                                <option {{ $data['keahlian_braille'] == 'Ya' ? 'selected':'' }} value="Ya">Ya</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Keahlian Bahasa Isyarat</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <select name="keahlian_bahasa_isyarat" id="keahlian_bahasa_isyarat" class="form-control">
                                                                <option {{ $data['keahlian_bahasa_isyarat'] == 'Tidak' ? 'selected':'' }} value="Tidak">Tidak</option>
                                                                <option {{ $data['keahlian_bahasa_isyarat'] == 'Ya' ? 'selected':'' }} value="Ya">Ya</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">NPWP</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="text" name="npwp" class="form-control" value="{{ $data['npwp'] }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Nama WP</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="text" name="nama_wp" class="form-control" value="{{ $data['nama_wp'] }}">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Kewarganegaraan</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <select name="kewarganegaraan" id="kewarganegaraan" class="form-control" required>
                                                                @foreach ($data_kweneg as $kweneg)
                                                                    <option {{ $kweneg->alpha_2_code == $data['kewarganegaraan']?'selected':'' }} value="{{ $kweneg->alpha_2_code }}">{{ $kweneg->nama_negara }}</option>                                                                    
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                

                                            </div>

                                            
                                            <br/>
                                            <button id="btnSave" type="submit" class="btn btn-primary">Simpan</button>
                                            <a href="{{route('guru.index')}}" class="btn btn-default">Kembali</a>
                                        </form>
                                    </div>
                                </div>
                                
                            </div>
                           
                        </div>
                   
                </section>
               
    @endsection
    @section('js')
    
    
    @endsection

