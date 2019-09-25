@extends('layouts.app')

@section('content')
	<h3>Data Mahasiswa</h3>

	<a href="/mahasiswa/tambah"> + Tambah Mahasiswa Baru</a>
	
	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>NIM</th>
			<th>Nama</th>
			<th>Semester</th>
			<th>Jenis Kelamin</th>
			<th>Opsi</th>
		</tr>
		@foreach($mahasiswa as $p)
		<tr>
			<td>{{ $p->nim }}</td>
			<td>{{ $p->nama }}</td>
			<td>{{ $p->semester }}</td>
			<td>{{ $p->jk }}</td>
			<td>
				<a href="/pegawai/edit/{{ $p->nim }}">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->nim }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection