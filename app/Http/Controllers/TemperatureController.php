<?php

namespace App\Http\Controllers;

use App\Models\Temperature;
use Carbon\Carbon;

class TemperatureController extends BaseController
{
    public function index()
    {

        $todayTemps = Temperature::today()->get();

        $temps = Temperature::orderBy('date', 'DESC')->paginate($this->paginationCount);

        $temps->withPath(url('temperature/getTableData'));

        $viewVariables = ['todayData' => $todayTemps, 'data' => $temps];

        return view('temperature.index')->with($viewVariables);
    }

    public function getTableData()
    {
        $temps = Temperature::orderBy('date', 'DESC')->paginate($this->paginationCount);

        $tbody = '';

        foreach ($temps->items() as $item) {
            $tbody.= '<tr>'.
                    '<td>'. $item->date . '</td>>'.
                    '<td>'. $item->time . '</td>>'.
                    '<td>'. $item->value . '</td>>'.
                '</tr>';
        }

        echo $tbody;

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

            Temperature::create($temper);
        }
        return redirect()->back();
    }
}
