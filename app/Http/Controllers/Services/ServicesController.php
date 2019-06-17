<?php

namespace App\Http\Controllers\Services;

use App\Services;
use App\Staff;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('service.index', ['services' => Services::orderBy('created_at', 'desc')->paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('service.create', [
            'staff' => Staff::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $service = Services::create($request->all());
        } catch (\Exception $exception) {
            return back()->with('toast_error', $exception->getMessage());
        }

        return redirect()->route('services.index')->with('toast_success', 'Service has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Services::find($id);

        return view('service.edit', [
            'service' => $service,
            'staff' => Staff::with('services')->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Services $services)
    {
        try {
            $services->update($request->all());
        } catch (\Exception $exception) {
            return back()->with('toast_error', $exception->getMessage());
        }

        return redirect()->route('services.index')->with('toast_success', 'Service has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Services $service
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Services $service)
    {
        $service->delete();

        return redirect()->route('services.index')->with('toast_success', 'Service has been deleted');
    }
}
