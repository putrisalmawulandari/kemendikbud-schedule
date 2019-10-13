@extends('layouts.template')
@section('title','Kendaraan')

@section('content')
<div class="row">
    <div class="col-md-12">
        <a href="{{ route('transportation.create') }}" class="btn btn-success">Tambahkan Data Kendaraan</a>
        <br><br>
        <div class="panel panel-default">
            <div class="panel-heading">Data Kendaraan</div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-nowrap table-striped table-hover">
                        <thead>
                            <th>No</th>
                            <th>Nama</th>
                            <th class="text-center">Logo</th>
                            <th>Deskripsi</th>
                            <th class="text-center">Aksi</th>
                        </thead>
                        <tbody>
                            @foreach($data as $field)
                            <tr>
                                <td>{{ $loop->index +1 }}</td>
                                <td>{{ $field->name }}</td>
                                <td class="text-center">
                                    <img src="{{ asset('app/'.$field->logo) }}" alt="Logo" width="150">
                                    <br><br>
                                </td>
                                <td>{{ $field->description }}</td>
                                <td class="text-center">
                                    <a href="{{ route('transportation.edit',$field) }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ route('transportation.destroy',$field) }}" class="btn btn-danger btn-delete">Hapus</a>
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