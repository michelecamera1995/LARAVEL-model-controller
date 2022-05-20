<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Movie;

class Controller extends BaseController
{
    public function index()
    {
        $movies = Movie::all();
        return view('home', $movies);
    }
}
