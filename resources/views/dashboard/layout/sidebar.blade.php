  
<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion pt-4" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center active mb-4"
            href="{{ route('dashboard') }}">
            <img src="{{ asset('assets/images/HIMTI.png') }}" rel="icon" alt="gambar" class="thumbnail img-fluid">
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item @yield('dashboard')">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Interface
        </div>
        <!-- Nav Item - Kategori -->
@if (auth()->user()->id_level == 1)
            <li class="nav-item @yield('kategori')">
                <a class="nav-link" href="{{ route('kategori.index') }}">
                    <i class="fas fa-fw fa-list-ul"></i>
                    <span>Kategori</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            {{-- Akhir Katagori --}}



            <!-- Nav Item - Angkatan -->
            <li class="nav-item @yield('angkatan')">
                <a class="nav-link" href="{{ route('angkatan.index') }}">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Angkatan</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            {{-- Akhir Angkatan --}}



            {{-- admin --}}
            <li class="nav-item @yield('admin')">
                <a class="nav-link" href="{{ route('admin.index') }}">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Admin</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            {{-- Akhir Admin --}}



            {{-- awal data --}}
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#data"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Data</span>
                </a>
                <div id="data" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-dark py-2 collapse-inner rounded">
                        <!-- Nav Item - Anggota -->
                        <div class="nav-item @yield('anggota')">
                            <a class="nav-link" href="{{ route('anggota.index') }}">
                                <i class="fas fa-fw fa-address-card"></i>
                                <span>Anggota</span></a>
                        </div>
                        <!-- Divider -->
                        <hr class="sidebar-divider">

                        <!-- Nav Item - Alumni -->
                        <div class="nav-item @yield('alumni')">
                            <a class="nav-link" href="{{ route('alumni.index') }}">
                                <i class="fas fa-fw fa-address-card"></i>
                                <span>Alumni</span></a>
                        </div>
                        <!-- Divider -->
                        <hr class="sidebar-divider">

                        <!-- Nav Item - Dosen -->
                        <div class="nav-item @yield('dosen')">
                            <a class="nav-link" href="{{ route('dosen.index') }}">
                                <i class="fas fa-fw fa-address-card"></i>
                                <span>Dosen</span></a>
                        </div>
                        <!-- Divider -->
                        <hr class="sidebar-divider">

                        <!-- Nav Item - Struktural -->
                        <div class="nav-item @yield('struktural')">
                            <a class="nav-link" href="{{ route('struktural.index') }}">
                                <i class="fas fa-fw fa-address-card"></i>
                                <span>Struktural</span></a>
                        </div>
                        <!-- Divider -->
                        <hr class="sidebar-divider">

                        <!-- Nav Item - Partnership -->
                        <div class="nav-item @yield('partnership')">
                            <a class="nav-link" href="{{ route('partnership.index') }}">
                                <i class="fas fa-fw fa-address-card"></i>
                                <span>Partnership</span></a>
                        </div>
                        <!-- Divider -->
                        <hr class="sidebar-divider">
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            {{-- akhir data --}}



            {{-- awal sertifikat --}}
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#sertifikat"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Sertifikat</span>
                </a>
                <div id="sertifikat" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-dark py-2 collapse-inner rounded">
                        <!-- Nav Item - Sertifikat -->
                        <div class="nav-item @yield('sertifikat')">
                            <a class="nav-link" href="{{ route('sertifikat.index') }}">
                                <i class="fas fa-fw fa-list-ul"></i>
                                <span>Seminar Akademik</span></a>
                        </div>

                        <!-- Divider -->
                        <hr class="sidebar-divider">
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            {{-- akhir sertifikat --}}



{{-- awal pendaftaran --}}
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#kelompokbelajar"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pendaftaran</span>
                </a>
                <div id="kelompokbelajar" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-dark py-2 collapse-inner rounded">
                        <!-- Nav Item - Kelompok Belajar -->
                        <div class="nav-item @yield('kelompokbelajar')">
                            <a class="nav-link" href="{{ route('kelompokbelajar.index') }}">
                                <i class="fas fa-fw fa-list-ul"></i>
                                <span>Kelompok Belajar</span></a>
                        </div>
                        <!-- Divider -->
                        <hr class="sidebar-divider">
                        <div class="nav-item @yield('bootcamp')">
                            <a class="nav-link" href="{{ route('btcmp.index') }}">
                                <i class="fas fa-fw fa-list-ul"></i>
                                <span>Bootcamp 2023</span></a>
                        </div>
                        
                        <hr class="sidebar-divider">
                        <div class="nav-item @yield('poster')">
                            <a class="nav-link" href="{{ route('wd.index') }}">
                                <i class="fas fa-fw fa-list-ul"></i>
                                <span>Lomba Poster 2023</span></a>
                        </div>
                        <hr class="sidebar-divider">
                        <div class="nav-item @yield('web')">
                            <a class="nav-link" href="{{ route('ml.index') }}">
                                <i class="fas fa-fw fa-list-ul"></i>
                                <span>Mobile Legend</span></a>
                        </div>
                        <hr class="sidebar-divider">
                        <div class="nav-item @yield('pc')">
                            <a class="nav-link" href="{{ route('sr.index') }}">
                                <i class="fas fa-fw fa-list-ul"></i>
                                <span>Lomba Rakit PC</span></a>
                        </div>
                        <hr class="sidebar-divider">
                        <div class="nav-item @yield('seminar')">
                            <a class="nav-link" href="{{ route('seminar.index') }}">
                                <i class="fas fa-fw fa-list-ul"></i>
                                <span>Seminar Hifest 2023</span></a>
                        </div>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
{{-- akhir pendaftaran --}}



            <!-- Nav Item - Tutorial -->
            <li class="nav-item @yield('tutorial')">
                <a class="nav-link" href="{{ route('tutorial.index') }}">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Tutorial</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            {{-- Akhir Tutorial --}}



            <!-- Nav Item - Acara -->
            <li class="nav-item @yield('acara')">
                <a class="nav-link" href="{{ route('acara.index') }}">
                    <i class="fas fa-fw fa-calendar"></i>
                    <span>Acara</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            {{-- Akhir Acara --}}



            <!-- Nav Item - Jadwal Sharing -->
            <li class="nav-item @yield('jadwalSharing')">
                <a class="nav-link" href="{{ route('jadwal-sharing.index') }}">
                    <i class="fas fa-fw fa-clipboard"></i>
                    <span>Jadwal Sharing</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            {{-- Akhir Jadwal Sharing --}}



            <!-- Nav Item - Artikel -->
            <li class="nav-item @yield('artikel')">
                <a class="nav-link" href="{{ route('artikel.index') }}">
                    <i class="fas fa-fw fa-pen"></i>
                    <span>Artikel</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            {{-- Akhir Artike; --}}




            {{-- Setting --}}
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#setting"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Setting</span>
                </a>
                <div id="setting" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-dark py-2 collapse-inner rounded">
                        <!-- Nav Item - Footer -->
                        <div class="nav-item @yield('footer')">
                            <a class="nav-link" href="{{ route('footer.index') }}">
                                <i class="fas fa-fw fa-pen"></i>
                                <span>Footer</span></a>
                        </div>
                        <!-- Divider -->
                        <hr class="sidebar-divider">

                        {{-- Slider --}}
                        <div class="nav-item @yield('slider')">
                            <a class="nav-link" href="{{ route('slider.index') }}">
                                <i class="fas fa-fw fa-pen"></i>
                                <span>Slider</span></a>
                        </div>
                        <!-- Divider -->
                        <hr class="sidebar-divider">
                    </div>
                </div>
            </li>
              {{-- Akhir Setting --}}
            <!-- Divider -->
            
            {{-- Danus --}}
            <hr class="sidebar-divider">
            
                 <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#danus"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Danus</span>
                </a>
                <div id="danus" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-dark py-2 collapse-inner rounded">
                        <!-- Nav Item - Slider -->
                        <div class="nav-item @yield('slider')">
                            <a class="nav-link" href="{{ route('danus-slider.index') }}">
                                <i class="fas fa-fw fa-pen"></i>
                                <span>Slider</span></a>
                        </div>
                        <!-- Divider -->
                        <hr class="sidebar-divider">

                        {{-- Nav Item Merchandies --}}
                        <div class="nav-item @yield('merchandise')">
                            <a class="nav-link" href="{{ route('danus-merchandise.index') }}">
                                <i class="fas fa-fw fa-pen"></i>
                                <span>Merchandise</span></a>
                        </div>
                        <!-- Divider -->
                        <hr class="sidebar-divider">
                    </div>
                </div>
            </li>
          {{-- Akhir Danus --}}
          
@elseif (auth()->user()->id_level == 2)        
                    <li class="nav-item @yield('kategori')">
                <a class="nav-link" href="{{ route('kategori.index') }}">
                    <i class="fas fa-fw fa-list-ul"></i>
                    <span>Kategori</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            {{-- Akhir Katagori --}}



            <!-- Nav Item - Angkatan -->
            <li class="nav-item @yield('angkatan')">
                <a class="nav-link" href="{{ route('angkatan.index') }}">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Angkatan</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            {{-- Akhir Angkatan --}}


            {{-- awal data --}}
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#data"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Data</span>
                </a>
                <div id="data" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-dark py-2 collapse-inner rounded">
                        <!-- Nav Item - Anggota -->
                        <div class="nav-item @yield('anggota')">
                            <a class="nav-link" href="{{ route('anggota.index') }}">
                                <i class="fas fa-fw fa-address-card"></i>
                                <span>Anggota</span></a>
                        </div>
                        <!-- Divider -->
                        <hr class="sidebar-divider">

                        <!-- Nav Item - Alumni -->
                        <div class="nav-item @yield('alumni')">
                            <a class="nav-link" href="{{ route('alumni.index') }}">
                                <i class="fas fa-fw fa-address-card"></i>
                                <span>Alumni</span></a>
                        </div>
                        <!-- Divider -->
                        <hr class="sidebar-divider">

                        <!-- Nav Item - Dosen -->
                        <div class="nav-item @yield('dosen')">
                            <a class="nav-link" href="{{ route('dosen.index') }}">
                                <i class="fas fa-fw fa-address-card"></i>
                                <span>Dosen</span></a>
                        </div>
                        <!-- Divider -->
                        <hr class="sidebar-divider">

                        <!-- Nav Item - Struktural -->
                        <div class="nav-item @yield('struktural')">
                            <a class="nav-link" href="{{ route('struktural.index') }}">
                                <i class="fas fa-fw fa-address-card"></i>
                                <span>Struktural</span></a>
                        </div>
                        <!-- Divider -->
                        <hr class="sidebar-divider">

                        <!-- Nav Item - Partnership -->
                        <div class="nav-item @yield('partnership')">
                            <a class="nav-link" href="{{ route('partnership.index') }}">
                                <i class="fas fa-fw fa-address-card"></i>
                                <span>Partnership</span></a>
                        </div>
                        <!-- Divider -->
                        <hr class="sidebar-divider">
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            {{-- akhir data --}}



            {{-- awal sertifikat --}}
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#sertifikat"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Sertifikat</span>
                </a>
                <div id="sertifikat" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-dark py-2 collapse-inner rounded">
                        <!-- Nav Item - Sertifikat -->
                        <div class="nav-item @yield('sertifikat')">
                            <a class="nav-link" href="{{ route('sertifikat.index') }}">
                                <i class="fas fa-fw fa-list-ul"></i>
                                <span>Seminar Akademik</span></a>
                        </div>

                        <!-- Divider -->
                        <hr class="sidebar-divider">
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            {{-- akhir sertifikat --}}



{{-- awal pendaftaran --}}
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#kelompokbelajar"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pendaftaran</span>
                </a>
                <div id="kelompokbelajar" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-dark py-2 collapse-inner rounded">
                        <!-- Nav Item - Kelompok Belajar -->
                        <div class="nav-item @yield('kelompokbelajar')">
                            <a class="nav-link" href="{{ route('kelompokbelajar.index') }}">
                                <i class="fas fa-fw fa-list-ul"></i>
                                <span>Kelompok Belajar</span></a>
                        </div>
                        <!-- Divider -->
                        <hr class="sidebar-divider">
                        <div class="nav-item @yield('bootcamp')">
                            <a class="nav-link" href="{{ route('btcmp.index') }}">
                                <i class="fas fa-fw fa-list-ul"></i>
                                <span>Bootcamp 2023</span></a>
                        </div>
                        
                        <hr class="sidebar-divider">
                        <div class="nav-item @yield('poster')">
                            <a class="nav-link" href="{{ route('wd.index') }}">
                                <i class="fas fa-fw fa-list-ul"></i>
                                <span>Lomba Poster 2023</span></a>
                        </div>
                        <hr class="sidebar-divider">
                        <div class="nav-item @yield('web')">
                            <a class="nav-link" href="{{ route('ml.index') }}">
                                <i class="fas fa-fw fa-list-ul"></i>
                                <span>Mobile Legend</span></a>
                        </div>
                        <hr class="sidebar-divider">
                        <div class="nav-item @yield('pc')">
                            <a class="nav-link" href="{{ route('sr.index') }}">
                                <i class="fas fa-fw fa-list-ul"></i>
                                <span>Lomba Rakit PC</span></a>
                        </div>
                        <hr class="sidebar-divider">
                        <div class="nav-item @yield('seminar')">
                            <a class="nav-link" href="{{ route('seminar.index') }}">
                                <i class="fas fa-fw fa-list-ul"></i>
                                <span>Seminar Hifest 2023</span></a>
                        </div>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
        {{-- akhir pendaftaran --}}


            <!-- Nav Item - Tutorial -->
            <li class="nav-item @yield('tutorial')">
                <a class="nav-link" href="{{ route('tutorial.index') }}">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Tutorial</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            {{-- Akhir Tutorial --}}



            <!-- Nav Item - Acara -->
            <li class="nav-item @yield('acara')">
                <a class="nav-link" href="{{ route('acara.index') }}">
                    <i class="fas fa-fw fa-calendar"></i>
                    <span>Acara</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            {{-- Akhir Acara --}}



            <!-- Nav Item - Jadwal Sharing -->
            <li class="nav-item @yield('jadwalSharing')">
                <a class="nav-link" href="{{ route('jadwal-sharing.index') }}">
                    <i class="fas fa-fw fa-clipboard"></i>
                    <span>Jadwal Sharing</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            {{-- Akhir Jadwal Sharing --}}



            <!-- Nav Item - Artikel -->
            <li class="nav-item @yield('artikel')">
                <a class="nav-link" href="{{ route('artikel.index') }}">
                    <i class="fas fa-fw fa-pen"></i>
                    <span>Artikel</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            {{-- Akhir Artike; --}}



            {{-- Setting --}}
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#setting"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Setting</span>
                </a>
                <div id="setting" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-dark py-2 collapse-inner rounded">
                        <!-- Nav Item - Footer -->
                        <div class="nav-item @yield('footer')">
                            <a class="nav-link" href="{{ route('footer.index') }}">
                                <i class="fas fa-fw fa-pen"></i>
                                <span>Footer</span></a>
                        </div>
                        <!-- Divider -->
                        <hr class="sidebar-divider">

                        {{-- Slider --}}
                        <div class="nav-item @yield('slider')">
                            <a class="nav-link" href="{{ route('slider.index') }}">
                                <i class="fas fa-fw fa-pen"></i>
                                <span>Slider</span></a>
                        </div>
                        <!-- Divider -->
                        <hr class="sidebar-divider">
                    </div>
                </div>
            </li>
              {{-- Akhir Setting --}}
            <!-- Divider -->
            
            {{-- Danus --}}
            <hr class="sidebar-divider">
            
                 <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#danus"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Danus</span>
                </a>
                <div id="danus" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-dark py-2 collapse-inner rounded">
                        <!-- Nav Item - Slider -->
                        <div class="nav-item @yield('slider')">
                            <a class="nav-link" href="{{ route('danus-slider.index') }}">
                                <i class="fas fa-fw fa-pen"></i>
                                <span>Slider</span></a>
                        </div>
                        <!-- Divider -->
                        <hr class="sidebar-divider">

                        {{-- Nav Item Merchandies --}}
                        <div class="nav-item @yield('merchandise')">
                            <a class="nav-link" href="{{ route('danus-merchandise.index') }}">
                                <i class="fas fa-fw fa-pen"></i>
                                <span>Merchandise</span></a>
                        </div>
                        <!-- Divider -->
                        <hr class="sidebar-divider">
                    </div>
                </div>
            </li>
          {{-- Akhir Danus --}}
          
@elseif (auth()->user()->id_level == 3)
         {{-- awal pendaftaran --}}
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#kelompokbelajar"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pendaftaran</span>
                </a>
                <div id="kelompokbelajar" class="collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-dark py-2 collapse-inner rounded">
                        <!-- Divider -->
                        <hr class="sidebar-divider">
                        <div class="nav-item @yield('bootcamp')">
                            <a class="nav-link" href="{{ route('btcmp.index') }}">
                                <i class="fas fa-fw fa-list-ul"></i>
                                <span>Bootcamp 2023</span></a>
                        </div>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
{{-- akhir pendaftaran --}} 
@endif
        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

