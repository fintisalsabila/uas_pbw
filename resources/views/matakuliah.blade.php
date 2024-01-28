@extends("tema.layout")
@section("isi")
<h3>Data Mata Kuliah</h3>
<a href="/mtk/tambah">Tambah</a>
<table class="table table-striped table-hover">
<thead>
    <tr>
    <th>Kode</th>
    <th>Nama Matakuliah</th>
    <th>Jumlah SKS</th>
    <th>Aksi</th>
    </tr>
</thead>
<tbody>
    @foreach($mtk as $i) 
    <tr>
    <td>{{ $i->kode }}</td>
    <td>{{ $i->nama }}</td>
    <td>{{ $i->sks }}</td>
    <td>
    <a href="/mtk/ubah/{{ $i->id }}">Ubah</a> | 
    <a href="/mtk/hapus/{{ $i->id }}">Hapus</a>
    </td>
    </tr>
    @endforeach
</tbody>
</table>
@endsection
<!-- 1321046 - Finti Sasa Sabila -->