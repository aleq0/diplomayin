<?php

namespace App\Http\Controllers;

use App\Models\Light;
use Carbon\Carbon;

class LightController extends BaseController
{


    public function index()
    {

        $todayTemps = Light::today()->get();

        $temps = Light::orderBy('date', 'DESC')->paginate($this->paginationCount);

        $temps->withPath(url('light/getTableData'));

        $viewVariables = ['todayData' => $todayTemps, 'data' => $temps];

        return view('light.index')->with($viewVariables);
    }

    public function getTable()
    {
        $temps = Light::orderBy('date', 'DESC')->paginate($this->paginationCount);

        $temps->withPath(url('light/getTable'));

        $table = view('vendor.table.default')->with('data', $temps);

        echo $table;
    }

    public function seed()
    {
        /*$date = Carbon::createFromFormat('d-m-Y', $date);
        $from =  Carbon::createFromFormat('g:i A', $from)->format('H:i:s');*/

        for ($i = 0; $i < 24; $i ++ ) {

            if ($i < 10) {
                $hour = '0'. $i;
            } else {
                 $hour = $i;
            }

            $temper = [
                'value' => rand(10, 30),
                'date' => Carbon::now()->toDate(),
                'time' => Carbon::createFromFormat('G:i', $hour.':00')->format('H:i')
            ];

            Light::create($temper);
        }

        return redirect()->back();
    }
}
