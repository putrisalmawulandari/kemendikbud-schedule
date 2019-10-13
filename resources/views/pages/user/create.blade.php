@extends('layouts.template')
@section('title','Add User')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">Add User</div>
            <div class="panel-body">
                <form action="{{ route('user.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" id="" value="{{ old('name') }}" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" id="" value="{{ old('email') }}" class="form-control" required>
                    </div>
                    <button class="btn btn-primary">Submit</button>
                    <a href="{{ route('user.index') }}" class="btn btn-warning">Back to index</a>
                </form>
            </div>
        </div>
    </div>
</div>
@stop