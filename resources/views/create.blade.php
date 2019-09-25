@extends('layouts.app')

@section('content');
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
	<h3>Data Mahasiswa</h3>

	<a href="/mahasiswa"> Kembali</a>
	
	<br/>
	<br/>

	<form action="/mahasiswa/store" method="post">
		{{ csrf_field() }}
		NIM <input type="text" name="nim" required="required"> <br/>
		Nama <input type="text" name="nama" required="required"> <br/>
		Semester <input type="number" name="smt" required="required"> <br/>
		Jenis Kelamin <textarea name="jk" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
@endsection