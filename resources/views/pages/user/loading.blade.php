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

<div class="row">
    <!-- <div class="col-md-4" style="display:gone">
    <div class="row">
        <div class="col-md-12">
            <br>
            <h5 class="text-center">Jadwal Piket</h5>
        </div>
    </div>
    <div class="row p-o">
        @if(count($jadwals['senin']['list']) > 0)
        <div class="col-md-4 p-0">
            <div class="panel panel-default">
                <div class="panel-body p-0">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <td rowspan="2">No</td>
                                <td>Hari</td>
                            </tr>
                            <tr>
                                <td>Senin</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jadwals['senin']['list'] as $value)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $value->employee->name }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endif
        @if(count($jadwals['selasa']['list']) > 0)
        <div class="col-md-4 p-0">
            <div class="panel panel-default">
                <div class="panel-body p-0">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <td rowspan="2">No</td>
                                <td>Hari</td>
                            </tr>
                            <tr>
                                <td>Selasa</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jadwals['selasa']['list'] as $value)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $value->employee->name }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endif
        @if(count($jadwals['rabu']['list']) > 0)
        <div class="col-md-4 p-0">
            <div class="panel panel-default">
                <div class="panel-body p-0">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <td rowspan="2">No</td>
                                <td>Hari</td>
                            </tr>
                            <tr>
                                <td>Rabu</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jadwals['rabu']['list'] as $value)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $value->employee->name }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endif
        @if(count($jadwals['kamis']['list']) > 0)
        <div class="col-md-4 p-0">
            <div class="panel panel-default">
                <div class="panel-body p-0">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <td rowspan="2">No</td>
                                <td>Hari</td>
                            </tr>
                            <tr>
                                <td>Kamis</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jadwals['kamis']['list'] as $value)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $value->employee->name }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endif
        @if(count($jadwals['jumat']['list']) > 0)
        <div class="col-md-4 p-0">
            <div class="panel panel-default">
                <div class="panel-body p-0">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <td rowspan="2">No</td>
                                <td>Hari</td>
                            </tr>
                            <tr>
                                <td>jumat</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jadwals['jumat']['list'] as $value)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $value->employee->name }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endif
        @if(count($jadwals['sabtu']['list']) > 0)
        <div class="col-md-4 p-0">
            <div class="panel panel-default">
                <div class="panel-body p-0">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <td rowspan="2">No</td>
                                <td>Hari</td>
                            </tr>
                            <tr>
                                <td>sabtu</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jadwals['sabtu']['list'] as $value)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $value->employee->name }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endif
        @if(count($jadwals['minggu']['list']) > 0)
        <div class="col-md-4 p-0">
            <div class="panel panel-default">
                <div class="panel-body p-0">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <td rowspan="2">No</td>
                                <td>Hari</td>
                            </tr>
                            <tr>
                                <td>minggu</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jadwals['minggu']['list'] as $value)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $value->employee->name }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endif
    </div>
    </div> -->
    <div class="col-md-12">
        <!-- <div class="row">
            <div class="col-md-12">
                <br>
                <h5 class="text-center">Penggunaan Kendaraan Dinas</h5>
            </div>
        </div> -->
        <div class="panel panel-default">
            <div class="panel-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="abu">
                            <tr>
                                <td colspan="12">
                                    <h5>INFORMASI PENGGUNAAN KENDARAAN DINAS</h5>
                                </td>
                            </tr>
                        </thead>
                        <thead class="biru">
                            <tr>
                                <th rowspan="2" class="text-center">No</th>
                                <th rowspan="2" class="text-center">NAMA PEJABAT</th>
                                <th rowspan="2" class="text-center">INSTANSI</th>
                                <th rowspan="2" class="text-center">HARI / TANGGAL</th>
                                <th colspan="2" class="text-center">PEMBERANGKATAN</th>
                                <th colspan="2" class="text-center">KENDARAAN</th>
                                <th colspan="2" class="text-center">PETUGAS</th>
                                <!-- <th rowspan="2">Status</th> -->
                            </tr>

                            <tr>
                                <th class="text-center">TRANSPORTASI</th>
                                <th class="text-center">KEBERANGKATAN - KEDATANGAN</th>
                                <th class="text-center">JENIS</th>
                                <th class="text-center">NO. POLISI</th>
                                <th class="text-center">PENGEMUDI</th>
                                <th class="text-center">PENDAMPING</th>
                            </tr>
                        </thead>
                        <tbody class="scroll_animate">
                            @php
                            $no = 1;
                            @endphp
                            @foreach($routines as $routine)

                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $routine->officer->name }}</td>
                                <td>{{ $routine->officer->agency->name }}</td>
                                <td><div class="badge badge-danger">{{ translate(Carbon\Carbon::createFromFormat("Y-m-d",$routine->date)->format('D'))." , ".Carbon\Carbon::createFromFormat("Y-m-d",$routine->date)->format('d-m-Y') }}</div></td>
                                <td>
                                    <div class="logo_tb">
                                    <img src="{{ asset($routine->transportation->logo) }}"
                                        alt="Logo" width="70"></td>
                                    </div>
                                <td>
                                <p>{{ $routine->departure }} <span class="badge badge-danger">{{ substr($routine->departure_time,0,5) }}</span> - {{ $routine->arrive }}</p>
                                </td>
                                <td>
                                    {{ $routine->transportationgenerate->transportation->name }}
                                    <!-- <img src="{{ asset('app/'.$routine->transportationgenerate->transportation->logo) }}"
                                        alt="Logo" width="120"> -->
                                </td>
                                <td>{{ $routine->transportationgenerate->nopol }}</td>
                                <td>{{ $routine->employee->name }}</td>
                                <td>{{ $routine->companion->name }}</td>
                                <!-- <td><div class="badge badge-primary">Aktif</div></td> -->
                            </tr>
                            @php
                            $no++;
                            @endphp
                            @endforeach

                            @foreach($schedules as $schedule)

                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $schedule->officer->name }}</td>
                                <td>{{ $schedule->officer->agency->name }}</td>
                                <td><div class="badge badge-danger">{{ translate(Carbon\Carbon::createFromFormat("Y-m-d",$schedule->date)->format('D'))." , ".Carbon\Carbon::createFromFormat("Y-m-d",$schedule->date)->format('d-m-Y') }}</div></td>
                                <td>
                                    <div class="logo_tb">
                                    <img src="{{ asset($schedule->transportation->logo) }}"
                                        alt="Logo" width="70"></td>
                                    </div>
                                <td>
                                <p>{{ $schedule->departure }} <span class="badge badge-danger">{{ substr($schedule->departure_time,0,5) }}</span> - {{ $schedule->arrive }}</p>
                                </td>
                                <td>
                                    {{ $schedule->transportationgenerate->transportation->name }}
                                    <!-- <img src="{{ asset('app/'.$schedule->transportationgenerate->transportation->logo) }}"
                                        alt="Logo" width="120"> -->
                                </td>
                                <td>{{ $schedule->transportationgenerate->nopol }}</td>
                                <td>{{ $schedule->employee->name }}</td>
                                <td>{{ $schedule->companion->name }}</td>
                                <!-- <td><div class="badge badge-primary">Aktif</div></td> -->
                            </tr>
                            @php
                            $no++;
                            @endphp
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>