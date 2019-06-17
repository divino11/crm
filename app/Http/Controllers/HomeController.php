<?php

namespace App\Http\Controllers;

use App\Event;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Event::all();
        $user = User::find(Auth::user()->id);
        $events_count = Event::whereDate('start_date', Carbon::today())->count();
        $eventsOfAll = round(($events_count / Event::whereMonth('start_date', Carbon::now()->month)->count()) * 100, 1);

        return view('dashboard', [
            'events' => $data,
            'customers_count' => $user->users_count,
            'customers_percentage' => $user->users_of_all,
            'events_count' => $events_count,
            'events_percentage' => $eventsOfAll,
        ]);
    }
}
