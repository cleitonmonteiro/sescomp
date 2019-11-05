<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class AdminController extends Controller
{
    public function index(Event $ev) {
        $events = $ev::all();
        return view('admin.dashboard', compact('events'));
    }
}
