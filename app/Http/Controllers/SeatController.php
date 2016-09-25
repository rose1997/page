<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Seat;

use App\Eloquent;

use App\User;

class SeatController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     return view('home');
    // }
    public function create()
    {
       
           $seats = Seat::all();
    return view('/home', [
        'seats' => $seats,
    ]);
    }
    public function index(Request $request)
{

$seats = Seat::all();
// $seats = Seat::find(1);
// ->seat;
// $seats = Seat::find(1);
// echo $seats[1]->floor;
// echo $seats[1]->seat;
    return view('/check', [
        'seats' => $seats,
        ]);
}
        public function store(Request $request)
    {
        $seats = new Seat;
        $seats->floor = $request->floor;
        $seats->seat = $request->seat;
        $seats->save();
        return redirect('/check');
    }


}
