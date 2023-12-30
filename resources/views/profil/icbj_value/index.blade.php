    @extends('layouts.app')
    @if ($icbj_value[0]->image)
        @php
            $image = url('admin/public/storage/'.$icbj_value[0]->image);
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
                    <h1 class="display-3 text-white animated slideInDown">ICBJ Values</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Profil</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">ICBJ Values</a></li>
                           
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


   
    <!-- Sejarah Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">ICBJ Values</h6>
                    
                    <p class="mb-4">{!! $icbj_value[0]->description !!}</p>
                    
                    
                   
                </div>
            </div>
        </div>
    </div>
    <!-- Sejarah End -->

    @endsection