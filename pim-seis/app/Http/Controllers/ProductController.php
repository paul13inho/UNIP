<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Platform;
use App\Models\Warranty;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $category = Category::all();
        $platform = Platform::all();
        $warranty = Warranty::all();
        return view('register-product', [
            'category' => $category,
            'platform' => $platform,
            'warranty' => $warranty
        ]);
    }
}
