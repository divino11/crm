@extends('layouts.app')

@section('content')
    <form action="{{ route('clients.update', $client->id) }}" method="post">
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="name">Enter name: </label>
                        <input id="name" type="text" name="name" class="form-control" value="{{ old('name', $client->name) }}" placeholder="Enter Name">
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
                        <label for="name-company">Enter name company: </label>
                        <input id="name-company" type="text" name="name_company" class="form-control" value="{{ old('name_company', $client->name_company) }}" placeholder="Enter Name Company">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="site-company">Enter site company: </label>
                        <input id="site-company" type="text" name="site_company" class="form-control" value="{{ old('site_company', $client->site_company) }}" placeholder="Enter Site Company">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="token-company">Token: </label>
                        <input id="token-company" type="text" name="token_company" class="form-control" value="{{ old('token_company', $client->token_company) }}">
                    </div>
                    <div class="form-group col-md-12">
                        <button class="btn btn-primary pull-right">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
