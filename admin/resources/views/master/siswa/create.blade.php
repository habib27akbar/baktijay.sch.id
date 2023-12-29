    @extends('layouts.master')
    
    @section('title','Siswa')
    @section('content')
    
                <div class="page-title">
                    <h3>Siswa</h3>
                </div>
                
                <section class="section">
                    
                   
                       
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    
                                    <div class="card-body">
                                        @include('include.alert')
                                        {{-- <img src="{{ asset('storage/'.$sejarah[0]->image) }}" alt="" srcset=""> --}}
                                        <form action="{{ route('siswa.store') }}" method="post" enctype="multipart/form-data">
                                             @csrf
                                            
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Sekolah</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <select name="id_sekolah" id="id_sekolah" class="form-control" required>
                                                                <option value="">--Pilih Data--</option>
                                                                @foreach ($data_sekolah as $sekolah)
                                                                    @if ($sekolah->id == 3)
                                                                        
                                                                    @else
                                                                        <option value="{{ $sekolah->id }}">{{ $sekolah->nama }}</option>
                                                                    @endif
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Angkatan</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <select name="kd_angkatan" id="kd_angkatan" class="form-control" required>
                                                                <option value="">--Pilih Data--</option>
                                                                @foreach ($data_thn_akademik as $thnakad)
                                                                    <option value="{{ $thnakad->kode }}">{{ ThnHelper::get_thnakad($thnakad->kode) }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Nama Lengkap</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="text" class="form-control" name="nama" required>
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
                                                                <option value="L">Laki-Laki</option>
                                                                <option value="P">Perempuan</option>
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
                                                            <input type="text" name="tmp_lahir" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Tanggal Lahir</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="date" name="tgl_lahir" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">NIK</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="number" name="nik" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">NISN</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="number" name="nisn" class="form-control" required>
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
                                                                <option value="Islam">Islam</option>
                                                                <option value="Katholik">Katholik</option>
                                                                <option value="Protestan">Protestan</option>
                                                                <option value="Budha">Budha</option>
                                                                <option value="Hindu">Hindu</option>
                                                                <option value="Lain-Lain">Lain-Lain</option>
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
                                                            <input type="text" name="alamat" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-5 col-5" style="width:37.666667%">
                                                            <label class="col-form-label">RT</label>
                                                        </div>
                                                        <div class="col-lg-7 col-7">
                                                            <input type="number" name="rt" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">RW</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="number" name="rw" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Kodepos</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="number" name="kodepos" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Kecamatan</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="text" name="kecamatan" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Kelurahan</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="text" name="kelurahan" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Jenis Tinggal</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <select name="jenis_tinggal" id="jenis_tinggal" class="form-control" required>
                                                                <option value="">--Pilih data--</option>
                                                                <option value="Bersama Orang Tua">Bersama Orang Tua</option>
                                                                <option value="Wali">Wali</option>
                                                                <option value="Kost">Kost</option>
                                                                <option value="Asrama">Asrama</option>
                                                                <option value="Panti Asuhan">Panti Asuhan</option>
                                                                <option value="Lainnya">Lainnya</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Alat Transportasi</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <select name="alat_transportasi" id="alat_transportasi" class="form-control">
                                                                <option value="">--Pilih Data--</option>
                                                                <option value="Jalan Kaki">Jalan Kaki</option>
                                                                <option value="Sepeda">Sepeda</option>
                                                                <option value="Mobil/Bus Antar Jemput">Mobil/Bus Antar Jemput</option>
                                                                <option value="Sepeda Motor">Sepeda Motor</option>
                                                                <option value="Ojek">Ojek</option>
                                                                <option value="Kendaraan Pribadi">Kendaraan Pribadi</option>
                                                                <option value="Angkutan umum/bus/pete-pete">Angkutan umum/bus/pete-pete</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Telepon</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="number" name="telepon" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">HP</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="number" name="hp" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">SKHUN</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="text" name="skhun" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Penerima KPS</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <select name="penerima_kps" class="form-control">
                                                                <option value="Tidak">Tidak</option>
                                                                <option value="Ya">Ya</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Nomor KPS</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="text" name="no_kps" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <hr>
                                            <h5>Data Ayah</h5>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Nama Ayah</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="text" name="nama_ayah" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Tahun Lahir</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="number" name="thn_lahir_ayah" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Jenjang Pendidikan</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <select name="jenjang_pendidikan_ayah" class="form-control">
                                                                <option value="">--Pilih Data--</option>
                                                                <option value="SD / Sederajat">SD / Sederajat</option>
                                                                <option value="SMP / Sederajat">SMP / Sederajat</option>
                                                                <option value="SMA / Sederajat">SMA / Sederajat</option>
                                                                <option value="Diploma III">Diploma III</option>
                                                                <option value="S1">S1</option>
                                                                <option value="S2">S2</option>
                                                                <option value="S3">S3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Pekerjaan</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <select name="pekerjaan_ayah" class="form-control">
                                                                <option value="">--Pilih Data--</option>
                                                                
                                                                <option value="PNS/TNI/Polri">PNS/TNI/Polri</option>
                                                                <option value="Karyawan Swasta">Karyawan Swasta</option>
                                                                <option value="Wiraswasta">Wiraswasta</option>
                                                                <option value="Pensiunan">Pensiunan</option>
                                                                <option value="Buruh">Buruh</option>
                                                                <option value="Pedagang">Pedagang</option>
                                                                <option value="Tidak Bekerja">Tidak Bekerja</option>
                                                                <option value="Sudah Meninggal">Sudah Meninggal</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Penghasilan</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <select name="penghasilan_ayah" class="form-control">
                                                                <option value="">--Pilih Data--</option>
                                                                <option value="Tidak Berpenghasilan">Tidak Berpenghasilan</option>
                                                                <option value="Kurang dari Rp. 500.000">Kurang dari Rp. 500.000</option>
                                                                <option value="Rp. 500.000 - Rp. 999.999">Rp. 500.000 - Rp. 999.999</option>
                                                                <option value="Kurang dari Rp. 1.000.000">Kurang dari Rp. 1.000.000</option>
                                                                <option value="Rp. 1.000.000 - Rp. 1.999.999">Rp. 1.000.000 - Rp. 1.999.999</option>
                                                                <option value="Rp. 2.000.000 - Rp. 2.999.999">Rp. 2.000.000 - Rp. 2.999.999</option>
                                                                <option value="Rp. 3.000.000 - Rp. 3.999.999">Rp. 3.000.000 - Rp. 3.999.999</option>
                                                                <option value="Rp. 4.000.000 - Rp. 4.999.999">Rp. 4.000.000 - Rp. 4.999.999</option>
                                                                <option value="Lebih dari Rp. 5.000.000">Lebih dari Rp. 5.000.000</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">NIK</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="number" name="nik_ayah" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <hr>
                                            <h5>Data Ibu</h5>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Nama Ibu</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="text" name="nama_ibu" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Tahun Lahir</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="number" name="thn_lahir_ibu" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Jenjang Pendidikan</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <select name="jenjang_pendidikan_ibu" class="form-control">
                                                                <option value="">--Pilih Data--</option>
                                                                <option value="SD / Sederajat">SD / Sederajat</option>
                                                                <option value="SMP / Sederajat">SMP / Sederajat</option>
                                                                <option value="SMA / Sederajat">SMA / Sederajat</option>
                                                                <option value="Diploma III">Diploma III</option>
                                                                <option value="S1">S1</option>
                                                                <option value="S2">S2</option>
                                                                <option value="S3">S3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Pekerjaan</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <select name="pekerjaan_ibu" class="form-control">
                                                                <option value="">--Pilih Data--</option>
                                                                
                                                                <option value="PNS/TNI/Polri">PNS/TNI/Polri</option>
                                                                <option value="Karyawan Swasta">Karyawan Swasta</option>
                                                                <option value="Wiraswasta">Wiraswasta</option>
                                                                <option value="Pensiunan">Pensiunan</option>
                                                                <option value="Buruh">Buruh</option>
                                                                <option value="Pedagang">Pedagang</option>
                                                                <option value="Tidak Bekerja">Tidak Bekerja</option>
                                                                <option value="Sudah Meninggal">Sudah Meninggal</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Penghasilan</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <select name="penghasilan_ibu" class="form-control">
                                                                <option value="">--Pilih Data--</option>
                                                                <option value="Tidak Berpenghasilan">Tidak Berpenghasilan</option>
                                                                <option value="Kurang dari Rp. 500.000">Kurang dari Rp. 500.000</option>
                                                                <option value="Rp. 500.000 - Rp. 999.999">Rp. 500.000 - Rp. 999.999</option>
                                                                <option value="Kurang dari Rp. 1.000.000">Kurang dari Rp. 1.000.000</option>
                                                                <option value="Rp. 1.000.000 - Rp. 1.999.999">Rp. 1.000.000 - Rp. 1.999.999</option>
                                                                <option value="Rp. 2.000.000 - Rp. 2.999.999">Rp. 2.000.000 - Rp. 2.999.999</option>
                                                                <option value="Rp. 3.000.000 - Rp. 3.999.999">Rp. 3.000.000 - Rp. 3.999.999</option>
                                                                <option value="Rp. 4.000.000 - Rp. 4.999.999">Rp. 4.000.000 - Rp. 4.999.999</option>
                                                                <option value="Lebih dari Rp. 5.000.000">Lebih dari Rp. 5.000.000</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">NIK</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="number" name="nik_ibu" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Rombel</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <select name="rombel" class="form-control">
                                                                <option value=""></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">No. Ujian Nasional</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                             <input type="text" name="no_ujian_nasional" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">No. Seri Ijazah</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                             <input type="text" name="no_seri_ijazah" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Penerima KIP</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <select name="penerima_kip" class="form-control">
                                                                <option value="Tidak">Tidak</option>
                                                                <option value="Ya">Ya</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Nomor KIP</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="text" name="no_kip" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Nomor KKS</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="text" name="no_kks" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Nomor Regis Akta Lahir</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="text" name="no_reg_akta_lahir" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Bank</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="text" name="bank" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">No. Rekening</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="text" name="no_rek" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Atas Nama</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="text" name="atas_nama" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Layak PIP Usulan Sekolah</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <select name="layak_pip_usulan_sekolah" class="form-control">
                                                                <option value="Tidak">Tidak</option>
                                                                <option value="Ya">Ya</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Alasan PIP</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="text" name="alasan_pip" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Kebutuhan Khusus</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="text" name="kebutuhan_khusus" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Asal Sekolah</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="text" name="asal_sekolah" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Anak Ke</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="number" name="anak_ke" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Lintang</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="text" name="lintang" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Bujur</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="text" name="bujur" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <br/>
                                            <button id="btnSave" type="submit" class="btn btn-primary">Simpan</button>
                                            <a href="{{route('siswa.index')}}" class="btn btn-default">Kembali</a>
                                        </form>
                                    </div>
                                </div>
                                
                            </div>
                           
                        </div>
                   
                </section>
               
    @endsection
    @section('js')
    
    
    @endsection

