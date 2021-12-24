<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class CustomerController extends Controller
{
    public function Index()
    {
        return view('customer.customer_login');
    }
    public function Dashboard()
    {
        return view('customer.index');
    }
    public function Login(Request $request)
    {
        $check = $request->all();
        if (Auth::guard('customer')->attempt(['email' => $check['email'], 'password' => $check['password']])) {
            return redirect()->route('customer.index');
        } else {
            return back()->with('error', 'Invalid Email or Password');
        }
    }
    public function Logout()
    {
        Auth::guard('customer')->logout();
        return redirect()->route('customer_login.from')->with('error', 'Customer Logout Successfully');
    }
    public function Register()
    {
        return view('customer.customer_register');
    }
    public function RegisterCreate(Request $request)
    {
        Customer::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => Carbon::now(),
        ]);
        return redirect()->route('customer_login.from')->with('error', 'Customer Created Successfully');
    }
}
