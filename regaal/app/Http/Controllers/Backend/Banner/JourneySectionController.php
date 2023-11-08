<?php

namespace App\Http\Controllers\Backend\Banner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Journey; // Assuming you have a Journey model
use App\Models\Element; // Assuming you have an Element model

class JourneySectionController extends Controller
{
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

        return $data
            ? redirect('/admin/home')->with('success', 'Journey data inserted successfully')
            : redirect('/admin/home')->with('error', 'Unable to insert data');
    }

    public function updateJourneyData(Request $request, $id)
    {
        // You can remove the line below, as you already get 'id' from the URL parameter
        // $id = $request->input('hid');

        Journey::where('id', $id)->update([
            'home_timeline_year_edit' => $request->input('home_section1_title'),
            'home_timeline_text_edit' => $request->input('home_section1_text'),
        ]);

        // Assuming $journey is defined and initialized properly
        // $journey->save();

        return response()->json(['success' => true]);
    }



}
