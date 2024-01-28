@extends("tema.layout")
@section("isi")
<h3>Tambah Data Matakuliah</h3>
<form method="post" action="/mtk">
@csrf
<div class="form-group">
    <label for="kode">Kode Matakuliah:</label>
    <input type="text" class="form-control" id="kode" name="kode" 
        placeholder="isi kode matakuliah"/>
</div>
<div class="form-group">
    <label for="nama">Nama Matakuliah:</label>
    <input type="text" class="form-control" id="nama" name="nama" 
        placeholder="isi nama matakuliah"/>
</div>
<div class="form-group">
    <label for="kode">Jumlah SKS:</label>
    <input type="number" class="form-control" id="sks" name="sks" 
        placeholder="isi jumlah SKS"/>
</div>
<button type="submit" class="btn btn-success">Tambah</button>
<button type="button" class="btn btn-danger" 
    onclick="history.go(-1)">Batal</button>
</form>
@endsection