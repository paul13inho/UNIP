<?php

namespace App\Http\Controllers;

use App\Models\BookEquipment;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    public function index() {
        $booking = BookEquipment::all();

        return view('reservations', ['booking' => $booking]);
    }
}
