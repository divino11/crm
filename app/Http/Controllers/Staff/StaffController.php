<?php

namespace App\Http\Controllers\Staff;

use App\Staff;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('staff.index', ['staffs' => Staff::orderBy('created_at', 'desc')->paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        try {
            $staff = Staff::create($request->all());
        } catch (\Exception $exception) {
            return back()->with('toast_error', $exception->getMessage());
        }

        return redirect()->route('staff.index')->with('toast_success', 'Staff has been create');
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
        $staff = Staff::find($id);

        return view('staff.edit', [
            'staff' => $staff
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, Staff $staff)
    {
        try {
            $staff->update($request->all());
        } catch (\Exception $exception) {
            return back()->with('toast_error', $exception->getMessage());
        }

        return redirect()->route('staff.index')->with('toast_success', 'Staff has been update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Staff $staff
     * @return Response
     * @throws \Exception
     */
    public function destroy(Staff $staff)
    {
        $staff->delete();

        return redirect()->route('staff.index')->with('toast_success', 'Staff has been delete');
    }
}
