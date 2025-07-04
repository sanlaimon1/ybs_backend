<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusLineController extends Controller
{
    public function index()
    {
        return BusLine::with('stops')->get();
    }

    public function show($id)
    {
        return BusLine::with(['stops' => function ($q) {
            $q->orderBy('pivot_stop_order');
        }])->findOrFail($id);
    }

}
