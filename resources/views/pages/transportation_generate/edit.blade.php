@extends('layouts.template')
@section('title','Edit Data')

@section('content')
<div class="row">
    <div class="col-md-12">
        <a href="{{ route('transportation_generate.index') }}" class="btn btn-warning">Kembali ke index</a>
        <br><br>
        <div class="panel panel-default">
            <div class="panel-heading">Edit Data</div>
            <div class="panel-body">
                <form action="{{ route('transportation_generate.update',$data) }}" method="POST">
                    @csrf @method('patch')
                    <div class="form-group">
                        <label for="">Kendaraan</label>
                        <select name="transportation_id" id="" class="form-control">
                            @foreach($transportations as $transportation)
                            @if($data->transportation_id == $transportation->id)
                            <option value="{{ $transportation->id }}" selected>{{ $transportation->name }}</option>
                            @else
                            <option value="{{ $transportation->id }}">{{ $transportation->name }}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Nomor Polisi</label>
                        <input type="text" name="nopol" id="" value="{{ old('nopol',$data->nopol) }}" class="form-control">
                    </div>
                    <button class="btn btn-success btn-lg">Simpan</button>

                </form>
            </div>
        </div>
    </div>
</div>
@stop