<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function English(){
        Session::get('lang');
        Session()->forget('lang');
        Session()->put('lang', 'english');
        return redirect()->back();
    }
    public function Arabic(){
        Session::get('lang');
        Session()->forget('lang');
        Session()->put('lang', 'arabic');
        return redirect()->back();
    }
}
