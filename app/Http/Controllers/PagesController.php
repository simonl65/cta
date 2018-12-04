<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function mod01()
    {
        return view('pages.mod01');
    }

    public function xmas01()
    {
        return view('pages.xmas01');
    }
}
