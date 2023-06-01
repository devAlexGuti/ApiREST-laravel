<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Empleado;

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
        $usuarios = HTTP::get('https://jsonplaceholder.typicode.com/users');

        //$usuarios = Empleado::all();
        $usuariosArray = $usuarios->json();
        return view('home', compact('usuariosArray'));
    }
}
