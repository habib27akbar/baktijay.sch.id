    @extends('layouts.master')
    
    @section('title','Sejarah')
    @section('content')
    
                <div class="page-title">
                    <h3>Sejarah</h3>
                </div>
                
                <section class="section">
                    
                   
                       
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    
                                    <div class="card-body">
                                        @include('include.alert')
                                        
                                        <form action="{{ route('slider.update', ['slider' => $slider['id']]) }}" method="post" enctype="multipart/form-data">
                                             @csrf
                                             @method('PUT')
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-1 col-1">
                                                            <label for="keterangan" class="form-label">Keterangan</label>
                                                        </div>
                                                        <div class="col-lg-11 col-11">
                                                            <input type="text" id="keterangan" name="keterangan" class="form-control" value="{{ $slider['description'] }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row align-items-center">
                                                            <div class="col-lg-1 col-1">
                                                                <label class="col-form-label">Gambar</label>
                                                            </div>
                                                            <div class="col-lg-4 col-4">
                                                                <input type="file" id="image" class="form-control" name="image">
                                                                <input type="hidden" name="image_old" value="{{ $slider['image'] }}">
                                                            </div>
                                                         <div class="alert" style="display: none;">File anda melebihi 10 MB <b>atau</b> file anda bukan <b>(.jpg / .jpeg)</b></div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <button id="btnSave" type="submit" class="btn btn-primary">Simpan</button>
                                        </form>
                                    </div>
                                </div>
                                
                            </div>
                           
                        </div>
                   
                </section>
               
    @endsection

@section('js')
    <script src="https://cdn.ckeditor.com/4.4.3/full/ckeditor.js"></script>
    <script>
        $(function() {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.

            CKEDITOR.replace('description');
            
           
        });

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