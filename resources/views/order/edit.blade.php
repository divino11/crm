@extends('layouts.app')

@section('content')
    <form action="{{ route('orders.update', $order->id) }}" method="post">
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="service_id">Services: </label>
                        <select id="service_id" name="service_id" class="form-control">
                            @foreach($service as $key => $value)
                                <option value="{{ old('service_id', $value->id) }}" @if(old('service_id', $value->id) == $order->service_id) selected @endif>{{ $value->service_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="staff_id">Staff: </label>
                        <select id="staff_id" name="staff_id" class="form-control">
                            @foreach($staff as $key => $value)
                                <option value="{{ old('staff_id', $value->id) }}" @if(old('staff_id', $value->id) == $order->staff_id) selected @endif>{{ $value->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="client_id">Client: </label>
                        <select id="client_id" name="client_id" class="form-control">
                            @foreach($client as $key => $value)
                                <option value="{{ old('client_id', $value->id) }}" @if(old('client_id', $value->id) == $order->client_id) selected @endif>{{ $value->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="price">Price: </label>
                        <input id="price" type="text" name="price" class="form-control" value="{{ old('price', $order->price) }}" placeholder="Enter Price">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="quantity">Quantity: </label>
                        <input id="quantity" type="number" name="quantity" class="form-control" value="{{ old('quantity', $order->quantity) }}"
                               placeholder="Enter Quantity">
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
            $('#staff_id, #service_id, #client_id').select2();

            $('#service_id').on('change', function () {
                var value = $(this).val();
                console.log(value);
                $.ajax({
                    type: 'get',
                    url: '/get_price',
                    data: {'id': value},
                    dataType: 'json',
                    success: function (data) {
                        $('#price').val(data);
                    }
                });
            });
        });
    </script>
@endsection
