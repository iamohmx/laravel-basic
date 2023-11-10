<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        $address = "123 Surin, Thailand";
        $tel = '09-5565-5655';
        // return view('about',compact('address','tel'));
        return view('about')
        ->with('address', $address)
        ->with('tel', $tel)
        ->with('error', '404 Not Found หาข้อมูลไม่เจอ!');
    }

}

