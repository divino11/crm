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
        @forelse($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->birthday}}</td>
                <td>{{$user->created_at}}</td>
                <td class="text-right">
                    <form action="{{route('users.destroy', $user)}}" id="deleteCRUD" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        {{ csrf_field() }}
                        <a class="btn btn-default" href="{{route('users.edit', $user)}}"><i
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
                {{$users->links()}}
            </ul>
        </td>
        </tfoot>
    </table>
    <script>
        $('#search-resource').on('keyup', function () {
            var value = $(this).val();
            $.ajax({
                type: 'get',
                url: '/search_user',
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