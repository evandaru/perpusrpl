<?php

namespace App\Http\Controllers;

use App\Models\login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class sessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function formlogin()
    {
        return view('login.userlogin');
    }

    public function formregister()
    {
        return view('login.userregister');
    }
    public function register(Request $request)
    {
        $data = [
            'nama' => $request->nama,
            'email' => $request->email,
            'jenis_kelamin' => $request->jenis_kelamin,
            'password' => Hash::make($request->password),
        ];

        login::create($data);
        return redirect('/login');
    }

    public function login(Request $request)
    {
        $datalogin = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($datalogin)) {
            if (Auth()->user()->email === 'admin@gmail.com') {
                return redirect('/add');
            }
            return redirect('/tampil');
        }
        return redirect('/login')->with('<script>alert("asd")</script>');
    }
}
