<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
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
        return view('/patient/register');
    }

    public function read()
    {
        $result = Patient::readPatient();
        return \Response::json($result);
    }

    public function create( request $request )
    {
        $result = Patient::create($request);
        return \Response::json($result);
    }
}
