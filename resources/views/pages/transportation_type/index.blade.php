@extends('layouts.template')
@section('title','Jenis Transportasi')

@section('content')
<div class="row">
    <div class="col-md-12">
        <a href="{{ route('transportation_type.create') }}" class="btn btn-success">Tambahkan Jenis Transportasi</a>
        <br><br>
        <div class="panel panel-default">
            <div class="panel-heading">Jenis Transportasi</div>
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
                                    <a href="{{ route('transportation_type.edit',$field) }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ route('transportation_type.destroy',$field) }}" class="btn btn-danger btn-delete">Hapus</a>
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