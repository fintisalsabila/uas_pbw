@extends("tema.layout")
@section("isi")
<h3>Tambah Data Dosen</h3>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form method="post" action="/dosen">
    @csrf
    <div class="form-group">
            <label for="nip">NIP:</label>
            <input type="text" class="form-control" id="nip" name="nip" value="{{ old('nip') }}" placeholder="Isi NIP"/>
            @error("nip")
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
<div class="form-group">
    <label for="nama">Nama Lengkap :</label>
    <input type="text" class="form-control" id="nama" name="nama" 
        value="{{ old('nama') }}" placeholder="Masukkan nama dosen"/>
    @error("nama") 
        <span class="text-danger">
            {{ $message }}
        </span>
    @enderror
</div>
<div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" placeholder="Pilih tanggal lahir"/>
            @error("tanggal_lahir")
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="berat_badan">Berat Badan:</label>
            <input type="number" class="form-control" id="berat_badan" name="berat_badan" value="{{ old('berat_badan') }}" placeholder="Isi berat badan"/>
            @error("berat_badan")
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