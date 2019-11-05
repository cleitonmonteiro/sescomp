<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupporterController extends Controller
{
    public function index(){
        return view('supporter.dashboard');
    }
}
