    @extends('layouts.app')
    @if ($smk_baktijaya[0]->image)
        @php
            $image = url('admin/public/storage/'.$smk_baktijaya[0]->image);
        @endphp
        
    @else
        @php
            $image = asset('img/download.png');
        @endphp
        
    @endif
    @section('css')
        <style>
            .page-header {
                background: linear-gradient(rgba(24, 29, 56, .7), rgba(24, 29, 56, .7)), url({{ $image }});
                background-position: center center;
                background-repeat: no-repeat;
                background-size: cover;
            }
        </style>
    @endsection
    @section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header" style="background: linear-gradient(rgba(24, 29, 56, .7), rgba(24, 29, 56, .7)), url({{ $image }}); background-position: center center;
                background-repeat: no-repeat;
                background-size: cover;">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">SMK Bakti Jaya</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Akademik</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">SMK Bakti Jaya</a></li>
                           
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


   
    <!-- smk_baktijaya Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">SMK Bakti Jaya</h6>
                    
                    <p class="mb-4">{!! $smk_baktijaya[0]->description !!}</p>
                    
                    
                   
                </div>
            </div>
        </div>
    </div>
    <!-- smk_baktijaya End -->

    @endsection