<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function add(){
        return view('products.add-product');
    }

    public function product(){
        return view('products.product');
    }
}
