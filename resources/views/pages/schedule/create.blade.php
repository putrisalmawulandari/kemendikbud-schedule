@extends('layouts.template')
@section('title','Tambahkan Jadwal')

@section('content')
<div class="row">
    <div class="col-md-12">
        <a href="{{ route('schedule.index') }}" class="btn btn-warning">Kembali ke index</a>
        <br><br>
        <div class="panel panel-default">
            <div class="panel-heading">Tambahkan Jadwal</div>
            <div class="panel-body">
                <form action="{{ route('schedule.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="">Pejabat</label>
                        <select name="officer_id" id="" class="form-control">
                            @foreach($officers as $officer)
                            <option value="{{ $officer->id }}">{{ $officer->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal</label>
                        <input type="date" name="date" id="" value="{{ old('date',date('Y-m-d')) }}" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Kendaraan Umum</label>
                        <select name="transportation_from_id" id="" class="form-control">
                            <option value=" ">Tidak ada</option>
                            @foreach($transforms as $transform)
                            <option value="{{ $transform->id }}">{{ $transform->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Departure</label>
                        <input type="text" name="departure" id="" value="{{ old('departure') }}" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Departure Time</label>
                        <input type="time" name="departure_time" id="" value="{{ old('departure_time') }}" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Penjemputan</label>
                        <input type="text" name="arrive" id="" value="{{ old('arrive') }}" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Supir</label>
                        <select name="employee_id" id="" class="form-control">
                            @foreach($employees as $employee)
                            <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Pendamping</label>
                        <select name="companion_id" id="" class="form-control">
                            @foreach($companions as $companion)
                            <option value="{{ $companion->id }}">{{ $companion->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Kendaraan</label>
                        <select name="transportationgenerate_id" id="" class="form-control">
                            @foreach($values as $value)
                            <option value="{{ $value->id }}">{{ $value->transportation->name." "."|"." ".$value->nopol }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Rutinitas</label>
                        <select name="routine"  class="form-control">
                            <option value="0">Tidak</option>
                            <option value="1">Ya</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Status</label>
                        <select name="status"  class="form-control">
                            <option value="aktif">aktif</option>
                            <option value="selesai">Selesai</option>
                        </select>
                    </div>
                   
                    <button class="btn btn-success btn-lg">Simpan</button>

                </form>
            </div>
        </div>
    </div>
</div>
@stop