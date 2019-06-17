<?php

namespace App\Http\Controllers\Search;

use App\Services;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceSearchController extends Controller
{
    public function __invoke(Request $request)
    {
        $output = "";
        if ($request->search != '') {
            $data = Services::where('service_name', 'LIKE', '%' . $request->search . '%')
                ->orWhere('price', 'like', '%' . $request->search . '%')
                ->paginate(10);
        } else {
            $data = Services::orderBy('created_at', 'desc')->paginate(10);
        }
        foreach ($data as $product) {
            $output .= '<tr>' .
                '<td>' . $product->service_name . '</td>' .
                '<td>' . $product->services . '</td>' .
                '<td>' . $product->price . '</td>' .
                '<td class="text-right">
                    <form id="deleteCRUD"
                          action="' . route("services.destroy", $product) . '" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        ' . csrf_field() . '
                        <a class="btn btn-default" href="' . route("services.edit", $product) . '"><i
                                    class="fa fa-edit"></i></a>
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                    </form>
                </td>' .

                '</tr>';
        }
        return response()->json($output);
    }
}
