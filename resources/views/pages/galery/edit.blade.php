@extends('layouts.template')
@section('title','Edit Foto')

@section('content')
<div class="row">
    <div class="col-md-12">
        <a href="{{ route('galery.index') }}" class="btn btn-warning">Kembali ke index</a>
        <br><br>
        <div class="panel panel-default">
            <div class="panel-heading">Edit Foto</div>
            <div class="panel-body">
                <form action="{{ route('galery.update',$data) }}" method="POST" enctype="multipart/form-data">
                    @csrf @method('patch')
                    <div class="form-group">
                        <label for="">Foto</label>
                        <input type="file" name="name" id="" value="{{ old('name') }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Deskripsi</label>
                        <textarea name="description" id="" cols="30" class="form-control">{{ old('description',$data->description) }}</textarea>
                    </div>
                    <button class="btn btn-success btn-lg">Simpan</button>

                </form>
            </div>
        </div>
    </div>
</div>
@stop