@extends("tema.layout")
@section("isi")
<h3>Ubah Data Mahasiswa</h3>
<form method="post" action="/mhs/{{ $m->id }}">
@csrf @method("PATCH")
<div class="form-group">
    <label for="nim">NIM:</label>
    <input type="number" class="form-control" id="nim" name="nim" 
        value="{{ $m->nim }}" placeholder="isi NIM"/>
</div>
<div class="form-group">
    <label for="nama">Nama Lengkap:</label>
    <input type="text" class="form-control" id="nama" name="nama" 
    value="{{ $m->nama }}" placeholder="isi nama"/>
</div>
<button type="submit" class="btn btn-success">Ubah</button>
<button type="button" class="btn btn-danger" 
    onclick="history.go(-1)">Batal</button>
</form>
@endsection