@extends('layouts.template')
@section('title','Edit Jadwal Piket')

@section('content')
<div class="row">
    <div class="col-md-12">
        <a href="{{ route('jadwalpiket.index') }}" class="btn btn-warning">Kembali ke index</a>
        <br><br>
        <div class="panel panel-default">
            <div class="panel-heading">Edit Jadwal Piket</div>
            <div class="panel-body">
                <form action="{{ route('jadwalpiket.update',$data) }}" method="POST">
                    @csrf @method('patch')
                    <div class="form-group">
                        <label for="">Hari</label>
                        <select name="day" id="" class="form-control">
                            @if($data->day == "senin")
                            <option value="senin" selected>Senin</option>
                            <option value="rabu">Rabu</option>
                            <option value="kamis">Kamis</option>
                            <option value="jumat">Jumat</option>
                            <option value="sabtu">Sabtu</option>
                            <option value="minggu">Minggu</option>
                            @elseif($data->day == "rabu")
                            <option value="senin">Senin</option>
                            <option value="rabu" selected>Rabu</option>
                            <option value="kamis">Kamis</option>
                            <option value="jumat">Jumat</option>
                            <option value="sabtu">Sabtu</option>
                            <option value="minggu">Minggu</option>
                            @elseif($data->day == "kamis")
                            <option value="senin">Senin</option>
                            <option value="rabu">Rabu</option>
                            <option value="kamis" selected>Kamis</option>
                            <option value="jumat">Jumat</option>
                            <option value="sabtu">Sabtu</option>
                            <option value="minggu">Minggu</option>
                            @elseif($data->day == "jumat")
                            <option value="senin">Senin</option>
                            <option value="rabu">Rabu</option>
                            <option value="kamis">Kamis</option>
                            <option value="jumat" selected>Jumat</option>
                            <option value="sabtu">Sabtu</option>
                            <option value="minggu">Minggu</option>
                            @elseif($data->day == "sabtu")
                            <option value="senin">Senin</option>
                            <option value="rabu">Rabu</option>
                            <option value="kamis">Kamis</option>
                            <option value="jumat">Jumat</option>
                            <option value="sabtu" selected>Sabtu</option>
                            <option value="minggu">Minggu</option>
                            @else
                            <option value="senin">Senin</option>
                            <option value="rabu">Rabu</option>
                            <option value="kamis">Kamis</option>
                            <option value="jumat">Jumat</option>
                            <option value="sabtu">Sabtu</option>
                            <option value="minggu" selected>Minggu</option>
                            @endif

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Pegawai</label>
                        <select name="employee_id" id="" class="form-control">
                            @foreach($employees as $employee)
                            @if($data->employee_id == $employee->id)
                            <option value="{{ $employee->id }}" selected>{{ $employee->name }}</option>
                            @else
                            <option value="{{ $employee->id }}">{{ $employee->name }}</option>
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