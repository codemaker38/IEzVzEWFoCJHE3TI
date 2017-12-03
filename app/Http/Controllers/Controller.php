<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * User roles
     */
    protected $roles = [];

    public function __construct()
    {
    	$this->middleware(function ($request, $next) {
	    	if (Auth::check()) {
		    	$this->roles = auth()->user()->roles()->get()->map(function($role) {
		            return $role->name;
		        })->toArray();
	    	}

	        View::share('roles', $this->roles);

           return $next($request);
        });

    }
}
