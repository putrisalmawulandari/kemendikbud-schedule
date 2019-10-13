@extends('layouts.template')
@section('title','Berita')

@section('content')
<div class="row">
    <div class="col-md-12">
        <a href="{{ route('news.create') }}" class="btn btn-success">Tambahkan Berita</a>
        <br><br>
        <div class="panel panel-default">
            <div class="panel-heading">Berita</div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-nowrap table-striped">
                        <thead>
                            <th>No</th>
                            <th>Konten</th>
                            <th class="text-center">Aksi</th>
                        </thead>
                        <tbody>
                            @foreach($data as $field)
                            <tr>
                                <td>{{ $loop->index +1 }}</td>
                                <td>{{ $field->content }}</td>
                                <td class="text-center">
                                    <a href="{{ route('news.edit',$field) }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ route('news.destroy',$field) }}" class="btn btn-danger btn-delete">Hapus</a>
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