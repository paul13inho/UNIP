<?php

namespace App\Http\Controllers;

use App\Models\BookEquipment;
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

    public function store(Request $request) {
        $b = new BookEquipment();

        $b->booked_for = $request->input('booked_for');
        $b->day_shift_id = $request->input('day_shift');
        $b->class_shift_id = $request->input('class_shift');
        $b->equipment_id = $request->input('equipment');

        $b->save();

        return view('dashboard');
    }














}
