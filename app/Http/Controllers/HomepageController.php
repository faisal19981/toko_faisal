<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $data = array('title' => 'Home Page');
        return view('homepage.index', $data);
    }
}
