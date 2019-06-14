@extends('layouts.app')

@section('content')
    <form action="{{ route('users.update', $user->id) }}" method="post">
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="name">Name: </label>
                        <input id="name" type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}" placeholder="Enter Name">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="email">Email: </label>
                        <input id="email" type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" placeholder="Enter Email">
                    </div>
                    <div class="form-group col-md-12">
                        <button class="btn btn-primary pull-right">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
