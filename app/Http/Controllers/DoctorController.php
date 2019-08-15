<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/doctor/register');
    }
    public function dashboard()
    {
        return view('/doctor/dashboard');
    }
    public function read()
    {
        $result = Doctor::read();
        return \Response::json($result);
    }

    public function create( request $request )
    {
        $result = Doctor::create($request);
        return \Response::json($result);
    }
}
