<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
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
     * Display the award project.
     *
     * @return \Illuminate\Http\Response
     */
    public function award()
    {
        $data = [
        ];

        return view('site.projects.award', $data);
    }

    /**
     * Display the list of bids.
     *
     * @return \Illuminate\Http\Response
     */
    public function bidList()
    {
        $data = [
        ];

        return view('site.projects.bid-list', $data);
    }

    /**
     * Create a project.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
        ];

        return view('site.projects.create', $data);
    }

    /**
     * Display provider information.
     *
     * @return \Illuminate\Http\Response
     */
    public function providerInfo()
    {
        $data = [
        ];

        return view('site.projects.provider-info', $data);
    }
}
