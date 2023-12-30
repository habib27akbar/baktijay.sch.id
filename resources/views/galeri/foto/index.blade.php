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
                    <h1 class="display-3 text-white animated slideInDown">Galeri Foto</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Galeri</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Foto</a></li>
                           
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
                @foreach ($foto as $data_foto)
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <img src="{{ url('admin/public/storage/'.$data_foto->image) }}" style="width:350px; height:300px" srcset="">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- smp_baktijaya End -->

    @endsection