<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function Index()
    {
        return view('admin.admin_login');
    }
    public function Dashboard()
    {
        return view('admin.index');
    }
    public function Login(Request $request)
    {
        $check = $request->all();
        if (Auth::guard('admin')->attempt(['email' => $check['email'], 'password' => $check['password']])) {
            return redirect()->route('dashboard')->with('error', 'Admin Login Successfully');
        } else {
            return back()->with('error', 'Invalid Email or Password');
        }
    }
    public function Logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('login.from')->with('error', 'Admin Logout Successfully');
    }
    public function Register()
    {
        return view('admin.admin_register');
    }
    public function RegisterCreate(Request $request)
    {
        Admin::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => Carbon::now(),
        ]);
        return redirect()->route('login.from')->with('error', 'Admin Created Successfully');
    }
    public function Social()
    {
        $social = DB::table('socials')->first();
        return view('admin.social.social', compact('social'));
    }
    public function EditSocial(Request $request)
    {
        $id = $request->get('id');
        $social = DB::table('socials')->first();
        return view('admin.social.social_edit', compact('social', $id));
    }
    public function UpdateSocial(Request $request, $id)
    {
        $data = array();
        $data['twitter'] = $request->twitter;
        $data['facebook'] = $request->facebook;
        $data['instagram'] = $request->instagram;
        DB::table('socials')->where('id', $id)->update($data);
        return redirect()->route('social');
    }
    public function Profile()
    {
        $id = Auth::guard('admin')->user()->id;
        $user = Admin::find($id);
        return view('admin.profile.profile', compact('user'));
    }
    public function EditProfile()
    {
        $id = Auth::guard('admin')->user()->id;
        $editData = Admin::find($id);
        return view('admin.profile.profile_edit', compact('editData'));
    }
    public function UpdateProfile(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        $data = Admin::find(Auth::guard('admin')->user()->id);
        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        if ($request->file('profile_photo_path')) {
            $file = $request->file('profile_photo_path');
            @unlink(public_path('upload/user_images/' . $data->profile_photo_path));
            $filename = data('YndHi') . $file->getClientOriginalName();
            $file->move('public_path'('upload/user_images/'), $filename);
            $data['profile_photo_path'] = $filename;
        }
        DB::table('admins')->update($data);
        return redirect()->route('admin.profile');
    }
}
