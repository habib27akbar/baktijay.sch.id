    @extends('layouts.master')
    
    @section('title','Slider')

    @section('css')
        <link rel="stylesheet" href="{{ asset('assets/vendors/simple-datatables/style.css') }}">
    @endsection

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
                                        <a href="{{ route('slider.create') }}" class="btn btn-primary">Tambah</a>
                                        <br/><br/>
                                         <table class='table table-striped' id="table1">
                                            <thead>
                                                <tr>
                                                    <th style="width: 26%%">Action</th>
                                                    <th>No</th>
                                                    <th>Gambar</th>
                                                    <th>Keterangan</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($slider as $key => $value)
                                                    <tr>
                                                        <td>
                                                            <div class="btn-group">
                                                                <form method="POST" action="{{ route('slider.destroy', ['slider' => $value->id]) }}">
                                                                    <a href="{{ route('slider.edit',$value->id) }}" class="btn btn-warning">Edit</a>
                                                                    @method('DELETE')
                                                                    @csrf
                                                                    <button onclick="confirm('apakah anda yakin ?')" class="btn btn-danger">Delete</button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                        <td>{{ $key+1 }}</td>
                                                        <td>
                                                            <img style="width:30%;" src="{{ asset('storage/'.$value->image) }}" alt="" srcset="">
                                                        </td>
                                                        <td>{{ $value->description }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        
                                    </div>
                                </div>
                                
                            </div>
                           
                        </div>
                   
                </section>
               
    @endsection

    @section('js')
        <script src="{{ asset('assets/vendors/simple-datatables/simple-datatables.js') }}"></script>
        <script src="{{ asset('assets/js/vendors.js') }}"></script>
    @endsection

