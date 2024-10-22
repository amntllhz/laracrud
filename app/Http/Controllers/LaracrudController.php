<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laracrud;

class LaracrudController extends Controller
{
    public function store( Request $request )
    {
        //validasi data
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',            
            'prodi' => 'required',
            'kelas' => 'required',
            'email' => 'required',         
        ]);

        // simpan data
        Laracrud::create($request->all());

        // redirect
        return redirect('/home')->with('success', 'Data Berhasil Ditambahkan');
    }
}
