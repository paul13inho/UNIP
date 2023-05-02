<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CountryState;
use App\Models\Payment;
use App\Models\Platform;
use App\Models\Status;
use App\Models\Warranty;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index() {
        $status = Status::all();
        $platform = Platform::all();
        $warranty = Warranty::all();
        $category = Category::all();
        $countryState = CountryState::all();
        $payment = Payment::all();
        return view('/testes', [
            'status' => $status,
            'platform' => $platform,
            'warranty' => $warranty,
            'category' => $category,
            'countryState' => $countryState,
            'payment' => $payment,
        ]);
    }



}
