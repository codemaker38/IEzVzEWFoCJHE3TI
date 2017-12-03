<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransactionController extends Controller
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
     * Display transaction history.
     *
     * @return \Illuminate\Http\Response
     */
    public function history()
    {
        $data = [
        ];

        return view('site.transactions.history', $data);
    }
}
