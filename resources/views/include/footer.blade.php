 <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                {{-- <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-3">Quick Link</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">FAQs & Help</a>
                </div> --}}
                <div class="col-lg-6 col-md-6">
                    <h4 class="text-white mb-3">Kontak</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{ $kontak[0]->alamat }}</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>{{ $kontak[0]->telepon }}</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>{{ $kontak[0]->email }}</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="{{ $kontak[0]->twitter }}"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href="{{ $kontak[0]->facebook }}"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href="{{ $kontak[0]->youtube }}"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href="{{ $kontak[0]->instagram }}"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <h4 class="text-white mb-3">Maps</h4>
                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63439.54266088676!2d106.78275641953128!3d-6.3976849957095245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69eba0fd144797%3A0x7985fcdbd2d6ef8e!2sSMP%20SMK%20Bakti%20Jaya!5e0!3m2!1sid!2sid!4v1703905056289!5m2!1sid!2sid"
                        frameborder="0" style="min-height: 200px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>

                        
                        
                </div>
                {{-- <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div> --}}
            </div>
        </div>
        <br/>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Baktijaya</a>, All Right Reserved.

                       
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        {{-- <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->