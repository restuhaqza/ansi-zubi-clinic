<?php

namespace App\Http\Controllers\Patient;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Patient;
use Illuminate\Support\Facades\Hash;

class AuthControl extends Controller
{
    public function index() {
        if(!Session('is_patient')){
            return view('patient.login');
        }else{
            return view('patient.dashboard')->with('title', 'Dashboard');
        }
    }

    public function loginPost(Request $request){
        $email = $request->email;
        $password = $request->password;

        $data = Patient::where('email', $email)->first();
        if(Hash::check($password, $data->password)){
            $request->session()->put('is_patient', $data);

            return redirect(route('patient.index'));
        } else {
            return redirect(route('patient.index'));
        }
    }

    public function logout(Request $request) {
        $request->session()->flush('login');
        return redirect(route('patient.index'));
    }

    public function checkLogin(Request $request){
        return $request->session()->get($default = null);
    }
}
