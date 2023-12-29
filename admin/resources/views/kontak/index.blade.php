    @extends('layouts.master')

    @section('title','Kontak')
    @section('content')

    <div class="page-title">
        <h3>Kontak</h3>
    </div>

    <section class="section">



        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-body">
                        @include('include.alert')

                        <form action="{{ route('kontak.update', ['kontak' => $kontak[0]->id]) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row align-items-center">
                                        <div class="col-lg-1 col-1">
                                            <label for="alamat" class="form-label">Alamat</label>
                                        </div>
                                        <div class="col-lg-11 col-11">
                                            <input type="text" id="alamat" name="alamat" class="form-control" value="{{ $kontak[0]->alamat }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group row align-items-center">
                                        <div class="col-lg-2 col-2">
                                            <label for="facebook" class="form-label">Facebook</label>
                                        </div>
                                        <div class="col-lg-9 col-9">
                                            <input type="text" id="facebook" name="facebook" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group row align-items-center">
                                        <div class="col-lg-2 col-2">
                                            <label for="instagram" class="form-label">Instagram</label>
                                        </div>
                                        <div class="col-lg-9 col-9">
                                            <input type="text" id="instagram" name="instagram" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group row align-items-center">
                                        <div class="col-lg-2 col-2">
                                            <label for="twitter" class="form-label">Twitter</label>
                                        </div>
                                        <div class="col-lg-9 col-9">
                                            <input type="text" id="twitter" name="twitter" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group row align-items-center">
                                        <div class="col-lg-2 col-2">
                                            <label for="youtube" class="form-label">Youtube</label>
                                        </div>
                                        <div class="col-lg-9 col-9">
                                            <input type="text" id="youtube" name="youtube" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group row align-items-center">
                                        <div class="col-lg-2 col-2">
                                            <label for="telepon" class="form-label">Telepon</label>
                                        </div>
                                        <div class="col-lg-9 col-9">
                                            <input type="text" id="telepon" name="telepon" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group row align-items-center">
                                        <div class="col-lg-2 col-2">
                                            <label for="fax" class="form-label">Fax</label>
                                        </div>
                                        <div class="col-lg-9 col-9">
                                            <input type="text" id="fax" name="fax" class="form-control">
                                        </div>
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
                (fileSize < 10 && fileType[1] == 'jpg') ||
                (fileSize < 10 && fileType[1] == 'jpeg')

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