<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laracrud;

class HomeController extends Controller
{
    // ambil data dari laracrud
    public function index()
    {
        $data = Laracrud::all();        
        return view('home', ['data' => $data]);
    }
}
