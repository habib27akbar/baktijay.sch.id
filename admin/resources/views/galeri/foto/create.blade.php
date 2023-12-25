    @extends('layouts.master')
    
    @section('title','Foto')
    @section('content')
    
                <div class="page-title">
                    <h3>Galeri Foto</h3>
                </div>
                
                <section class="section">
                    
                   
                       
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    
                                    <div class="card-body">
                                        @include('include.alert')
                                        {{-- <img src="{{ asset('storage/'.$sejarah[0]->image) }}" alt="" srcset=""> --}}
                                        <form action="{{ route('foto.store') }}" method="post" enctype="multipart/form-data">
                                             @csrf
                                            
                                            <div class="row">
                                                <div class="col-md-12">
                                                   <div class="form-group row align-items-center">
                                                        <div class="col-lg-1 col-1">
                                                            <label for="keterangan" class="form-label">Keterangan</label>
                                                        </div>
                                                        <div class="col-lg-11 col-11">
                                                            <input type="text" id="keterangan" name="keterangan" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row align-items-center">
                                                            <div class="col-lg-1 col-1">
                                                                <label class="col-form-label">Gambar</label>
                                                            </div>
                                                            <div class="col-lg-4 col-4">
                                                                <input type="file" id="image" class="form-control" name="image" required>
                                                               
                                                            </div>
                                                         <div class="alert" style="display: none;">File anda melebihi 10 MB <b>atau</b> file anda bukan <b>(.jpg / .jpeg)</b></div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <button id="btnSave" type="submit" class="btn btn-primary">Simpan</button>
                                            <a href="{{route('foto.index')}}" class="btn btn-default">Kembali</a>
                                        </form>
                                    </div>
                                </div>
                                
                            </div>
                           
                        </div>
                   
                </section>
               
    @endsection

