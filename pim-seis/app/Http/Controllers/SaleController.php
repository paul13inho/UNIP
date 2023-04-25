<?php

namespace App\Http\Controllers;

use App\Models\ItemsShoppingCart;
use App\Models\RegisterProduct;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index() {
        return view('make-sale');
    }

    public function store(Request $request) {

        $item = new ItemsShoppingCart();

        $item->product_id = $request->input('product_id');
        $item->quantity = $request->input('quantity');
        $item->bulky_price = $request->input('bulky_price');

        $item->save();

        return view('dashboard');
    }
}
