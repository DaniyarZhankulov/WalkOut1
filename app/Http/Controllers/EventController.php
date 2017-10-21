<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\HTTP\Controllers\Controller;

class EventController extends Controller
{
    public function index() {
        $events = DB::table('EVENTS')->get();
        $images = DB::table('IMAGES')->get();
        $locationlink = DB::table('LOCATION')->get();
        return view('event', ['events' => $events], ['images' => $images], ['location' => $locationlink]);
    }
}