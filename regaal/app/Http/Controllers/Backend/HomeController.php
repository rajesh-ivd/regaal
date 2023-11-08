<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Element;
use App\Models\Journey;

class HomeController extends Controller
{
    public function index()
    {
        $imgmob = Image::where('img_target_page', 'home_mob.php')->get();
        $img = Image::where('img_target_page', 'home_desk.php')->get();

        return view('backend.home', [
            'home_banner_desk_data' => $img,
            'home_banner_mob_data' => $imgmob,
        ]);
    }

    





}
