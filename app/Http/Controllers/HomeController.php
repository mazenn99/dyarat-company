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

    public function contact() {
        return view('pages.contact');
    }
    public function sendMsg(Request $request) {
        $request->validate($request->all() , [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);
        return back()->with(['success' => 'Your message has been sent. Thank you!']);
    }

    public function client() {
        return view('pages.client');
    }
}
