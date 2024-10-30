<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laracrud;

class HomeController extends Controller
{
    // ambil data dari laracrud    
    public function index(Request $request)
    {
        // Cek apakah session ada
        if (!$request->session()->has('user_session')) {
            return view('hello'); // Arahkan ke halaman hello jika session belum ada
        }

        $search = $request->input('search');        

        if ($search) {
            $data = Laracrud::where(function ($query) use ($search) {
                $query->where('nim', 'like', '%' . $search . '%')
                    ->orWhere('nama', 'like', '%' . $search . '%')
                    ->orWhere('prodi', 'like', '%' . $search . '%');
            })->paginate(5);
        } else {
            $data = Laracrud::paginate(5); // Kembalikan semua data jika pencarian kosong
        }

        return view('home', compact('data'));
    }

    // Tambahkan metode untuk mengatur session
    public function setSession(Request $request)
    {
        // Set session ketika tombol ditekan
        $request->session()->put('user_session', true);

        return redirect('/'); // Arahkan kembali ke halaman home
    }
}
