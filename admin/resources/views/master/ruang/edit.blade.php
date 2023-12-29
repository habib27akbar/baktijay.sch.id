    @extends('layouts.master')
    
    @section('title','Ruang')
    @section('content')
    
                <div class="page-title">
                    <h3>Ruang</h3>
                </div>
                
                <section class="section">
                    
                   
                       
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    
                                    <div class="card-body">
                                        @include('include.alert')
                                        
                                        <form action="{{ route('ruang.update', ['ruang' => $data['id']]) }}" method="post" enctype="multipart/form-data">
                                             @csrf
                                             @method('PUT')
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-2 col-2">
                                                            <label for="nama" class="form-label">Nama Ruang</label>
                                                        </div>
                                                        <div class="col-lg-10 col-10">
                                                            <input type="text" id="nama" name="nama" class="form-control" value="{{ $data['nama'] }}">
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <button id="btnSave" type="submit" class="btn btn-primary">Simpan</button>
                                            <a href="{{route('ruang.index')}}" class="btn btn-default">Kembali</a>
                                        </form>
                                    </div>
                                </div>
                                
                            </div>
                           
                        </div>
                   
                </section>
               
    @endsection

@section('js')
   
    <script>
       

        $('#image').bind('change', function() {
        //console.log(this.files[0]);
            let fileSizeUpload = this.files[0].size;
            let fileSize = (fileSizeUpload / (1024 * 1024)).toFixed(2);
            let fileType = this.files[0].type.split('/');
            //console.log(fileType[1]);
            if (
                (fileSize < 10 && fileType[1] == 'jpg') 
                || (fileSize < 10 && fileType[1] == 'jpeg')
                
            ) {
                $(".alert").hide();
                //document.getElementById("file_raport").classList.remove('is-invalid');
                $("#btnSave").show();
            } else {
                $(".alert").show();
                //document.getElementById("file_raport").classList.add('is-invalid');
                $("#btnSave").hide();

            }
            //this.files[0].size gets the size of your file.
            //alert(fileSize);

        });
    </script>
@endsection