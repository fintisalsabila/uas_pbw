@extends("tema.layout")
@section("isi")
<h3>Tambah Data Mahasiswa</h3>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post" action="/mhs">
@csrf
<div class="form-group">
    <label for="nim">NIM:</label>
    <input type="number" class="form-control" id="nim" name="nim" 
        value="{{ old('nim') }}" placeholder="isi NIM"/>
    @error("nim") 
        <span class="text-danger">
        {{ $message }}
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="nama">Nama Lengkap:</label>
    <input type="text" class="form-control" id="nama" name="nama" 
        value="{{ old('nama') }}" placeholder="isi nama"/>
    @error("nama") 
        <span class="text-danger">
        {{ $message }}
        </span>
    @enderror
</div>
<button type="submit" class="btn btn-success">Tambah</button>
<button type="button" class="btn btn-danger" 
    onclick="history.go(-1)">Batal</button>
</form>
@endsection