<?php

namespace App\Http\Controllers;

use App\Models\ProductSale;
use App\Models\RegisterProduct;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function listShoppingCart(Request $request){

//        dd($request->input());

        $find_product_sale = ProductSale::where('sale_code', 'LIKE', $request->sale_code)->get();

        return view('shopping-cart', ['find_product_sale' => $find_product_sale]);
    }
}
