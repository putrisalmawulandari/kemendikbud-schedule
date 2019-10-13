@extends('layouts.template')
@section('title','Tambahkan Data Pegawai')

@section('content')
<div class="row">
    <div class="col-md-12">
        <a href="{{ route('employee.index') }}" class="btn btn-warning">Kembali ke index</a>
        <br><br>
        <div class="panel panel-default">
            <div class="panel-heading">Tambahkan Pegawai</div>
            <div class="panel-body">
                <form action="{{ route('employee.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">NIP</label>
                        <input type="number" name="nip" id="" value="{{ old('nip') }}" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="name" id="" value="{{ old('name') }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Nomor Ponsel</label>
                        <input type="number" name="phone" id="" value="{{ old('phone') }}" class="form-control"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="">Jabatan</label>
                        <select name="as" id="" class="form-control">
                            <option value="driver">Driver</option>
                            <option value="staff">Staff</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea name="address" id="" cols="30" class="form-control">{{ old('address') }}</textarea>
                    </div>
                    <button class="btn btn-success btn-lg">Simpan</button>

                </form>
            </div>
        </div>
    </div>
</div>
@stop