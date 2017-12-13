<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Charts;
use App\Visitor;

class ChartController extends Controller
{
    public function index()
    {
        $chart = Charts::database(Visitor::all(), 'bar', 'highcharts')
            ->colors(['#ff0000', '#00ff00', '#0000ff'])
            ->elementLabel("Total")
            ->dimensions(500, 500)
            ->responsive(false)
            ->lastByMonth(6, true);

        return view('chart', ['chart' => $chart]);
    }
}
