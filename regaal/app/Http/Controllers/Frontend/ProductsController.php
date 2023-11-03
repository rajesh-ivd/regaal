<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        return view('frontend.products');
    }

    public function primaryProduct()
    {
        return view('frontend.product.primary_product');
    }

    public function alliedProducts()
    {
        return view('frontend.product.allied_products');
    }

    public function valueAddedProducts()
    {
        return view('frontend.product.value_added_products');
    }

    public function modifiedStarches()
    {
        return view('frontend.product.modified_starches');
    }

    public function futureProducts()
    {
        return view('frontend.product.future_products');
    }
}
