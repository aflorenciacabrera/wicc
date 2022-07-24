<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function agenda()
    {
        return view('agenda.index');
    }
    public function inscripcion()
    {
        return view('inscripcion.index');
    }
    public function organizacion()
    {
        return view('organizacion.index');
    }
}
