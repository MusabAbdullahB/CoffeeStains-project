<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Social;
use Illuminate\Support\Facades\DB;

class SocialController extends Controller
{
    public function Social()
    {
        $social = DB::table('socials')->first();
        return view('admin.social.social', compact('social'));
    }
    public function EditSocial(Request $request)
    {
        $social = DB::table('socials')->first();
        return view('admin.social.social_edit', compact('social'));
    }
    public function UpdateSocial(Request $request)
    {
        $data = array();
        $data['twitter'] = $request->twitter;
        $data['facebook'] = $request->facebook;
        $data['instagram'] = $request->instagram;
        DB::table('socials')->update($data);
        return redirect()->route('admin.social')->with('success', 'Social Updated Successfully');
    }
}
