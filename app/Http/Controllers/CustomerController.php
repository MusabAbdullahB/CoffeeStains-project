<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
    public function AllCustomers()
    {
        $customer = DB::table('customers')->orderBy('id', 'desc')->paginate(10);
        return view('admin.customers.customers_show', compact('customer'));
    }    
    public function EditCustomers($id)
    {
        $customer = Customer::find($id);
        return view('admin.customers.customers_edit', compact('customer'));
    }
    public function UpdateCustomers(Request $request, $id)
    {
        $customer = Customer::find($id);
        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->update();
        return redirect()->route('customers')->with('success', 'Customer Updated Successfully');
    }
    public function DeleteCustomers($id)
    {
        DB::table('customers')->where('id', $id)->delete();
        return redirect()->route('customers')->with('error', 'Customer Deleted Successfully');
    }
}
