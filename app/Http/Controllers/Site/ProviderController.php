<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProviderController extends Controller
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
     * Display ongoing bids.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
        ];

        return view('site.providers.index', $data);
    }
}
