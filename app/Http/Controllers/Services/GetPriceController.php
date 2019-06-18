<?php


namespace App\Http\Controllers\Services;


use App\Services;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GetPriceController extends Controller
{
    public function __invoke(Request $request)
    {
        return Services::where('id', $request->id)->first()->price;
    }
}