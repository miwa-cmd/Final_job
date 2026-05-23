<?php

namespace App\Http\Controllers;

use App\Models\ListJobs;

class JobController extends Controller
{
    public function index()
    {
        $jobs = ListJobs::all();
        return view('jobs.index', compact('jobs'));
    }
}