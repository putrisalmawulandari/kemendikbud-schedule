@extends('layouts.template')
@section('title','Data Pegawai')

@section('content')
<div class="row">
    <div class="col-md-12">
        <a href="{{ route('employee.create') }}" class="btn btn-success">Tambahkan Data Pegawai</a>
        <br><br>
        <div class="panel panel-default">
            <div class="panel-heading">Pegawai</div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-nowrap table-striped">
                        <thead>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Nomor Ponsel</th>
                            <th>Jabatan</th>
                            <th>Alamat</th>
                            <th class="text-center">Aksi</th>
                        </thead>
                        <tbody>
                            @foreach($data as $field)
                            <tr>
                                <td>{{ $loop->index +1 }}</td>
                                <td>{{ $field->nip }}</td>
                                <td>{{ $field->name }}</td>
                                <td>{{ $field->phone }}</td>
                                <td>{{ $field->as }}</td>
                                <td>{{ $field->address }}</td>
                                <td class="text-center">
                                    <a href="{{ route('employee.edit',$field) }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ route('employee.destroy',$field) }}" class="btn btn-danger btn-delete">Hapus</a>
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