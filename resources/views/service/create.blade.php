@extends('layouts.app')

@section('content')
    <form action="{{ route('services.store') }}" method="post">
        @csrf
        @method('POST')
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="service_name">Service: </label>
                        <input id="service_name" type="text" name="service_name" class="form-control" value="{{ old('service_name') }}"
                               placeholder="Enter Service Name">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="staff">Staff: </label>
                        <select id="staff" type="text" name="staff_id" class="form-control">
                            @foreach($staff as $key => $value)
                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="price">Price: </label>
                        <input id="price" type="text" name="price" class="form-control" value="{{ old('price') }}"
                               placeholder="Enter Price">
                    </div>
                    <div class="form-group col-md-12">
                        <button class="btn btn-primary pull-right">Create</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script>
        $(document).ready(function () {
           $('#staff').select2();
        });
    </script>
@endsection
