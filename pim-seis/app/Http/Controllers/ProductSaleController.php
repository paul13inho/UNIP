<?php

namespace App\Http\Controllers;

use App\Models\ProductSale;
use Illuminate\Http\Request;

class ProductSaleController extends Controller
{
    public function store(Request $request) {
        $prodsale = new ProductSale();

        $total_price = $request->input('unitary_price') * $request->input('qtd');

        $prodsale->sale_code = $request->input('sale_code');
        $prodsale->product_id = $request->input('product_id');
        $prodsale->quantity = $request->input('qtd');
        $prodsale->total_price = $total_price;

        $prodsale->save();

        return view('product-sale');




    }
}
