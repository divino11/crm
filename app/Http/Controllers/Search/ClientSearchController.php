<?php

namespace App\Http\Controllers\Search;

use App\Clients;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientSearchController extends Controller
{
    public function __invoke(Request $request)
    {
        $output = "";
        if ($request->search != '') {
            $data = Clients::where('name', 'LIKE', '%' . $request->search . '%')
                ->orWhere('email', 'like', '%' . $request->search . '%')
                ->orWhere('phone', 'like', '%' . $request->search . '%')
                ->orWhere('birthday', 'like', '%' . $request->search . '%')
                ->orWhere('created_at', 'like', '%' . $request->search . '%')
                ->paginate(10);
        } else {
            $data = Clients::orderBy('created_at', 'desc')->paginate(10);
        }
        foreach ($data as $product) {
            $output .= '<tr>' .
                '<td>' . $product->id . '</td>' .
                '<td>' . $product->name . '</td>' .
                '<td>' . $product->email . '</td>' .
                '<td>' . $product->phone . '</td>' .
                '<td>' . $product->birthday . '</td>' .
                '<td>' . $product->created_at . '</td>' .
                '<td class="text-right">
                    <form onsubmit="if(confirm(\'Удалить?\')){return true} else {return false}"
                          action="' . route("clients.destroy", $product) . '" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        ' . csrf_field() . '
                        <a class="btn btn-default" href="' . route("clients.edit", $product) . '"><i
                                    class="fa fa-edit"></i></a>
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                    </form>
                </td>' .

                '</tr>';
        }
        return response()->json($output);
    }
}
