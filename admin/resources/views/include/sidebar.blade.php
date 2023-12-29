<div id="sidebar" class='active'>
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <img src="{{ asset('assets/images/logo-2.jpeg') }}" style="width:65%; height:0%;display: block; margin: 0 auto;" alt="" srcset="">
        </div>
        <div class="sidebar-menu" style="margin-top: -50px">
            <ul class="menu">
                
                
                    <li class='sidebar-title'>Main Menu</li>
                    <li class="sidebar-item">
                        <a href="{{ route('logout') }}" class='sidebar-link'
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                               
                        
                            <i data-feather="log-out" width="20"></i> 
                            <span>Logout</span>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </a>
                        
                    </li>
                
                
                    <li class="sidebar-item">
                        <a href="{{ route('home') }}" class='sidebar-link'>
                            <i data-feather="home" width="20"></i> 
                            <span>Dashboard</span>
                        </a>
                        
                    </li>

                     <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i data-feather="globe" width="20"></i> 
                            <span>Website</span>
                        </a>
                        <ul style="margin-left: -25px" class="submenu ">

                            <li class="sidebar-item  has-sub">
                                <a href="#" class='sidebar-link'>
                                    <span>Profil</span>
                                </a>
                                <ul class="submenu ">
                                    <li>
                                        <a href="{{ route('sejarah.index') }}">Sejarah</a>
                                    </li>
                                    
                                    <li>
                                        <a href="{{ route('icbj_value.index') }}">ICBJ Values</a>
                                    </li>
                                    
                                    
                                    
                                    <li>
                                        <a href="{{ route('visi_misi.index') }}">Visi Misi</a>
                                    </li>
                                    
                                    <li>
                                        <a href="{{ route('struktur_organisasi.index') }}">Struktur Organisasi</a>
                                    </li>
                                </ul>
                            </li>
                            
                            <li>
                                <a href="{{ route('slider.index') }}" class='sidebar-link'><span>Slider</span></a>
                            </li>

                            <li class="sidebar-item  has-sub">
                                <a href="#" class='sidebar-link'>
                                    <span>Akademik</span>
                                </a>
                                <ul class="submenu ">
                                    <li>
                                        <a href="{{ route('smp_baktijaya.index') }}">SMP Bakti Jaya</a>
                                    </li>
                                    
                                    <li>
                                        <a href="{{ route('smk_baktijaya.index') }}">SMK Bakti Jaya</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="sidebar-item  has-sub">
                                <a href="#" class='sidebar-link'>
                                    <span>Galeri</span>
                                </a>
                                <ul class="submenu ">
                                    <li>
                                        <a href="{{ route('foto.index') }}">Foto</a>
                                    </li>
                                    
                                    <li>
                                        <a href="{{ route('video.index') }}">Video</a>
                                    </li>
                                </ul>
                            </li>

                            
                            <li class="sidebar-item  has-sub">
                                <a href="#" class='sidebar-link'>
                                    <span>Portal</span>
                                </a>
                                <ul class="submenu ">
                                    <li>
                                        <a href="https://baktijaya.sch.id/guru">Guru</a>
                                    </li>
                                    <li>
                                        <a href="https://baktijaya.sch.id/siswa">Siswa</a>
                                    </li>
                                    
                                    <li>
                                        <a href="{{ route('download.index') }}">Download</a>
                                    </li>
                                </ul>
                            </li>
                            
                            
                            <li class="sidebar-item  has-sub">
                                <a href="#" class='sidebar-link'>
                                    <span>PSB Online</span>
                                </a>
                                <ul class="submenu ">
                                    <li>
                                        <a href="component-extra-avatar.html">Biaya Pendaftaran</a>
                                    </li>
                                    
                                    <li>
                                        <a href="component-extra-divider.html">Prosedur Pendaftaran</a>
                                    </li>

                                    <li>
                                        <a href="component-extra-divider.html">PSB SMP Bakti Jaya</a>
                                    </li>

                                    <li>
                                        <a href="component-extra-divider.html">PSB SMK Bakti Jaya</a>
                                    </li>
                                </ul>
                            </li>

                            

                            <li>
                                <a href="{{ route('home') }}" class='sidebar-link'><span>Kontak</span></a>
                            </li>
                        
                        </ul>
                        
                     </li>

                     <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i data-feather="menu" width="20"></i> 
                            <span>Master</span>
                        </a>
                        <ul style="margin-left: -25px" class="submenu ">
                             <li>
                                <a href="{{ route('thn_akademik.index') }}">Tahun Akademik</a>
                             </li>
                             <li>
                                <a href="{{ route('sekolah.index') }}">Sekolah</a>
                             </li>
                             <li>
                                <a href="{{ route('siswa.index') }}">Siswa</a>
                             </li>
                             <li>
                                <a href="{{ route('guru.index') }}">Guru</a>
                             </li>
                             <li>
                                <a href="{{ route('mapel.index') }}">Mata Pelajaran</a>
                             </li>
                             <li>
                                <a href="{{ route('rombel.index') }}">Rombel</a>
                             </li>
                             <li>
                                <a href="component-extra-avatar.html">Ruang</a>
                             </li>
                             <li>
                                <a href="component-extra-avatar.html">Waktu</a>
                             </li>
                             <li>
                                <a href="component-extra-avatar.html">Jenis Pembayaran</a>
                             </li>
                        </ul>
                     </li>
                
                    

                
                
            
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>