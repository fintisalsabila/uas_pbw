<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Http\Requests\MahasiswaRequest;

class MhsController extends Controller
{
    public function tampilSemua() {
        $m = Mahasiswa::all();
        // return $m;
        return view("mahasiswa", ['mhs' => $m]);        
    } 
    public function tampil($id) {
        $m = Mahasiswa::find($id);
        return $m;
    }
    public function tambah(MahasiswaRequest $r) {
        Mahasiswa::create([
            'nim' => $r->nim,
            'nama' => $r->nama
        ]);
        // kembali ke tampil data mahasiswa
        return redirect("/mhs");
    }
    public function ubah(Request $r, $id) {
        $m = Mahasiswa::find($id);
        $m->update([
            'nim' => $r->nim,
            'nama' => $r->nama
        ]);
        // kembali ke tampil data mahasiswa
        return redirect("/mhs");
    }
    public function hapus($id) {
        $m = Mahasiswa::find($id);
        $m->delete();
        // kembali ke tampil data mahasiswa
        return redirect("/mhs");
    }

    public function formTambah() {
        return view("mahasiswa_tambah");
    }
    public function formUbah($id) {
        $m = Mahasiswa::find($id);
        return view("mahasiswa_ubah", ['m' => $m]);
    }
    public function formHapus($id) {
        $m = Mahasiswa::find($id);
        return view("mahasiswa_hapus", ['m' => $m]);
    }

}
