<?php

namespace App\Http\Controllers\Site;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
	/**
     * Instantiate the controller
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Display the user dashboard page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (Auth::check()) {
            return redirect('dashboard');
        }

        return view('site.pages.index');
    }
}
