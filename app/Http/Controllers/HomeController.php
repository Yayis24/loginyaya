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
        $data=['title'=>'Inicio'];
        return view('home',$data);
    }


    public function prueba()
    {
        $data=['title'=> 'Vamos de la mano con tu bienestar', 'content'=>'La psicologia es una parte fundamental en la vida, por eso, nuestro objetivo es ayudarte a comprenderte mejor', 'anxiety'=>'Ansiedad', 'depression'=>'Depresion', 'bipolar'=>'Transtorno Bipolar'];
        return view('prueba', $data);
    }

    public function nuevaprueba()
    {
        return view('nuevaprueba');
    }

}

