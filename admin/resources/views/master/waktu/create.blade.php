    @extends('layouts.master')
    
    @section('title','Waktu')
    @section('content')
    
                <div class="page-title">
                    <h3>Waktu</h3>
                </div>
                
                <section class="section">
                    
                   
                       
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    
                                    <div class="card-body">
                                        @include('include.alert')
                                        {{-- <img src="{{ asset('storage/'.$sejarah[0]->image) }}" alt="" srcset=""> --}}
                                        <form action="{{ route('waktu.store') }}" method="post" enctype="multipart/form-data">
                                             @csrf
                                            <input type="hidden" name="kode" value="">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-3 col-3">
                                                            <label class="col-form-label">Hari</label>
                                                        </div>
                                                        <div class="col-lg-8 col-8">
                                                            <select name="hari" id="hari" class="form-control" onchange="changeHari(this.value)">
                                                                <option value="">--Pilih Data--</option>
                                                                @foreach ($hari as $list_hari)
                                                                    <option value="{{ $list_hari }}">{{ $list_hari }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-7">
                                                    <div class="form-group row align-items-center">
                                                        <div class="col-lg-1 col-1">
                                                            <label class="col-form-label">Jam</label>
                                                        </div>
                                                        <div class="row col-lg-9 col-9">
                                                            <div class="col-md-2">
                                                                <select name="jam_awal" id="jam_awal" class="form-control" required>
                                                                    <option value=""></option>
                                                                    @for ($i = 6; $i <= 16; $i++)
                                                                        @if ($i < 10)
                                                                            @php
                                                                               $i = '0'.$i; 
                                                                            @endphp
                                                                        @endif
                                                                       <option value="{{ $i }}">{{ $i }}</option>
                                                                    @endfor
                                                                </select>
                                                                
                                                            </div>
                                                            <div class="col-md-1" style="width: 3%">
                                                                <b>:</b>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <select name="menit_awal" id="menit_awal" class="form-control" required>
                                                                    <option value=""></option>
                                                                    @for ($i = 0; $i <= 59; $i++)
                                                                        @if ($i < 10)
                                                                            @php
                                                                               $i = '0'.$i; 
                                                                            @endphp
                                                                        @endif
                                                                       <option value="{{ $i }}">{{ $i }}</option>
                                                                    @endfor
                                                                </select>
                                                            </div>
                                                            <div class="col-md-1" style="width: 3%">
                                                                <b>-</b>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <select name="jam_akhir" id="jam_akhir" class="form-control" required>
                                                                    <option value=""></option>
                                                                    @for ($i = 6; $i <= 16; $i++)
                                                                        @if ($i < 10)
                                                                            @php
                                                                               $i = '0'.$i; 
                                                                            @endphp
                                                                        @endif
                                                                       <option value="{{ $i }}">{{ $i }}</option>
                                                                    @endfor
                                                                </select>
                                                                
                                                            </div>
                                                            <div class="col-md-1" style="width: 3%">
                                                                <b>:</b>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <select name="menit_akhir" id="menit_akhir" class="form-control" required>
                                                                    <option value=""></option>
                                                                    @for ($i = 0; $i <= 59; $i++)
                                                                        @if ($i < 10)
                                                                            @php
                                                                               $i = '0'.$i; 
                                                                            @endphp
                                                                        @endif
                                                                       <option value="{{ $i }}">{{ $i }}</option>
                                                                    @endfor
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                
                                            </div>
                                            <button id="btnSave" type="submit" class="btn btn-primary">Simpan</button>
                                            <a href="{{route('waktu.index')}}" class="btn btn-default">Kembali</a>
                                        </form>
                                    </div>
                                </div>
                                
                            </div>
                           
                        </div>
                   
                </section>
               
    @endsection
    @section('js')
    
    <script>
        function changeHari(value) {
            //console.log(value);
            $hari = value;
            $.ajax({
            //the url to send the data to
                url: '{{ route("post_check_waktu") }}',
                //the data to send to
                data: {
                    _token   : '{{csrf_token()}}',
                    hari : $hari,
                    
                },
                //type. for eg: GET, POST
                type: "POST",
                //datatype expected to get in reply form server
                // dataType: "json",
                //on success
                success: function(data) {
                    if (data) {
                        var kode = parseInt(data.kode) + 1;
                        document.getElementsByName('kode')[0].value = kode;
                        //console.log(data);
                        //console.log("ada");
                    }else{
                        var kode;
                        if ($hari == 'SENIN') {
                            kode = 1;
                        } else if ($hari == 'SELASA') {
                            kode = 2;
                        } else if ($hari == 'RABU') {
                            kode = 3;
                        } else if ($hari == 'KAMIS') {
                            kode = 4;
                        } else if ($hari == 'JUMAT') {
                            kode = 5;
                        } else if ($hari == 'SABTU') {
                            kode = 6;
                        }
                        document.getElementsByName('kode')[0].value = kode+'01';
                    }
                    //console.log(data);
                    // if (data > 0) {
                    //     $("#btnSave").hide();
                    //     $(".alert").show();
                    // }else{
                    //     $("#btnSave").show();
                    //     $(".alert").hide();
                    // }

                },
                //on error
                error: function(err) {
                    //bad request
                    console.log(err);
                }
            });
        }
    </script>
    
    @endsection

