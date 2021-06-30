<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function aldares() {
        return view('pages.companies.aldares');
    }

    public function najat() {
        return view('pages.companies.najat');
    }

    public function tatweer() {
        return view('pages.companies.tatweer');
    }

    public function qyas() {
        return view('pages.companies.qyas');
    }

    public function caterer() {
        return view('pages.companies.caterer');
    }

    public function mayeera() {
        return view('pages.companies.moyara');
    }
}
