<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
// $data = file_get_contents("../../api/ejemplo.json");
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
        $usuarios = HTTP::get('https://jsonplaceholder.typicode.com/users');
        $usuariosArray = $usuarios->json();
        return view('home', compact('usuariosArray'));
    }
}
