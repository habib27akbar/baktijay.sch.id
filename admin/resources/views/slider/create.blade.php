    @extends('layouts.master')
    
    @section('title','Slider')
    @section('content')
    
                <div class="page-title">
                    <h3>Slider</h3>
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
                                                            <div class="col-sm-3 mb-1">
                                                                <div class="input-group">
                                                                    <div class="input-group-text">
                                                                        <input class="form-check-input" checked type="radio" onclick="checkPilihan(this.value)" name="pilihUpload" value="1" aria-label="Radio button for following text input">
                                                                    </div>
                                                                    <input type="text" readonly class="form-control" value="Ambil Dari Galeri Foto">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3 mb-1">
                                                                <div class="input-group">
                                                                    <div class="input-group-text">
                                                                        <input class="form-check-input" type="radio" onclick="checkPilihan(this.value)" name="pilihUpload" value="2" aria-label="Radio button for following text input">
                                                                    </div>
                                                                    <input type="text" readonly class="form-control" value="Upload Manual">
                                                                </div>
                                                            </div>
                                                            <div id="pilihan1">
                                                                <div class="col-lg-11 col-11">
                                                                    @foreach($foto as $key => $value)
                                                                        
                                                                            <input type="checkbox" id="checkbox{{ $key+1 }}" name="image_foto[]" value="{{ $value->image }}">
                                                                            <img style="width:30%;" src="{{ asset('storage/'.$value->image) }}" alt="" srcset="">
                                                                            
                                                                        
                                                                        
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                            <div id="pilihan2" style="display: none">
                                                               
                                                                <div style="margin-left:100px;" class="col-lg-4 col-4">
                                                                    <input type="file" id="image" class="form-control" name="image" required>
                                                                </div>
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
    @section('js')
    <script>
        function checkPilihan(value) {
            if (value == 1) {
                $("#pilihan1").show();
                $("#pilihan2").hide();
            }else{
                $("#pilihan2").show();
                $("#pilihan1").hide();
            }
        }
    </script>
    @endsection

