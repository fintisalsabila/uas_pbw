<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matakuliah;

class MatakuliahController extends Controller
{

    public function tampilSemua() {
        $m = Matakuliah::all();
        // return $m;
        return view("Matakuliah", ['mtk' => $m]);        
    } 
    public function tampil($id) {
        $m = Matakuliah::find($id);
        return $m;
    }
    public function tambah(Request $r) {
        Matakuliah::create([
            'kode' => $r->kode,
            'nama' => $r->nama,
            'sks' => $r->sks
        ]);
        // kembali ke tampil data Matakuliah
        return redirect("/mtk");
    }
    public function ubah(Request $r, $id) {
        $m = Matakuliah::find($id);
        $m->update([
            'kode' => $r->kode,
            'nama' => $r->nama,
            'sks' => $r->sks
        ]);
        // kembali ke tampil data Matakuliah
        return redirect("/mtk");
    }
    public function hapus($id) {
        $m = Matakuliah::find($id);
        $m->delete();
        // kembali ke tampil data Matakuliah
        return redirect("/mtk");
    }

    public function formTambah() {
        return view("matakuliah_tambah");
    }
    public function formUbah($id) {
        $m = Matakuliah::find($id);
        return view("matakuliah_ubah", ['m' => $m]);
    }
    public function formHapus($id) {
        $m = Matakuliah::find($id);
        return view("matakuliah_hapus", ['m' => $m]);
    }    
}
