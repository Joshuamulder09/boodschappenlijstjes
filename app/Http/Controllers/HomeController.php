<?php

namespace App\Http\Controllers;

use App\cms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titles = DB::table('cms')->where('id', '=', 1)->get();
        $cms = DB::table('cms')->where('id', '>=', 2)->get();
        return view('welcome', compact('cms', 'titles'));
    }
}
