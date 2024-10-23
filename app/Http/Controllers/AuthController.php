<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function proseslogin(Request $request)
    {
        if(Auth ::guard('Mahasiswa')->attempt(['nim'=>$request->nim,'password'=>$request->password])) {
            return redirect('/dashboard');
        } else {
            echo "gagal login";
        }
    }
}
