    @extends('layouts.master')
    
    @section('title','Tahun Akademik')
    @section('content')
    
                <div class="page-title">
                    <h3>Tahun Akademik</h3>
                </div>
                
                <section class="section">
                    
                   
                       
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    
                                    <div class="card-body">
                                        @include('include.alert')
                                        {{-- <img src="{{ asset('storage/'.$sejarah[0]->image) }}" alt="" srcset=""> --}}
                                        <form action="{{ route('thn_akademik.store') }}" method="post">
                                             @csrf
                                            
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-2 col-2">
                                                            <label for="years" class="form-label">Tahun Akademik</label>
                                                        </div>
                                                        <div class="col-lg-3 col-3">
                                                            <select name="kode" id="years" class="form-control" onchange="selectThn(this.value)" required>
                                                                <option value="">--Pilih Tahun--</option>
                                                                @for($year = date('Y'); $year >= (date('Y') - 5); $year--)
                                                                    @php
                                                                        $years = $year+1;  
                                                                    @endphp
                                                                    @for($i = 1; $i <= 2; $i++)
                                                                        @if ($i == 1)
                                                                            @php
                                                                              $ket = 'Ganjil';  
                                                                            @endphp
                                                                        @else
                                                                            @php
                                                                              $ket = 'Genap';  
                                                                            @endphp
                                                                        @endif
                                                                        <option value="{{ $year.$i }}">{{ $year.' / '.$years.' '.$ket }}</option>
                                                                    @endfor
                                                                @endfor
                                                                
                                                            </select>
                                                        </div>
                                                         <div class="alert" style="display: none;"><b>Tahun Akademik Sudah Ada !</b></div>
                                                    </div>
                                                   
                                                    
                                                </div>
                                            </div>
                                            <button id="btnSave" type="submit" class="btn btn-primary">Simpan</button>
                                            <a href="{{route('thn_akademik.index')}}" class="btn btn-default">Kembali</a>
                                        </form>
                                    </div>
                                </div>
                                
                            </div>
                           
                        </div>
                   
                </section>
               
    @endsection
    @section('js')
    
    <script>
        function selectThn(val) {
        $years = document.getElementById("years").value;
           //console.log($years);
            $.ajax({
            //the url to send the data to
                url: '{{ route("post_check_thnakad") }}',
                //the data to send to
                data: {
                    _token   : '{{csrf_token()}}',
                    tahun : $years,
                    
                },
                //type. for eg: GET, POST
                type: "POST",
                //datatype expected to get in reply form server
                // dataType: "json",
                //on success
                success: function(data) {
                    //console.log(data);
                    if (data > 0) {
                        $("#btnSave").hide();
                        $(".alert").show();
                    }else{
                        $("#btnSave").show();
                        $(".alert").hide();
                    }

                },
                //on error
                error: function(err) {
                    //bad request
                    console.log(err);
                }
            });
        }
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

