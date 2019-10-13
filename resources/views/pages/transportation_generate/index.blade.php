@extends('layouts.template')
@section('title','No Polisi Kendaraan')

@section('content')
<div class="row">
    <div class="col-md-12">
        <a href="{{ route('transportation_generate.create') }}" class="btn btn-success">Tambahkan No Polisi Kendaraan</a>
        <br><br>
        <div class="panel panel-default">
            <div class="panel-heading">No Polisi Kendaraan</div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-nowrap table-striped">
                        <thead>
                            <th>No</th>
                            <th>Kendaraan</th>
                            <th>Nomor Polisi</th>
                            <th class="text-center">Aksi</th>
                        </thead>
                        <tbody>
                            @foreach($data as $field)
                            <tr>
                                <td>{{ $loop->index +1 }}</td>
                                <td>{{ $field->transportation->name }}</td>
                                <td>{{ $field->nopol }}</td>
                                <td class="text-center">
                                    <a href="{{ route('transportation_generate.edit',$field) }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ route('transportation_generate.destroy',$field) }}" class="btn btn-danger btn-delete">Hapus</a>
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