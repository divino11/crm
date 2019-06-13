@extends('layouts.app')

@section('content')
    <form action="{{ route('staff.store') }}" method="post">
        @csrf
        @method('POST')
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="first_name">First name: </label>
                        <input id="first_name" type="text" name="first_name" class="form-control" value="{{ old('first_name') }}"
                               placeholder="Enter First Name">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="last_name">Last name: </label>
                        <input id="last_name" type="text" name="last_name" class="form-control" value="{{ old('last_name') }}"
                               placeholder="Enter Last Name">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="email">Email: </label>
                        <input id="email" type="email" name="email" class="form-control" value="{{ old('email') }}"
                               placeholder="Enter Email">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="phone">Phone: </label>
                        <input id="phone" type="tel" name="phone" class="form-control" value="{{ old('phone') }}"
                               placeholder="Enter Phone">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="birthday">Birthday: </label>
                        <input id="birthday" type="date" name="birthday" class="form-control"
                               value="{{ old('birthday') }}" placeholder="Enter Birthday">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="services">Services: </label>
                            <select id="services" type="text" name="services" class="form-control">
                                @foreach(config('staff_services.beauty') as $key => $value)
                                    <option value="{{ $value }}">{{ $value }}</option>
                                @endforeach
                            </select>
                    </div>
                    <div class="form-group col-md-12">
                        <button class="btn btn-primary pull-right">Create</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
