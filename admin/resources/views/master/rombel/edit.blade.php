    @extends('layouts.master')
    
    @section('title','Rombel')
    @section('content')
    
                <div class="page-title">
                    <h3>Rombel</h3>
                </div>
                
                <section class="section">
                    
                   
                       
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    
                                    <div class="card-body">
                                        @include('include.alert')
                                        {{-- <img src="{{ asset('storage/'.$sejarah[0]->image) }}" alt="" srcset=""> --}}
                                        <form action="{{ route('rombel.update', ['rombel' => $data['id']]) }}" method="post" enctype="multipart/form-data">
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
                                                                        <option {{ $data['id_sekolah'] == $sekolah->id?'selected':'' }} value="{{ $sekolah->id }}">{{ $sekolah->nama }}</option>
                                                                    @endif
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Nama Rombel</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="text" name="nama" class="form-control" value="{{ $data['nama'] }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Walikelas</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <select name="walikelas" id="walikelas" class="form-control" required>
                                                                <option value="">--Pilih Guru--</option>
                                                                @foreach ($guru as $g)
                                                                   
                                                                <option {{ $data['walikelas'] == $g->id?'selected':'' }} value="{{ $g->id }}">{{ $g->nama }}</option>
                                                                
                                                                @endforeach
                                                            </select>
                                                            
                                                        </div>
                                                    </div>
                                                </div>

                                                


                                            </div>
                                            <button id="btnSave" type="submit" class="btn btn-primary">Simpan</button>
                                            <a href="{{route('rombel.index')}}" class="btn btn-default">Kembali</a>
                                        </form>
                                    </div>
                                </div>
                                
                            </div>
                           
                        </div>
                   
                </section>
               
    @endsection
    @section('js')
    
    
    @endsection

