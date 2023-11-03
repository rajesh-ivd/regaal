<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;

class AboutController extends Controller
{
    public function index()
    {
        $img = Image::where('img_target_page', 'home_desk.php')
                   ->orderBy('img_id', 'desc')
                   ->take(2)
                   ->get();

        $imgmob = Image::where('img_target_page', 'home_mob.php')
                      ->orderBy('img_id', 'desc')
                      ->take(2)
                      ->get();

        // Pass the data to your view
        return view('backend.about', [
            'about_banner_data_desk' => $img,
            'about_banner_data_mob' => $imgmob,
        ]);
    }
    public function about()
{
    // Ensure that the user is authenticated. You can use Laravel's built-in authentication middleware for this.
    if (!auth()->check()) {
        return redirect()->route('admin.login'); // Redirect to the login page
    }

    $data['page'] = 'about';

    // Use Eloquent to fetch data from the database for desktop and mobile banners.
    $data['about_banner_data_desk'] = Image::where([
        'img_section' => 0,
        'img_target_page' => 'about_desk.php',
        'img_status' => 'active',
    ])->get();

    $data['about_banner_data_mob'] = Image::where([
        'img_section' => 0,
        'img_target_page' => 'about_mob.php',
        'img_status' => 'active',
    ])->get();

    // Use Eloquent to fetch data for section1_data.
    $data['about_section1_data'] = Element::where([
        'element_section' => 10,
        'element_target' => 'about.php',
    ])->orderBy('element_id', 'asc')->get();

    // Use Eloquent to fetch data for section1_pic_data.
    $data['about_section1_pic_data'] = Image::where([
        'img_section' => 10,
        'img_target_page' => 'about.php',
        'img_status' => 'active',
    ])->get();

    return view('common.index', $data);
}




}
