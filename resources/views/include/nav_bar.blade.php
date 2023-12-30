<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        {{-- <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>eLEARNING</h2> --}}
            <img class="m-0 text-primary" style="width: 100px; height:75px;" src="{{ asset('img/logo-1.jpeg') }}">
        
       
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profil</a>
                <div class="dropdown-menu fade-down m-0">
                    <a href="{{ route('sejarah.index') }}" class="dropdown-item">Sejarah</a>
                    <a href="{{ route('icbj_value.index') }}" class="dropdown-item">ICBJ Values</a>
                    <a href="{{ route('visi_misi.index') }}" class="dropdown-item">Visi Misi</a>
                    <a href="{{ route('struktur_organisasi.index') }}" class="dropdown-item">Struktur Organisasi</a>
                </div>
            </div>
        
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Akademik</a>
                <div class="dropdown-menu fade-down m-0">
                    <a href="{{ route('smp_baktijaya.index') }}" class="dropdown-item">SMP Bakti Jaya</a>
                    <a href="{{ route('smk_baktijaya.index') }}" class="dropdown-item">SMK Bakti Jaya</a>
                    
                </div>
            </div>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Galeri</a>
                <div class="dropdown-menu fade-down m-0">
                    <a href="team.html" class="dropdown-item">Foto</a>
                    <a href="testimonial.html" class="dropdown-item">Video</a>
                    
                </div>
            </div>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Portal</a>
                <div class="dropdown-menu fade-down m-0">
                    <a href="team.html" class="dropdown-item">Guru</a>
                    <a href="testimonial.html" class="dropdown-item">Siswa</a>
                    <a href="testimonial.html" class="dropdown-item">Download</a>
                </div>
            </div>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">PSB Online</a>
                <div class="dropdown-menu fade-down m-0">
                    <a href="team.html" class="dropdown-item">Biaya Pendaftaran</a>
                    <a href="testimonial.html" class="dropdown-item">Prosedur Pendaftaran</a>
                    <a href="testimonial.html" class="dropdown-item">PSB SMP Bakti Jaya</a>
                    <a href="testimonial.html" class="dropdown-item">PSB SMK Bakti Jaya</a>
                </div>
            </div>


            <a href="contact.html" class="nav-item nav-link">Kontak</a>
        </div>
        <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Daftar Sekarang<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
<!-- Navbar End -->