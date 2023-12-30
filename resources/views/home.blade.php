    @extends('layouts.app')
    @section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
           
            @foreach ($data_slider as $slider)
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ url('admin/public/storage/'.$slider->image) }}" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                
                                <p class="fs-5 text-white mb-4 pb-2">{{ $slider->keterangan }}</p>
                                
                                <a href="#" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Daftar Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4" style="display: flex; justify-content: center;">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            
                            <i class="fa fa-3x fas fa-school text-primary mb-4"></i>
                            <h5 class="mb-3">SMP Bakti Jaya</h5>
                            {{-- <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fas fa-school text-primary mb-4"></i>
                            <h5 class="mb-3">SMK Bakti Jaya</h5>
                            {{-- <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p> --}}
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Sejarah Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        @if ($sejarah[0]->image)
                            <img class="img-fluid position-absolute w-100 h-100" src="{{ url('admin/public/storage/'.$sejarah[0]->image) }}" alt="" style="object-fit: cover;">
                        @else
                            <img class="img-fluid position-absolute w-100 h-100" src="{{ asset('img/download.png') }}" alt="" style="object-fit: cover;">
                        @endif
                        
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Sejarah</h6>
                    
                    <p class="mb-4">{!! strlen($sejarah[0]->description) > 500 ? substr($sejarah[0]->description, 0,500).'...':$sejarah[0]->description !!}</p>
                    
                    
                    <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Sejarah End -->


    <!-- ICBJ Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        @if ($icbj_value[0]->image)
                            <img class="img-fluid position-absolute w-100 h-100" src="{{ url('admin/public/storage/'.$icbj_value[0]->image) }}" alt="" style="object-fit: cover;">
                        @else
                            <img class="img-fluid position-absolute w-100 h-100" src="{{ asset('img/download.png') }}" alt="" style="object-fit: cover;">
                        @endif
                        
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">ICBJ Values</h6>
                    
                    <p class="mb-4">{!! strlen($icbj_value[0]->description) > 500 ? substr($icbj_value[0]->description, 0,500).'...':$icbj_value[0]->description !!}</p>
                    
                    
                    <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ICBJ End -->


    


    


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Galeri Foto</h6>
               
            </div>
            <br/>
            <div class="owl-carousel testimonial-carousel position-relative">
                @foreach ($foto as $data_foto)
                    <div class="testimonial-item text-center">
                        <img src="{{ url('admin/public/storage/'.$data_foto->image) }}" style="width: 350px; height: 300px;">
                        
                    </div>
               @endforeach
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    @endsection