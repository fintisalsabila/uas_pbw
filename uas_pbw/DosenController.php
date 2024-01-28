<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function tampilSemua() {
        $m = Dosen::all();
  
        return view("dosen", ['dosen' => $m]);        
    } 
    public function tampil($id) {
        $m = Dosen::find($id);
        return $m;
    }
    public function formTambah() {
        return view("dosen_tambah");
    }
    public function tambah(Request $r) {
        $r->validate([
            'nip' => 'required|unique:dosen,nip',
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'berat_badan' => 'required'
        ]);
    
        Dosen::create([
            'nip' => $r->nip,
            'nama' => $r->nama,
            'tanggal_lahir' => $r->tanggal_lahir,
            'berat_badan' => $r->berat_badan
        ]);
    
        return redirect("/dosen")->with('success', 'Data Dosen berhasil ditambahkan');
    }    

    public function formUbah($id) {
        $m = Dosen::find($id);
        return view("dosen_ubah", ['dosen' => $m]);
    }
    
    public function ubah(Request $r, $id) {
        $r->validate([
            'nip' => 'required|unique:dosen,nip,' . $id,
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'berat_badan' => 'required'
        ]);

        $m = Dosen::find($id);
        $m->update([
            'nip' => $r->nip,
            'nama' => $r->nama,
            'tanggal_lahir' => $r->tanggal_lahir,
            'berat_badan' => $r->berat_badan
        ]);

        return redirect("/dosen")->with('success', 'Data Dosen berhasil diubah');
    }

    public function hapus($id) {
        $m = Dosen::find($id);
        $m->delete();

        // Redirect with success message or any other logic you want
        return redirect("/dosen")->with('success', 'Data Dosen berhasil dihapus');
    }
    public function formHapus($id) {
        $m = Dosen::find($id);
        return view("dosen_hapus", ['m' => $m]);
    }
}

/* List Nama Kelompok
paling berkontribusi-kurang atau tidak kontribusi

1321046 - Finti Sasa Sabila             (mengerjakan)
1321045 - Naufaldi Ramadhan             (mengerjakan)
1321054 - Novrylianto Zundi Ramadhan    (kurang)
1321052 - Aldi Ramadhani                (tidak mengerjakan)

File lengkap pada github https://github.com/fintisalsabila/uas_pbw
*/