@extends('layouts.app')

@section('content')
    <div class="form-group">
        <label for="search">Search: </label>
        <input type="search" autocomplete="off" class="form-controller search-resource" id="search-resource"
               name="search">
    </div>
    <table class="table table-striped">
        <thead>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Birthday</th>
        <th>Created_at</th>
        <th class="text-right">Actions</th>
        </thead>
        <tbody>
        @forelse($clients as $client)
            <tr>
                <td>{{$client->id}}</td>
                <td>{{$client->name}}</td>
                <td>{{$client->email}}</td>
                <td>{{$client->phone}}</td>
                <td>{{$client->birthday}}</td>
                <td>{{$client->created_at}}</td>
                <td class="text-right">
                    <form action="{{route('clients.destroy', $client)}}" id="deleteCRUD" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        {{ csrf_field() }}
                        <a class="btn btn-default" href="{{route('clients.edit', $client)}}"><i
                                    class="fa fa-edit"></i></a>
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="7" class="text-center"><h2>Data is empty</h2></td>
            </tr>
        @endforelse
        </tbody>
        <tfoot>
        <td colspan="7">
            <ul class="pagination pull-right">
                {{$clients->links()}}
            </ul>
        </td>
        </tfoot>
    </table>
    <script>
        $('#search-resource').on('keyup', function () {
            var value = $(this).val();
            $.ajax({
                type: 'get',
                url: '/search',
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