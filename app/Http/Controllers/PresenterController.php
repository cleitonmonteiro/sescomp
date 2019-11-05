<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PresenterController extends Controller
{
    public function index(){
        return view('presenter.dashboard');
    }
}
