<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laracrud;

class MahasiswaController extends Controller
{
    public function update(Request $request, $nim) {

        // validasi data
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'prodi' => 'required',            
            'kelas' => 'required',
            'email' => 'required',
        ]);

        // cari mahasiswa berdasarkan nim
        $mahasiswa = Laracrud::findOrFail($nim);

        // update data mahasiswa
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->prodi = $request->prodi;
        $mahasiswa->kelas = $request->kelas;
        $mahasiswa->email = $request->email;
        $mahasiswa->save();

        // redirect ke halaman mahasiswa
        return redirect('/home')->with('success', 'Data Berhasil Diubah');
    }


    public function destroy($nim) {
        // cari mahasiswa berdasarkan nim
        $mahasiswa = Laracrud::where('nim', $nim)->first();

        // hapus data mahasiswa
        if ($mahasiswa) {
            $mahasiswa->delete();
            return redirect('/home')->with('success', 'Data Berhasil Dihapus');
        }

        // redirect ke halaman mahasiswa
        return redirect('/home')->with('error', 'Data Tidak Ditemukan');        
        
    }   
}
