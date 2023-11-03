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
    
    public function IntoductionData()
    {
        $data = Element::all();
        return view('backend.home', ['Data' => $data]);
        
    }
    
    public function JourneyData()
    {
        $data1 = Journey::all();
        return view('backend.home', ['JourneyData' => $data1]);
    }
    
    public function getJourneyData()
    {
        $journeyData = Journey::all();
        return response()->json($journeyData);
    }
    
    public function insertJourneyData(Request $req)
    {
        $data = Journey::create([
            'year' => $req->input('home_section2_year'),
            'title' => $req->input('home_section2_title')
        ]);
    
        if ($data) {
            return redirect('/admin/home')->with('success', 'Journey data inserted successfully');
        } else {
            return redirect('/admin/home')->with('error', 'Unable to insert data');
        }
    }

    public function updateJourneyData(Request $req, $id) {
        $data = Journey::where('id', $id)->update([
            'year' => $req->input('home_timeline_year_edit'),
            'title' => $req->input('home_timeline_text_edit')
        ]);
    
        if ($data) {
            return redirect('/admin/home')->with('success', 'Journey data updated successfully');
        } else {
            return redirect('/admin/home')->with('error', 'Unable to update data');
        }
    }


        public function fetchIntroductionData()
        {
            $introductionData = Element::first(); 
            return response()->json($introductionData);
        }

public function updateIntroductionData(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'home_section1_title' => 'required',
            'home_section1_text' => 'required',
            'home_section2_videoid' => 'required',
        ]);

        // Get the authenticated user or the user you want to associate with this data
        $user = auth()->user();

        // Check if the user already has introduction data, if not, create a new record
        $element = Element::updateOrCreate(
            ['user_id' => $user->id],
            $validatedData
        );

        if ($element) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false]);
        }
    }
 
    
    
}
