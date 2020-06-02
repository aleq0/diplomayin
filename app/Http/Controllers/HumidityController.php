<?php

namespace App\Http\Controllers;

use App\Models\AirHumidity;
use App\Models\SoilHumidity;
use Carbon\Carbon;

class HumidityController extends BaseController
{

    public function airIndex()
    {
        $todayTemps = AirHumidity::today()->get();

        $temps = AirHumidity::orderBy('date', 'DESC')->paginate($this->paginationCount);

        $temps->withPath(url('humidity/air/getTableData'));

        $viewVariables = ['todayData' => $todayTemps, 'data' => $temps];

        return view('humidity.airIndex')->with($viewVariables);
    }

    public function getAirTableData()
    {
        $temps = AirHumidity::orderBy('date', 'DESC')->paginate($this->paginationCount);

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

    public function airSeed()
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

            AirHumidity::create($temper);
        }

        return redirect()->back();
    }

    public function soilIndex()
    {
        $todayTemps = SoilHumidity::today()->get();

        $temps = SoilHumidity::orderBy('date', 'DESC')->paginate($this->paginationCount);

        $temps->withPath(url('humidity/soil/getTableData'));

        $viewVariables = ['todayData' => $todayTemps, 'data' => $temps];

        return view('humidity.soilIndex')->with($viewVariables);
    }

    public function getSoilTableData()
    {
        $temps = SoilHumidity::orderBy('date', 'DESC')->paginate($this->paginationCount);

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

    public function soilSeed()
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

            SoilHumidity::create($temper);
        }

        return redirect()->back();
    }
}
