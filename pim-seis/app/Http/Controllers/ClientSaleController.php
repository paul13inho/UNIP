<?php

namespace App\Http\Controllers;

use App\Models\ClientSale;
use Illuminate\Http\Request;

class ClientSaleController extends Controller
{
    public function store(Request $request) {



        $clisale = new ClientSale();

        $clisale->id = $request->input('client_id');
        $clisale->sale_code = $request->input('sale-code');

        $clisale->save();

        return view('make-sale');
    }
}
