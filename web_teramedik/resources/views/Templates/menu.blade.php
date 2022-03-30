@yield('menu')
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ url('assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <a href="{{ url('dashboard') }}" class="logo-text" style="font-size: 18pt;"><b class="text-dark">T</b><span><b>MEDIK</b></span></a>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ url('dashboard') }}">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>

        <li>
            <a href="{{ url('rumahsakit') }}">
                <div class="parent-icon"><i class='bx bx-key'></i>
                </div>
                <div class="menu-title">Data Rumah Sakit</div>
            </a>
        </li>

        <li>
            <a href="{{ url('pasien') }}">
                <div class="parent-icon"><i class='bx bx-archive'></i>
                </div>
                <div class="menu-title">Data Pasien</div>
            </a>
        </li>



    </ul>
    <!--end navigation-->
</div>
<!--end sidebar wrapper -->