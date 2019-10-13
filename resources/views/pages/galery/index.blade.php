@extends('layouts.template')
@section('title','Galeri')

@section('content')
<div class="row">
    <div class="col-md-12">
        <a href="{{ route('galery.create') }}" class="btn btn-success">Tambahkan Foto</a>
        <br><br>
        <div class="panel panel-default">
            <div class="panel-heading">Foto</div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-nowrap table-striped">
                        <thead>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th class="text-center">Aksi</th>
                        </thead>
                        <tbody>
                            @foreach($data as $field)
                            <tr>
                                <td>{{ $loop->index +1 }}</td>
                                <td>
                                    <img src="{{ asset('app/'.$field->name) }}" alt="Gambar" width="320">
                                </td>
                                <td>{{ $field->description }}</td>
                                <td class="text-center">
                                    <a href="{{ route('galery.edit',$field) }}" class="btn btn-info">Ganti Foto</a>
                                    <a href="{{ route('galery.destroy',$field) }}" class="btn btn-danger btn-delete">Hapus</a>
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