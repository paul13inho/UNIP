<?php

namespace App\Http\Controllers;

use App\Models\ClientSale;
use Illuminate\Http\Request;

class ClientSaleController extends Controller
{
    public function index(){
        return view('client-sale');
    }

    public function store(Request $request) {
        $clisale = new ClientSale();

        $clisale->client_id = $request->input('client_id');
        $clisale->sale_code = $request->input('sale_code');

        $clisale->save();

        return view('product-sale', ['clisale' => $clisale]);
    }
}
