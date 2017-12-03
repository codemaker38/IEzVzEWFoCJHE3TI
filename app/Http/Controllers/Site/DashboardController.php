<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
	/**
     * Instantiate the controller
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Display the user dashboard page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (in_array('customer', $this->roles)) {
            $data = [
            ];

            return view('site.dashboard.customer', $data);
        } else if (in_array('provider', $this->roles)) {
            $data = [
            ];

            return view('site.dashboard.provider', $data);
        } else {
            $data = [
            ];

            return view('site.pages.index', $data);
        }
    }
}
