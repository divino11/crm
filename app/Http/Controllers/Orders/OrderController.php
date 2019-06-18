<?php

namespace App\Http\Controllers\Orders;

use App\Clients;
use App\Orders;
use App\Services;
use App\Staff;
use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('order.index', ['orders' => Orders::orderBy('created_at', 'desc')->paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('order.create', [
            'staff' => Staff::all(),
            'client' => Clients::all(),
            'service' => Services::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        try {
            $order = Orders::create($request->all());
        } catch (Exception $exception) {
            return back()->with('toast_error', $exception->getMessage());
        }

        return redirect()->route('orders.index')->with('toast_success', 'Order has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $order = Orders::find($id);

        return view('order.edit', [
            'order' => $order,
            'staff' => Staff::with('orders')->get(),
            'client' => Clients::with('orders')->get(),
            'service' => Services::with('orders')->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orders $orders)
    {
        try {
            $orders->update($request->all());
        } catch (Exception $exception) {
            return back()->with('toast_error', $exception->getMessage());
        }

        return redirect()->route('orders.index')->with('toast_success', 'Order has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Orders $orders
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Orders $orders)
    {
        $orders->delete();

        return redirect()->route('orders.index')->with('toast_success', 'Order has been deleted');
    }
}
