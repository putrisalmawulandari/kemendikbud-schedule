@extends('layouts.template')
@section('title','Pejabat')

@section('content')
<div class="row">
    <div class="col-md-12">
        <a href="{{ route('officer.create') }}" class="btn btn-success">Tambahkan Data Pejabat</a>
        <br><br>
        <div class="panel panel-default">
            <div class="panel-heading">Data Pejabat</div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-nowrap table-striped">
                        <thead>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Nomor Ponsel</th>
                            <th>Alamat</th>
                            <th>Instansi</th>
                            <th class="text-center">Aksi</th>
                        </thead>
                        <tbody>
                            @foreach($data as $field)
                            <tr>
                                <td>{{ $loop->index +1 }}</td>
                                <td>{{ $field->name }}</td>
                                <td>{{ $field->phone }}</td>
                                <td>{{ $field->address }}</td>
                                <td>{{ $field->agency->name }}</td>
                                <td class="text-center">
                                    <a href="{{ route('officer.edit',$field) }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ route('officer.destroy',$field) }}" class="btn btn-danger btn-delete">Hapus</a>
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