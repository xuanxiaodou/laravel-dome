<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;


class AboutController extends Controller
{
    public function index()
    {
    	return view('welcome');
    }
}
