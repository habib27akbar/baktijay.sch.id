    @extends('layouts.app')
    
    @php
        $image = url('admin/public/storage/images/39iapqPpJU16p5Sxm1e7t1XnmQexkVeB6T6cLwPv.jpg');
    @endphp
        
    @section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header" style="background: linear-gradient(rgba(24, 29, 56, .7), rgba(24, 29, 56, .7)), url({{ $image }}); background-position: center center;
                background-repeat: no-repeat;
                background-size: cover;">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Download</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Portal</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Download</a></li>
                           
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


   
    <!-- smp_baktijaya Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
               <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            
                            <th>No</th>
                            <th>File</th>
                            <th>Keterangan</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($download as $key => $value)
                            <tr>
                                
                                <td>{{ $key+1 }}</td>
                                <td>
                                    <a href="{{ url('admin/public/storage/'.$value->image) }}" target="_blank">File</a>
                                    
                                </td>
                                <td>{{ $value->keterangan }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- smp_baktijaya End -->

    @endsection