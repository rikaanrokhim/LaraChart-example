<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Charts;
use App\Visitor;

class ChartController extends Controller
{
    public function index()
    {
        $list = Visitor::all();

        $chart = Charts::database('bar', 'highcharts')
                ->elementLabel("Total")
                ->dimensions(1000, 500)
                ->responsive(false)
                ->groupBy('days');

        return view('chart', ['chart' => $chart]);
    }
}
