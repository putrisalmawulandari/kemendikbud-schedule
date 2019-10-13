@extends('layouts.template')
@section('title','Tambahkan Jadwal Piket')

@section('content')
<div class="row">
    <div class="col-md-12">
        <a href="{{ route('jadwalpiket.index') }}" class="btn btn-warning">Kembali ke index</a>
        <br><br>
        <div class="panel panel-default">
            <div class="panel-heading">Tambahkan Jadwal Piket</div>
            <div class="panel-body">
                <form action="{{ route('jadwalpiket.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Hari</label>
                        <select name="day" id="" class="form-control">
                            <option value="">Pilih Hari</option>
                            <option value="senin">Senin</option>
                            <option value="selasa">Selasa</option>
                            <option value="rabu">Rabu</option>
                            <option value="kamis">Kamis</option>
                            <option value="jumat">Jumat</option>
                            <option value="sabtu">Sabtu</option>
                            <option value="minggu">Minggu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Pegawai</label>
                        <select name="employee_id" id="" class="form-control">
                          <option value="">Pilih Pegawai</option>
                            @foreach($employees as $employee)
                            <option value="{{ $employee->id }}">{{ $employee->name }}</option>
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