<?php

namespace App\Http\Controllers;

use App\Models\DayShift;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $data = DayShift::all();
     return  view('booking', ['data' => $data]);
    }
}
