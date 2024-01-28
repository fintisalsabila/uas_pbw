@extends("tema.layout")
@section("isi")
<h3>Data Mahasiswa</h3>
<a href="/mhs/tambah">Tambah</a>
<table class="table table-striped table-hover">
<thead>
    <tr>
    <th>NIM</th>
    <th>Nama Lengkap</th>
    <th>Aksi</th>
    </tr>
</thead>
<tbody>
    @foreach($mhs as $i) 
    <tr>
    <td>{{ $i->nim }}</td>
    <td>{{ $i->nama }}</td>
    <td>
    <a href="/mhs/ubah/{{ $i->id }}">Ubah</a> | 
    <a href="/mhs/hapus/{{ $i->id }}">Hapus</a>
    </td>
    </tr>
    @endforeach
</tbody>
</table>
@endsection
<!-- 1321002 - Wardah Hafiz -->