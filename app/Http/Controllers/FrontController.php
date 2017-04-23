<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $title_page = "Home";
        return view('welcome', compact('title_page'));
    }

    public function nosotros()
    {
        $title_page = "¿Quiénes Somos?";
        return view('nosotros', compact('title_page'));
    }

    public function contacto()
    {
        $title_page = "Contáctenos";
        return view('contacto', compact('title_page'));
    }

}
