@extends("tema.layout")
@section("isi")
    <h3>Ubah Data Dosen</h3>
    <form method="post" action="/dosen/{{ $dosen->id }}">
        @csrf
        @method("PATCH")
        <div class="form-group">
            <label for="nip">NIP:</label>
            <input type="text" class="form-control" id="nip" name="nip" value="{{ $dosen->nip }}" placeholder="Isi NIP"/>
        </div>
        <div class="form-group">
            <label for="nama">Nama Lengkap:</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $dosen->nama }}" placeholder="Isi nama"/>
        </div>
        <div class="form-group">
            <label for="berat_badan">Berat Badan:</label>
            <input type="number" class="form-control" id="berat_badan" name="berat_badan" value="{{ $dosen->berat_badan }}" placeholder="Isi berat badan"/>
        </div>
        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ $dosen->tanggal_lahir }}" placeholder="Pilih tanggal lahir"/>
        </div>
        <button type="submit" class="btn btn-success">Ubah</button>
        <button type="button" class="btn btn-danger" onclick="history.go(-1)">Batal</button>
    </form>
@endsection
