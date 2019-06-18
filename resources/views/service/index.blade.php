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
        <th>Price</th>
        <th class="text-right">Actions</th>
        </thead>
        <tbody>
        @forelse($services as $service)
            <tr>
                <td>{{$service->service_name}}</td>
                <td>{{$service->staffs->name}}</td>
                <td>{{$service->price}}</td>
                <td class="text-right">
                    <form action="{{route('services.destroy', $service)}}" id="deleteCRUD" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        {{ csrf_field() }}
                        <a class="btn btn-default" href="{{route('services.edit', $service)}}"><i
                                    class="fa fa-edit"></i></a>
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4" class="text-center"><h2>Data is empty</h2></td>
            </tr>
        @endforelse
        </tbody>
        <tfoot>
        <td colspan="4">
            <ul class="pagination pull-right">
                {{$services->links()}}
            </ul>
        </td>
        </tfoot>
    </table>
    <script>
        $('#search-resource').on('keyup', function () {
            var value = $(this).val();
            $.ajax({
                type: 'get',
                url: '/search_service',
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