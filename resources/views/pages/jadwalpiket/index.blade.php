@extends('layouts.template')
@section('title',' Piket')

@section('content')
<div class="row">
    <div class="col-md-12">
        <a href="{{ route('jadwalpiket.create') }}" class="btn btn-success">Tambahkan Data Piket</a>
        <a href="{{ route('jadwalpiket.rolling') }}" class="btn btn-warning">Rolling</a>
        <br><br>
        <div class="panel panel-default">
            <div class="panel-heading">Piket</div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-nowrap table-striped">
                        <thead>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Hari Piket</th>
                            <th class="text-center">Aksi</th>
                        </thead>
                        <tbody>
                            @foreach($data as $field)
                            <tr>
                                <td>{{ $loop->index +1 }}</td>
                                <td>{{ $field->employee->name }}</td>
                                <td>{{ $field->day }}</td>
                                <td class="text-center">
                                    <a href="{{ route('jadwalpiket.destroy',$field) }}" class="btn btn-danger btn-delete">Hapus</a>
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