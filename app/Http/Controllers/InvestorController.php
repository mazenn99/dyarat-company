<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvestorController extends Controller
{

    // gather in investor view
    public function gatherIn() {
        return view('pages.invest.gatherin');
    }

    // nearpay in investor view
    public function nearPay() {
        return view('pages.invest.nearpay');
    }
}
