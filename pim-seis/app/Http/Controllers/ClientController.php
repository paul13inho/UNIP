<?php

namespace App\Http\Controllers;

use App\Models\CountryState;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index() {
        $countryState = CountryState::all();
        return view('/register-client', [
            'countryState' => $countryState
        ]);
    }
}
