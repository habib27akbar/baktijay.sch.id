    @extends('layouts.master')
    
    @section('title','Pendaftaran Siswa/Siswi')
    @section('content')
    
                <div class="page-title">
                    <h3>Pendaftaran Siswa/Siswi</h3>
                </div>
                
                <section class="section">
                    
                   
                       
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    
                                    <div class="card-body">
                                        @include('include.admin.alert')
                                        {{-- <img src="{{ asset('storage/'.$sejarah[0]->image) }}" alt="" srcset=""> --}}
                                        <form action="{{ route('pendaftaran.store') }}" method="post" enctype="multipart/form-data">
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
                                                            <label class="col-form-label">Tahun Ajaran</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            
                                                            <select name="kd_angkatan" id="kd_angkatan" class="form-control" required>
                                                               
                                                               
                                                                    <option value="20241">{{ ThnHelper::get_thnakad('20241') }}</option>
                                                               
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

                                                 <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Hubungan Keluarga</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="text" name="hubungan_keluarga" class="form-control" required>
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
                                                            <label class="col-form-label">No. HP</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="text" name="hp" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>

                                               
                                            </div>
                                            <input type="hidden" name="status" value="0">
                                            <br/>
                                            <button id="btnSave" type="submit" class="btn btn-primary">Simpan</button>
                                            <a href="{{route('home')}}" class="btn btn-default">Kembali</a>
                                        </form>
                                    </div>
                                </div>
                                
                            </div>
                           
                        </div>
                   
                </section>
               
    @endsection
    @section('js')
    
    
    @endsection

