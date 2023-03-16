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
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function APEalimentacion()
    {
        return view('APEalimentacion');
    }

    public function APEsena()
    {
        return view('APEsena');
    }
    
    public function APEinterno()
    {
        return view('APEinterno');
    }
    
    public function APEtransporte()
    {
        return view('APEtransporte');
    }

    public function HISeventos()
    {
        return view('HISeventos');
    }

    public function LIDretorant()
    {
        return view('LIDretorant');
    }

    public function LIDrutas()
    {
        return view('LIDrutas');
    }

    public function SCANrestorant()
    {
        return view('SCANrestorant');
    }

    public function SCANrutas()
    {
        return view('SCANrutas');
    }
}
