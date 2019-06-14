@extends('layouts.app')

@section('content')
    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="name">Name: </label>
                        <input id="name" type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Enter Name">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="email">Email: </label>
                        <input id="email" type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Enter Email">
                    </div>
                    <div class="form-group col-md-12">
                        <button class="btn btn-primary pull-right">Create</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
