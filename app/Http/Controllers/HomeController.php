<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

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
     * @return \Illuminate\View\View
     */
    public function index()
    {

        $lastTemp = DB::table('temperatures')->latest('id')->first();

        $lastLight = DB::table('light')->latest('id')->first();

        $lastAir = DB::table('air_humidity')->latest('id')->first();



        return view('dashboard');
    }
}
