<?php

namespace App\Http\Controllers;

use App\Models\ClassShift;
use App\Models\DayShift;
use App\Models\Equipment;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $dayShift = DayShift::all();
        $classShift = ClassShift::all();
        $equipment = Equipment::all();
     return  view('booking', ['dayShift' => $dayShift, 'classShift' => $classShift, 'equipment' => $equipment]);
    }

    












}
