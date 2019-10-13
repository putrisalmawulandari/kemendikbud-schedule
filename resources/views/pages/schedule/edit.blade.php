@extends('layouts.template')
@section('title','Edit Jadwal')

@section('content')
<div class="row">
    <div class="col-md-12">
        <a href="{{ route('schedule.index') }}" class="btn btn-warning">Kembali ke index</a>
        <br><br>
        <div class="panel panel-default">
            <div class="panel-heading">Edit Jadwal</div>
            <div class="panel-body">
                <form action="{{ route('schedule.update',$data) }}" method="POST">
                    @csrf @method('patch')
                    <div class="form-group">
                        <label for="">Pejabat</label>
                        <select name="officer_id" id="" class="form-control">
                            @foreach($officers as $officer)
                            @if($data->officer_id == $officer->id)
                            <option value="{{ $officer->id }}" selected>{{ $officer->name }}</option>
                            @else
                            <option value="{{ $officer->id }}">{{ $officer->name }}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal</label>
                        <input type="date" name="date" id="" value="{{ old('date',$data->date) }}" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Kendaraan Umum</label>
                        <select name="transportation_from_id" id="" class="form-control">
                            @if($data->transportation_from_id == null)
                            <option value=" " selected>Tidak ada</option>
                            @foreach($transforms as $transform)
                            <option value="{{ $transform->id }}">{{ $transform->name }}</option>
                            @endforeach
                            @else
                            <option value=" ">Tidak ada</option>
                            @foreach($transforms as $transform)
                            @if($data->transportation_from_id == $transform->id)
                            <option value="{{ $transform->id }}" selected>{{ $transform->name }}</option>
                            @else
                            <option value="{{ $transform->id }}">{{ $transform->name }}</option>
                            @endif
                            @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Departure</label>
                        <input type="text" name="departure" id="" value="{{ old('departure',$data->departure) }}" class="form-control"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="">Departure Time</label>
                        <input type="time" name="departure_time" id="" value="{{ old('departure_time',$data->departure_time) }}"
                            class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Penjemputan</label>
                        <input type="text" name="arrive" id="" value="{{ old('arrive',$data->arrive) }}" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Supir</label>
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
                    <div class="form-group">
                        <label for="">Pendamping</label>
                        <select name="companion_id" id="" class="form-control">
                                @foreach($companions as $companion)
                                @if($data->companion_id == $companion->id)
                                <option value="{{ $companion->id }}" selected>{{ $companion->name }}</option>
                                @else
                                <option value="{{ $companion->id }}">{{ $companion->name }}</option>
                                @endif
                                @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Kendaraan</label>
                        <select name="transportationgenerate_id" id="" class="form-control">
                                @foreach($values as $value)
                                @if($data->transportationgenerate_id == $value->id)
                                <option value="{{ $value->id }}" selected>{{ $value->transportation->name." "."|"." ".$value->nopol }}</option>
                                @else
                                <option value="{{ $value->id }}">{{ $value->transportation->name." "."|"." ".$value->nopol }}</option>
                                @endif
                                @endforeach
                        </select>
                        
                    </div>

                    <div class="form-group">
                        <label for="">Rutinitas</label>
                        <select name="routine"  class="form-control">
                            @if($data->routine == "1")
                            <option value="0">Tidak</option>
                            <option value="1" selected>Ya</option>
                            @else
                            <option value="0" selected>Tidak</option>
                            <option value="1">Ya</option>
                            @endif
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Status</label>
                        <div class="form-group">
                        <label for="">Status</label>
                        <select name="status"  class="form-control">
                            @if($data->status == "aktif")
                            <option value="aktif" selected>aktif</option>
                            <option value="selesai">Selesai</option>
                            @else
                            <option value="aktif">aktif</option>
                            <option value="selesai" selected>Selesai</option>
                            @endif
                        </select>
                    </div>
                    </div>

                    <button class="btn btn-success btn-lg">Simpan</button>

                </form>
            </div>
        </div>
    </div>
</div>
@stop