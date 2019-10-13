<?php 
    $route = Route::currentRouteName();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>@yield('title')</title>

<link rel="stylesheet" type="text/css" href="{{ asset('dist/css/themify-icons.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('dist/css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('dist/css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('dist/css/main.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('dist/css/toastr.min.css') }}">
<script src="{{ asset('dist/js/jquery-2.1.1.min.js') }}"></script>
<script src="{{ asset('dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('dist/js/toastr.min.js') }}"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('dist/css/jquery.dataTables.min.css') }}">
<script src="{{ asset('dist/js/jquery.dataTables.min.js') }}"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>

<style>
    .topbar-header {
        background-color: #2DC716;
    }   

    td{
        padding-left: 20px !important;
    }

    table.dataTable thead th, table.dataTable thead td{
        border-bottom: none !important;
    }
    .topbar-header{
        background: #51CDFB;
    }

    .menu li.active:after{
        background-color:#51CDFB;
    }

    .panel-button .panel-body .icon{
        color:#51cdfb;
    }

    .btn-success, .dropdown-toggle.btn-success{
        background-color:#51CDFB;
    }

    .topbar-menu .dropdown-heading{
        background-color:#51CDFB;
        
    }

    /* /* .main-footer{
        height: 1px;
        margin-top: 20px;
    } */

    footer{
        margin-top: 20px;
        height: 10px;
    } */
</style>
</head>

<body>

<div id="main">
	
    <header class="main-header">
    	<div class="topbar-header">
        	<div class="container-fluid">
            	<a class="logo" href="{{ route('home') }}">Aplikasi Perhubungan</a>
                <h5 class="app-title">Badan Penghubung Daerah Pemerintah Provinsi Jawa Timur</h5>
                <div class="topbar-right">
                	<ul class="topbar-menu">
                    	<li>
                        	<div class="user-menu">
                                <a href="#!" data-toggle="dropdown">
                                    <span class="user-avatar">
                                        <div class="thumb">
                                            <img src="{{ asset('dist/images/avatar_profile.png') }}">
                                        </div>
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    @if(Auth::guard('web')->check())
                                    <li>
                                        <div class="dropdown-heading">
                                            <h5 class="user-name">{{ Auth::user()->name }}</h5>
                                            <div class="user-type">Selamat Datang Admin</div>
                                        </div>
                                    </li>
                                    @endif
                                    
                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul><!-- topbar-user -->
                </div><!-- topbar-right -->
            </div><!-- container -->
        </div><!-- topbar-header -->
        <nav class="header-nav">
        	<div class="container-fluid">
            	<div class="header-menu">
                	<ul class="menu">
                        <li class="{{ $route == 'home' ? 'active' : '' }}"><a href="{{ route('home') }}"><span class="icon icon-layers"></span>Dashboard</a></li>
                        <li class="{{ $route == 'agency.index' ? 'active' : '' }}"><a href="{{ route('agency.index') }}"><span class="icon icon-layers"></span>Instansi</a></li>
                        <li class="{{ $route == 'officer.index' ? 'active' : '' }}"><a href="{{ route('officer.index') }}"><span class="icon icon-layers"></span>Pejabat</a></li>
                        <li class="{{ $route == 'employee.index' ? 'active' : '' }}"><a href="{{ route('employee.index') }}"><span class="icon icon-layers"></span>Pegawai</a></li>
                        <li class="{{ $route == 'galery.index' ? 'active' : '' }}"><a href="{{ route('galery.index') }}"><span class="icon icon-layers"></span>Galeri</a></li>
                        <li class="{{ $route == 'news.index' ? 'active' : '' }}"><a href="{{ route('news.index') }}"><span class="icon icon-layers"></span>Berita</a></li>
                        <li class="{{ $route == 'transportation_type.index' ? 'active' : '' }}"><a href="{{ route('transportation_type.index') }}"><span class="icon icon-layers"></span>Jenis Transportasi</a></li>
                        <li class="{{ $route == 'transportation.index' ? 'active' : '' }}"><a href="{{ route('transportation.index') }}"><span class="icon icon-layers"></span>Data Kendaraan</a></li>
                        <li class="{{ $route == 'transportation_generate.index' ? 'active' : '' }}"><a href="{{ route('transportation_generate.index') }}"><span class="icon icon-layers"></span>No Polisi Kendaraan</a></li>
                        <li class="{{ $route == 'schedule.index' ? 'active' : '' }}"><a href="{{ route('schedule.index') }}"><span class="icon icon-layers"></span>Jadwal</a></li>
                        <li class="{{ $route == 'jadwalpiket.index' ? 'active' : '' }}"><a href="{{ route('jadwalpiket.index') }}"><span class="icon icon-layers"></span>Jadwal Piket</a></li>
                        <li class="{{ $route == 'jadwalpiket.index' ? 'active' : '' }}"><a href="{{ route('schedule.report') }}"><span class="icon icon-layers"></span>Report</a></li>

                        
                      
                    </ul>
                </div><!-- header-menu -->
            </div><!-- container -->
        </nav><!-- header-nav -->
    </header>
    
    <section class="page-content">
    
    	<section class="bg-title">
        	<div class="container-fluid">
            	<h5 class="page-title">@yield('title')</h5>
                
            </div><!-- container -->
        </section><!-- bg-title -->
        
        <section class="main-page--content">
        	<div class="container-fluid">
            @yield('content')
            </div><!-- container -->
        </section><!-- main-page--content -->
        
    </section><!-- page-content -->
    
    <footer class="main-footer">
    	<div class="container-fluid">
        	<span class="copyright">
        		© 2019 Aplikasi Perhubungan
            </span>
            <ul class="footer-nav">
            	<li><a href="#!">Contact Us</a></li>
                <li><a href="#!">Terms</a></li>
                <li><a href="#!">Privacy</a></li>
            </ul>
        </div>
    </footer>
    
</div><!-- main -->
@include('alert')
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<form id="delete-form" action="" method="POST" style="display: none;">
    @csrf @method('delete')
</form>

<script>
	
	
    $('table').on('click','.btn-delete', function(e){
        e.preventDefault();
        var href = $(this).attr('href');
        
        var con = confirm("Yakin Hapus");
        if(con)
        {
            $('#delete-form').attr('action',href).submit();
        }
    });

    $('.table-nowrap').DataTable();

</script>

</body>
</html>
