@extends('layouts.app')

@section('content')
    <form action="{{ route('staff.store') }}" method="post">
        @csrf
        @method('POST')
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="name">Enter name: </label>
                        <input id="name" type="text" name="name" class="form-control" value="{{ old('name') }}"
                               placeholder="Enter Name">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="email">Enter email: </label>
                        <input id="email" type="email" name="email" class="form-control" value="{{ old('email') }}"
                               placeholder="Enter Email">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="phone">Enter phone: </label>
                        <input id="phone" type="tel" name="phone" class="form-control" value="{{ old('phone') }}"
                               placeholder="Enter Phone">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="birthday">Enter birthday: </label>
                        <input id="birthday" type="date" name="birthday" class="form-control"
                               value="{{ old('birthday') }}" placeholder="Enter Birthday">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="services">Enter services:
                            <select id="services" type="text" name="services" class="form-control" multiple="multiple">
                                @foreach(config('staff_services.beauty') as $key => $value)
                                    <option value="{{ $value }}">{{ $value }}</option>
                                @endforeach
                            </select>
                        </label>
                    </div>
                    <div class="form-group col-md-12">
                        <button class="btn btn-primary pull-right">Create</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
