<?php 
function translate($hari)
{
    $new = null;
    switch ($hari) {
        case 'Mon':
            $new =  "Senin";
            break;
        case 'Tue':
            $new =  "Selasa";
            break;
        case 'Wed':
            $new =  "Rabu";
            break;
        case 'Thus':
            $new =  "Kamis";
            break;
        case 'Fri':
            $new =  "Jumat";
            break;
        case 'Sat':
            $new =  "Sabtu";
            break;
        case 'Sun':
            $new =  "Minggu";
            break;
        
        default:
            break;
    }

    return $new;
}
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

<style>
    .topbar-header {
        background-color: #2DC716;
    }   
    
    table.dataTable thead th, table.dataTable thead td{
        border-bottom: none !important;
    }

    table{
        /* font-size:10px; */
    }

    .p-0{
        padding : 0px !important;
    }

    .main-page--content{
        padding : 0px !important;
    }

    marquee p{
        /* font-size: 25px; */
        margin-top:20px;
    }

    .table thead tr th,td{
        padding: 0px;
        border: 1px solid #E8EBED;
        /* text-align: center; */
        align-items: center;
        align-content: center;
        justify-content: center;
    }   
    body{
        overflow: hidden;
    } 

    .table tbody tr td, .table tbody tr th, .table tfoot tr td, .table tfoot tr th, .table thead tr td, .table thead tr th{
        padding: 0px 0px 0px 10px;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button.current{
        background-color: #2DC716 !important;
        border: 1px solid #2DC716 !important;
    }

    .main-footer{
        height: 60px;
        position:absolute;
        bottom:0px;
        right: 0px;
        left: 0px;
        padding: 0px 0px 10px 0px !important;
    }

    .badge-danger{
        background: #ed4e4f;
    }

    .biru{
        background: #7ed7f7;
        color: white;
    }

    .abu{
        background: #939393;
        color: white;
    }

    tbody{

    }

    .table thead tr th, td{
        border: none;
    }

    .table thead tr th{
        border: 1px solid #F2F4F5;
    }

    h5{
        font-size: 20px;
        text-align: center;
        margin-top: 10px;
        font-weight:bold;
    }

    .panel{
        margin-bottom: 0px !important;
        padding-bottom: 0px !important;
    }

    #clock{
        font-size:40px;
        font-weight: bold;
    }

    .topbar-header{
        background: #51CDFB;
    }

    /* .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th{
        border-top: none;
    }

    .table-striped>tbody>tr:nth-of-type(odd)
    {
        background: #53D0FB;
        color: white;
    }

    .table-striped>tbody>tr:nth-of-type(even)
    {
        background: #46A4A0;
        color: white;
    }

    .logo-tb{
        z-index: 99;
        background: #E8EBED !important;
        width:100%;
        height: 100%;
    } */

    /* .scroll_animate{
        z-index: -99;
        animation: scrolling 10s infinite alternate;
        transform: translateY(500px);
    }

    @keyframes scrolling{
        0%{
            transform: translateY(500px);
        }

        100%{
            transform: translateY(-2000px);
        }
    } */
</style>
</head>

<body>

<div id="main">
	
    <header class="main-header">
    	<div class="topbar-header">
        	<div class="container-fluid">
            	<a class="logo" href=""><img src="{{ asset('logo.png') }}" alt="" width="70px">BADAN PENGHUBUNG DAERAH PROVINSI JAWA TIMUR</a>
                <h5 class="app-title pull-right">{{ translate(Carbon\Carbon::createFromFormat("Y-m-d",date('Y-m-d'))->format('D'))." , ".Carbon\Carbon::createFromFormat("Y-m-d",date('Y-m-d'))->format('d-M-Y') }} | <span id="clock"></span></h5>
            </div><!-- container -->
        </div><!-- topbar-header -->
    </header>
    
    <section class="page-content">
        
        <section class="main-page--content">
        	<div class="container-flui p-0">
            @yield('content')
            </div><!-- container -->
        </section><!-- main-page--content -->
        
    </section><!-- page-content -->

    <footer class="main-footer">
    	<div class="container-fluid">
            @yield('text')
        </div>
    </footer>
    
</div><!-- main -->
@include('alert')
<script>
	

    $('.table-nowrap').DataTable();

</script>
@yield('script')
<script type="text/javascript">
    function clock()
    {
        var date = new Date();
        var jam  = date.getHours();
        var menit= date.getMinutes();
        var hari = date.getDay();
        var new_hari;
        switch (hari) {
            case 1:
                new_hari =  "Senin";
                break;
            case 2:
                new_hari =  "Selasa";
                break;
            case 3:
                new_hari =  "Rabu";
                break;
            case 4:
                new_hari =  "Kamis";
                break;
            case 5:
                new_hari =  "Jumat";
                break;
            case 6:
                new_hari =  "Sabtu";
                break;
            case 7:
                new_hari =  "Minggu";
                break;
            
            default:
                break;
        }

        $('#clock').html(jam+" : "+menit);
    }
     
    function clock()
    {
        var date = new Date();
        var jam  = date.getHours();
        var menit= date.getMinutes();
        var hari = date.getDay();
        var new_hari;
        switch (hari) {
            case 1:
                new_hari =  "Senin";
                break;
            case 2:
                new_hari =  "Selasa";
                break;
            case 3:
                new_hari =  "Rabu";
                break;
            case 4:
                new_hari =  "Kamis";
                break;
            case 5:
                new_hari =  "Jumat";
                break;
            case 6:
                new_hari =  "Sabtu";
                break;
            case 7:
                new_hari =  "Minggu";
                break;
            
            default:
                break;
        }

        $('#clock').html(jam+" : "+menit);
    }
 
    setInterval(clock,1000);
</script>	

</body>
</html>
