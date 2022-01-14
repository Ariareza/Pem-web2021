<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function aboutme()
    {
        return view('aboutme');
    }
    public function produk()
    {
        return view('produk');
    }
    public function contactus()
    {
        return view('contactus');
    }
    public function pertanyaan()
    {
        return view('pertanyaan');
    }
}