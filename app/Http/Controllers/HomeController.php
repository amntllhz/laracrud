<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laracrud;

class HomeController extends Controller
{
    // ambil data dari laracrud
    public function index(Request $request)
    {
        $search = $request->input('search');

        if ($search) {
            $data = Laracrud::where(function ($query) use ($search) {
                $query->where('nim', 'like', '%' . $search . '%')
                    ->orWhere('nama', 'like', '%' . $search . '%')
                    ->orWhere('prodi', 'like', '%' . $search . '%');
            })->get();
        } else {
            $data = Laracrud::all();
        }

        return view('home', compact('data'));
    }
}
