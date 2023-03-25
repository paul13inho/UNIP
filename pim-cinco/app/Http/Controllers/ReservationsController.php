<?php

namespace App\Http\Controllers;

use App\Models\BookEquipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ReservationsController extends Controller
{
    public function index() {
        $bookings = BookEquipment::all();

        return view('reservations', ['bookings' => $bookings]);
    }

    public function destroy(Request $request) {
        $booking = BookEquipment::find($request->booking_id);
        $booking->delete();

        return Redirect::back();
    }


}
