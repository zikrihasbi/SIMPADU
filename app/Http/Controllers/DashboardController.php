<?php

namespace App\Http\Controllers;

use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $data = ['nama' => 'hasbi saltobelakang', 'foto' => 'avatar.png '];
        return view('dashboard', compact('data'));
    }
}
