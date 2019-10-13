@extends('layouts.template')
@section('title','Tambahkan Data')

@section('content')
<div class="row">
    <div class="col-md-12">
        <a href="{{ route('transportation_generate.index') }}" class="btn btn-warning">Kembali ke index</a>
        <br><br>
        <div class="panel panel-default">
            <div class="panel-heading">Tambahkan Data</div>
            <div class="panel-body">
                <form action="{{ route('transportation_generate.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Kendaraan</label>
                        <select name="transportation_id" id="" class="form-control">
                            @foreach($transportations as $transportation)
                            <option value="{{ $transportation->id }}">{{ $transportation->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Nomor Polisi</label>
                        <input type="text" name="nopol" id="" value="{{ old('nopol') }}" class="form-control">
                    </div>
                    <button class="btn btn-success btn-lg">Simpan</button>

                </form>
            </div>
        </div>
    </div>
</div>
@stop