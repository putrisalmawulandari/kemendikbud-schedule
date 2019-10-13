@extends('layouts.template')
@section('title','Edit Data Pegawai')

@section('content')
<div class="row">
    <div class="col-md-12">
        <a href="{{ route('employee.index') }}" class="btn btn-warning">Kembali ke index</a>
        <br><br>
        <div class="panel panel-default">
            <div class="panel-heading">Edit Data Pegawai</div>
            <div class="panel-body">
                <form action="{{ route('employee.update',$data) }}" method="POST">
                    @csrf @method('patch')
                    <div class="form-group">
                        <label for="">NIP</label>
                        <input type="number" name="nip" id="" value="{{ old('nip',$data->nip) }}" class="form-control" required disabled>
                    </div>
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" id="" value="{{ old('name',$data->name) }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Nomor Ponsel</label>
                        <input type="number" name="phone" id="" value="{{ old('phone',$data->phone) }}"
                            class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Jabatan</label>
                        <select name="as" id="" class="form-control">
                            @if($data->as == "driver")
                            <option value="driver" selected>Driver</option>
                            <option value="staff">Staff</option>
                            @else
                            <option value="staff" selected>Staff</option>
                            <option value="driver">Driver</option>
                            @endif
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea name="address" id="" cols="30"
                            class="form-control">{{ old('address',$data->address) }}</textarea>
                    </div>
                    <button class="btn btn-success btn-lg">Simpan</button>

                </form>
            </div>
        </div>
    </div>
</div>
@stop