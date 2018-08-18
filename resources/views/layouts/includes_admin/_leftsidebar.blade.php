<div class="scrollbar-wrapper">
    <div>
        <button type="button" class="button-menu-mobile btn-mobile-view visible-xs visible-sm">
            <i class="mdi mdi-close"></i>
        </button>
        <div class="user-details">
            <div class="pull-left">
                <img src="{{ asset('assets_admin/images/users/avatar-1.png') }}" alt="" class="thumb-md img-circle">
            </div>
            <div class="user-info">
                <a href="#">{{ Auth::user()->name }}</a>
                <p class="text-muted m-0">Administrator</p>
            </div>
        </div>
        <ul class="metisMenu nav" id="side-menu">
            <li>
                <a href="{{ URL::to('admin') }}"><i class="fa fa-home"></i> Dashboard </a>
            </li>
            <li>
                <a href="javascript: void(0);" aria-expanded="true"><i class="fa fa-user"></i> Dosen <span class="fa arrow"></span></a>
                <ul class="nav-second-level nav" aria-expanded="true">
                    <li>
                        <a href="{{ URL::to('dosen/create') }}">Create Dosen</a>
                    </li>
                    <li>
                        <a href="{{ URL::to('dosen') }}">Current Dosen</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript: void(0);" aria-expanded="true"><i class="fa fa-users"></i> Mahasiswa <span class="fa arrow"></span></a>
                <ul class="nav-second-level nav" aria-expanded="true">
                    <li>
                        <a href="{{ URL::to('mahasiswa/create') }}">Create Mahasiswa</a>
                    </li>
                    <li>
                        <a href="{{ URL::to('mahasiswa') }}">Current Mahasiswa</a>
                    </li>
                </ul>
            </li>            
            <li>
                <a href="javascript: void(0);" aria-expanded="true"><i class="fa fa-sticky-note-o"></i> Matakuliah <span class="fa arrow"></span></a>
                <ul class="nav-second-level nav" aria-expanded="true">
                    <li>
                        <a href="{{ URL::to('matakuliah/create') }}">Create Matakuliah</a>
                    </li>
                    <li>
                        <a href="{{ URL::to('matakuliah') }}">Current Matakuliah</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript: void(0);" aria-expanded="true"><i class="fa fa-calendar"></i> Periode <span class="fa arrow"></span></a>
                <ul class="nav-second-level nav" aria-expanded="true">
                    <li>
                        <a href="{{ URL::to('periode/create') }}">Create Periode</a>
                    </li>
                    <li>
                        <a href="{{ URL::to('periode') }}">Current Periode</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript: void(0);" aria-expanded="true"><i class="fa fa-graduation-cap"></i> Tugas Akhir <span class="fa arrow"></span></a>
                <ul class="nav-second-level nav" aria-expanded="true">
                    <li>
                        <a href="{{ URL::to('tugas_akhir/create') }}">Create Tugas Akhir</a>
                    </li>
                    <li>
                        <a href="{{ URL::to('tugas_akhir') }}">Current Tugas Akhir</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript: void(0);" aria-expanded="true"><i class="fa fa-book"></i> Kerja Praktek <span class="fa arrow"></span></a>
                <ul class="nav-second-level nav" aria-expanded="true">
                    <li>
                        <a href="{{ URL::to('kerja_praktek/create') }}">Create Kerja Praktek</a>
                    </li>
                    <li>
                        <a href="{{ URL::to('kerja_praktek') }}">Current Kerja Praktek</a>
                    </li>
                </ul>
            </li>            
            <li>
                <a href="javascript: void(0);" aria-expanded="true"><i class="fa fa-list"></i> Jadwal Dosen <span class="fa arrow"></span></a>
                <ul class="nav-second-level nav" aria-expanded="true">
                    <li>
                        <a href="{{ URL::to('jadwal_dosen/create') }}">Create Jadwal Dosen</a>
                    </li>
                    <li>
                        <a href="{{ URL::to('jadwal_dosen') }}">Current Jadwal Dosen</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript: void(0);" aria-expanded="true"><i class="fa fa-bars"></i> Jadwal Mahasiswa <span class="fa arrow"></span></a>
                <ul class="nav-second-level nav" aria-expanded="true">
                    <li>
                        <a href="{{ URL::to('jadwal_mahasiswa/create') }}">Create Jadwal Mahasiswa</a>
                    </li>
                    <li>
                        <a href="{{ URL::to('jadwal_mahasiswa') }}">Current Jadwal Mahasiswa</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>