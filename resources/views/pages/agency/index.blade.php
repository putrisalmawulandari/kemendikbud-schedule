@extends('layouts.template')
@section('title','Instansi')

@section('content')
<div class="row">
    <div class="col-md-12">
        <a href="{{ route('agency.create') }}" class="btn btn-success">Tambahkan Data Instansi</a>
        <br><br>
        <div class="panel panel-default">
            <div class="panel-heading">Instansi</div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-nowrap table-striped">
                        <thead>
                            <th>No</th>
                            <th>Nama</th>
                            <th class="text-center">Aksi</th>
                        </thead>
                        <tbody>
                            @foreach($data as $field)
                            <tr>
                                <td>{{ $loop->index +1 }}</td>
                                <td>{{ $field->name }}</td>
                                <td class="text-center">
                                    <a href="{{ route('agency.edit',$field) }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ route('agency.destroy',$field) }}" class="btn btn-danger btn-delete">Hapus</a>
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