<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.index');
    }

    public function available_jobs()
    {
        return view('pages.available_jobs');
    }

    public function contact_us()
    {
        return view('pages.contact_us');
    }

    public function companies()
    {
        return view('pages.companies');
    }

    public function user_profile()
    {
        return view('pages.user_profile');
    }

    public function job_details()
    {
        return view('pages.job_details');
    }

    public function company_details()
    {
        return view('pages.company_details');
    }

    public function post_job()
    {
        return view('pages.post_job');
    }
}
