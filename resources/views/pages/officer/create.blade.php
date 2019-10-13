@extends('layouts.template')
@section('title','Tambahkan Pejabat')

@section('content')
<div class="row">
    <div class="col-md-12">
        <a href="{{ route('officer.index') }}" class="btn btn-warning">Kembali ke index</a>
        <br><br>
        <div class="panel panel-default">
            <div class="panel-heading">Tambahkan Pejabat</div>
            <div class="panel-body">
                <form action="{{ route('officer.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="name" id="" value="{{ old('name') }}" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Nomor Ponsel</label>
                        <input type="number" name="phone" id="" value="{{ old('phone') }}" class="form-control"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea name="address" id="" cols="30" class="form-control">{{ old('address') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Instansi</label>
                        <select name="agency_id" id="" class="form-control">
                            @foreach($agencys as $agency)
                            <option value="{{ $agency->id }}">{{ $agency->name }}</option>
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