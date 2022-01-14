<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class BannerController extends Controller
{
    public function HomePage()
    {
        $banner = Banner::first();
        return view('admin.homepage.homepage', compact('banner'));
    }
    public function EditBanner(Request $request)
    {
        $banner = Banner::first();
        return view('admin.homepage.banner_edit', compact('banner'));
    }
    public function UpdateBanner(Request $request)
    {
        $banner = Banner::first();
        $banner->banner_title_1_en = $request->input('banner_title_1_en');
        $banner->banner_title_2_en = $request->input('banner_title_2_en');
        $banner->banner_title_3_en = $request->input('banner_title_3_en');
        $banner->banner_title_1_ar = $request->input('banner_title_1_ar');
        $banner->banner_title_2_ar = $request->input('banner_title_2_ar');
        $banner->banner_title_3_ar = $request->input('banner_title_3_ar');
        $banner->update();
        return redirect()->route('admin.homepage')->with('success', 'Banner Updated Successfully');
    }
}
