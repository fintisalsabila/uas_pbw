@extends("tema.layout")
@section("isi")
    <h3>Hapus Data Dosen</h3>
    <form method="post" action="/dosen/{{ $m->id }}">
        @csrf
        @method("DELETE")
        <div class="form-group">
            <label for="nip">NIP: {{ $m->nip }}</label>
        </div>
        <div class="form-group">
            <label for="nama">Nama Lengkap: {{ $m->nama }}</label>
        </div>
        <div class="form-group">
            <label for="berat_badan">Berat Badan: {{ $m->berat_badan }} kg</label>
        </div>
        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir: {{ $m->tanggal_lahir }}</label>
        </div>
        <button type="submit" class="btn btn-success">Hapus</button>
        <button type="button" class="btn btn-danger" onclick="history.go(-1)">Batal</button>
    </form>
@endsection
