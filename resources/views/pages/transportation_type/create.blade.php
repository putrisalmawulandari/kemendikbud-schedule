@extends('layouts.template')
@section('title','Tambahkan Jenis Transportasi')

@section('content')
<div class="row">
    <div class="col-md-12">
        <a href="{{ route('transportation_type.index') }}" class="btn btn-warning">Kembali ke index</a>
        <br><br>
        <div class="panel panel-default">
            <div class="panel-heading">Tambahkan Jenis Transportasi</div>
            <div class="panel-body">
                <form action="{{ route('transportation_type.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="name" id="" value="{{ old('name') }}" class="form-control">
                    </div>
                    <button class="btn btn-success btn-lg">Simpan</button>

                </form>
            </div>
        </div>
    </div>
</div>
@stop