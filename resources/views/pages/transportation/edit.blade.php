@extends('layouts.template')
@section('title','Edit Data Kendaraan')

@section('content')
<div class="row">
    <div class="col-md-12">
        <a href="{{ route('transportation.index') }}" class="btn btn-warning">Kembali ke index</a>
        <br><br>
        <div class="panel panel-default">
            <div class="panel-heading">Edit Data Kendaraan</div>
            <div class="panel-body">
                <form action="{{ route('transportation.update',$data) }}" method="POST" enctype="multipart/form-data">
                    @csrf @method('patch')
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="name" id="" value="{{ old('name',$data->name) }}" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Logo</label>
                        <input type="file" name="logo" id="" value="{{ old('logo') }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Deskripsi</label>
                        <textarea name="description" id="" cols="30" class="form-control">{{ old('description',$data->description) }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Tipe Kendaraan</label>
                        <select name="transporation_type_id" id="" class="form-control">
                            @foreach($types as $type)
                            @if($type->id == $data->transporation_type_id)
                            <option value="{{ $type->id }}" selected>{{ $type->name }}</option>
                            @else
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endif
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