<?php

namespace App\Http\Controllers;

use App\Models\ClientSale;
use App\Models\ProductSale;
use Illuminate\Http\Request;

class MakeSaleController extends Controller
{
    public function index(Request $request){
        $clisale = new ClientSale();

        $clisale->name = $request->input('client_name');
        $clisale->sale_code = $request->input('sale_code');

        $find_product_sale = ProductSale::where('sale_code', 'LIKE', $request->sale_code)->get();

        $total = 0;

        foreach ($find_product_sale as $price)
            $total += $price->total_price;

        return view('make-sale', ['find_product_sale' => $find_product_sale, 'clisale' => $clisale, 'total' => $total]);
    }
}
