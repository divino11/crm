@extends('layouts.app')

@section('content')
    <form action="{{ route('services.update', $service->id) }}" method="post">
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="first_name">Service: </label>
                        <input id="first_name" type="text" name="service_name" class="form-control" value="{{ old('service_name', $service->service_name) }}"
                               placeholder="Enter Service Name">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="services">Services: </label>
                        <select id="services" type="text" name="services" class="form-control">
                            @foreach($staff as $key => $value)
                                <option value="{{ old('staff_id', $value->id) }}" @if(old('staff_id', $value->id) == $service->staff_id) selected @endif>{{ $value->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="price">Price: </label>
                        <input id="price" type="text" name="price" class="form-control" value="{{ old('price', $service->price) }}" placeholder="Enter Price">
                    </div>
                    <div class="form-group col-md-12">
                        <button class="btn btn-primary pull-right">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script>
        $(document).ready(function () {
            $('#services').select2();
        });
    </script>
@endsection
