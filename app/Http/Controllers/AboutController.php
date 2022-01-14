<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File; 

class AboutController extends Controller
{
    public function About()
    {
        $about = About::first();
        return view('admin.about.about', compact('about'));
    }
    public function EditAbout()
    {
        $about = About::first();
        return view('admin.about.about_edit', compact('about'));
    }
    public function UpadteAbout(Request $request)
    {
        $about = About::first();
        $about->title_en = $request->title_en;
        $about->content_en = $request->content_en;
        $about->title_ar = $request->title_ar;
        $about->content_ar = $request->content_ar;
        $about->update();
        return redirect()->route('admin.about')->with('success', 'About Updated Successfully');
    }
}
