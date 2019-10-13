@extends('layouts.template')
@section('title','Tambahkan Data Kendaraan')

@section('content')
<div class="row">
    <div class="col-md-12">
        <a href="{{ route('transportation.index') }}" class="btn btn-warning">Kembali ke index</a>
        <br><br>
        <div class="panel panel-default">
            <div class="panel-heading">Tambahkan Data Kendaraan</div>
            <div class="panel-body">
                <form action="{{ route('transportation.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="name" id="" value="{{ old('name') }}" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Logo</label>
                        <input type="file" name="logo" id="" value="{{ old('logo') }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Deskripsi</label>
                        <textarea name="description" id="" cols="30" class="form-control">{{ old('description') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Tipe Kendaraan</label>
                        <select name="transporation_type_id" id="" class="form-control">
                            @foreach($types as $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button class="btn btn-success btn-lg">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop