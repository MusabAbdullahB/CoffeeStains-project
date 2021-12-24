<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;
use App\Models\HomePage;
use Illuminate\Support\Facades\DB;

class HomepageController extends Controller
{
    public function HomePage()
    {
        $hero = DB::table('heros')->first();
        $logo = DB::table('logos')->first();
        return view('admin.homepage.homepage', compact('hero', 'logo'));
    }
    public function EditHero(Request $request)
    {
        $id = Hero::find('id');
        $hero = DB::table('heros')->first();
        return view('admin.homepage.hero_edit', compact('hero', $id));
    }
    public function UpdateHero(Request $request, $id)
    {
        $data = array();
        if ($request->file('hero_photo_path')) {
            $file = $request->file('hero_photo_path');
            @unlink(public_path('upload/hero_images/' . $data->hero_photo_path));
            $filename = data('YndHi') . $file->getClientOriginalName();
            $file->move('public_path'('upload/hero_images/'), $filename);
            $data['hero_photo_path'] = $filename;
            $data['hero_photo_path'] = $request->hero_photo_path;
            $data['slider_title_1'] = $request->slider_title_1;
            $data['slider_title_2'] = $request->slider_title_2;
            $data['slider_title_3'] = $request->slider_title_3;
            DB::table('heros')->where('id', $id)->update($data);
            return redirect()->route('homepage');
        }
    }
    public function EditLogo()
    {
        $logo = DB::table('logos')->first();
        return view('admin.homepage.logo_edit', compact('logo'));
    }
    public function UpdateLogo(Request $request, $id)
    {
        $id = $request->get('id');
        if ($request->file('logo_photo_path')) {
            $file = $request->file('logo_photo_path');
            @unlink(public_path('upload/logo_images/' . $data->logo_photo_path));
            $filename = data('YndHi') . $file->getClientOriginalName();
            $file->move('public_path'('upload/logo_images/'), $filename);
            $data['logo_photo_path'] = $filename;
            DB::table('logo')->where('id', $id)->update($data);
            return redirect()->route('admin.homepage');
        }
    }
}
