@extends('layouts.template')
@section('title','Jadwal')

@section('content')
<div class="row">
    <div class="col-md-12">
        <a href="{{ route('schedule.create') }}" class="btn btn-success">Tambahkan Data Jadwal</a>
        <br><br>
        <div class="panel panel-default">
            <div class="panel-heading">Data Jadwal</div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-nowrap table-striped">
                        <thead>
                            <th>No</th>
                            <th>Pejabat</th>
                            <th>Tanggal</th>
                            <th>Departure</th>
                            <th>Departure Time</th>
                            <th>Kedatangan</th>
                            <th>Kendaraan</th>
                            <th>No Polisi</th>
                            <th>Supir</th>
                            <th>Pendamping</th>
                            <th>Routinitas</th>
                            <th>Status</th>
                            <th class="text-center">Aksi</th>
                        </thead>
                        <tbody>
                            @foreach($data as $field)
                            <tr>
                                <td>{{ $loop->index +1 }}</td>
                                <td>{{ $field->officer->name }}</td>
                                <td>{{ $field->date }}</td>
                                <td>{{ $field->departure }}</td>
                                <td>{{ $field->departure_time }}</td>
                                <td>{{ $field->arrive }}</td>
                                <td>{{ $field->transportationgenerate->transportation->name }}</td>
                                <td>{{ $field->transportationgenerate->nopol }}</td>
                                <td>{{ $field->employee->name }}</td>
                                <td>{{ $field->companion->name }}</td>
                                <td>{{ ($field->routine == "1") ? 'Ya' : 'Tidak' }}</td>
                                <td>{{ $field->status }}</td>
                                <td class="text-center">
                                    <a href="{{ route('schedule.edit',$field) }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ route('schedule.destroy',$field) }}" class="btn btn-danger btn-delete">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop