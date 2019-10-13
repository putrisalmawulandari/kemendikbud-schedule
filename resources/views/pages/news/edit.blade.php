@extends('layouts.template')
@section('title','Edit Berita')

@section('content')
<div class="row">
    <div class="col-md-12">
        <a href="{{ route('news.index') }}" class="btn btn-warning">Kembali ke index</a>
        <br><br>
        <div class="panel panel-default">
            <div class="panel-heading">Edit Berita</div>
            <div class="panel-body">
                <form action="{{ route('news.update',$data) }}" method="POST">
                    @csrf @method('patch')
                    <div class="form-group">
                        <label for="">Konten</label>
                        <textarea name="content" id="" cols="30" class="form-control">{{ old('content',$data->content) }}</textarea>
                    </div>
                    <button class="btn btn-success btn-lg">Simpan</button>

                </form>
            </div>
        </div>
    </div>
</div>
@stop