<?php

namespace App\Http\Controllers\Backend\Banner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Element;


class IntroductionSectionController extends Controller
{
    public function viewData()
    {
        $data = Element::get();
        // print_r($data);
        // die();
        return view('backend.home')->with(['Data' => $data]);
    }



    public function homeSection1Save(Request $request)
    {
        $id = $request->input('hid');

        Element::where('id', $id)->update([
            'home_section1_title' => $request->input('home_section1_title'),
            'home_section1_text' => $request->input('home_section1_text'),
            'home_section2_videoid' => $request->input('home_section2_videoid'),

        ]);

        return redirect()->back()->with('success', 'Section updated successfully');
    }
    public function fetchIntroductionData()
    {
        $introductionData = Element::first();
        return response()->json($introductionData);
    }
    public function IntoductionData()
    {
        $data = Element::all();
        return view('backend.home', ['Data' => $data]);

    }


}
