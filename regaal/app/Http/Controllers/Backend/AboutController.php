<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Element;

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

        $elements = Element::all();

        return view('backend.about', [
            'about_banner_data_desk' => $img,
            'about_banner_data_mob' => $imgmob,
            'home_section_one_data' => $elements,
        ]);
    }

        public function sectionUpdate(Request $request){
            $aboutSection1Quote1 = $request->input('hidenId');
            Element::where('id', $aboutSection1Quote1)->update([
                'home_section1_text' => $request->input('about_section1_quote1'),
            ]);

            return redirect()->back()->with('success', 'Section updated successfully');
        }


}
