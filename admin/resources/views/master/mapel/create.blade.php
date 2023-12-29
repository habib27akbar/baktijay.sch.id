    @extends('layouts.master')
    
    @section('title','Mata Pelajaran')
    @section('content')
    
                <div class="page-title">
                    <h3>Mata Pelajaran</h3>
                </div>
                
                <section class="section">
                    
                   
                       
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    
                                    <div class="card-body">
                                        @include('include.alert')
                                        {{-- <img src="{{ asset('storage/'.$sejarah[0]->image) }}" alt="" srcset=""> --}}
                                        <form action="{{ route('mapel.store') }}" method="post" enctype="multipart/form-data">
                                             @csrf
                                            
                                            <div class="row">
                                                <div class="col-md-12">
                                                   <div class="form-group row align-items-center">
                                                        <div class="col-lg-2 col-2">
                                                            <label for="nama" class="form-label">Nama Pelajaran</label>
                                                        </div>
                                                        <div class="col-lg-10 col-10">
                                                            <input type="text" id="nama" name="nama" class="form-control">
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                </div>
                                            </div>
                                            <button id="btnSave" type="submit" class="btn btn-primary">Simpan</button>
                                            <a href="{{route('mapel.index')}}" class="btn btn-default">Kembali</a>
                                        </form>
                                    </div>
                                </div>
                                
                            </div>
                           
                        </div>
                   
                </section>
               
    @endsection
    @section('js')
    
    
    @endsection

