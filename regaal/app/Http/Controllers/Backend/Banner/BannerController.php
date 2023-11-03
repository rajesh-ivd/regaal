<?php

namespace App\Http\Controllers\Backend\Banner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;

class BannerController extends Controller
{
    public function saveBanner(Request $request)
    {
        $request->validate([
            'home_banner_text' => 'required',
            'home_banner_pic' => 'required|image|mimes:png,jpg,jpeg|max:3000',
        ]);
    
        if ($request->hasFile('home_banner_pic')) {
            $file = $request->file('home_banner_pic');
            $fileDir = 'backend/img/banner/';
            $fileName = time() . '_' . $file->getClientOriginalName();
    
          
            $file->move($fileDir, $fileName);
    
            $image = new Image;
            $image->img_text = $request->input('home_banner_text');
            $image->img_target_page = $request->input('img_target_page');
            $image->img_link = $fileName;
          
    
            $image->save();
    
            return redirect('/admin/home')->with('success', 'Dextop Banner saved successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to upload the image.');
        }
    }

    public function saveBannerMob(Request $request)
    {
        $request->validate([
            'home_banner_text_mob' => 'required',
            'home_banner_pic_mob' => 'required|image|mimes:png,jpg,jpeg|max:3000',
        ]);
    
        if ($request->hasFile('home_banner_pic_mob')) {
            $file = $request->file('home_banner_pic_mob');
            $fileDir = 'backend/img/banner/';
            $fileName = time() . '_' . $file->getClientOriginalName();
    
          
            $file->move($fileDir, $fileName);
    
            $image = new Image;
            $image->img_text = $request->input('home_banner_text_mob');
            $image->img_target_page = $request->input('img_target_page_mob');
            $image->img_link = $fileName;
          
    
            $image->save();
    
            return redirect('/admin/home')->with('success', 'Mobile Banner saved successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to upload the image.');
        }
    }

 
    
    // public function viewImgdesktop()
    // {

    //     $imgmob = Image::where('img_target_page', 'home_mob.php')->get();

    //     $img = Image::where('img_target_page', 'home_desk.php')->get();
    
    //     return view('backend.home', [
    //     'home_banner_desk_data' => $img,
    //     'home_banner_mob_data'=> $imgmob
    //     ]);
    // }
     

    public function deskMobID($img_id, $target)
    {
        $data = Image::where('img_id', $img_id)
            ->where('img_target_page', $target)
            ->first();
    
      
    
        return response()->json($data);
    }
    

    public function updateBannerDesk(Request $request)
    {
        // Validate the request data
        $request->validate([
            'modalBannerId' => 'required|integer',
            'modalBannerText' => 'required|string',
            'modalBannerImage' => 'image|mimes:jpeg,png,jpg|max:4000',
        ]);
    
        $banner = Image::find($request->modalBannerId);
    
        if (!$banner) {
            return back()->with('error', 'Banner not found.');
        }
    
        // Update banner text
        $banner->img_text = $request->modalBannerText;
    
        // Update banner image if a new image was provided
        if ($request->hasFile('modalBannerImage')) {
            $file = $request->file('modalBannerImage');
            $fileDir = 'backend/img/banner/';
            $fileName = time() . '_' . $file->getClientOriginalName();
    
            if ($file->move($fileDir, $fileName)) {
                $banner->img_link = $fileName;
            } else {
                return redirect()->back()->with('error', 'Failed to upload the image.');
            }
        }
    
        $banner->save();
    
        return redirect('/admin/home')->with('success', 'Desktop Banner Updated successfully');
    }
    
    
    public function updateBannerMob(Request $request)
    {
        // Validate the request data
        $request->validate([
            'modalBannerId_mob' => 'required|integer',
            'modalBannerText_mob' => 'required|string',
            'modalBannerImage_mob' => 'image|mimes:jpeg,png,jpg|max:4000',
        ]);
    
        $banner = Image::find($request->modalBannerId_mob);
    
        if (!$banner) {
            return back()->with('error', 'Banner not found.');
        }
    
        // Update banner text
        $banner->img_text = $request->modalBannerText_mob;
    
        // Update banner image if a new image was provided
        if ($request->hasFile('modalBannerImage_mob')) {
            $file = $request->file('modalBannerImage_mob');
            $fileDir = 'backend/img/banner/';
            $fileName = time() . '_' . $file->getClientOriginalName();
    
            if ($file->move($fileDir, $fileName)) {
                $banner->img_link = $fileName;
            } else {
                return redirect()->back()->with('error', 'Failed to upload the image.');
            }
        }
    
        $banner->save();
    
        return redirect('/admin/home')->with('success', 'Mobile Banner Updated successfully');
    }
    



    
}
