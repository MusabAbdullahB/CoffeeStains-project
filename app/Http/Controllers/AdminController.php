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
        $admins = DB::table('admins')->get();
        $customers = DB::table('customers')->get();
        $products = DB::table('products')->get();
        return view('admin.index', compact('admins','customers', 'products'));
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
        $admin = Admin::find($id);
        $admin->name = $request->input('name');
        $admin->email = $request->input('email');
        if ($request->hasFile('profile_photo_path')) {
            $file = $request->file('profile_photo_path');
            @unlink(public_path('upload/admin_images/' . $admin->profile_photo_path));
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' .$extension;
            $file->move('upload/admin_images/', $filename);
            $admin->profile_photo_path = $filename;
        }
        return redirect()->route('admin.profile');
    }
}
