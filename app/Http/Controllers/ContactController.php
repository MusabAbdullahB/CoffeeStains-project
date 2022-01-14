<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function Contact()
    {
        $contact = DB::table('contacts')->first();
        return view('admin.contact.contact', compact('contact'));
    }
    public function EditContact()
    {
        $contact = DB::table('contacts')->first();
        return view('admin.contact.contact_edit', compact('contact'));
    }
    public function UpdateContact(Request $request)
    {
        $data = array();
        $data['address_en'] = $request->address_en;
        $data['address_ar'] = $request->address_ar;
        $data['phone_number'] = $request->phone_number;
        $data['email'] = $request->email;
        DB::table('contacts')->update($data);
        return redirect()->route('admin.contact')->with('success', 'Contact Updated Successfully');
    }
}
