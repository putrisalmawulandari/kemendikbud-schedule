@extends('layouts.template')
@section('title','Edit Pejabat')

@section('content')
<div class="row">
    <div class="col-md-12">
        <a href="{{ route('officer.index') }}" class="btn btn-warning">Kembali ke index</a>
        <br><br>
        <div class="panel panel-default">
            <div class="panel-heading">Edit Pejabat</div>
            <div class="panel-body">
                <form action="{{ route('officer.update',$data) }}" method="POST">
                    @csrf @method('patch')
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="name" id="" value="{{ old('name',$data->name) }}" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Nomor Ponsel</label>
                        <input type="number" name="phone" id="" value="{{ old('phone',$data->phone) }}" class="form-control"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea name="address" id="" cols="30" class="form-control">{{ old('address',$data->address) }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Instansi</label>
                        <select name="agency_id" id="" class="form-control">
                            @foreach($agencys as $agency)
                            @if($data->agency_id == $agency->id)
                            <option value="{{ $agency->id }}" selected>{{ $agency->name }}</option>
                            @else
                            <option value="{{ $agency->id }}">{{ $agency->name }}</option>
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