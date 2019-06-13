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
        <th>Services</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Birthday</th>
        <th>Created_at</th>
        <th class="text-right">Actions</th>
        </thead>
        <tbody>
        @forelse($staffs as $staff)
            <tr>
                <td>{{$staff->id}}</td>
                <td>{{$staff->name}}</td>
                <td>{{$staff->services}}</td>
                <td>{{$staff->email}}</td>
                <td>{{$staff->phone}}</td>
                <td>{{$staff->birthday}}</td>
                <td>{{$staff->created_at}}</td>
                <td class="text-right">
                    <form action="{{route('staff.destroy', $staff)}}" id="deleteCRUD" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        {{ csrf_field() }}
                        <a class="btn btn-default" href="{{route('staff.edit', $staff)}}"><i
                                    class="fa fa-edit"></i></a>
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="8" class="text-center"><h2>Data is empty</h2></td>
            </tr>
        @endforelse
        </tbody>
        <tfoot>
        <td colspan="7">
            <ul class="pagination pull-right">
                {{$staffs->links()}}
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