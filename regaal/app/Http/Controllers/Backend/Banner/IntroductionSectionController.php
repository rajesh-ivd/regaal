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
        $id = $request->input('id');
        $home_section1_title = $request->input('home_section1_title');
        $home_section1_text = $request->input('home_section1_text');
        $home_section2_videoid = $request->input('home_section2_videoid');

        $element = Element::find($id);
        if ($element) {
            $element->home_section1_title = $home_section1_title;
            $element->home_section1_text = $home_section1_text;
            $element->home_section2_videoid = $home_section2_videoid;

            $element->save();

            return redirect('/admin/home')->with('success', 'Updated Successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to update the data.');
        }
    }
}