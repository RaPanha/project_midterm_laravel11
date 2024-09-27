<?php

namespace App\Http\Controllers;

use App\Models\User;

class ProductController extends Controller
{
    public function index()
    {
        return view('Product.index',);
    }

    public function detail()
    {
        return view('Product.detail');
    }

    public function shop()
    {
        return view('Product.shop');
    }
}
