    @extends('layouts.master')
    
    @section('title','Video')
    @section('content')
    
                <div class="page-title">
                    <h3>Galeri Video</h3>
                </div>
                
                <section class="section">
                    
                   
                       
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    
                                    <div class="card-body">
                                        @include('include.alert')
                                        {{-- <img src="{{ asset('storage/'.$sejarah[0]->image) }}" alt="" srcset=""> --}}
                                        <form action="{{ route('video.store') }}" method="post" enctype="multipart/form-data">
                                             @csrf
                                            
                                            <div class="row">
                                                <div class="col-md-12">
                                                   
                                                    <div class="form-group row align-items-center">
                                                            <div class="col-lg-1 col-1">
                                                                <label class="col-form-label">Video</label>
                                                            </div>
                                                            <div class="col-lg-4 col-4">
                                                                <input type="file" id="image" class="form-control" name="image" required>
                                                               
                                                            </div>
                                                         <div class="alert" style="display: none;">File anda melebihi 50 MB <b>atau</b> file anda bukan <b>(.mp4 / .avi / .mkv / .mov / .wmv)</b></div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <button id="btnSave" type="submit" class="btn btn-primary">Simpan</button>
                                            <a href="{{route('video.index')}}" class="btn btn-default">Kembali</a>
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
                (fileSize < 50 && fileType[1] == 'quicktime') 
                || (fileSize < 50 && fileType[1] == 'mp4')
                
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

