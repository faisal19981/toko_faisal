<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function index()
    {
        return "Oke ini latihan controller";
    }
    public function beranda()
    {
        $data = array('nama' => 'Faisal');
        return view('beranda', $data);
    }
}
