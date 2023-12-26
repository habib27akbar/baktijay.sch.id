    @extends('layouts.master')
    
    @section('title','Download')

    @section('css')
        <link rel="stylesheet" href="{{ asset('assets/vendors/simple-datatables/style.css') }}">
    @endsection

    @section('content')
    
                <div class="page-title">
                    <h3>Download</h3>
                </div>
                
                <section class="section">
                    
                   
                       
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    
                                    <div class="card-body">
                                        @include('include.alert')
                                        <a href="{{ route('download.create') }}" class="btn btn-primary">Tambah</a>
                                        <br/><br/>
                                         <table class='table table-striped' id="table1">
                                            <thead>
                                                <tr>
                                                    <th>Action</th>
                                                    <th>No</th>
                                                    <th>File</th>
                                                    <th>Keterangan</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($download as $key => $value)
                                                    <tr>
                                                        <td>
                                                            <div class="btn-group">
                                                                <form method="POST" action="{{ route('download.destroy', ['download' => $value->id]) }}">
                                                                    <a href="{{ route('download.edit',$value->id) }}" class="btn btn-warning">Edit</a>
                                                                    @method('DELETE')
                                                                    @csrf
                                                                    <button onclick="confirm('apakah anda yakin ?')" class="btn btn-danger">Delete</button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                        <td>{{ $key+1 }}</td>
                                                        <td>
                                                            <a href="{{ asset('storage/'.$value->image) }}" target="_blank">File</a>
                                                           
                                                        </td>
                                                        <td>{{ $value->keterangan }}</td>
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

