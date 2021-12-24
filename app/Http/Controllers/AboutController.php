<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    public function About(){
        $about = DB::table('abouts')->first();
        return view('admin.about.about', compact('about'));
    }
    public function EditAbout(){
        $about = DB::table('abouts')->first();
        return view('admin.about.about_edit', compact('about'));
    }
    public function UpadteAbout(Request $request){
        $data = array();
        $data['title'] = $request->title;
        $data['content'] = $request->content;
        $data['about_photo_path'] = $request->about_photo_path;
        DB::table('abouts')->update($data);
        return redirect()->route('admin.about');
    }
}
