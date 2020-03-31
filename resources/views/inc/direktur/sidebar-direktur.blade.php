<!-- LEFT SIDEBAR -->
<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li><a href="{{ route('direktur.dashboard') }}" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                <li>
                    <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-chart-bars"></i> <span>Kunjungan Pasien</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="subPages" class="collapse ">
                        <ul class="nav">
                            <li><a href="{{ route('direktur.rekapharian') }}" class="">Rekap Harian</a></li>
                            <li><a href="page-profile" class="">Rekap Bulanan</a></li>
                            <li><a href="page-login" class="">Rekap Tahunan</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="{{ route('direktur.kamar') }}" class=""><i class="lnr lnr-apartment"></i> <span>Kamar</span></a></li>
            </ul>
        </nav>
    </div>
</div>
<!-- END LEFT SIDEBAR -->