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
                            <i data-feather="user" width="20"></i> 
                            <span>Profil</span>
                        </a>
                        
                        <ul class="submenu ">

                
                            
                            <li>
                                <a href="{{ route('sejarah.index') }}">Sejarah</a>
                            </li>
                            
                            <li>
                                <a href="component-badge.html">ICBJ Values</a>
                            </li>
                            
                            
                            
                            <li>
                                <a href="component-carousel.html">Visi Misi</a>
                            </li>
                            
                            <li>
                                <a href="component-dropdowns.html">Struktur Organisasi</a>
                            </li>
                            
                            
                            
                        </ul>
                        
                    </li>

                
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i data-feather="book" width="20"></i> 
                            <span>Akademik</span>
                        </a>
                        
                        <ul class="submenu ">
                            
                            <li>
                                <a href="component-extra-avatar.html">SMP Bakti Jaya</a>
                            </li>
                            
                            <li>
                                <a href="component-extra-divider.html">SMK Bakti Jaya</a>
                            </li>
                            
                        </ul>
                        
                    </li>

                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i data-feather="image" width="20"></i> 
                            <span>Galeri</span>
                        </a>
                        
                        <ul class="submenu ">
                            
                            <li>
                                <a href="{{ route('foto.index') }}">Foto</a>
                            </li>
                            
                            <li>
                                <a href="component-extra-divider.html">Video</a>
                            </li>
                            
                        </ul>
                        
                    </li>

                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i data-feather="globe" width="20"></i> 
                            <span>Portal</span>
                        </a>
                        
                        <ul class="submenu ">
                            <li>
                                <a href="component-extra-divider.html">Guru</a>
                            </li>
                            <li>
                                <a href="component-extra-avatar.html">Siswa</a>
                            </li>
                            
                            <li>
                                <a href="component-extra-divider.html">Download</a>
                            </li>
                            
                        </ul>
                        
                    </li>


                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i data-feather="users" width="20"></i> 
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

                    <li class="sidebar-item">
                        <a href="{{ route('home') }}" class='sidebar-link'>
                            <i data-feather="phone" width="20"></i> 
                            <span>Kontak</span>
                        </a>
                        
                    </li>
                
                
                    

                
                
            
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>