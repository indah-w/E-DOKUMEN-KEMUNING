@extends('adminlte.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="logo-area">
                <a href="#"><img src="{{asset('/dashboard')}}/img/logo.png" height="60%" width="30%" alt="" /></a>
            </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <div class="header-top-menu">
                <ul class="nav navbar-nav notika-top-nav">
                    <li class="nav-item dropdown">
                        <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-search"></i></span></a>
                        <div role="menu" class="dropdown-menu search-dd animated flipInX">
                            <div class="search-input">
                                <i class="notika-icon notika-left-arrow"></i>
                                <input type="text" />
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- End Header Top Area -->
<!-- Mobile Menu start -->
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul class="mobile-menu-nav">
                            <li><a data-toggle="collapse" data-target="#Charts" href="#">Home</a>
                            </li>
                            <li><a data-toggle="collapse" data-target="#demoevent" href="{{url('sites/datamember')}}">Kelola Data</a>
                                <ul id="demoevent" class="collapse dropdown-header-top">
                                    <li><a href="{{url('sites/datamember')}}">Data Member</a></li>
                                    <li><a href="view-email.html">Data Report</a></li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#democrou" href="#">Data Report</a>
                                <ul id="democrou" class="collapse dropdown-header-top">
                                    <li><a href="animations.html">Buat Laporan</a></li>
                                    <li><a href="google-map.html">Daftar Laporan</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu end -->
<!-- Main Menu area start-->
<div class="main-menu-area mg-tb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                    <li class="active"><a data-toggle="tab" href="#Home"><i class="notika-icon notika-house"></i> Home</a>
                    </li>
                    <li><a data-toggle="tab" href="#mailbox"><i class="notika-icon notika-edit"></i> Data Anggota</a>
                    </li>
                    <li><a data-toggle="tab" href="#Interface"><i class="notika-icon notika-edit"></i>  Data Laporan</a>
                    </li>
                    <li><a data-toggle="tab" href="#Charts"><i class="notika-icon notika-edit"></i> Data Kegiatan</a>
                    </li>
                    <li><a data-toggle="tab" href="#Tables"><i class="notika-icon notika-edit"></i> Data E-Dokumen</a>
                    </li>
                </ul>
                <div class="tab-content custom-menu-content">
                    <div id="Home" class="tab-pane in active notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            {{-- isi data keseluruhan dashboard --}}
                        </ul>
                    </div>

                    {{-- Data Anggota --}}
                    <div id="mailbox" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="/buatanggota">Buat Data Anggota</a>
                            </li>
                            <li><a href="view-email.html">Daftar Anggota</a>
                            </li>
                        </ul>
                    </div>

                    {{-- Data Laporan --}}
                    <div id="Interface" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="animations.html">Buat Laporan</a>
                            </li>
                            <li><a href="google-map.html">Daftar Laporan</a>
                            </li>
                        </ul>
                    </div>

                    {{-- Data Kegiatan --}}
                    <div id="Charts" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="flot-charts.html">Buat Data Kegiatan</a>
                            </li>
                            <li><a href="bar-charts.html">Daftar Kegiatan</a>
                            </li>
                        </ul>
                    </div>

                    {{-- E-Dokumen --}}
                    <div id="Tables" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="normal-table.html">Buat Data E-Dokumen</a>
                            </li>
                            <li><a href="data-table.html">Daftar Data E-Dokumen</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection