@extends("tema.layout")
@section("isi")
<h3>Data Dosen</h3>
<a href="/dosen/tambah">Tambah</a>
<table class="table table-striped table-hover">
<thead>
    <tr>
    <th>NIP</th>
    <th>Nama Lengkap</th>
    <th>Berat Badan</th>
    <th>Tanggal Lahir</th>
    <th>Aksi</th>
    </tr>
</thead>
<tbody>
@foreach($dosen as $i) 
    <tr>
    <td>{{ $i->nip }}</td>
    <td>{{ $i->nama }}</td>
    <td>{{ $i->berat_badan }}</td>
    <td>{{ $i->tanggal_lahir }}</td>

    <td>
    <a href="/dosen/ubah/{{ $i->id }}">Ubah</a> | 
    <a href="/dosen/hapus/{{ $i->id }}">Hapus</a>
    </td>
    </tr>
    @endforeach
</tbody>
</table>
@endsection