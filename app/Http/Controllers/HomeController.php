<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function index() {
        return view('pages.index');
    }

    public function team() {
        return view('pages.team');
    }

    public function poject() {
        return view('pages.project');
    }
}
