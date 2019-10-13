@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="row">
    
                	<div class="col-xs-4">
                    	<div class="panel panel-button">
                        	<a href="#!">
                        	<div class="panel-body" style="height:100px">
                            	<span class="wrapper text-left icon ti-home"></span>
                                <div class="wrapper">
                                	<span class="text-muted">Instansi</span>
                                	<h5>Jumlah Instansi</h5>
                                </div>
                                <div class="wrapper text-right">
                                	<h2 class="counter">{{ App\Agency::count() }}</h2>
                                </div>
                            </div><!-- panel-body -->
                            </a>
                        </div><!-- panel -->
                    </div><!-- col -->
                    <div class="col-xs-4">
                    	<div class="panel panel-button">
                        	<a href="#!">
                        	<div class="panel-body" style="height:100px">
                            	<span class="wrapper icon ti-user"></span>
                                <div class="wrapper">
                                	<span class="text-muted">Pejabat</span>
                                	<h5>Jumlah Pejabat</h5>
                                </div><!-- panel-button--group -->
                                <div class="wrapper text-right">
                                	<h2 class="counter">{{ App\Officer::count() }}</h2>
                                </div>
                            </div><!-- panel-body -->
                            </a>
                        </div><!-- panel -->
                    </div><!-- col -->
                    <div class="col-xs-4">
                    	<div class="panel panel-button">
                        	<a href="#!">
                        	<div class="panel-body" style="height:100px">
                            	<span class="wrapper icon ti-user"></span>
                                <div class="wrapper">
                                	<span class="text-muted">Pegawai</span>
                                	<h5>Jumlah Pegawai</h5>
                                </div><!-- panel-button--group -->
                                <div class="wrapper text-right">
                                	<h2 class="counter">{{ App\Employee::count() }}</h2>
                                </div>
                            </div><!-- panel-body -->
                            </a>
                        </div><!-- panel -->
                    </div><!-- col -->
                    <div class="col-xs-4">
                    	<div class="panel panel-button">
                        	<a href="#!">
                        	<div class="panel-body" style="height:100px">
                            	<span class="wrapper icon ti-image"></span>
                                <div class="wrapper">
                                	<span class="text-muted">Galeri</span>
                                	<h5>Jumlah Galeri</h5>
                                </div><!-- panel-button--group -->
                                <div class="wrapper text-right">
                                	<h2 class="counter">{{ App\Galery::count() }}</h2>
                                </div>
                            </div><!-- panel-body -->
                            </a>
                        </div><!-- panel -->
                    </div><!-- col -->
                    <div class="col-xs-4">
                    	<div class="panel panel-button">
                        	<a href="#!">
                        	<div class="panel-body" style="height:100px">
                            	<span class="wrapper icon ti-pencil-alt"></span>
                                <div class="wrapper">
                                	<span class="text-muted">Berita</span>
                                	<h5>Jumlah Berita</h5>
                                </div><!-- panel-button--group -->
                                <div class="wrapper text-right">
                                	<h2 class="counter">{{ App\News::count() }}</h2>
                                </div>
                            </div><!-- panel-body -->
                            </a>
                        </div><!-- panel -->
                    </div><!-- col -->
                    <div class="col-xs-4">
                    	<div class="panel panel-button">
                        	<a href="#!">
                        	<div class="panel-body" style="height:100px">
                            	<span class="wrapper icon ti-layers"></span>
                                <div class="wrapper">
                                	<span class="text-muted">Jenis Kendaraan</span>
                                	<h5>Jumlah Jenis Kendaraan</h5>
                                </div><!-- panel-button--group -->
                                <div class="wrapper text-right">
                                	<h2 class="counter">{{ App\TransportationType::count() }}</h2>
                                </div>
                            </div><!-- panel-body -->
                            </a>
                        </div><!-- panel -->
                    </div><!-- col -->
                    <div class="col-xs-4">
                    	<div class="panel panel-button">
                        	<a href="#!">
                        	<div class="panel-body" style="height:100px">
                            	<span class="wrapper icon ti-car"></span>
                                <div class="wrapper">
                                	<span class="text-muted">Data Kendaraan</span>
                                	<h5>Jumlah Data Kendaraan</h5>
                                </div><!-- panel-button--group -->
                                <div class="wrapper text-right">
                                	<h2 class="counter">{{ App\Transportation::count() }}</h2>
                                </div>
                            </div><!-- panel-body -->
                            </a>
                        </div><!-- panel -->
                    </div><!-- col -->
                    <div class="col-xs-4">
                    	<div class="panel panel-button">
                        	<a href="#!">
                        	<div class="panel-body" style="height:100px">
                            	<span class="wrapper icon ti-flag-alt-2"></span>
                                <div class="wrapper">
                                	<span class="text-muted">No Polisi Kendaraan</span>
                                	<h5>Kendaraan yang Dilengkapi No Polisi</h5>
                                </div><!-- panel-button--group -->
                                <div class="wrapper text-right">
                                	<h2 class="counter">18</h2>
                                </div>
                            </div><!-- panel-body -->
                            </a>
                        </div><!-- panel -->
                    </div><!-- col -->
                    <div class="col-xs-4">
                    	<div class="panel panel-button">
                        	<a href="#!">
                        	<div class="panel-body" style="height:100px">
                            	<span class="wrapper icon ti-calendar"></span>
                                <div class="wrapper">
                                	<span class="text-muted">Jadwal</span>
                                	<h5>Jumlah Jadwal</h5>
                                </div><!-- panel-button--group -->
                                <div class="wrapper text-right">
                                	<h2 class="counter">{{ App\Schedule::count() }}</h2>
                                </div>
                            </div><!-- panel-body -->
                            </a>
                        </div><!-- panel -->
                    </div><!-- col -->
                </div><!-- row -->
    </div>
</div>
@endsection
