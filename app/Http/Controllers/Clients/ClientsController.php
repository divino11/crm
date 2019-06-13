<?php

namespace App\Http\Controllers\Clients;

use App\Clients;
use App\Http\Requests\Clients\RequestClientsManagment;
use DemeterChain\C;
use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('users.index', ['clients' => Clients::orderBy('created_at', 'desc')->paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param RequestClientsManagment $request
     * @return void
     */
    public function store(RequestClientsManagment $request)
    {
        try {
            $create = Clients::create($request->all());
        } catch (Exception $exception) {
            return back()->with('toast_error', $exception->getMessage());
        }

        return redirect()->route('clients.index')->with('toast_success', 'Client has been create');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $client = Clients::find($id);

        return view('users.edit', [
            'client' => $client
        ]);
    }


    public function update(Request $request, Clients $client)
    {
        try {
            $client->update($request->all());
        } catch (Exception $exception) {
            return back()->with('toast_error', $exception->getMessage());
        }

        return redirect()->route('clients.index')->with('toast_success', 'Client has been update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy(Clients $client)
    {
        $client->delete();

        return redirect()->route('clients.index')->with('toast_success', 'Client has been delete');
    }
}
