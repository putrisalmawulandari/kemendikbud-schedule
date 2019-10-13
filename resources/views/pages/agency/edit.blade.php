@extends('layouts.template')
@section('title','Edit Instansi')

@section('content')
<div class="row">
    <div class="col-md-12">
        <a href="{{ route('agency.index') }}" class="btn btn-warning">Back to index</a>
        <br><br>
        <div class="panel panel-default">
            <div class="panel-heading">Edit Instansi</div>
            <div class="panel-body">
                <form action="{{ route('agency.update',$data) }}" method="POST">
                    @csrf @method('patch')
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" id="" value="{{ old('name',$data->name) }}" class="form-control">
                    </div>
                    <button class="btn btn-success btn-lg">Submit</button>

                </form>
            </div>
        </div>
    </div>
</div>
@stop