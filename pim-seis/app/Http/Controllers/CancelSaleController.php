<?php

namespace App\Http\Controllers;

use App\Models\ClientSale;
use App\Models\MakeSale;
use Illuminate\Http\Request;

class CancelSaleController extends Controller
{
    public function index(){
        $cancel_sale = MakeSale::all();

        $client = ClientSale::pluck('id', 'client_id')->implode(',');



        //dd($client);

        return view('cancel-sale', ['cancel_sale' => $cancel_sale]);
    }
}
