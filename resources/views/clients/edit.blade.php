@extends('layouts.app')

@section('content')
    <form action="{{ route('clients.update', $client->id) }}" method="post">
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="first_name">First name: </label>
                        <input id="first_name" type="text" name="first_name" class="form-control" value="{{ old('first_name', $client->first_name) }}" placeholder="First Name">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="last_name">Last name: </label>
                        <input id="last_name" type="text" name="last_name" class="form-control" value="{{ old('last_name', $client->last_name) }}" placeholder="Last Name">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="email">Enter email: </label>
                        <input id="email" type="email" name="email" class="form-control" value="{{ old('email', $client->email) }}" placeholder="Enter Email">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="phone">Enter phone: </label>
                        <input id="phone" type="tel" name="phone" class="form-control" value="{{ old('phone', $client->phone) }}" placeholder="Enter Phone">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="birthday">Enter birthday: </label>
                        <input id="birthday" type="date" name="birthday" class="form-control" value="{{ old('birthday', $client->birthday) }}" placeholder="Enter Birthday">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="services">Services: </label>
                        <input id="services" type="text" name="services" class="form-control" value="{{ old('services', $client->services) }}" placeholder="Enter Services">
                    </div>
                    <div class="form-group col-md-12">
                        <button class="btn btn-primary pull-right">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
