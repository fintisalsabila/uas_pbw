@extends("tema.layout")
@section("isi")
<h3>Ubah Data Matakuliah</h3>
<form method="post" action="/mtk/{{ $m->id }}">
@csrf @method("PATCH")
<div class="form-group">
    <label for="kode">Kode Matakuliah:</label>
    <input type="text" class="form-control" id="kode" name="kode" 
        value="{{ $m->kode }}" placeholder="isi Kode Matakuliah"/>
</div>
<div class="form-group">
    <label for="nama">Nama Matakuliah:</label>
    <input type="text" class="form-control" id="nama" name="nama" 
    value="{{ $m->nama }}" placeholder="isi nama matakuliah"/>
</div>
<div class="form-group">
    <label for="sks">Jumlah SKS:</label>
    <input type="number" class="form-control" id="sks" name="sks" 
        value="{{ $m->sks }}" placeholder="isi jumlah SKS"/>
</div>
<button type="submit" class="btn btn-success">Ubah</button>
<button type="button" class="btn btn-danger" 
    onclick="history.go(-1)">Batal</button>
</form>
@endsection