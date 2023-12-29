    @extends('layouts.master')
    
    @section('title','Jenis Pembayaran')
    @section('content')
    
                <div class="page-title">
                    <h3>Jenis Pembayaran</h3>
                </div>
                
                <section class="section">
                    
                   
                       
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    
                                    <div class="card-body">
                                        @include('include.alert')
                                        
                                        <form action="{{ route('jenis_pembayaran.update', ['jenis_pembayaran' => $data['id']]) }}" method="post" enctype="multipart/form-data">
                                             @csrf
                                             @method('PUT')
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label for="nama_jenis_pembayaran" class="form-label">Nama Jenis Pembayaran</label>
                                                        </div>
                                                        <div class="col-lg-9 col-9">
                                                            <input type="text" id="nanama_jenis_pembayaranma" name="nama_jenis_pembayaran" class="form-control" value="{{ $data['nama_jenis_pembayaran'] }}">
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <button id="btnSave" type="submit" class="btn btn-primary">Simpan</button>
                                            <a href="{{route('jenis_pembayaran.index')}}" class="btn btn-default">Kembali</a>
                                        </form>
                                    </div>
                                </div>
                                
                            </div>
                           
                        </div>
                   
                </section>
               
    @endsection

@section('js')
   
    
@endsection