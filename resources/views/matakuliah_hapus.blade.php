@extends("tema.layout")
@section("isi")
<h3>Hapus Data Matakuliah</h3>
<form method="post" action="/mtk/{{ $m->id }}">
@csrf @method("DELETE")
<div class="form-group">
    <label for="nim">Kode Matakuliah: {{ $m->kode }}</label>
</div>
<div class="form-group">
    <label for="nama">Nama Matakuliah: {{ $m->nama }}</label>
</div>
<div class="form-group">
    <label for="sks">Jumlah SKS: {{ $m->sks }}</label>
</div>
<button type="submit" class="btn btn-success">Hapus</button>
<button type="button" class="btn btn-danger" 
    onclick="history.go(-1)">Batal</button>
</form>
@endsection