<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OthersController extends Controller
{
    public function gallery(){
        return view('frontend.gallery');
    }
    public function csr(){
        return view('frontend.csr');
    }
}
