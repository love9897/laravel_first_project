<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BandController extends Controller
{
    public function index()
    {
        return view('pages.band');
    }

    public function band()
    {
        return view('pages.band');
    }
    public function home()
    {
        return view('pages.home');
    }

    public function tour()
    {
        return view('pages.tour');

    }
    public function contact()
    {
        return view('pages.contact');
    }

}
