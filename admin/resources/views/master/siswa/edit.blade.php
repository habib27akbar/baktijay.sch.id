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
                                        <form action="{{ route('siswa.update', ['siswa' => $data['id']]) }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            
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
                                                                        <option {{ $sekolah->id == $data['id_sekolah'] ? 'selected':'' }} value="{{ $sekolah->id }}">{{ $sekolah->nama }}</option>
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
                                                                    <option {{ $thnakad->kode == $data['kd_angkatan'] ? 'selected':'' }} value="{{ $thnakad->kode }}">{{ ThnHelper::get_thnakad($thnakad->kode) }}</option>
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
                                                            <input type="text" class="form-control" name="nama" required value="{{ $data['nama'] }}">
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
                                                                <option {{ $data['jk'] == 'L' ? 'selected':'' }} value="L">Laki-Laki</option>
                                                                <option {{ $data['jk'] == 'P' ? 'selected':'' }} value="P">Perempuan</option>
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
                                                            <input type="text" name="tmp_lahir" class="form-control" required value="{{ $data['tmp_lahir'] }}">
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
                                                            <label class="col-form-label">NIK</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="number" name="nik" class="form-control" required  value="{{ $data['nik'] }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">NISN</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="number" name="nisn" class="form-control" required  value="{{ $data['nisn'] }}">
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
                                                            <input type="text" name="alamat" class="form-control" required  value="{{ $data['alamat'] }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-5 col-5" style="width:37.666667%">
                                                            <label class="col-form-label">RT</label>
                                                        </div>
                                                        <div class="col-lg-7 col-7">
                                                            <input type="number" name="rt" class="form-control"  value="{{ $data['rt'] }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">RW</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="number" name="rw" class="form-control"  value="{{ $data['rw'] }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
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
                                                            <label class="col-form-label">Jenis Tinggal</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <select name="jenis_tinggal" id="jenis_tinggal" class="form-control" required>
                                                                <option value="">--Pilih data--</option>
                                                                <option {{ $data['jenis_tinggal'] == 'Bersama Orang Tua' ? 'selected':'' }} value="Bersama Orang Tua">Bersama Orang Tua</option>
                                                                <option {{ $data['jenis_tinggal'] == 'Wali' ? 'selected':'' }} value="Wali">Wali</option>
                                                                <option {{ $data['jenis_tinggal'] == 'Kost' ? 'selected':'' }} value="Kost">Kost</option>
                                                                <option {{ $data['jenis_tinggal'] == 'Asrama' ? 'selected':'' }} value="Asrama">Asrama</option>
                                                                <option {{ $data['jenis_tinggal'] == 'Panti Asuhan' ? 'selected':'' }} value="Panti Asuhan">Panti Asuhan</option>
                                                                <option {{ $data['jenis_tinggal'] == 'Lainnya' ? 'selected':'' }} value="Lainnya">Lainnya</option>
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
                                                                <option {{ $data['alat_transportasi'] == 'Jalan Kaki' ? 'selected':'' }} value="Jalan Kaki">Jalan Kaki</option>
                                                                <option {{ $data['alat_transportasi'] == 'Sepeda' ? 'selected':'' }} value="Sepeda">Sepeda</option>
                                                                <option {{ $data['alat_transportasi'] == 'Mobil/Bus Antar Jemput' ? 'selected':'' }} value="Mobil/Bus Antar Jemput">Mobil/Bus Antar Jemput</option>
                                                                <option {{ $data['alat_transportasi'] == 'Sepeda Motor' ? 'selected':'' }} value="Sepeda Motor">Sepeda Motor</option>
                                                                <option {{ $data['alat_transportasi'] == 'Ojek' ? 'selected':'' }} value="Ojek">Ojek</option>
                                                                <option {{ $data['alat_transportasi'] == 'Kendaraan Pribadi' ? 'selected':'' }} value="Kendaraan Pribadi">Kendaraan Pribadi</option>
                                                                <option {{ $data['alat_transportasi'] == 'Angkutan umum/bus/pete-pete' ? 'selected':'' }} value="Angkutan umum/bus/pete-pete">Angkutan umum/bus/pete-pete</option>
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
                                                            <label class="col-form-label">SKHUN</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="text" name="skhun" class="form-control" value="{{ $data['skhun'] }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Penerima KPS</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <select name="penerima_kps" class="form-control" value="{{ $data['penerima_kps'] }}">
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
                                                            <input type="text" name="no_kps" class="form-control" value="{{ $data['no_kps'] }}">
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
                                                            <input type="text" name="nama_ayah" class="form-control" required  value="{{ $data['nama_ayah'] }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Tahun Lahir</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="number" name="thn_lahir_ayah" class="form-control" value="{{ $data['thn_lahir_ayah'] }}">
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
                                                                <option {{ $data['jenjang_pendidikan_ayah'] == 'SD / Sederajat' ? 'selected':'' }} value="SD / Sederajat">SD / Sederajat</option>
                                                                <option {{ $data['jenjang_pendidikan_ayah'] == 'SMP / Sederajat"' ? 'selected':'' }} value="SMP / Sederajat">SMP / Sederajat</option>
                                                                <option {{ $data['jenjang_pendidikan_ayah'] == 'SMA / Sederajat' ? 'selected':'' }} value="SMA / Sederajat">SMA / Sederajat</option>
                                                                <option {{ $data['jenjang_pendidikan_ayah'] == 'Diploma III' ? 'selected':'' }} value="Diploma III">Diploma III</option>
                                                                <option {{ $data['jenjang_pendidikan_ayah'] == 'S1' ? 'selected':'' }} value="S1">S1</option>
                                                                <option {{ $data['jenjang_pendidikan_ayah'] == 'S2' ? 'selected':'' }} value="S2">S2</option>
                                                                <option {{ $data['jenjang_pendidikan_ayah'] == 'S3' ? 'selected':'' }} value="S3">S3</option>
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
                                                                
                                                                <option {{ $data['pekerjaan_ayah'] == 'PNS/TNI/Polri' ? 'selected':'' }} value="PNS/TNI/Polri">PNS/TNI/Polri</option>
                                                                <option {{ $data['pekerjaan_ayah'] == 'Karyawan Swasta' ? 'selected':'' }} value="Karyawan Swasta">Karyawan Swasta</option>
                                                                <option {{ $data['pekerjaan_ayah'] == 'Wiraswasta' ? 'selected':'' }} value="Wiraswasta">Wiraswasta</option>
                                                                <option {{ $data['pekerjaan_ayah'] == 'Pensiunan' ? 'selected':'' }} value="Pensiunan">Pensiunan</option>
                                                                <option {{ $data['pekerjaan_ayah'] == 'Buruh' ? 'selected':'' }} value="Buruh">Buruh</option>
                                                                <option {{ $data['pekerjaan_ayah'] == 'Pedagang' ? 'selected':'' }} value="Pedagang">Pedagang</option>
                                                                <option {{ $data['pekerjaan_ayah'] == 'Tidak Bekerja' ? 'selected':'' }} value="Tidak Bekerja">Tidak Bekerja</option>
                                                                <option {{ $data['pekerjaan_ayah'] == 'Sudah Meninggal' ? 'selected':'' }} value="Sudah Meninggal">Sudah Meninggal</option>
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
                                                                <option {{ $data['penghasilan_ayah'] == 'Tidak Berpenghasilan' ? 'selected':'' }} value="Tidak Berpenghasilan">Tidak Berpenghasilan</option>
                                                                <option {{ $data['penghasilan_ayah'] == 'Kurang dari Rp. 500.000' ? 'selected':'' }} value="Kurang dari Rp. 500.000">Kurang dari Rp. 500.000</option>
                                                                <option {{ $data['penghasilan_ayah'] == 'Rp. 500.000 - Rp. 999.999' ? 'selected':'' }} value="Rp. 500.000 - Rp. 999.999">Rp. 500.000 - Rp. 999.999</option>
                                                                <option {{ $data['penghasilan_ayah'] == 'Kurang dari Rp. 1.000.000' ? 'selected':'' }} value="Kurang dari Rp. 1.000.000">Kurang dari Rp. 1.000.000</option>
                                                                <option {{ $data['penghasilan_ayah'] == 'Rp. 1.000.000 - Rp. 1.999.999' ? 'selected':'' }} value="Rp. 1.000.000 - Rp. 1.999.999">Rp. 1.000.000 - Rp. 1.999.999</option>
                                                                <option {{ $data['penghasilan_ayah'] == 'Rp. 2.000.000 - Rp. 2.999.999' ? 'selected':'' }} value="Rp. 2.000.000 - Rp. 2.999.999">Rp. 2.000.000 - Rp. 2.999.999</option>
                                                                <option {{ $data['penghasilan_ayah'] == 'Rp. 3.000.000 - Rp. 3.999.999' ? 'selected':'' }} value="Rp. 3.000.000 - Rp. 3.999.999">Rp. 3.000.000 - Rp. 3.999.999</option>
                                                                <option {{ $data['penghasilan_ayah'] == 'Rp. 4.000.000 - Rp. 4.999.999' ? 'selected':'' }} value="Rp. 4.000.000 - Rp. 4.999.999">Rp. 4.000.000 - Rp. 4.999.999</option>
                                                                <option {{ $data['penghasilan_ayah'] == 'Lebih dari Rp. 5.000.000' ? 'selected':'' }} value="Lebih dari Rp. 5.000.000">Lebih dari Rp. 5.000.000</option>
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
                                                            <input type="number" name="nik_ayah" class="form-control" required  value="{{ $data['nik_ayah'] }}">
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
                                                            <input type="text" name="nama_ibu" class="form-control" value="{{ $data['nama_ibu'] }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Tahun Lahir</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="number" name="thn_lahir_ibu" class="form-control" value="{{ $data['thn_lahir_ibu'] }}">
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
                                                                <option {{ $data['jenjang_pendidikan_ibu'] == 'SD / Sederajat' ? 'selected':'' }} value="SD / Sederajat">SD / Sederajat</option>
                                                                <option {{ $data['jenjang_pendidikan_ibu'] == 'SMP / Sederajat"' ? 'selected':'' }} value="SMP / Sederajat">SMP / Sederajat</option>
                                                                <option {{ $data['jenjang_pendidikan_ibu'] == 'SMA / Sederajat' ? 'selected':'' }} value="SMA / Sederajat">SMA / Sederajat</option>
                                                                <option {{ $data['jenjang_pendidikan_ibu'] == 'Diploma III' ? 'selected':'' }} value="Diploma III">Diploma III</option>
                                                                <option {{ $data['jenjang_pendidikan_ibu'] == 'S1' ? 'selected':'' }} value="S1">S1</option>
                                                                <option {{ $data['jenjang_pendidikan_ibu'] == 'S2' ? 'selected':'' }} value="S2">S2</option>
                                                                <option {{ $data['jenjang_pendidikan_ibu'] == 'S3' ? 'selected':'' }} value="S3">S3</option>
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
                                                                
                                                                <option {{ $data['pekerjaan_ibu'] == 'PNS/TNI/Polri' ? 'selected':'' }} value="PNS/TNI/Polri">PNS/TNI/Polri</option>
                                                                <option {{ $data['pekerjaan_ibu'] == 'Karyawan Swasta' ? 'selected':'' }} value="Karyawan Swasta">Karyawan Swasta</option>
                                                                <option {{ $data['pekerjaan_ibu'] == 'Wiraswasta' ? 'selected':'' }} value="Wiraswasta">Wiraswasta</option>
                                                                <option {{ $data['pekerjaan_ibu'] == 'Pensiunan' ? 'selected':'' }} value="Pensiunan">Pensiunan</option>
                                                                <option {{ $data['pekerjaan_ibu'] == 'Buruh' ? 'selected':'' }} value="Buruh">Buruh</option>
                                                                <option {{ $data['pekerjaan_ibu'] == 'Pedagang' ? 'selected':'' }} value="Pedagang">Pedagang</option>
                                                                <option {{ $data['pekerjaan_ibu'] == 'Tidak Bekerja' ? 'selected':'' }} value="Tidak Bekerja">Tidak Bekerja</option>
                                                                <option {{ $data['pekerjaan_ibu'] == 'Sudah Meninggal' ? 'selected':'' }} value="Sudah Meninggal">Sudah Meninggal</option>
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
                                                                <option {{ $data['penghasilan_ibu'] == 'Tidak Berpenghasilan' ? 'selected':'' }} value="Tidak Berpenghasilan">Tidak Berpenghasilan</option>
                                                                <option {{ $data['penghasilan_ibu'] == 'Kurang dari Rp. 500.000' ? 'selected':'' }} value="Kurang dari Rp. 500.000">Kurang dari Rp. 500.000</option>
                                                                <option {{ $data['penghasilan_ibu'] == 'Rp. 500.000 - Rp. 999.999' ? 'selected':'' }} value="Rp. 500.000 - Rp. 999.999">Rp. 500.000 - Rp. 999.999</option>
                                                                <option {{ $data['penghasilan_ibu'] == 'Kurang dari Rp. 1.000.000' ? 'selected':'' }} value="Kurang dari Rp. 1.000.000">Kurang dari Rp. 1.000.000</option>
                                                                <option {{ $data['penghasilan_ibu'] == 'Rp. 1.000.000 - Rp. 1.999.999' ? 'selected':'' }} value="Rp. 1.000.000 - Rp. 1.999.999">Rp. 1.000.000 - Rp. 1.999.999</option>
                                                                <option {{ $data['penghasilan_ibu'] == 'Rp. 2.000.000 - Rp. 2.999.999' ? 'selected':'' }} value="Rp. 2.000.000 - Rp. 2.999.999">Rp. 2.000.000 - Rp. 2.999.999</option>
                                                                <option {{ $data['penghasilan_ibu'] == 'Rp. 3.000.000 - Rp. 3.999.999' ? 'selected':'' }} value="Rp. 3.000.000 - Rp. 3.999.999">Rp. 3.000.000 - Rp. 3.999.999</option>
                                                                <option {{ $data['penghasilan_ibu'] == 'Rp. 4.000.000 - Rp. 4.999.999' ? 'selected':'' }} value="Rp. 4.000.000 - Rp. 4.999.999">Rp. 4.000.000 - Rp. 4.999.999</option>
                                                                <option {{ $data['penghasilan_ibu'] == 'Lebih dari Rp. 5.000.000' ? 'selected':'' }} value="Lebih dari Rp. 5.000.000">Lebih dari Rp. 5.000.000</option>
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
                                                            <input type="number" name="nik_ibu" class="form-control" required value="{{ $data['nik_ibu'] }}">
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
                                                             <input type="text" name="no_ujian_nasional" class="form-control" value="{{ $data['no_ujian_nasional'] }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">No. Seri Ijazah</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                             <input type="text" name="no_seri_ijazah" class="form-control" value="{{ $data['no_seri_ijazah'] }}">
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
                                                                <option {{ $data['penerima_kip'] == 'Tidak' ? 'selected':'' }} value="Tidak">Tidak</option>
                                                                <option {{ $data['penerima_kip'] == 'Ya' ? 'selected':'' }} value="Ya">Ya</option>
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
                                                            <input type="text" name="no_kip" class="form-control" value="{{ $data['no_kip'] }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Nomor KKS</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="text" name="no_kks" class="form-control" value="{{ $data['no_kks'] }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Nomor Regis Akta Lahir</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="text" name="no_reg_akta_lahir" class="form-control" value="{{ $data['no_reg_akta_lahir'] }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Bank</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="text" name="bank" class="form-control" value="{{ $data['bank'] }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">No. Rekening</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="text" name="no_rek" class="form-control" value="{{ $data['no_rek'] }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Atas Nama</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="text" name="atas_nama" class="form-control" value="{{ $data['atas_nama'] }}">
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
                                                                <option {{ $data['layak_pip_usulan_sekolah'] == 'Tidak' ? 'selected':'' }} value="Tidak">Tidak</option>
                                                                <option {{ $data['layak_pip_usulan_sekolah'] == 'Ya' ? 'selected':'' }} value="Ya">Ya</option>
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
                                                            <input type="text" name="alasan_pip" class="form-control" value="{{ $data['alasan_pip'] }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Kebutuhan Khusus</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="text" name="kebutuhan_khusus" class="form-control" value="{{ $data['kebutuhan_khusus'] }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Asal Sekolah</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="text" name="asal_sekolah" class="form-control" value="{{ $data['asal_sekolah'] }}">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Anak Ke</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="number" name="anak_ke" class="form-control" value="{{ $data['anak_ke'] }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Lintang</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="text" name="lintang" class="form-control" value="{{ $data['lintang'] }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Bujur</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="text" name="bujur" class="form-control" value="{{ $data['bujur'] }}">
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

