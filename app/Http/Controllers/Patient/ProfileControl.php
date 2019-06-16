<?php

namespace App\Http\Controllers\Patient;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileControl extends Controller
{
    //
    public function index(){
        return view('patient.profile')->with('title', 'Profile');
    }
}
