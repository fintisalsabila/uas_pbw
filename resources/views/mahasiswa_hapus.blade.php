@extends("tema.layout")
@section("isi")
<h3>Hapus Data Mahasiswa</h3>
<form method="post" action="/mhs/{{ $m->id }}">
@csrf @method("DELETE")
<div class="form-group">
    <label for="nim">NIM: {{ $m->nim }}</label>
</div>
<div class="form-group">
    <label for="nama">Nama Lengkap: {{ $m->nama }}</label>
</div>
<button type="submit" class="btn btn-success">Hapus</button>
<button type="button" class="btn btn-danger" 
    onclick="history.go(-1)">Batal</button>
</form>
@endsection