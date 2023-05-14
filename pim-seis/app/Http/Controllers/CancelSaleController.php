<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CancelSaleController extends Controller
{
    public function index(){
        return view('cancel-sale');
    }
}
