@extends('layouts.app')

@section('content')
    <div class="form-group">
        <label for="search">Search: </label>
        <input type="search" autocomplete="off" class="form-controller search-resource" id="search-resource"
               name="search">
    </div>
    <table class="table table-striped">
        <thead>
        <th>Service</th>
        <th>Staff</th>
        <th>Client</th>
        <th>Price</th>
        <th class="text-right">Actions</th>
        </thead>
        <tbody>
        @forelse($orders as $order)
            <tr>
                <td>{{$order->services->service_name}}</td>
                <td>{{$order->staffs->name}}</td>
                <td>{{$order->clients->name}}</td>
                <td>{{$order->price * $order->quantity}}</td>
                <td class="text-right">
                    <form action="{{route('orders.destroy', $order)}}" id="deleteCRUD" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        {{ csrf_field() }}
                        <a class="btn btn-default" href="{{route('orders.edit', $order)}}"><i
                                    class="fa fa-edit"></i></a>
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="text-center"><h2>Data is empty</h2></td>
            </tr>
        @endforelse
        </tbody>
        <tfoot>
        <td colspan="5">
            <ul class="pagination pull-right">
                {{$orders->links()}}
            </ul>
        </td>
        </tfoot>
    </table>
    <script>
        $('#search-resource').on('keyup', function () {
            var value = $(this).val();
            $.ajax({
                type: 'get',
                url: '/search_order',
                data: {'search': value},
                dataType: 'json',
                success: function (data) {
                    console.log(data);
                    $('tbody').html(data);
                }
            });
        });
    </script>
@endsection