<?php

namespace App\Http\Controllers;

use App\Models\BookEquipment;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    public function index() {
        $bookings = BookEquipment::all();

        return view('reservations', ['bookings' => $bookings]);
    }

    public function destroy() {

        return view('dashboard');
    }


}
